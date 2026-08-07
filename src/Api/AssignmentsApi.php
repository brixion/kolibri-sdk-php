<?php

declare(strict_types=1);

/**
 * AssignmentsApi - Brixion Kolibri PHP SDK.
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
 * AssignmentsApi.
 */
class AssignmentsApi
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
        'assignmentsExport' => [
            'application/json',
        ],
        'assignmentsSearch' => [
            'application/json',
        ],
        'assignmentsSearchAndExport' => [
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
     * Operation assignmentsExport
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function assignmentsExport($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsExport'][0])
    {
        $this->assignmentsExportWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation assignmentsExportWithHttpInfo
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignmentsExportWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsExport'][0])
    {
        $request = $this->assignmentsExportRequest($real_estate_agency_id, $request, $contentType);

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
     * Operation assignmentsExportAsync
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsExportAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsExport'][0])
    {
        return $this->assignmentsExportAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation assignmentsExportAsyncWithHttpInfo
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsExportAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsExport'][0])
    {
        $returnType = '';
        $request = $this->assignmentsExportRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'assignmentsExport'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function assignmentsExportRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsExport'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling assignmentsExport',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling assignmentsExport',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Assignments/Export';
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
     * Operation assignmentsSearch
     *
     * Search for assignments.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\AssignmentsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function assignmentsSearch($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsSearch'][0])
    {
        list($response) = $this->assignmentsSearchWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation assignmentsSearchWithHttpInfo
     *
     * Search for assignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\AssignmentsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignmentsSearchWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsSearch'][0])
    {
        $request = $this->assignmentsSearchRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\AssignmentsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\AssignmentsSearchResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\AssignmentsSearchResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\AssignmentsSearchResponse';
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
                        '\Brixion\Kolibri\Model\AssignmentsSearchResponse',
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
     * Operation assignmentsSearchAsync
     *
     * Search for assignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsSearchAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsSearch'][0])
    {
        return $this->assignmentsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation assignmentsSearchAsyncWithHttpInfo
     *
     * Search for assignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsSearch'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\AssignmentsSearchResponse';
        $request = $this->assignmentsSearchRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'assignmentsSearch'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\AssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function assignmentsSearchRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['assignmentsSearch'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling assignmentsSearch',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling assignmentsSearch',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Assignments/Search';
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
     * Operation assignmentsSearchAndExport
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) (optional)
     * @param  \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses availabilty_statuses (optional)
     * @param  string|null $country_code Filter by selected Country Code. (optional)
     * @param  string[]|null $employee_ids Filter by selected Employee Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types. (optional)
     * @param  \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...). (optional)
     * @param  bool|null $for_rent If true assingments that are for rent are returned.. (optional)
     * @param  bool|null $for_sale If true assingments that are for sale are returned.. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions. (optional)
     * @param  \Brixion\Kolibri\Model\ListingType[]|null $listing_types listing_types (optional)
     * @param  string[]|null $localities Filter by selected Localities. (optional)
     * @param  string[]|null $office_ids Filter by selected Office Ids. (optional)
     * @param  string|null $order_by Order the results by the indicated assignment field. (optional)
     * @param  string[]|null $relation_ids Filter by selected Relation Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids. (optional)
     * @param  string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids. (optional)
     * @param  string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids. (optional)
     * @param  bool|null $ignore_old_versions Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. (optional)
     * @param  bool|null $has_key Only return assignment that have a key, or not. (optional)
     * @param  int[]|null $filter_by_key_numbers Filter by assignments key numbers. (optional)
     * @param  \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing. (optional)
     * @param  float|null $filter_by_min_price The minimal asking price (optional)
     * @param  float|null $filter_by_max_price The maximal asking price (optional)
     * @param  int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms (optional)
     * @param  int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms (optional)
     * @param  bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. (optional)
     * @param  \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments (optional)
     * @param  \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value. (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function assignmentsSearchAndExport($real_estate_agency_id, $assignment_ids = null, $assignment_phases = null, $availabilty_statuses = null, $country_code = null, $employee_ids = null, $filter_by_assignment_types = null, $filter_by_real_estate_groups = null, $for_rent = null, $for_sale = null, $include_statistics = null, $listing_types = null, $localities = null, $office_ids = null, $order_by = null, $relation_ids = null, $term_fields = null, $culture = null, $filter_by_project_assignment_ids = null, $filter_by_object_type_assignment_ids = null, $filter_by_acquisition_assignment_ids = null, $ignore_old_versions = null, $has_key = null, $filter_by_key_numbers = null, $filter_by_furnishings = null, $filter_by_min_price = null, $filter_by_max_price = null, $filter_by_number_of_bedrooms_min = null, $filter_by_number_of_bedrooms_max = null, $is_cancelled = null, $acquisition_statuses = null, $available_from_min = null, $available_from_max = null, $available_until_min = null, $available_until_max = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['assignmentsSearchAndExport'][0])
    {
        $this->assignmentsSearchAndExportWithHttpInfo($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term, $contentType);
    }

    /**
     * Operation assignmentsSearchAndExportWithHttpInfo
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) (optional)
     * @param  \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses (optional)
     * @param  string|null $country_code Filter by selected Country Code. (optional)
     * @param  string[]|null $employee_ids Filter by selected Employee Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types. (optional)
     * @param  \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...). (optional)
     * @param  bool|null $for_rent If true assingments that are for rent are returned.. (optional)
     * @param  bool|null $for_sale If true assingments that are for sale are returned.. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions. (optional)
     * @param  \Brixion\Kolibri\Model\ListingType[]|null $listing_types (optional)
     * @param  string[]|null $localities Filter by selected Localities. (optional)
     * @param  string[]|null $office_ids Filter by selected Office Ids. (optional)
     * @param  string|null $order_by Order the results by the indicated assignment field. (optional)
     * @param  string[]|null $relation_ids Filter by selected Relation Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids. (optional)
     * @param  string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids. (optional)
     * @param  string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids. (optional)
     * @param  bool|null $ignore_old_versions Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. (optional)
     * @param  bool|null $has_key Only return assignment that have a key, or not. (optional)
     * @param  int[]|null $filter_by_key_numbers Filter by assignments key numbers. (optional)
     * @param  \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing. (optional)
     * @param  float|null $filter_by_min_price The minimal asking price (optional)
     * @param  float|null $filter_by_max_price The maximal asking price (optional)
     * @param  int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms (optional)
     * @param  int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms (optional)
     * @param  bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. (optional)
     * @param  \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments (optional)
     * @param  \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value. (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignmentsSearchAndExportWithHttpInfo($real_estate_agency_id, $assignment_ids = null, $assignment_phases = null, $availabilty_statuses = null, $country_code = null, $employee_ids = null, $filter_by_assignment_types = null, $filter_by_real_estate_groups = null, $for_rent = null, $for_sale = null, $include_statistics = null, $listing_types = null, $localities = null, $office_ids = null, $order_by = null, $relation_ids = null, $term_fields = null, $culture = null, $filter_by_project_assignment_ids = null, $filter_by_object_type_assignment_ids = null, $filter_by_acquisition_assignment_ids = null, $ignore_old_versions = null, $has_key = null, $filter_by_key_numbers = null, $filter_by_furnishings = null, $filter_by_min_price = null, $filter_by_max_price = null, $filter_by_number_of_bedrooms_min = null, $filter_by_number_of_bedrooms_max = null, $is_cancelled = null, $acquisition_statuses = null, $available_from_min = null, $available_from_max = null, $available_until_min = null, $available_until_max = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['assignmentsSearchAndExport'][0])
    {
        $request = $this->assignmentsSearchAndExportRequest($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term, $contentType);

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
     * Operation assignmentsSearchAndExportAsync
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) (optional)
     * @param  \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses (optional)
     * @param  string|null $country_code Filter by selected Country Code. (optional)
     * @param  string[]|null $employee_ids Filter by selected Employee Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types. (optional)
     * @param  \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...). (optional)
     * @param  bool|null $for_rent If true assingments that are for rent are returned.. (optional)
     * @param  bool|null $for_sale If true assingments that are for sale are returned.. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions. (optional)
     * @param  \Brixion\Kolibri\Model\ListingType[]|null $listing_types (optional)
     * @param  string[]|null $localities Filter by selected Localities. (optional)
     * @param  string[]|null $office_ids Filter by selected Office Ids. (optional)
     * @param  string|null $order_by Order the results by the indicated assignment field. (optional)
     * @param  string[]|null $relation_ids Filter by selected Relation Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids. (optional)
     * @param  string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids. (optional)
     * @param  string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids. (optional)
     * @param  bool|null $ignore_old_versions Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. (optional)
     * @param  bool|null $has_key Only return assignment that have a key, or not. (optional)
     * @param  int[]|null $filter_by_key_numbers Filter by assignments key numbers. (optional)
     * @param  \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing. (optional)
     * @param  float|null $filter_by_min_price The minimal asking price (optional)
     * @param  float|null $filter_by_max_price The maximal asking price (optional)
     * @param  int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms (optional)
     * @param  int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms (optional)
     * @param  bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. (optional)
     * @param  \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments (optional)
     * @param  \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value. (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsSearchAndExportAsync($real_estate_agency_id, $assignment_ids = null, $assignment_phases = null, $availabilty_statuses = null, $country_code = null, $employee_ids = null, $filter_by_assignment_types = null, $filter_by_real_estate_groups = null, $for_rent = null, $for_sale = null, $include_statistics = null, $listing_types = null, $localities = null, $office_ids = null, $order_by = null, $relation_ids = null, $term_fields = null, $culture = null, $filter_by_project_assignment_ids = null, $filter_by_object_type_assignment_ids = null, $filter_by_acquisition_assignment_ids = null, $ignore_old_versions = null, $has_key = null, $filter_by_key_numbers = null, $filter_by_furnishings = null, $filter_by_min_price = null, $filter_by_max_price = null, $filter_by_number_of_bedrooms_min = null, $filter_by_number_of_bedrooms_max = null, $is_cancelled = null, $acquisition_statuses = null, $available_from_min = null, $available_from_max = null, $available_until_min = null, $available_until_max = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['assignmentsSearchAndExport'][0])
    {
        return $this->assignmentsSearchAndExportAsyncWithHttpInfo($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation assignmentsSearchAndExportAsyncWithHttpInfo
     *
     * Search for assignments and export result to Excel.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) (optional)
     * @param  \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses (optional)
     * @param  string|null $country_code Filter by selected Country Code. (optional)
     * @param  string[]|null $employee_ids Filter by selected Employee Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types. (optional)
     * @param  \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...). (optional)
     * @param  bool|null $for_rent If true assingments that are for rent are returned.. (optional)
     * @param  bool|null $for_sale If true assingments that are for sale are returned.. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions. (optional)
     * @param  \Brixion\Kolibri\Model\ListingType[]|null $listing_types (optional)
     * @param  string[]|null $localities Filter by selected Localities. (optional)
     * @param  string[]|null $office_ids Filter by selected Office Ids. (optional)
     * @param  string|null $order_by Order the results by the indicated assignment field. (optional)
     * @param  string[]|null $relation_ids Filter by selected Relation Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids. (optional)
     * @param  string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids. (optional)
     * @param  string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids. (optional)
     * @param  bool|null $ignore_old_versions Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. (optional)
     * @param  bool|null $has_key Only return assignment that have a key, or not. (optional)
     * @param  int[]|null $filter_by_key_numbers Filter by assignments key numbers. (optional)
     * @param  \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing. (optional)
     * @param  float|null $filter_by_min_price The minimal asking price (optional)
     * @param  float|null $filter_by_max_price The maximal asking price (optional)
     * @param  int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms (optional)
     * @param  int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms (optional)
     * @param  bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. (optional)
     * @param  \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments (optional)
     * @param  \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value. (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignmentsSearchAndExportAsyncWithHttpInfo($real_estate_agency_id, $assignment_ids = null, $assignment_phases = null, $availabilty_statuses = null, $country_code = null, $employee_ids = null, $filter_by_assignment_types = null, $filter_by_real_estate_groups = null, $for_rent = null, $for_sale = null, $include_statistics = null, $listing_types = null, $localities = null, $office_ids = null, $order_by = null, $relation_ids = null, $term_fields = null, $culture = null, $filter_by_project_assignment_ids = null, $filter_by_object_type_assignment_ids = null, $filter_by_acquisition_assignment_ids = null, $ignore_old_versions = null, $has_key = null, $filter_by_key_numbers = null, $filter_by_furnishings = null, $filter_by_min_price = null, $filter_by_max_price = null, $filter_by_number_of_bedrooms_min = null, $filter_by_number_of_bedrooms_max = null, $is_cancelled = null, $acquisition_statuses = null, $available_from_min = null, $available_from_max = null, $available_until_min = null, $available_until_max = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['assignmentsSearchAndExport'][0])
    {
        $returnType = '';
        $request = $this->assignmentsSearchAndExportRequest($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term, $contentType);

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
     * Create request for operation 'assignmentsSearchAndExport'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) (optional)
     * @param  \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses (optional)
     * @param  string|null $country_code Filter by selected Country Code. (optional)
     * @param  string[]|null $employee_ids Filter by selected Employee Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types. (optional)
     * @param  \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...). (optional)
     * @param  bool|null $for_rent If true assingments that are for rent are returned.. (optional)
     * @param  bool|null $for_sale If true assingments that are for sale are returned.. (optional)
     * @param  bool|null $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions. (optional)
     * @param  \Brixion\Kolibri\Model\ListingType[]|null $listing_types (optional)
     * @param  string[]|null $localities Filter by selected Localities. (optional)
     * @param  string[]|null $office_ids Filter by selected Office Ids. (optional)
     * @param  string|null $order_by Order the results by the indicated assignment field. (optional)
     * @param  string[]|null $relation_ids Filter by selected Relation Ids. (optional)
     * @param  \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. (optional)
     * @param  string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). (optional)
     * @param  string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids. (optional)
     * @param  string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids. (optional)
     * @param  string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids. (optional)
     * @param  bool|null $ignore_old_versions Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. (optional)
     * @param  bool|null $has_key Only return assignment that have a key, or not. (optional)
     * @param  int[]|null $filter_by_key_numbers Filter by assignments key numbers. (optional)
     * @param  \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing. (optional)
     * @param  float|null $filter_by_min_price The minimal asking price (optional)
     * @param  float|null $filter_by_max_price The maximal asking price (optional)
     * @param  int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms (optional)
     * @param  int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms (optional)
     * @param  bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. (optional)
     * @param  \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments (optional)
     * @param  \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value. (optional)
     * @param  \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value. (optional)
     * @param  string|null $filter_by_active Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. (optional)
     * @param  string|null $order Order search results ascending or descending. (optional)
     * @param  int|null $skip Number of results to skip. (optional)
     * @param  int|null $take Number of results to return. If a value higher than 100 is provided, it is set to 100. (optional)
     * @param  string|null $term Search by given text term in the fields indicated by TermFields (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignmentsSearchAndExport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function assignmentsSearchAndExportRequest($real_estate_agency_id, $assignment_ids = null, $assignment_phases = null, $availabilty_statuses = null, $country_code = null, $employee_ids = null, $filter_by_assignment_types = null, $filter_by_real_estate_groups = null, $for_rent = null, $for_sale = null, $include_statistics = null, $listing_types = null, $localities = null, $office_ids = null, $order_by = null, $relation_ids = null, $term_fields = null, $culture = null, $filter_by_project_assignment_ids = null, $filter_by_object_type_assignment_ids = null, $filter_by_acquisition_assignment_ids = null, $ignore_old_versions = null, $has_key = null, $filter_by_key_numbers = null, $filter_by_furnishings = null, $filter_by_min_price = null, $filter_by_max_price = null, $filter_by_number_of_bedrooms_min = null, $filter_by_number_of_bedrooms_max = null, $is_cancelled = null, $acquisition_statuses = null, $available_from_min = null, $available_from_max = null, $available_until_min = null, $available_until_max = null, $filter_by_active = null, $order = null, $skip = null, $take = null, $term = null, string $contentType = self::contentTypes['assignmentsSearchAndExport'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling assignmentsSearchAndExport',
            );
        }

















        if ($culture !== null && strlen($culture) > 5) {
            throw new \InvalidArgumentException('invalid length for "$culture" when calling AssignmentsApi.assignmentsSearchAndExport, must be smaller than or equal to 5.');
        }
        if ($culture !== null && strlen($culture) < 0) {
            throw new \InvalidArgumentException('invalid length for "$culture" when calling AssignmentsApi.assignmentsSearchAndExport, must be bigger than or equal to 0.');
        }




















        if ($skip !== null && $skip > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling AssignmentsApi.assignmentsSearchAndExport, must be smaller than or equal to 2147483647.');
        }
        if ($skip !== null && $skip < 0) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling AssignmentsApi.assignmentsSearchAndExport, must be bigger than or equal to 0.');
        }

        if ($take !== null && $take > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling AssignmentsApi.assignmentsSearchAndExport, must be smaller than or equal to 2147483647.');
        }
        if ($take !== null && $take < 0) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling AssignmentsApi.assignmentsSearchAndExport, must be bigger than or equal to 0.');
        }

        if ($term !== null && strlen($term) > 50) {
            throw new \InvalidArgumentException('invalid length for "$term" when calling AssignmentsApi.assignmentsSearchAndExport, must be smaller than or equal to 50.');
        }
        if ($term !== null && strlen($term) < 0) {
            throw new \InvalidArgumentException('invalid length for "$term" when calling AssignmentsApi.assignmentsSearchAndExport, must be bigger than or equal to 0.');
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Assignments/SearchAndExport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $assignment_ids,
            'assignmentIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $assignment_phases,
            'assignmentPhases', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $availabilty_statuses,
            'availabiltyStatuses', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $country_code,
            'countryCode', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $employee_ids,
            'employeeIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_assignment_types,
            'filterByAssignmentTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_real_estate_groups,
            'filterByRealEstateGroups', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $for_rent,
            'forRent', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $for_sale,
            'forSale', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
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
            $listing_types,
            'listingTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $localities,
            'localities', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $office_ids,
            'officeIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
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
            $relation_ids,
            'relationIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
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
            $filter_by_project_assignment_ids,
            'filterByProjectAssignmentIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_object_type_assignment_ids,
            'filterByObjectTypeAssignmentIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_acquisition_assignment_ids,
            'filterByAcquisitionAssignmentIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ignore_old_versions,
            'ignoreOldVersions', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $has_key,
            'hasKey', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_key_numbers,
            'filterByKeyNumbers', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_furnishings,
            'filterByFurnishings', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_min_price,
            'filterByMinPrice', // param base name
            'number', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_max_price,
            'filterByMaxPrice', // param base name
            'number', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_number_of_bedrooms_min,
            'filterByNumberOfBedroomsMin', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_by_number_of_bedrooms_max,
            'filterByNumberOfBedroomsMax', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_cancelled,
            'isCancelled', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $acquisition_statuses,
            'acquisitionStatuses', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $available_from_min,
            'availableFromMin', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $available_from_max,
            'availableFromMax', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $available_until_min,
            'availableUntilMin', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $available_until_max,
            'availableUntilMax', // param base name
            'string', // openApiType
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
