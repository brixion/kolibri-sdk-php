<?php

declare(strict_types=1);

/**
 * PublicationsApi - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Brixion\Kolibri\ApiException;
use Brixion\Kolibri\Configuration;
use Brixion\Kolibri\HeaderSelector;
use Brixion\Kolibri\ObjectSerializer;

/**
 * PublicationsApi.
 */
class PublicationsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'publicationsActivate' => [
            'application/json',
        ],
        'publicationsDeactivate' => [
            'application/json',
        ],
        'publicationsForcePublication' => [
            'application/json',
        ],
        'publicationsRead' => [
            'application/json',
        ],
        'publicationsSearch' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0,
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation publicationsActivate
     *
     * Activate selected publication.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsActivateRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsActivate'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function publicationsActivate($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsActivate'][0])
    {
        $this->publicationsActivateWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation publicationsActivateWithHttpInfo
     *
     * Activate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsActivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsActivate'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicationsActivateWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsActivate'][0])
    {
        $request = $this->publicationsActivateRequest($real_estate_agency_id, $request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null,
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null,
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicationsActivateAsync
     *
     * Activate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsActivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsActivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsActivateAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsActivate'][0])
    {
        return $this->publicationsActivateAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation publicationsActivateAsyncWithHttpInfo
     *
     * Activate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsActivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsActivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsActivateAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsActivate'][0])
    {
        $returnType = '';
        $request = $this->publicationsActivateRequest($real_estate_agency_id, $request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri(),
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody(),
                    );
                },
            );
    }

    /**
     * Create request for operation 'publicationsActivate'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsActivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsActivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function publicationsActivateRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsActivate'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling publicationsActivate',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling publicationsActivate',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Publications/Activate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($real_estate_agency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RealEstateAgencyId' . '}',
                ObjectSerializer::toPathValue($real_estate_agency_id),
                $resourcePath,
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart,
        );

        // for model (json/xml)
        if (isset($request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request));
            } else {
                $httpBody = $request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation publicationsDeactivate
     *
     * Deactivate selected publication.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsDeactivateRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsDeactivate'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function publicationsDeactivate($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsDeactivate'][0])
    {
        $this->publicationsDeactivateWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation publicationsDeactivateWithHttpInfo
     *
     * Deactivate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsDeactivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsDeactivate'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicationsDeactivateWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsDeactivate'][0])
    {
        $request = $this->publicationsDeactivateRequest($real_estate_agency_id, $request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null,
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null,
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicationsDeactivateAsync
     *
     * Deactivate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsDeactivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsDeactivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsDeactivateAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsDeactivate'][0])
    {
        return $this->publicationsDeactivateAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation publicationsDeactivateAsyncWithHttpInfo
     *
     * Deactivate selected publication.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsDeactivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsDeactivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsDeactivateAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsDeactivate'][0])
    {
        $returnType = '';
        $request = $this->publicationsDeactivateRequest($real_estate_agency_id, $request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri(),
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody(),
                    );
                },
            );
    }

    /**
     * Create request for operation 'publicationsDeactivate'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsDeactivateRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsDeactivate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function publicationsDeactivateRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsDeactivate'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling publicationsDeactivate',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling publicationsDeactivate',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Publications/Deactivate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($real_estate_agency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RealEstateAgencyId' . '}',
                ObjectSerializer::toPathValue($real_estate_agency_id),
                $resourcePath,
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart,
        );

        // for model (json/xml)
        if (isset($request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request));
            } else {
                $httpBody = $request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation publicationsForcePublication
     *
     * Force publication of selected assignment to all media partners
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ForcePublicationRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsForcePublication'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function publicationsForcePublication($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsForcePublication'][0])
    {
        $this->publicationsForcePublicationWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation publicationsForcePublicationWithHttpInfo
     *
     * Force publication of selected assignment to all media partners
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ForcePublicationRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsForcePublication'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicationsForcePublicationWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsForcePublication'][0])
    {
        $request = $this->publicationsForcePublicationRequest($real_estate_agency_id, $request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null,
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null,
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicationsForcePublicationAsync
     *
     * Force publication of selected assignment to all media partners
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ForcePublicationRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsForcePublication'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsForcePublicationAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsForcePublication'][0])
    {
        return $this->publicationsForcePublicationAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation publicationsForcePublicationAsyncWithHttpInfo
     *
     * Force publication of selected assignment to all media partners
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ForcePublicationRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsForcePublication'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsForcePublicationAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsForcePublication'][0])
    {
        $returnType = '';
        $request = $this->publicationsForcePublicationRequest($real_estate_agency_id, $request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri(),
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody(),
                    );
                },
            );
    }

    /**
     * Create request for operation 'publicationsForcePublication'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ForcePublicationRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsForcePublication'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function publicationsForcePublicationRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsForcePublication'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling publicationsForcePublication',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling publicationsForcePublication',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Publications/ForcePublication';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($real_estate_agency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RealEstateAgencyId' . '}',
                ObjectSerializer::toPathValue($real_estate_agency_id),
                $resourcePath,
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart,
        );

        // for model (json/xml)
        if (isset($request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request));
            } else {
                $httpBody = $request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation publicationsRead
     *
     * @param  string $id id (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\PublicationSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function publicationsRead($id, $real_estate_agency_id, string $contentType = self::contentTypes['publicationsRead'][0])
    {
        list($response) = $this->publicationsReadWithHttpInfo($id, $real_estate_agency_id, $contentType);
        return $response;
    }

    /**
     * Operation publicationsReadWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\PublicationSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicationsReadWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['publicationsRead'][0])
    {
        $request = $this->publicationsReadRequest($id, $real_estate_agency_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null,
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null,
                );
            }

            $statusCode = $response->getStatusCode();


            switch ($statusCode) {
                case 200:
                    if ('\Brixion\Kolibri\Model\PublicationSingleItemResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\PublicationSingleItemResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\PublicationSingleItemResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 404:
                    if ('\Brixion\Kolibri\Model\HttpError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\HttpError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\HttpError', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 400:
                    if ('\Brixion\Kolibri\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 409:
                    if ('\Brixion\Kolibri\Model\HttpError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\HttpError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\HttpError', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 403:
                    if ('\Brixion\Kolibri\Model\HttpError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\HttpError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\HttpError', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri(),
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody(),
                );
            }

            $returnType = '\Brixion\Kolibri\Model\PublicationSingleItemResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri(),
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content,
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\PublicationSingleItemResponse',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\ErrorResponse',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicationsReadAsync
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsReadAsync($id, $real_estate_agency_id, string $contentType = self::contentTypes['publicationsRead'][0])
    {
        return $this->publicationsReadAsyncWithHttpInfo($id, $real_estate_agency_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation publicationsReadAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsReadAsyncWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['publicationsRead'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\PublicationSingleItemResponse';
        $request = $this->publicationsReadRequest($id, $real_estate_agency_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri(),
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody(),
                    );
                },
            );
    }

    /**
     * Create request for operation 'publicationsRead'
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function publicationsReadRequest($id, $real_estate_agency_id, string $contentType = self::contentTypes['publicationsRead'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling publicationsRead',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling publicationsRead',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Publications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true, // required
        ) ?? []);


        // path params
        if ($real_estate_agency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RealEstateAgencyId' . '}',
                ObjectSerializer::toPathValue($real_estate_agency_id),
                $resourcePath,
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart,
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation publicationsSearch
     *
     * Search for publications.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\PublicationsSearchResponse|object|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function publicationsSearch($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsSearch'][0])
    {
        list($response) = $this->publicationsSearchWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation publicationsSearchWithHttpInfo
     *
     * Search for publications.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\PublicationsSearchResponse|object|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicationsSearchWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsSearch'][0])
    {
        $request = $this->publicationsSearchRequest($real_estate_agency_id, $request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null,
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null,
                );
            }

            $statusCode = $response->getStatusCode();


            switch ($statusCode) {
                case 200:
                    if ('\Brixion\Kolibri\Model\PublicationsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\PublicationsSearchResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\PublicationsSearchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 400:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 409:
                    if ('\Brixion\Kolibri\Model\HttpError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\HttpError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\HttpError', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 403:
                    if ('\Brixion\Kolibri\Model\HttpError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\HttpError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri(),
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content,
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\HttpError', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri(),
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody(),
                );
            }

            $returnType = '\Brixion\Kolibri\Model\PublicationsSearchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri(),
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content,
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\PublicationsSearchResponse',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
                        $e->getResponseHeaders(),
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicationsSearchAsync
     *
     * Search for publications.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsSearchAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsSearch'][0])
    {
        return $this->publicationsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation publicationsSearchAsyncWithHttpInfo
     *
     * Search for publications.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicationsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsSearch'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\PublicationsSearchResponse';
        $request = $this->publicationsSearchRequest($real_estate_agency_id, $request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri(),
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody(),
                    );
                },
            );
    }

    /**
     * Create request for operation 'publicationsSearch'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\PublicationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['publicationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function publicationsSearchRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['publicationsSearch'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling publicationsSearch',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling publicationsSearch',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Publications/Search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($real_estate_agency_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RealEstateAgencyId' . '}',
                ObjectSerializer::toPathValue($real_estate_agency_id),
                $resourcePath,
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart,
        );

        // for model (json/xml)
        if (isset($request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($request));
            } else {
                $httpBody = $request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
