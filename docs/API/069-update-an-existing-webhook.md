# Update an Existing Webhook

- Doc ID: 69
- Source URL: https://mail.mailvio.com/apidocs/69
- Parent ID: 67
- Requires Auth: Yes
- Request Method: put
- Request URL: /webhook/:webHookId
- Published: Yes
- Last Updated: 2026-02-28T09:52:21.000Z

## Body

<p>Updates an existing&nbsp;webhook, which is triggered whenever an event occurs. For a full list of events please see the&nbsp;<a href="/apidocs/67">list of events</a>.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "webHookUri",
    "dataType": "STRING",
    "description": "The url you would like the webhook to push data to."
  },
  {
    "fieldName": "hookType",
    "dataType": "STRING",
    "description": "The type of event you would like to subscribe to (ie. CampaignSend)"
  },
  {
    "fieldName": "applicationId",
    "dataType": "INTEGER",
    "description": "If this webhook is associated with an external application, you can specify the application id here"
  },
  {
    "fieldName": "groupId",
    "dataType": "INTEGER",
    "description": "If you would like the webhook to only trigger on actions that relate to a specific group of subscribers, enter a groupId here."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Webhook",
    "dataType": "OBJECT{}"
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



## Request Example


```json
{
  "webHookUri": "https://oursite.com",
  "hookType": "CampaignSend"
}
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

