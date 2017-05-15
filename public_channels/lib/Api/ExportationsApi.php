<?php
/**
 * ExportationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Channel Catalogs
 *
 * This api allows you to manage your channel catalogs.   A channel catalog is an association between your store and a channel.  You will be able to: - map your catalog colums to channel columns. - map your catalog categories to the channel categories and define a cost of this category - configure the general and cost settings of the channel - enable or disable a channel - exclude products using filters for a channel - override product values for a channel - disable or reenable a product on a channel
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ExportationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportationsApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ExportationsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteChannelCatalogExportationCache
     *
     * Delete the exportation cache
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteChannelCatalogExportationCache($channel_catalog_id)
    {
        list($response) = $this->deleteChannelCatalogExportationCacheWithHttpInfo($channel_catalog_id);
        return $response;
    }

    /**
     * Operation deleteChannelCatalogExportationCacheWithHttpInfo
     *
     * Delete the exportation cache
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteChannelCatalogExportationCacheWithHttpInfo($channel_catalog_id)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling deleteChannelCatalogExportationCache');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/exportations/cache";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/{channelCatalogId}/exportations/cache'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChannelCatalogExportationCacheInfo
     *
     * Get the exportation cache information
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogExportCacheInfoResponse
     */
    public function getChannelCatalogExportationCacheInfo($channel_catalog_id)
    {
        list($response) = $this->getChannelCatalogExportationCacheInfoWithHttpInfo($channel_catalog_id);
        return $response;
    }

    /**
     * Operation getChannelCatalogExportationCacheInfoWithHttpInfo
     *
     * Get the exportation cache information
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogExportCacheInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogExportationCacheInfoWithHttpInfo($channel_catalog_id)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogExportationCacheInfo');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/exportations/cache";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChannelCatalogExportCacheInfoResponse',
                '/{channelCatalogId}/exportations/cache'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogExportCacheInfoResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogExportCacheInfoResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChannelCatalogExportationHistory
     *
     * Get the exportation history
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param int $page_number The page number you want to get (required)
     * @param int $page_size The entry count you want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogExportationHistory
     */
    public function getChannelCatalogExportationHistory($channel_catalog_id, $page_number, $page_size)
    {
        list($response) = $this->getChannelCatalogExportationHistoryWithHttpInfo($channel_catalog_id, $page_number, $page_size);
        return $response;
    }

    /**
     * Operation getChannelCatalogExportationHistoryWithHttpInfo
     *
     * Get the exportation history
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param int $page_number The page number you want to get (required)
     * @param int $page_size The entry count you want to get (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogExportationHistory, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogExportationHistoryWithHttpInfo($channel_catalog_id, $page_number, $page_size)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogExportationHistory');
        }
        // verify the required parameter 'page_number' is set
        if ($page_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page_number when calling getChannelCatalogExportationHistory');
        }
        if (($page_number < 1)) {
            throw new \InvalidArgumentException('invalid value for "$page_number" when calling ExportationsApi.getChannelCatalogExportationHistory, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'page_size' is set
        if ($page_size === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page_size when calling getChannelCatalogExportationHistory');
        }
        if (($page_size > 100)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling ExportationsApi.getChannelCatalogExportationHistory, must be smaller than or equal to 100.');
        }
        if (($page_size < 25)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling ExportationsApi.getChannelCatalogExportationHistory, must be bigger than or equal to 25.');
        }

        // parse inputs
        $resourcePath = "/{channelCatalogId}/exportations/history";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // path params
        if ($channel_catalog_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelCatalogId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_catalog_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChannelCatalogExportationHistory',
                '/{channelCatalogId}/exportations/history'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogExportationHistory', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogExportationHistory', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}