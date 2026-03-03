# Swagger\Client\SMSCampaignsApi

All URIs are relative to *https://api.mailvio.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSmsCampaign**](SMSCampaignsApi.md#createSmsCampaign) | **POST** /smsCampaigns | Creates an SMS campaign
[**deleteSmsCampaign**](SMSCampaignsApi.md#deleteSmsCampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete the SMS campaign
[**getSmsCampaign**](SMSCampaignsApi.md#getSmsCampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign
[**getSmsCampaigns**](SMSCampaignsApi.md#getSmsCampaigns) | **GET** /smsCampaigns | Returns the informations for all your created SMS campaigns
[**requestSmsRecipientExport**](SMSCampaignsApi.md#requestSmsRecipientExport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Exports the recipients of the specified campaign.
[**sendSmsCampaignNow**](SMSCampaignsApi.md#sendSmsCampaignNow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
[**sendSmsReport**](SMSCampaignsApi.md#sendSmsReport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send report of SMS campaigns
[**sendTestSms**](SMSCampaignsApi.md#sendTestSms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send an SMS
[**updateSmsCampaign**](SMSCampaignsApi.md#updateSmsCampaign) | **PUT** /smsCampaigns/{campaignId} | Updates an SMS campaign
[**updateSmsCampaignStatus**](SMSCampaignsApi.md#updateSmsCampaignStatus) | **PUT** /smsCampaigns/{campaignId}/status | Update the campaign status


# **createSmsCampaign**
> \Swagger\Client\Model\CreateModel createSmsCampaign($create_sms_campaign)

Creates an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$create_sms_campaign = new \Swagger\Client\Model\CreateSmsCampaign(); // \Swagger\Client\Model\CreateSmsCampaign | Values to create an SMS Campaign

try {
    $result = $api_instance->createSmsCampaign($create_sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->createSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_sms_campaign** | [**\Swagger\Client\Model\CreateSmsCampaign**](../Model/\Swagger\Client\Model\CreateSmsCampaign.md)| Values to create an SMS Campaign |

### Return type

[**\Swagger\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSmsCampaign**
> deleteSmsCampaign($campaign_id)

Delete the SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the SMS campaign

try {
    $api_instance->deleteSmsCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->deleteSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the SMS campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaign**
> \Swagger\Client\Model\GetSmsCampaign getSmsCampaign($campaign_id)

Get an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the SMS campaign

try {
    $result = $api_instance->getSmsCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the SMS campaign |

### Return type

[**\Swagger\Client\Model\GetSmsCampaign**](../Model/GetSmsCampaign.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaigns**
> \Swagger\Client\Model\GetSmsCampaigns getSmsCampaigns($status, $start_date, $end_date, $limit, $offset)

Returns the informations for all your created SMS campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$status = "status_example"; // string | Status of campaign.
$start_date = new \DateTime(); // \DateTime | Mandatory if endDate is used. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either 'status' not passed and if passed is set to 'sent' )
$end_date = new \DateTime(); // \DateTime | Mandatory if startDate is used. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either 'status' not passed and if passed is set to 'sent' )
$limit = 500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.

try {
    $result = $api_instance->getSmsCampaigns($status, $start_date, $end_date, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status of campaign. | [optional]
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional]
 **limit** | **int**| Number limitation for the result returned | [optional] [default to 500]
 **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\GetSmsCampaigns**](../Model/GetSmsCampaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSmsRecipientExport**
> \Swagger\Client\Model\CreatedProcessId requestSmsRecipientExport($campaign_id, $recipient_export)

Exports the recipients of the specified campaign.

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the campaign
$recipient_export = new \Swagger\Client\Model\RequestSmsRecipientExport(); // \Swagger\Client\Model\RequestSmsRecipientExport | Values to send for a recipient export request

try {
    $result = $api_instance->requestSmsRecipientExport($campaign_id, $recipient_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->requestSmsRecipientExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the campaign |
 **recipient_export** | [**\Swagger\Client\Model\RequestSmsRecipientExport**](../Model/\Swagger\Client\Model\RequestSmsRecipientExport.md)| Values to send for a recipient export request | [optional]

### Return type

[**\Swagger\Client\Model\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsCampaignNow**
> sendSmsCampaignNow($campaign_id)

Send your SMS campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the campaign

try {
    $api_instance->sendSmsCampaignNow($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsReport**
> sendSmsReport($campaign_id, $send_report)

Send report of SMS campaigns

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the campaign
$send_report = new \Swagger\Client\Model\SendReport(); // \Swagger\Client\Model\SendReport | Values for send a report

try {
    $api_instance->sendSmsReport($campaign_id, $send_report);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the campaign |
 **send_report** | [**\Swagger\Client\Model\SendReport**](../Model/\Swagger\Client\Model\SendReport.md)| Values for send a report |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestSms**
> sendTestSms($campaign_id, $phone_number)

Send an SMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | Id of the SMS campaign
$phone_number = new \Swagger\Client\Model\SendTestSms(); // \Swagger\Client\Model\SendTestSms | Mobile number of the recipient with the country code. This number must belong to one of your contacts in Mailvio account and must not be blacklisted

try {
    $api_instance->sendTestSms($campaign_id, $phone_number);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendTestSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Id of the SMS campaign |
 **phone_number** | [**\Swagger\Client\Model\SendTestSms**](../Model/\Swagger\Client\Model\SendTestSms.md)| Mobile number of the recipient with the country code. This number must belong to one of your contacts in Mailvio account and must not be blacklisted |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmsCampaign**
> updateSmsCampaign($campaign_id, $update_sms_campaign)

Updates an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the SMS campaign
$update_sms_campaign = new \Swagger\Client\Model\UpdateSmsCampaign(); // \Swagger\Client\Model\UpdateSmsCampaign | Values to update an SMS Campaign

try {
    $api_instance->updateSmsCampaign($campaign_id, $update_sms_campaign);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the SMS campaign |
 **update_sms_campaign** | [**\Swagger\Client\Model\UpdateSmsCampaign**](../Model/\Swagger\Client\Model\UpdateSmsCampaign.md)| Values to update an SMS Campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmsCampaignStatus**
> updateSmsCampaignStatus($campaign_id, $status)

Update the campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = 789; // int | id of the campaign
$status = new \Swagger\Client\Model\UpdateCampaignStatus(); // \Swagger\Client\Model\UpdateCampaignStatus | Status of the campaign.

try {
    $api_instance->updateSmsCampaignStatus($campaign_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| id of the campaign |
 **status** | [**\Swagger\Client\Model\UpdateCampaignStatus**](../Model/\Swagger\Client\Model\UpdateCampaignStatus.md)| Status of the campaign. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

