<?php

declare(strict_types=1);

/**
 * BlobsApi - Brixion Kolibri PHP SDK.
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
 * BlobsApi.
 */
class BlobsApi
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
        'blobsCreateBatchDownload' => [
            'application/json',
        ],
        'blobsDownload' => [
            'application/json',
        ],
        'blobsDownload2' => [
            'application/json',
        ],
        'blobsTempAccessDownload' => [
            'application/json',
        ],
        'blobsTempAccessDownload2' => [
            'application/json',
        ],
        'blobsUpload' => [
            'application/json',
        ],
        'blobsUploadFromUri' => [
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
     * Operation blobsCreateBatchDownload
     *
     * Create a batch download
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\BatchDownloadRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsCreateBatchDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\BatchDownloadResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function blobsCreateBatchDownload($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsCreateBatchDownload'][0])
    {
        list($response) = $this->blobsCreateBatchDownloadWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation blobsCreateBatchDownloadWithHttpInfo
     *
     * Create a batch download
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\BatchDownloadRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsCreateBatchDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\BatchDownloadResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsCreateBatchDownloadWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsCreateBatchDownload'][0])
    {
        $request = $this->blobsCreateBatchDownloadRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\BatchDownloadResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\BatchDownloadResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\BatchDownloadResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\BatchDownloadResponse';
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
                        '\Brixion\Kolibri\Model\BatchDownloadResponse',
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
     * Operation blobsCreateBatchDownloadAsync
     *
     * Create a batch download
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\BatchDownloadRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsCreateBatchDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsCreateBatchDownloadAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsCreateBatchDownload'][0])
    {
        return $this->blobsCreateBatchDownloadAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsCreateBatchDownloadAsyncWithHttpInfo
     *
     * Create a batch download
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\BatchDownloadRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsCreateBatchDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsCreateBatchDownloadAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsCreateBatchDownload'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\BatchDownloadResponse';
        $request = $this->blobsCreateBatchDownloadRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'blobsCreateBatchDownload'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\BatchDownloadRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsCreateBatchDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsCreateBatchDownloadRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsCreateBatchDownload'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling blobsCreateBatchDownload',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling blobsCreateBatchDownload',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Blobs/CreateBatchDownload';
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
     * Operation blobsDownload
     *
     * @param  string $file_data_id file_data_id (required)
     * @param  string $file_name_and_extension file_name_and_extension (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf convert_to_pdf (optional, default to false)
     * @param  string|null $file_name file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function blobsDownload($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload'][0])
    {
        $this->blobsDownloadWithHttpInfo($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);
    }

    /**
     * Operation blobsDownloadWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsDownloadWithHttpInfo($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload'][0])
    {
        $request = $this->blobsDownloadRequest($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);

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
     * Operation blobsDownloadAsync
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsDownloadAsync($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload'][0])
    {
        return $this->blobsDownloadAsyncWithHttpInfo($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsDownloadAsyncWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsDownloadAsyncWithHttpInfo($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload'][0])
    {
        $returnType = '';
        $request = $this->blobsDownloadRequest($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);

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
     * Create request for operation 'blobsDownload'
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsDownloadRequest($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload'][0])
    {

        // verify the required parameter 'file_data_id' is set
        if ($file_data_id === null || (is_array($file_data_id) && count($file_data_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_data_id when calling blobsDownload',
            );
        }

        // verify the required parameter 'file_name_and_extension' is set
        if ($file_name_and_extension === null || (is_array($file_name_and_extension) && count($file_name_and_extension) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_name_and_extension when calling blobsDownload',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling blobsDownload',
            );
        }




        $resourcePath = '/v3/{RealEstateAgencyId}/Blobs/Download/{filedataid}/{filenameandextension}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $convert_to_pdf,
            'convert_to_pdf', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $file_name,
            'file_name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);


        // path params
        if ($file_data_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fileDataId' . '}',
                ObjectSerializer::toPathValue($file_data_id),
                $resourcePath,
            );
        }
        // path params
        if ($file_name_and_extension !== null) {
            $resourcePath = str_replace(
                '{' . 'fileNameAndExtension' . '}',
                ObjectSerializer::toPathValue($file_name_and_extension),
                $resourcePath,
            );
        }
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
     * Operation blobsDownload2
     *
     * @param  string $file_data_id file_data_id (required)
     * @param  string $file_name_and_extension file_name_and_extension (required)
     * @param  bool|null $convert_to_pdf convert_to_pdf (optional, default to false)
     * @param  string|null $file_name file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload2'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function blobsDownload2($file_data_id, $file_name_and_extension, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload2'][0])
    {
        $this->blobsDownload2WithHttpInfo($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name, $contentType);
    }

    /**
     * Operation blobsDownload2WithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload2'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsDownload2WithHttpInfo($file_data_id, $file_name_and_extension, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload2'][0])
    {
        $request = $this->blobsDownload2Request($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name, $contentType);

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
     * Operation blobsDownload2Async
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsDownload2Async($file_data_id, $file_name_and_extension, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload2'][0])
    {
        return $this->blobsDownload2AsyncWithHttpInfo($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsDownload2AsyncWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsDownload2AsyncWithHttpInfo($file_data_id, $file_name_and_extension, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload2'][0])
    {
        $returnType = '';
        $request = $this->blobsDownload2Request($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name, $contentType);

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
     * Create request for operation 'blobsDownload2'
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsDownload2Request($file_data_id, $file_name_and_extension, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsDownload2'][0])
    {

        // verify the required parameter 'file_data_id' is set
        if ($file_data_id === null || (is_array($file_data_id) && count($file_data_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_data_id when calling blobsDownload2',
            );
        }

        // verify the required parameter 'file_name_and_extension' is set
        if ($file_name_and_extension === null || (is_array($file_name_and_extension) && count($file_name_and_extension) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_name_and_extension when calling blobsDownload2',
            );
        }




        $resourcePath = '/Download/{fileDataId}/{fileNameAndExtension}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $convert_to_pdf,
            'convert_to_pdf', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $file_name,
            'file_name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);


        // path params
        if ($file_data_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fileDataId' . '}',
                ObjectSerializer::toPathValue($file_data_id),
                $resourcePath,
            );
        }
        // path params
        if ($file_name_and_extension !== null) {
            $resourcePath = str_replace(
                '{' . 'fileNameAndExtension' . '}',
                ObjectSerializer::toPathValue($file_name_and_extension),
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
     * Operation blobsTempAccessDownload
     *
     * @param  string $file_data_id file_data_id (required)
     * @param  string $file_name_and_extension file_name_and_extension (required)
     * @param  string $signed_token signed_token (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf convert_to_pdf (optional, default to false)
     * @param  string|null $file_name file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function blobsTempAccessDownload($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload'][0])
    {
        $this->blobsTempAccessDownloadWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);
    }

    /**
     * Operation blobsTempAccessDownloadWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsTempAccessDownloadWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload'][0])
    {
        $request = $this->blobsTempAccessDownloadRequest($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);

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
     * Operation blobsTempAccessDownloadAsync
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsTempAccessDownloadAsync($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload'][0])
    {
        return $this->blobsTempAccessDownloadAsyncWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsTempAccessDownloadAsyncWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsTempAccessDownloadAsyncWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload'][0])
    {
        $returnType = '';
        $request = $this->blobsTempAccessDownloadRequest($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name, $contentType);

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
     * Create request for operation 'blobsTempAccessDownload'
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  string $real_estate_agency_id (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsTempAccessDownloadRequest($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload'][0])
    {

        // verify the required parameter 'file_data_id' is set
        if ($file_data_id === null || (is_array($file_data_id) && count($file_data_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_data_id when calling blobsTempAccessDownload',
            );
        }

        // verify the required parameter 'file_name_and_extension' is set
        if ($file_name_and_extension === null || (is_array($file_name_and_extension) && count($file_name_and_extension) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_name_and_extension when calling blobsTempAccessDownload',
            );
        }

        // verify the required parameter 'signed_token' is set
        if ($signed_token === null || (is_array($signed_token) && count($signed_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signed_token when calling blobsTempAccessDownload',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling blobsTempAccessDownload',
            );
        }




        $resourcePath = '/v3/{RealEstateAgencyId}/Blobs/TempAccessDownload/{filedataid}/{filenameandextension}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $signed_token,
            'signed_token', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $convert_to_pdf,
            'convert_to_pdf', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $file_name,
            'file_name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);


        // path params
        if ($file_data_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fileDataId' . '}',
                ObjectSerializer::toPathValue($file_data_id),
                $resourcePath,
            );
        }
        // path params
        if ($file_name_and_extension !== null) {
            $resourcePath = str_replace(
                '{' . 'fileNameAndExtension' . '}',
                ObjectSerializer::toPathValue($file_name_and_extension),
                $resourcePath,
            );
        }
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
     * Operation blobsTempAccessDownload2
     *
     * @param  string $file_data_id file_data_id (required)
     * @param  string $file_name_and_extension file_name_and_extension (required)
     * @param  string $signed_token signed_token (required)
     * @param  bool|null $convert_to_pdf convert_to_pdf (optional, default to false)
     * @param  string|null $file_name file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload2'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function blobsTempAccessDownload2($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload2'][0])
    {
        $this->blobsTempAccessDownload2WithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name, $contentType);
    }

    /**
     * Operation blobsTempAccessDownload2WithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload2'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsTempAccessDownload2WithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload2'][0])
    {
        $request = $this->blobsTempAccessDownload2Request($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name, $contentType);

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
     * Operation blobsTempAccessDownload2Async
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsTempAccessDownload2Async($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload2'][0])
    {
        return $this->blobsTempAccessDownload2AsyncWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsTempAccessDownload2AsyncWithHttpInfo
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsTempAccessDownload2AsyncWithHttpInfo($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload2'][0])
    {
        $returnType = '';
        $request = $this->blobsTempAccessDownload2Request($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name, $contentType);

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
     * Create request for operation 'blobsTempAccessDownload2'
     *
     * @param  string $file_data_id (required)
     * @param  string $file_name_and_extension (required)
     * @param  string $signed_token (required)
     * @param  bool|null $convert_to_pdf (optional, default to false)
     * @param  string|null $file_name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsTempAccessDownload2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsTempAccessDownload2Request($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf = false, $file_name = null, string $contentType = self::contentTypes['blobsTempAccessDownload2'][0])
    {

        // verify the required parameter 'file_data_id' is set
        if ($file_data_id === null || (is_array($file_data_id) && count($file_data_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_data_id when calling blobsTempAccessDownload2',
            );
        }

        // verify the required parameter 'file_name_and_extension' is set
        if ($file_name_and_extension === null || (is_array($file_name_and_extension) && count($file_name_and_extension) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file_name_and_extension when calling blobsTempAccessDownload2',
            );
        }

        // verify the required parameter 'signed_token' is set
        if ($signed_token === null || (is_array($signed_token) && count($signed_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signed_token when calling blobsTempAccessDownload2',
            );
        }




        $resourcePath = '/TempAccessDownload/{fileDataId}/{fileNameAndExtension}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $signed_token,
            'signed_token', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $convert_to_pdf,
            'convert_to_pdf', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $file_name,
            'file_name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
        ) ?? []);


        // path params
        if ($file_data_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fileDataId' . '}',
                ObjectSerializer::toPathValue($file_data_id),
                $resourcePath,
            );
        }
        // path params
        if ($file_name_and_extension !== null) {
            $resourcePath = str_replace(
                '{' . 'fileNameAndExtension' . '}',
                ObjectSerializer::toPathValue($file_name_and_extension),
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
     * Operation blobsUpload
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUpload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\UploadResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function blobsUpload($real_estate_agency_id, string $contentType = self::contentTypes['blobsUpload'][0])
    {
        list($response) = $this->blobsUploadWithHttpInfo($real_estate_agency_id, $contentType);
        return $response;
    }

    /**
     * Operation blobsUploadWithHttpInfo
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUpload'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\UploadResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsUploadWithHttpInfo($real_estate_agency_id, string $contentType = self::contentTypes['blobsUpload'][0])
    {
        $request = $this->blobsUploadRequest($real_estate_agency_id, $contentType);

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
                    if ('\Brixion\Kolibri\Model\UploadResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\UploadResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\UploadResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\UploadResponse';
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
                        '\Brixion\Kolibri\Model\UploadResponse',
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
     * Operation blobsUploadAsync
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUpload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsUploadAsync($real_estate_agency_id, string $contentType = self::contentTypes['blobsUpload'][0])
    {
        return $this->blobsUploadAsyncWithHttpInfo($real_estate_agency_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsUploadAsyncWithHttpInfo
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUpload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsUploadAsyncWithHttpInfo($real_estate_agency_id, string $contentType = self::contentTypes['blobsUpload'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\UploadResponse';
        $request = $this->blobsUploadRequest($real_estate_agency_id, $contentType);

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
     * Create request for operation 'blobsUpload'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUpload'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsUploadRequest($real_estate_agency_id, string $contentType = self::contentTypes['blobsUpload'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling blobsUpload',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Blobs/Upload';
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody,
        );
    }

    /**
     * Operation blobsUploadFromUri
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UploadFromUriRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUploadFromUri'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\UploadResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function blobsUploadFromUri($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsUploadFromUri'][0])
    {
        list($response) = $this->blobsUploadFromUriWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation blobsUploadFromUriWithHttpInfo
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UploadFromUriRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUploadFromUri'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\UploadResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsUploadFromUriWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsUploadFromUri'][0])
    {
        $request = $this->blobsUploadFromUriRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\UploadResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\UploadResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\UploadResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\UploadResponse';
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
                        '\Brixion\Kolibri\Model\UploadResponse',
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
     * Operation blobsUploadFromUriAsync
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UploadFromUriRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUploadFromUri'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsUploadFromUriAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsUploadFromUri'][0])
    {
        return $this->blobsUploadFromUriAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation blobsUploadFromUriAsyncWithHttpInfo
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UploadFromUriRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUploadFromUri'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsUploadFromUriAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsUploadFromUri'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\UploadResponse';
        $request = $this->blobsUploadFromUriRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'blobsUploadFromUri'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\UploadFromUriRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blobsUploadFromUri'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blobsUploadFromUriRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['blobsUploadFromUri'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling blobsUploadFromUri',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling blobsUploadFromUri',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/Blobs/UploadFromUri';
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
