# Retrieve All Webhooks

- Doc ID: 71
- Source URL: https://mail.mailvio.com/apidocs/71
- Parent ID: 67
- Requires Auth: Yes
- Request Method: get
- Request URL: /webhook
- Published: Yes
- Last Updated: 2026-02-28T09:52:09.000Z

## Body

<p>Retrieves all currently setup webhooks.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Webhooks",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "Webhooks.id",
    "dataType": "INTEGER",
    "description": "The id of the new webhook"
  },
  {
    "fieldName": "Webhooks.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The id of the account that owns the webhook"
  },
  {
    "fieldName": "Webhooks.SiteMasterId",
    "dataType": "INTEGER",
    "description": "The id of the agency or site that owns the accountmaster"
  },
  {
    "fieldName": "Webhooks.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the webhook was first registered"
  },
  {
    "fieldName": "Webhooks.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the webhook was last updated"
  },
  {
    "fieldName": "Webhooks.webHookUri",
    "dataType": "STRING",
    "description": "The url  the webhook will  push data to."
  },
  {
    "fieldName": "Webhooks.hookType",
    "dataType": "STRING",
    "description": "The type of webhook this is."
  },
  {
    "fieldName": "Webhooks.groupId",
    "dataType": "INTEGER",
    "description": "The group id that is currently being monitored."
  },
  {
    "fieldName": "Webhooks.applicationId",
    "dataType": "INTEGER",
    "description": "The applicationID associated with the hook"
  }
]
```




## Response Example


```json
[
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
  },
  {
    "id": 12347,
    "webHookUri": "https://oursite.com",
    "hookType": "CampaignLink",
    "applicationId": "",
    "groupId": "",
    "AccountMasterId": 1234,
    "SiteMasterId": 1,
    "createdAt": "2019-01-01 12:00:00",
    "updatedAt": "2019-01-01 12:00:00"
  }
]
```

