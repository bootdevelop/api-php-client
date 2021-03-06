# Swagger\Client\ProductsApi

All URIs are relative to *https://api.beezup.com/v2/user/channelCatalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelCatalogProductByChannelCatalog**](ProductsApi.md#getChannelCatalogProductByChannelCatalog) | **POST** /products/{productId} | Get channel catalog products related to these channel catalogs
[**getChannelCatalogProductInfo**](ProductsApi.md#getChannelCatalogProductInfo) | **GET** /{channelCatalogId}/products/{productId} | Get channel catalog product information
[**getChannelCatalogProductInfoList**](ProductsApi.md#getChannelCatalogProductInfoList) | **POST** /{channelCatalogId}/products | Get channel catalog product information list


# **getChannelCatalogProductByChannelCatalog**
> \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse getChannelCatalogProductByChannelCatalog($product_id, $request)

Get channel catalog products related to these channel catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$request = new \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest(); // \Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest | 

try {
    $result = $api_instance->getChannelCatalogProductByChannelCatalog($product_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getChannelCatalogProductByChannelCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The product identifier |
 **request** | [**\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest**](../Model/\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductByChannelCatalogResponse**](../Model/ChannelCatalogProductByChannelCatalogResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfo**
> \Swagger\Client\Model\ChannelCatalogProductInfo getChannelCatalogProductInfo($channel_catalog_id, $product_id)

Get channel catalog product information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier

try {
    $result = $api_instance->getChannelCatalogProductInfo($channel_catalog_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getChannelCatalogProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfo**](../Model/ChannelCatalogProductInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogProductInfoList**
> \Swagger\Client\Model\ChannelCatalogProductInfoList getChannelCatalogProductInfoList($channel_catalog_id, $request)

Get channel catalog product information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$request = new \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest(); // \Swagger\Client\Model\GetChannelCatalogProductInfoListRequest | The channel catalog product list filter

try {
    $result = $api_instance->getChannelCatalogProductInfoList($channel_catalog_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getChannelCatalogProductInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **request** | [**\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest**](../Model/\Swagger\Client\Model\GetChannelCatalogProductInfoListRequest.md)| The channel catalog product list filter | [optional]

### Return type

[**\Swagger\Client\Model\ChannelCatalogProductInfoList**](../Model/ChannelCatalogProductInfoList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

