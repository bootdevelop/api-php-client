<?php
/**
 * ProductsApi
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
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
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
     * @return ProductsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getChannelCatalogProductByChannelCatalog
     *
     * Get channel catalog products related to these channel catalogs
     *
     * @param string $product_id The product identifier (required)
     * @param \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest $request  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse
     */
    public function getChannelCatalogProductByChannelCatalog($product_id, $request = null)
    {
        list($response) = $this->getChannelCatalogProductByChannelCatalogWithHttpInfo($product_id, $request);
        return $response;
    }

    /**
     * Operation getChannelCatalogProductByChannelCatalogWithHttpInfo
     *
     * Get channel catalog products related to these channel catalogs
     *
     * @param string $product_id The product identifier (required)
     * @param \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest $request  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogProductByChannelCatalogWithHttpInfo($product_id, $request = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getChannelCatalogProductByChannelCatalog');
        }
        // parse inputs
        $resourcePath = "/products/{productId}";
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "productId" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse',
                '/products/{productId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse', $e->getResponseHeaders());
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
     * Operation getChannelCatalogProductInfo
     *
     * Get channel catalog product information
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param string $product_id The product identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogProductInfo
     */
    public function getChannelCatalogProductInfo($channel_catalog_id, $product_id)
    {
        list($response) = $this->getChannelCatalogProductInfoWithHttpInfo($channel_catalog_id, $product_id);
        return $response;
    }

    /**
     * Operation getChannelCatalogProductInfoWithHttpInfo
     *
     * Get channel catalog product information
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param string $product_id The product identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogProductInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogProductInfoWithHttpInfo($channel_catalog_id, $product_id)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogProductInfo');
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getChannelCatalogProductInfo');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/products/{productId}";
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
        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "productId" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
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
                '\Swagger\Client\Model\ChannelCatalogProductInfo',
                '/{channelCatalogId}/products/{productId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogProductInfo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogProductInfo', $e->getResponseHeaders());
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
     * Operation getChannelCatalogProductInfoList
     *
     * Get channel catalog product information list
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest $request The channel catalog product list filter (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChannelCatalogProductInfoList
     */
    public function getChannelCatalogProductInfoList($channel_catalog_id, $request = null)
    {
        list($response) = $this->getChannelCatalogProductInfoListWithHttpInfo($channel_catalog_id, $request);
        return $response;
    }

    /**
     * Operation getChannelCatalogProductInfoListWithHttpInfo
     *
     * Get channel catalog product information list
     *
     * @param string $channel_catalog_id The channel catalog identifier (required)
     * @param \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest $request The channel catalog product list filter (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChannelCatalogProductInfoList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelCatalogProductInfoListWithHttpInfo($channel_catalog_id, $request = null)
    {
        // verify the required parameter 'channel_catalog_id' is set
        if ($channel_catalog_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_catalog_id when calling getChannelCatalogProductInfoList');
        }
        // parse inputs
        $resourcePath = "/{channelCatalogId}/products";
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

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChannelCatalogProductInfoList',
                '/{channelCatalogId}/products'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChannelCatalogProductInfoList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChannelCatalogProductInfoList', $e->getResponseHeaders());
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
