<?php

declare(strict_types=1);

/**
 * SearchAssignmentsApi - Brixion Kolibri PHP SDK.
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
 * SearchAssignmentsApi.
 */
class SearchAssignmentsApi
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
        'searchAssignmentsArchive' => [
            'application/json',
        ],
        'searchAssignmentsDefineNew' => [
            'application/json',
        ],
        'searchAssignmentsDelete' => [
            'application/json',
        ],
        'searchAssignmentsRead' => [
            'application/json',
        ],
        'searchAssignmentsSave' => [
            'application/json',
        ],
        'searchAssignmentsSearch' => [
            'application/json',
        ],
        'searchAssignmentsUnarchive' => [
            'application/json',
        ],
        'searchAssignmentsUndelete' => [
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
     * Operation searchAssignmentsArchive
     *
     * Archive selected searchAssignment
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ArchiveRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsArchive'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function searchAssignmentsArchive($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsArchive'][0])
    {
        $this->searchAssignmentsArchiveWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation searchAssignmentsArchiveWithHttpInfo
     *
     * Archive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ArchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsArchive'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsArchiveWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsArchive'][0])
    {
        $request = $this->searchAssignmentsArchiveRequest($real_estate_agency_id, $request, $contentType);

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
     * Operation searchAssignmentsArchiveAsync
     *
     * Archive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ArchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsArchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsArchiveAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsArchive'][0])
    {
        return $this->searchAssignmentsArchiveAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsArchiveAsyncWithHttpInfo
     *
     * Archive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ArchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsArchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsArchiveAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsArchive'][0])
    {
        $returnType = '';
        $request = $this->searchAssignmentsArchiveRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsArchive'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\ArchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsArchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsArchiveRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsArchive'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsArchive',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsArchive',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments/Archive';
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
     * Operation searchAssignmentsDefineNew
     *
     * Defines a new searchAssignment instance, without saving it.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsDefineNewRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDefineNew'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function searchAssignmentsDefineNew($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsDefineNew'][0])
    {
        list($response) = $this->searchAssignmentsDefineNewWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation searchAssignmentsDefineNewWithHttpInfo
     *
     * Defines a new searchAssignment instance, without saving it.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsDefineNewRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDefineNew'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsDefineNewWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsDefineNew'][0])
    {
        $request = $this->searchAssignmentsDefineNewRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
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
                        '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse',
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
     * Operation searchAssignmentsDefineNewAsync
     *
     * Defines a new searchAssignment instance, without saving it.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsDefineNewRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDefineNew'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsDefineNewAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsDefineNew'][0])
    {
        return $this->searchAssignmentsDefineNewAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsDefineNewAsyncWithHttpInfo
     *
     * Defines a new searchAssignment instance, without saving it.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsDefineNewRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDefineNew'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsDefineNewAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsDefineNew'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
        $request = $this->searchAssignmentsDefineNewRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsDefineNew'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsDefineNewRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDefineNew'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsDefineNewRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsDefineNew'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsDefineNew',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsDefineNew',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments/DefineNew';
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
     * Operation searchAssignmentsDelete
     *
     * Delete selected searchAssignment
     *
     * @param  string $id id (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDelete'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function searchAssignmentsDelete($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsDelete'][0])
    {
        $this->searchAssignmentsDeleteWithHttpInfo($id, $real_estate_agency_id, $contentType);
    }

    /**
     * Operation searchAssignmentsDeleteWithHttpInfo
     *
     * Delete selected searchAssignment
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDelete'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsDeleteWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsDelete'][0])
    {
        $request = $this->searchAssignmentsDeleteRequest($id, $real_estate_agency_id, $contentType);

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
     * Operation searchAssignmentsDeleteAsync
     *
     * Delete selected searchAssignment
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsDeleteAsync($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsDelete'][0])
    {
        return $this->searchAssignmentsDeleteAsyncWithHttpInfo($id, $real_estate_agency_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsDeleteAsyncWithHttpInfo
     *
     * Delete selected searchAssignment
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsDeleteAsyncWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsDelete'][0])
    {
        $returnType = '';
        $request = $this->searchAssignmentsDeleteRequest($id, $real_estate_agency_id, $contentType);

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
     * Create request for operation 'searchAssignmentsDelete'
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsDeleteRequest($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsDelete'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling searchAssignmentsDelete',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsDelete',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments';
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation searchAssignmentsRead
     *
     * Fetch a single searchAssignment.
     *
     * @param  string $id id (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse
     */
    public function searchAssignmentsRead($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsRead'][0])
    {
        list($response) = $this->searchAssignmentsReadWithHttpInfo($id, $real_estate_agency_id, $contentType);
        return $response;
    }

    /**
     * Operation searchAssignmentsReadWithHttpInfo
     *
     * Fetch a single searchAssignment.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsReadWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsRead'][0])
    {
        $request = $this->searchAssignmentsReadRequest($id, $real_estate_agency_id, $contentType);

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
                    if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
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
                        '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse',
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
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brixion\Kolibri\Model\HttpError',
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
            }
            throw $e;
        }
    }

    /**
     * Operation searchAssignmentsReadAsync
     *
     * Fetch a single searchAssignment.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsReadAsync($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsRead'][0])
    {
        return $this->searchAssignmentsReadAsyncWithHttpInfo($id, $real_estate_agency_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsReadAsyncWithHttpInfo
     *
     * Fetch a single searchAssignment.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsReadAsyncWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsRead'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
        $request = $this->searchAssignmentsReadRequest($id, $real_estate_agency_id, $contentType);

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
     * Create request for operation 'searchAssignmentsRead'
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsReadRequest($id, $real_estate_agency_id, string $contentType = self::contentTypes['searchAssignmentsRead'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling searchAssignmentsRead',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsRead',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments';
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
     * Operation searchAssignmentsSave
     *
     * Save given searchAssignment
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSaveRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSave'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function searchAssignmentsSave($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSave'][0])
    {
        list($response) = $this->searchAssignmentsSaveWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation searchAssignmentsSaveWithHttpInfo
     *
     * Save given searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSaveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSave'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsSaveWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSave'][0])
    {
        $request = $this->searchAssignmentsSaveRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
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
                        '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse',
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
     * Operation searchAssignmentsSaveAsync
     *
     * Save given searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSaveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSave'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsSaveAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSave'][0])
    {
        return $this->searchAssignmentsSaveAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsSaveAsyncWithHttpInfo
     *
     * Save given searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSaveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSave'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsSaveAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSave'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSingleItemResponse';
        $request = $this->searchAssignmentsSaveRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsSave'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSaveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSave'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsSaveRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSave'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsSave',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsSave',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments';
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
     * Operation searchAssignmentsSearch
     *
     * Search for searchAssignments.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\SearchAssignmentsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function searchAssignmentsSearch($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSearch'][0])
    {
        list($response) = $this->searchAssignmentsSearchWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation searchAssignmentsSearchWithHttpInfo
     *
     * Search for searchAssignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\SearchAssignmentsSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsSearchWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSearch'][0])
    {
        $request = $this->searchAssignmentsSearchRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse';
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
                        '\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse',
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
     * Operation searchAssignmentsSearchAsync
     *
     * Search for searchAssignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsSearchAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSearch'][0])
    {
        return $this->searchAssignmentsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsSearchAsyncWithHttpInfo
     *
     * Search for searchAssignments.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsSearchAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSearch'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\SearchAssignmentsSearchResponse';
        $request = $this->searchAssignmentsSearchRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsSearch'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\SearchAssignmentsSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsSearchRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsSearch'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsSearch',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsSearch',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments/Search';
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
     * Operation searchAssignmentsUnarchive
     *
     * Unarchive selected searchAssignment
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UnarchiveRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUnarchive'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function searchAssignmentsUnarchive($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUnarchive'][0])
    {
        $this->searchAssignmentsUnarchiveWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation searchAssignmentsUnarchiveWithHttpInfo
     *
     * Unarchive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UnarchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUnarchive'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsUnarchiveWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUnarchive'][0])
    {
        $request = $this->searchAssignmentsUnarchiveRequest($real_estate_agency_id, $request, $contentType);

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
     * Operation searchAssignmentsUnarchiveAsync
     *
     * Unarchive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UnarchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUnarchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsUnarchiveAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUnarchive'][0])
    {
        return $this->searchAssignmentsUnarchiveAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsUnarchiveAsyncWithHttpInfo
     *
     * Unarchive selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UnarchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUnarchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsUnarchiveAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUnarchive'][0])
    {
        $returnType = '';
        $request = $this->searchAssignmentsUnarchiveRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsUnarchive'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UnarchiveRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUnarchive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsUnarchiveRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUnarchive'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsUnarchive',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsUnarchive',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments/Unarchive';
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
     * Operation searchAssignmentsUndelete
     *
     * Undelete selected searchAssignment
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UndeleteRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUndelete'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function searchAssignmentsUndelete($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUndelete'][0])
    {
        $this->searchAssignmentsUndeleteWithHttpInfo($real_estate_agency_id, $request, $contentType);
    }

    /**
     * Operation searchAssignmentsUndeleteWithHttpInfo
     *
     * Undelete selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UndeleteRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUndelete'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAssignmentsUndeleteWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUndelete'][0])
    {
        $request = $this->searchAssignmentsUndeleteRequest($real_estate_agency_id, $request, $contentType);

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
     * Operation searchAssignmentsUndeleteAsync
     *
     * Undelete selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UndeleteRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUndelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsUndeleteAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUndelete'][0])
    {
        return $this->searchAssignmentsUndeleteAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation searchAssignmentsUndeleteAsyncWithHttpInfo
     *
     * Undelete selected searchAssignment
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UndeleteRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUndelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAssignmentsUndeleteAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUndelete'][0])
    {
        $returnType = '';
        $request = $this->searchAssignmentsUndeleteRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'searchAssignmentsUndelete'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UndeleteRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAssignmentsUndelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAssignmentsUndeleteRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['searchAssignmentsUndelete'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling searchAssignmentsUndelete',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling searchAssignmentsUndelete',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/SearchAssignments/Undelete';
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
