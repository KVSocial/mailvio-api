# Retrieve a Webhook

- Doc ID: 72
- Source URL: https://mail.mailvio.com/apidocs/72
- Parent ID: 67
- Requires Auth: Yes
- Request Method: get
- Request URL: /webhook/:webhookId
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieves a specic webhook</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Webhook",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "Webhook.id",
    "dataType": "INTEGER",
    "description": "The id of the new webhook"
  },
  {
    "fieldName": "Webhook.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The id of the account that owns the webhook"
  },
  {
    "fieldName": "Webhook.SiteMasterId",
    "dataType": "INTEGER",
    "description": "The id of the agency or site that owns the accountmaster"
  },
  {
    "fieldName": "Webhook.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the webhook was first registered"
  },
  {
    "fieldName": "Webhook.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the webhook was last updated"
  },
  {
    "fieldName": "Webhook.webHookUri",
    "dataType": "STRING",
    "description": "The url  the webhook will  push data to."
  },
  {
    "fieldName": "Webhook.hookType",
    "dataType": "STRING",
    "description": "The type of webhook this is."
  },
  {
    "fieldName": "Webhook.groupId",
    "dataType": "INTEGER",
    "description": "The group id that is currently being monitored."
  },
  {
    "fieldName": "Webhook.applicationId",
    "dataType": "INTEGER",
    "description": "The applicationID associated with the hook"
  }
]
```




## Response Example


```json
{
  "id": 12345,
  "webHookUri": "https://oursite.com",
  "hookType": "CampaignSend",
  "applicationId": "",
  "groupId": "",
  "AccountMasterId": 1234,
  "SiteMasterId": 1,
  "createdAt": "2019-01-01 12:00:00",
  "updatedAt": "2019-01-01 12:00:00"
}
```

