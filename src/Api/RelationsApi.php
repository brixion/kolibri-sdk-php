<?php

declare(strict_types=1);

/**
 * RelationsApi - Brixion Kolibri PHP SDK.
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
 * RelationsApi.
 */
class RelationsApi
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
        'relationsExport' => [
            'application/json',
        ],
        'relationsSearch' => [
            'application/json',
        ],
        'relationsSearchAndExport' => [
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
     * Operation relationsExport
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function relationsExport($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsExport'][0])
    {
        $this->relationsExportWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation relationsExportWithHttpInfo
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function relationsExportWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsExport'][0])
    {
        $request = $this->relationsExportRequest($real_estate_agency_id, $request, $contentType);

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
     * Operation relationsExportAsync
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsExportAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsExport'][0])
    {
        return $this->relationsExportAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation relationsExportAsyncWithHttpInfo
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsExportAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsExport'][0])
    {
        $returnType = '';
        $request = $this->relationsExportRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'relationsExport'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function relationsExportRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsExport'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling relationsExport',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling relationsExport',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Relations/Export';
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
     * Operation relationsSearch
     *
     * Search for relations.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\RelationsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function relationsSearch($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsSearch'][0])
    {
        list($response) = $this->relationsSearchWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation relationsSearchWithHttpInfo
     *
     * Search for relations.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\RelationsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function relationsSearchWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsSearch'][0])
    {
        $request = $this->relationsSearchRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\RelationsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\RelationsSearchResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\RelationsSearchResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\RelationsSearchResponse';
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
                        '\Brixion\Kolibri\Model\RelationsSearchResponse',
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
     * Operation relationsSearchAsync
     *
     * Search for relations.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsSearchAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsSearch'][0])
    {
        return $this->relationsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation relationsSearchAsyncWithHttpInfo
     *
     * Search for relations.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsSearch'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\RelationsSearchResponse';
        $request = $this->relationsSearchRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'relationsSearch'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\RelationsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function relationsSearchRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['relationsSearch'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling relationsSearch',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling relationsSearch',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Relations/Search';
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
     * Operation relationsSearchAndExport
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string[]|null $filter_by_relation_group_ids Filter by selected relation group id&#39;s. (optional)
     * @param  \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the relations. (optional)
     * @param  bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees. (optional, default to false)
     * @param  string|null $order_by Order the results by the indicated relation field. (optional)
     * @param  string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created. (optional)
     * @param  \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created. (optional)
     * @param  \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified. (optional)
     * @param  \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified. (optional)
     * @param  string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. (optional)
     * @param  string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result. (optional)
     * @param  string|null $phone_number phone_number (optional)
     * @param  bool|null $has_phone_number has_phone_number (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function relationsSearchAndExport($real_estate_agency_id, $filter_by_relation_group_ids = null, $filter_by_relation_types = null, $include_statistics = null, $include_back_office_employees = false, $order_by = null, $relation_id = null, $term_fields = null, $culture = null, $min_date_time_created = null, $max_date_time_created = null, $min_date_time_modified = null, $max_date_time_modified = null, $email_addresses = null, $relation_ids = null, $phone_number = null, $has_phone_number = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['relationsSearchAndExport'][0])
    {
        $this->relationsSearchAndExportWithHttpInfo($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term, $contentType);
    }

    /**
     * Operation relationsSearchAndExportWithHttpInfo
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $filter_by_relation_group_ids Filter by selected relation group id&#39;s. (optional)
     * @param  \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the relations. (optional)
     * @param  bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees. (optional, default to false)
     * @param  string|null $order_by Order the results by the indicated relation field. (optional)
     * @param  string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created. (optional)
     * @param  \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created. (optional)
     * @param  \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified. (optional)
     * @param  \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified. (optional)
     * @param  string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. (optional)
     * @param  string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result. (optional)
     * @param  string|null $phone_number (optional)
     * @param  bool|null $has_phone_number (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function relationsSearchAndExportWithHttpInfo($real_estate_agency_id, $filter_by_relation_group_ids = null, $filter_by_relation_types = null, $include_statistics = null, $include_back_office_employees = false, $order_by = null, $relation_id = null, $term_fields = null, $culture = null, $min_date_time_created = null, $max_date_time_created = null, $min_date_time_modified = null, $max_date_time_modified = null, $email_addresses = null, $relation_ids = null, $phone_number = null, $has_phone_number = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['relationsSearchAndExport'][0])
    {
        $request = $this->relationsSearchAndExportRequest($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term, $contentType);

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
     * Operation relationsSearchAndExportAsync
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $filter_by_relation_group_ids Filter by selected relation group id&#39;s. (optional)
     * @param  \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the relations. (optional)
     * @param  bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees. (optional, default to false)
     * @param  string|null $order_by Order the results by the indicated relation field. (optional)
     * @param  string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created. (optional)
     * @param  \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created. (optional)
     * @param  \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified. (optional)
     * @param  \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified. (optional)
     * @param  string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. (optional)
     * @param  string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result. (optional)
     * @param  string|null $phone_number (optional)
     * @param  bool|null $has_phone_number (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsSearchAndExportAsync($real_estate_agency_id, $filter_by_relation_group_ids = null, $filter_by_relation_types = null, $include_statistics = null, $include_back_office_employees = false, $order_by = null, $relation_id = null, $term_fields = null, $culture = null, $min_date_time_created = null, $max_date_time_created = null, $min_date_time_modified = null, $max_date_time_modified = null, $email_addresses = null, $relation_ids = null, $phone_number = null, $has_phone_number = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['relationsSearchAndExport'][0])
    {
        return $this->relationsSearchAndExportAsyncWithHttpInfo($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation relationsSearchAndExportAsyncWithHttpInfo
     *
     * Search for relations and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $filter_by_relation_group_ids Filter by selected relation group id&#39;s. (optional)
     * @param  \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the relations. (optional)
     * @param  bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees. (optional, default to false)
     * @param  string|null $order_by Order the results by the indicated relation field. (optional)
     * @param  string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created. (optional)
     * @param  \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created. (optional)
     * @param  \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified. (optional)
     * @param  \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified. (optional)
     * @param  string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. (optional)
     * @param  string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result. (optional)
     * @param  string|null $phone_number (optional)
     * @param  bool|null $has_phone_number (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function relationsSearchAndExportAsyncWithHttpInfo($real_estate_agency_id, $filter_by_relation_group_ids = null, $filter_by_relation_types = null, $include_statistics = null, $include_back_office_employees = false, $order_by = null, $relation_id = null, $term_fields = null, $culture = null, $min_date_time_created = null, $max_date_time_created = null, $min_date_time_modified = null, $max_date_time_modified = null, $email_addresses = null, $relation_ids = null, $phone_number = null, $has_phone_number = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['relationsSearchAndExport'][0])
    {
        $returnType = '';
        $request = $this->relationsSearchAndExportRequest($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term, $contentType);

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
     * Create request for operation 'relationsSearchAndExport'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $filter_by_relation_group_ids Filter by selected relation group id&#39;s. (optional)
     * @param  \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the relations. (optional)
     * @param  bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees. (optional, default to false)
     * @param  string|null $order_by Order the results by the indicated relation field. (optional)
     * @param  string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created. (optional)
     * @param  \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created. (optional)
     * @param  \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified. (optional)
     * @param  \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified. (optional)
     * @param  string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. (optional)
     * @param  string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result. (optional)
     * @param  string|null $phone_number (optional)
     * @param  bool|null $has_phone_number (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['relationsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function relationsSearchAndExportRequest($real_estate_agency_id, $filter_by_relation_group_ids = null, $filter_by_relation_types = null, $include_statistics = null, $include_back_office_employees = false, $order_by = null, $relation_id = null, $term_fields = null, $culture = null, $min_date_time_created = null, $max_date_time_created = null, $min_date_time_modified = null, $max_date_time_modified = null, $email_addresses = null, $relation_ids = null, $phone_number = null, $has_phone_number = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['relationsSearchAndExport'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling relationsSearchAndExport',
            );
        }








        if ($culture !== null && strlen($culture) > 5) {
            throw new \InvalidArgumentException('invalid length for "$culture" when calling RelationsApi.relationsSearchAndExport, must be smaller than or equal to 5.');
        }
        if ($culture !== null && strlen($culture) < 0) {
            throw new \InvalidArgumentException('invalid length for "$culture" when calling RelationsApi.relationsSearchAndExport, must be bigger than or equal to 0.');
        }











        if ($skip !== null && $skip > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling RelationsApi.relationsSearchAndExport, must be smaller than or equal to 2147483647.');
        }
        if ($skip !== null && $skip < 0) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling RelationsApi.relationsSearchAndExport, must be bigger than or equal to 0.');
        }

        if ($take !== null && $take > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling RelationsApi.relationsSearchAndExport, must be smaller than or equal to 2147483647.');
        }
        if ($take !== null && $take < 0) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling RelationsApi.relationsSearchAndExport, must be bigger than or equal to 0.');
        }

        if ($term !== null && strlen($term) > 50) {
            throw new \InvalidArgumentException('invalid length for "$term" when calling RelationsApi.relationsSearchAndExport, must be smaller than or equal to 50.');
        }
        if ($term !== null && strlen($term) < 0) {
            throw new \InvalidArgumentException('invalid length for "$term" when calling RelationsApi.relationsSearchAndExport, must be bigger than or equal to 0.');
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Relations/SearchAndExport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_relation_group_ids,
            'filterByRelationGroupIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_relation_types,
            'filterByRelationTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_statistics,
            'includeStatistics', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_back_office_employees,
            'includeBackOfficeEmployees', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by,
            'orderBy', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $relation_id,
            'relationId', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $term_fields,
            'termFields', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $culture,
            'culture', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $min_date_time_created,
            'minDateTimeCreated', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $max_date_time_created,
            'maxDateTimeCreated', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $min_date_time_modified,
            'minDateTimeModified', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $max_date_time_modified,
            'maxDateTimeModified', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $email_addresses,
            'emailAddresses', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $relation_ids,
            'relationIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $phone_number,
            'phoneNumber', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $has_phone_number,
            'hasPhoneNumber', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_active,
            'filterByActive', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $skip,
            'skip', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $take,
            'take', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $term,
            'term', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
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
