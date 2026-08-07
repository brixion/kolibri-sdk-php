<?php

declare(strict_types=1);

/**
 * DocumentTemplatesApi - Brixion Kolibri PHP SDK.
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
 * DocumentTemplatesApi.
 */
class DocumentTemplatesApi
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
        'documentTemplatesRead' => [
            'application/json',
        ],
        'documentTemplatesSearch' => [
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
     * Operation documentTemplatesRead
     *
     * Read a single Document template.
     *
     * @param  string $id id (required)
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function documentTemplatesRead($id, $real_estate_agency_id, string $contentType = self::contentTypes['documentTemplatesRead'][0])
    {
        list($response) = $this->documentTemplatesReadWithHttpInfo($id, $real_estate_agency_id, $contentType);
        return $response;
    }

    /**
     * Operation documentTemplatesReadWithHttpInfo
     *
     * Read a single Document template.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesRead'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentTemplatesReadWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['documentTemplatesRead'][0])
    {
        $request = $this->documentTemplatesReadRequest($id, $real_estate_agency_id, $contentType);

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
                    if ('\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse';
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
                        '\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse',
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
     * Operation documentTemplatesReadAsync
     *
     * Read a single Document template.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentTemplatesReadAsync($id, $real_estate_agency_id, string $contentType = self::contentTypes['documentTemplatesRead'][0])
    {
        return $this->documentTemplatesReadAsyncWithHttpInfo($id, $real_estate_agency_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation documentTemplatesReadAsyncWithHttpInfo
     *
     * Read a single Document template.
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentTemplatesReadAsyncWithHttpInfo($id, $real_estate_agency_id, string $contentType = self::contentTypes['documentTemplatesRead'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\DocumentTemplateSingleItemResponse';
        $request = $this->documentTemplatesReadRequest($id, $real_estate_agency_id, $contentType);

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
     * Create request for operation 'documentTemplatesRead'
     *
     * @param  string $id (required)
     * @param  string $real_estate_agency_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesRead'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function documentTemplatesReadRequest($id, $real_estate_agency_id, string $contentType = self::contentTypes['documentTemplatesRead'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling documentTemplatesRead',
            );
        }

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling documentTemplatesRead',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/DocumentTemplates';
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
     * Operation documentTemplatesSearch
     *
     * Search for document templates.
     *
     * @param  string $real_estate_agency_id real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\DocumentTemplatesSearchRequest $request request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Brixion\Kolibri\Model\DocumentTemplatesSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError
     */
    public function documentTemplatesSearch($real_estate_agency_id, $request, string $contentType = self::contentTypes['documentTemplatesSearch'][0])
    {
        list($response) = $this->documentTemplatesSearchWithHttpInfo($real_estate_agency_id, $request, $contentType);
        return $response;
    }

    /**
     * Operation documentTemplatesSearchWithHttpInfo
     *
     * Search for document templates.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\DocumentTemplatesSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesSearch'] to see the possible values for this operation
     *
     * @throws \Brixion\Kolibri\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Brixion\Kolibri\Model\DocumentTemplatesSearchResponse|\Brixion\Kolibri\Model\ErrorResponse|\Brixion\Kolibri\Model\HttpError|\Brixion\Kolibri\Model\HttpError, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentTemplatesSearchWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['documentTemplatesSearch'][0])
    {
        $request = $this->documentTemplatesSearchRequest($real_estate_agency_id, $request, $contentType);

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
                    if ('\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse', []),
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

            $returnType = '\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse';
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
                        '\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse',
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
     * Operation documentTemplatesSearchAsync
     *
     * Search for document templates.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\DocumentTemplatesSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentTemplatesSearchAsync($real_estate_agency_id, $request, string $contentType = self::contentTypes['documentTemplatesSearch'][0])
    {
        return $this->documentTemplatesSearchAsyncWithHttpInfo($real_estate_agency_id, $request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                },
            );
    }

    /**
     * Operation documentTemplatesSearchAsyncWithHttpInfo
     *
     * Search for document templates.
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\DocumentTemplatesSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentTemplatesSearchAsyncWithHttpInfo($real_estate_agency_id, $request, string $contentType = self::contentTypes['documentTemplatesSearch'][0])
    {
        $returnType = '\Brixion\Kolibri\Model\DocumentTemplatesSearchResponse';
        $request = $this->documentTemplatesSearchRequest($real_estate_agency_id, $request, $contentType);

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
     * Create request for operation 'documentTemplatesSearch'
     *
     * @param  string $real_estate_agency_id (required)
     * @param  \Brixion\Kolibri\Model\DocumentTemplatesSearchRequest $request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['documentTemplatesSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function documentTemplatesSearchRequest($real_estate_agency_id, $request, string $contentType = self::contentTypes['documentTemplatesSearch'][0])
    {

        // verify the required parameter 'real_estate_agency_id' is set
        if ($real_estate_agency_id === null || (is_array($real_estate_agency_id) && count($real_estate_agency_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $real_estate_agency_id when calling documentTemplatesSearch',
            );
        }

        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling documentTemplatesSearch',
            );
        }


        $resourcePath = '/v3/{RealEstateAgencyId}/DocumentTemplates/Search';
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
