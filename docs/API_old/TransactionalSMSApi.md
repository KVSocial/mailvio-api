# Swagger\Client\TransactionalSMSApi

All URIs are relative to *https://api.mailvio.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSmsEvents**](TransactionalSMSApi.md#getSmsEvents) | **GET** /transactionalSMS/statistics/events | Get all the SMS activity (unaggregated events)
[**getTransacAggregatedSmsReport**](TransactionalSMSApi.md#getTransacAggregatedSmsReport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
[**getTransacSmsReport**](TransactionalSMSApi.md#getTransacSmsReport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
[**sendTransacSms**](TransactionalSMSApi.md#sendTransacSms) | **POST** /transactionalSMS/sms | Send the SMS campaign to the specified mobile number


# **getSmsEvents**
> \Swagger\Client\Model\GetSmsEventReport getSmsEvents($limit, $start_date, $end_date, $offset, $days, $phone_number, $event, $tags)

Get all the SMS activity (unaggregated events)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$limit = 50; // int | Number of documents per page
$start_date = "start_date_example"; // string | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = "end_date_example"; // string | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$offset = 0; // int | Index of the first document of the page
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$phone_number = "phone_number_example"; // string | Filter the report for a specific phone number
$event = "event_example"; // string | Filter the report for specific events
$tags = "tags_example"; // string | Filter the report for specific tags passed as a serialized urlencoded array

try {
    $result = $api_instance->getSmsEvents($limit, $start_date, $end_date, $offset, $days, $phone_number, $event, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getSmsEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **start_date** | **string**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **string**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **phone_number** | **string**| Filter the report for a specific phone number | [optional]
 **event** | **string**| Filter the report for specific events | [optional]
 **tags** | **string**| Filter the report for specific tags passed as a serialized urlencoded array | [optional]

### Return type

[**\Swagger\Client\Model\GetSmsEventReport**](../Model/GetSmsEventReport.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransacAggregatedSmsReport**
> \Swagger\Client\Model\GetTransacAggregatedSmsReport getTransacAggregatedSmsReport($start_date, $end_date, $days, $tag)

Get your SMS activity aggregated over a period of time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$start_date = "start_date_example"; // string | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = "end_date_example"; // string | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with startDate and endDate
$tag = "tag_example"; // string | Filter on a tag

try {
    $result = $api_instance->getTransacAggregatedSmsReport($start_date, $end_date, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacAggregatedSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **string**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with startDate and endDate | [optional]
 **tag** | **string**| Filter on a tag | [optional]

### Return type

[**\Swagger\Client\Model\GetTransacAggregatedSmsReport**](../Model/GetTransacAggregatedSmsReport.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransacSmsReport**
> \Swagger\Client\Model\GetTransacSmsReport getTransacSmsReport($start_date, $end_date, $days, $tag)

Get your SMS activity aggregated per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$start_date = "start_date_example"; // string | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = "end_date_example"; // string | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Filter on a tag

try {
    $result = $api_instance->getTransacSmsReport($start_date, $end_date, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **string**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Filter on a tag | [optional]

### Return type

[**\Swagger\Client\Model\GetTransacSmsReport**](../Model/GetTransacSmsReport.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTransacSms**
> \Swagger\Client\Model\SendSms sendTransacSms($send_transac_sms)

Send the SMS campaign to the specified mobile number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$send_transac_sms = new \Swagger\Client\Model\SendTransacSms(); // \Swagger\Client\Model\SendTransacSms | Values to send a transactional SMS

try {
    $result = $api_instance->sendTransacSms($send_transac_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->sendTransacSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_transac_sms** | [**\Swagger\Client\Model\SendTransacSms**](../Model/\Swagger\Client\Model\SendTransacSms.md)| Values to send a transactional SMS |

### Return type

[**\Swagger\Client\Model\SendSms**](../Model/SendSms.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

