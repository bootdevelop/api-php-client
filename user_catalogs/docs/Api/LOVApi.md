# Swagger\Client\LOVApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublicListNames**](LOVApi.md#getPublicListNames) | **GET** /v2/public/lov/ | Get all list names
[**getPublicListOfValues**](LOVApi.md#getPublicListOfValues) | **GET** /v2/public/lov/{listName} | Get the list of values related to this list name


# **getPublicListNames**
> \Swagger\Client\Model\BeezUPCommonLOVLink2[] getPublicListNames()

Get all list names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LOVApi();

try {
    $result = $api_instance->getPublicListNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LOVApi->getPublicListNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeezUPCommonLOVLink2[]**](../Model/BeezUPCommonLOVLink2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicListOfValues**
> \Swagger\Client\Model\BeezUPCommonListOfValueItem[] getPublicListOfValues($list_name, $accept_language)

Get the list of values related to this list name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LOVApi();
$list_name = "list_name_example"; // string | The list of value name your want to get
$accept_language = array("accept_language_example"); // string[] | Indicates that the client accepts the following languages.

try {
    $result = $api_instance->getPublicListOfValues($list_name, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LOVApi->getPublicListOfValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_name** | **string**| The list of value name your want to get |
 **accept_language** | [**string[]**](../Model/string.md)| Indicates that the client accepts the following languages. | [optional]

### Return type

[**\Swagger\Client\Model\BeezUPCommonListOfValueItem[]**](../Model/BeezUPCommonListOfValueItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

