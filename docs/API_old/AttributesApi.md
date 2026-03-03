# Swagger\Client\AttributesApi

All URIs are relative to *https://api.mailvio.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAttribute**](AttributesApi.md#createAttribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Creates contact attribute
[**deleteAttribute**](AttributesApi.md#deleteAttribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Deletes an attribute
[**getAttributes**](AttributesApi.md#getAttributes) | **GET** /contacts/attributes | Lists all attributes
[**updateAttribute**](AttributesApi.md#updateAttribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Updates contact attribute


# **createAttribute**
> createAttribute($attribute_category, $attribute_name, $create_attribute)

Creates contact attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\AttributesApi();
$attribute_category = "attribute_category_example"; // string | Category of the attribute
$attribute_name = "attribute_name_example"; // string | Name of the attribute
$create_attribute = new \Swagger\Client\Model\CreateAttribute(); // \Swagger\Client\Model\CreateAttribute | Values to create an attribute

try {
    $api_instance->createAttribute($attribute_category, $attribute_name, $create_attribute);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_category** | **string**| Category of the attribute |
 **attribute_name** | **string**| Name of the attribute |
 **create_attribute** | [**\Swagger\Client\Model\CreateAttribute**](../Model/\Swagger\Client\Model\CreateAttribute.md)| Values to create an attribute |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAttribute**
> deleteAttribute($attribute_category, $attribute_name)

Deletes an attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\AttributesApi();
$attribute_category = "attribute_category_example"; // string | Category of the attribute
$attribute_name = "attribute_name_example"; // string | Name of the existing attribute

try {
    $api_instance->deleteAttribute($attribute_category, $attribute_name);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_category** | **string**| Category of the attribute |
 **attribute_name** | **string**| Name of the existing attribute |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributes**
> \Swagger\Client\Model\GetAttributes getAttributes()

Lists all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\AttributesApi();

try {
    $result = $api_instance->getAttributes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetAttributes**](../Model/GetAttributes.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAttribute**
> updateAttribute($attribute_category, $attribute_name, $update_attribute)

Updates contact attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\AttributesApi();
$attribute_category = "attribute_category_example"; // string | Category of the attribute
$attribute_name = "attribute_name_example"; // string | Name of the existing attribute
$update_attribute = new \Swagger\Client\Model\UpdateAttribute(); // \Swagger\Client\Model\UpdateAttribute | Values to update an attribute

try {
    $api_instance->updateAttribute($attribute_category, $attribute_name, $update_attribute);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_category** | **string**| Category of the attribute |
 **attribute_name** | **string**| Name of the existing attribute |
 **update_attribute** | [**\Swagger\Client\Model\UpdateAttribute**](../Model/\Swagger\Client\Model\UpdateAttribute.md)| Values to update an attribute |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

