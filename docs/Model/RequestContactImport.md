# RequestContactImport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_url** | **string** | Mandatory if fileBody is not defined. URL of the file to be imported (no local file). Possible file formats: .txt, .csv | [optional] 
**file_body** | **string** | Mandatory if fileUrl is not defined. CSV content to be imported. Use semicolon to separate multiple attributes | [optional] 
**list_ids** | **int[]** | Mandatory if newList is not defined. Ids of the lists in which the contacts shall be imported. For example, [2, 4, 7]. | [optional] 
**notify_url** | **string** | URL that will be called once the export process is finished | [optional] 
**new_list** | [**\Swagger\Client\Model\RequestContactImportNewList**](RequestContactImportNewList.md) |  | [optional] 
**email_blacklist** | **bool** | To blacklist all the contacts for email | [optional] [default to false]
**sms_blacklist** | **bool** | To blacklist all the contacts for sms | [optional] [default to false]
**update_existing_contacts** | **bool** | To facilitate the choice to update the existing contacts | [optional] [default to true]
**empty_contacts_attributes** | **bool** | To facilitate the choice to erase any attribute of the existing contacts with empty value. emptyContactsAttributes &#x3D; true means the empty fields in your import will erase any attribute that currently contain data in Mailvio, &amp; emptyContactsAttributes &#x3D; false means the empty fields will not affect your existing data ( only available if &#x60;updateExistingContacts&#x60; set to true ) | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


