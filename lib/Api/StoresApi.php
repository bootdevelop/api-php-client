<?php
/**
 * StoresApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
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
 * StoresApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoresApi
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
     * @return StoresApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createStore
     *
     * Create a new store
     *
     * @param \Swagger\Client\Model\CreateStoreRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LinksGetStoresLink
     */
    public function createStore($request)
    {
        list($response) = $this->createStoreWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation createStoreWithHttpInfo
     *
     * Create a new store
     *
     * @param \Swagger\Client\Model\CreateStoreRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LinksGetStoresLink, HTTP status code, HTTP response headers (array of strings)
     */
    public function createStoreWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createStore');
        }
        // parse inputs
        $resourcePath = "/v2/user/customer/stores";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\Swagger\Client\Model\LinksGetStoresLink',
                '/v2/user/customer/stores'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LinksGetStoresLink', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LinksGetStoresLink', $e->getResponseHeaders());
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
     * Operation deleteStore
     *
     * Delete a store
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteStore($store_id)
    {
        list($response) = $this->deleteStoreWithHttpInfo($store_id);
        return $response;
    }

    /**
     * Operation deleteStoreWithHttpInfo
     *
     * Delete a store
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteStoreWithHttpInfo($store_id)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling deleteStore');
        }
        // parse inputs
        $resourcePath = "/v2/user/customer/stores/{storeId}";
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
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
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
                '/v2/user/customer/stores/{storeId}'
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
     * Operation getStore
     *
     * Get store's information
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\StoreHeader
     */
    public function getStore($store_id)
    {
        list($response) = $this->getStoreWithHttpInfo($store_id);
        return $response;
    }

    /**
     * Operation getStoreWithHttpInfo
     *
     * Get store's information
     *
     * @param string $store_id Your store identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\StoreHeader, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreWithHttpInfo($store_id)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling getStore');
        }
        // parse inputs
        $resourcePath = "/v2/user/customer/stores/{storeId}";
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
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
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
                '\Swagger\Client\Model\StoreHeader',
                '/v2/user/customer/stores/{storeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\StoreHeader', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\StoreHeader', $e->getResponseHeaders());
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
     * Operation getStores
     *
     * Get store list
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Stores
     */
    public function getStores()
    {
        list($response) = $this->getStoresWithHttpInfo();
        return $response;
    }

    /**
     * Operation getStoresWithHttpInfo
     *
     * Get store list
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Stores, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoresWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v2/user/customer/stores";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\Swagger\Client\Model\Stores',
                '/v2/user/customer/stores'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Stores', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Stores', $e->getResponseHeaders());
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
     * Operation updateStore
     *
     * Update some store's information.
     *
     * @param string $store_id Your store identifier (required)
     * @param \Swagger\Client\Model\UpdateStoreRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function updateStore($store_id, $request)
    {
        list($response) = $this->updateStoreWithHttpInfo($store_id, $request);
        return $response;
    }

    /**
     * Operation updateStoreWithHttpInfo
     *
     * Update some store's information.
     *
     * @param string $store_id Your store identifier (required)
     * @param \Swagger\Client\Model\UpdateStoreRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateStoreWithHttpInfo($store_id, $request)
    {
        // verify the required parameter 'store_id' is set
        if ($store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $store_id when calling updateStore');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateStore');
        }
        // parse inputs
        $resourcePath = "/v2/user/customer/stores/{storeId}";
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
        if ($store_id !== null) {
            $resourcePath = str_replace(
                "{" . "storeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($store_id),
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/user/customer/stores/{storeId}'
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
}
