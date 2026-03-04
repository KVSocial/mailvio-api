# Register a new Webhook

- Doc ID: 68
- Source URL: https://mail.mailvio.com/apidocs/68
- Parent ID: 67
- Requires Auth: Yes
- Request Method: post
- Request URL: /webhook
- Published: Yes
- Last Updated: 2026-02-28T09:51:37.000Z

## Body

<p>Register a new webhook which is triggered whenever an event occurs. For a full list of events please see the <a href="/apidocs/67">list of events</a>.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "webHookUri",
    "dataType": "STRING",
    "required": "on",
    "description": "The url you would like the webhook to push data to."
  },
  {
    "fieldName": "hookType",
    "dataType": "STRING",
    "required": "on",
    "description": "The type of event you would like to subscribe to (ie. CampaignSend)"
  },
  {
    "fieldName": "applicationId",
    "dataType": "INTEGER",
    "required": "",
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

{
        "id": 1234,
        "webHookUr"i: "https://oursite.com",
        "hookType": "CampaignSend",
        "applicationId": "",
        "groupId": "",
        "AccountMasterId": 1234,
        "SiteMasterId": 1
}
