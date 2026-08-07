<?php

declare(strict_types=1);

namespace Brixion\Kolibri;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Injects a Bearer access token and retries once on HTTP 401 after a forced refresh.
 */
final class AccessTokenMiddleware
{
    private const RETRY_OPTION = 'kolibri_token_retried';

    public function __construct(
        private ClientCredentials $credentials,
    ) {}

    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler): PromiseInterface {
            $forceRefresh = !empty($options[self::RETRY_OPTION]);
            $request = $this->withAuthorization($request, $forceRefresh);

            return $handler($request, $options)->then(
                function (ResponseInterface $response) use ($handler, $request, $options) {
                    if ($response->getStatusCode() !== 401 || !empty($options[self::RETRY_OPTION])) {
                        return $response;
                    }

                    $options[self::RETRY_OPTION] = true;
                    $request = $this->withAuthorization($request, true);

                    return $handler($request, $options);
                },
                function ($reason) use ($handler, $request, $options) {
                    if (
                        empty($options[self::RETRY_OPTION])
                        && $reason instanceof RequestException
                        && $reason->hasResponse()
                        && $reason->getResponse()->getStatusCode() === 401
                    ) {
                        $options[self::RETRY_OPTION] = true;
                        $request = $this->withAuthorization($request, true);

                        return $handler($request, $options);
                    }

                    return Create::rejectionFor($reason);
                },
            );
        };
    }

    private function withAuthorization(RequestInterface $request, bool $forceRefresh): RequestInterface
    {
        $token = $this->credentials->getAccessToken($forceRefresh);

        return $request->withHeader('Authorization', 'Bearer ' . $token);
    }
}
