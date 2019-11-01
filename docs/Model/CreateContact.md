# CreateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user. Mandatory if \&quot;sms\&quot; field is not passed in \&quot;attributes\&quot; parameter&#39; | [optional] 
**attributes** | **object** | Pass the set of attributes and their values. These attributes must be present in your Mailvio account. For eg. {&#39;FNAME&#39;:&#39;Elly&#39;, &#39;LNAME&#39;:&#39;Roger&#39;} | [optional] 
**email_blacklisted** | **bool** | Set this field to blacklist the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**sms_blacklisted** | **bool** | Set this field to blacklist the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**list_ids** | **int[]** | Ids of the lists to add the contact to | [optional] 
**update_enabled** | **bool** | Facilitate to update the existing contact in the same request (updateEnabled &#x3D; true) | [optional] [default to false]
**smtp_blacklist_sender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact ( only available if updateEnabled &#x3D; true ) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


