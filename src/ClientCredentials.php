<?php

declare(strict_types=1);

namespace Brixion\Kolibri;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;

/**
 * OAuth2 client-credentials helper for the Kolibri identity endpoints.
 */
final class ClientCredentials
{
    public const ID_HOST_SANDBOX = 'https://sandbox-id.kolibri24.com';

    public const ID_HOST_LIVE = 'https://id.kolibri24.com';

    private ClientInterface $httpClient;

    private string $clientId;

    private string $clientSecret;

    private bool $live;

    private ?string $scope;

    private ?string $accessToken = null;

    private int $expiresAt = 0;

    public function __construct(
        string $clientId,
        string $clientSecret,
        bool $live = false,
        ?string $scope = null,
        ?ClientInterface $httpClient = null,
        private float $timeout = 5.0,
    ) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->live = $live;
        $this->scope = ($scope !== null && $scope !== '') ? $scope : null;

        $idHost = $live ? self::ID_HOST_LIVE : self::ID_HOST_SANDBOX;
        $this->httpClient = $httpClient ?? new Client([
            'base_uri' => rtrim($idHost, '/') . '/',
            'timeout' => $this->timeout,
        ]);
    }

    public static function sandbox(string $clientId, string $clientSecret, ?string $scope = null): self
    {
        return new self($clientId, $clientSecret, false, $scope);
    }

    public static function live(string $clientId, string $clientSecret, ?string $scope = null): self
    {
        return new self($clientId, $clientSecret, true, $scope);
    }

    public function isLive(): bool
    {
        return $this->live;
    }

    /**
     * @throws GuzzleException
     * @throws \RuntimeException
     */
    public function getAccessToken(bool $forceRefresh = false): string
    {
        if (!$forceRefresh && $this->accessToken !== null && time() < ($this->expiresAt - 30)) {
            return $this->accessToken;
        }

        $formParams = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];

        if ($this->scope !== null) {
            $formParams['scope'] = $this->scope;
        }

        $response = $this->httpClient->request('POST', 'connect/token', [
            'form_params' => $formParams,
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);

        $rawBody = (string) $response->getBody();
        $data = json_decode($rawBody, true);

        if (!is_array($data)) {
            throw new \RuntimeException('Kolibri token response was not valid JSON.');
        }

        if (!isset($data['access_token']) || !is_string($data['access_token']) || $data['access_token'] === '') {
            throw new \RuntimeException('Kolibri token response did not contain access_token.');
        }

        $this->accessToken = $data['access_token'];
        $this->expiresAt = time() + (int) ($data['expires_in'] ?? 3600);

        return $this->accessToken;
    }

    /**
     * Build a ready-to-use API Configuration bound to this auth instance (matching sandbox/live host).
     *
     * Tokens are resolved via a provider so long-running processes refresh automatically.
     */
    public function createConfiguration(): Configuration
    {
        $configuration = $this->live ? Configuration::live() : Configuration::sandbox();
        $configuration->setAccessTokenProvider($this);

        return $configuration;
    }

    /**
     * Build an HTTP client that injects Bearer tokens and retries once on HTTP 401.
     */
    public function createHttpClient(): ClientInterface
    {
        $stack = HandlerStack::create();
        $stack->push(new AccessTokenMiddleware($this));

        return new Client([
            'handler' => $stack,
            'base_uri' => rtrim($this->live ? Configuration::HOST_LIVE : Configuration::HOST_SANDBOX, '/') . '/',
            'timeout' => $this->timeout,
        ]);
    }
}
