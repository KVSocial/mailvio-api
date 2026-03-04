# Transactional Emails

- Doc ID: 81
- Source URL: https://mail.mailvio.com/apidocs/81
- Parent ID: 0
- Requires Auth: Yes
- Request Method: post
- Request URL: /transaction
- Published: Yes
- Last Updated: 2026-02-28T09:53:12.000Z

## Body

<p>You can send Transactional emails directly through the&nbsp;Mailvio API, either by posting a request via the API detailed below, or by simple sending an email in to the platform.<br /><br />If you would like to send emails via SMTP into the platform that automatically get forwarded as transactional emails, please login to your control panel and click the "Transactions" tab to retrieve the SMTP setting you should use.<br /><br />Otherwise, for standard API calls, please refer to the following...</p>

## Related Articles

- None

## Request Fields

```json
[
  {
    "fieldName": "fromName",
    "dataType": "STRING",
    "description": "The name you want to appear as the from name on the email, a good example would be your company name"
  },
  {
    "fieldName": "fromAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The Email Address that the email will be sent from"
  },
  {
    "fieldName": "replyAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The Email Address that the email can be replied to - the domain of this email must be authenticated on our system or be from a free domain (eg. gmail, yahoo, outlook)"
  },
  {
    "fieldName": "subject",
    "dataType": "STRING",
    "required": "on",
    "description": "The subject of the email"
  },
  {
    "fieldName": "toName",
    "dataType": "STRING",
    "description": "The name of the recipient"
  },
  {
    "fieldName": "toAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The Email Address that the email will be sent to - the transaction will fail if this email is unsubscibed, blacklisted or has hard a hard bounce previously"
  },
  {
    "fieldName": "html",
    "dataType": "STRING",
    "required": "on",
    "description": "The body of the email you wish to send (You can remove this option if you pass in a TemplateId)"
  },
  {
    "fieldName": "TemplateId",
    "dataType": "INTEGER",
    "description": " The Id of the template you wish to send (This can be in replacement to the html parameter)"
  },
  {
    "fieldName": "sendDate",
    "dataType": "DATETIME",
    "description": " The datetime to send the email, if left blank the email will be sent immediately. The format for the datetime is \"YYYY-MM-DD HH:mm:ss\""
  },
  {
    "fieldName": "customFields",
    "dataType": "ARRAY",
    "description": " You can also send custom fields to update a subscriber at the same time of creating a transaction. Simply send an array of custom field ids and values. For example [{\"id\": 231,\"value\": \"Hello\"}]"
  },
  {
    "fieldName": "trackOpens",
    "dataType": "BOOLEAN",
    "description": "Wether to track email opens. Set to TRUE or FALSE. Default is TRUE"
  },
  {
    "fieldName": "trackLinks",
    "dataType": "BOOLEAN",
    "description": "Wether to track link clicks. Set to TRUE or FALSE. Default is TRUE"
  }
]
```

## Query Fields

```json
[]
```

## Response Fields

```json
[
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "description": "The ID of the transaction created"
  }
]
```

## Request Example

```json
{
  "fromAddress": "sample@sample.com",
  "fromName": "Sample Sender",
  "replyAddress": "sample@sample.com",
  "toAddress": "recipient@sample.com",
  "toName": "Sample Recipient",
  "subject": "Test Email",
  "html": "<html><body>This is an email</body></html>",
  "customFields": [
    {
      "id": 61,
      "value": "Jon"
    },
    {
      "id": 62,
      "value": "Doe"
    }
  ]
}
```

## Response Example

```json
{
  "id": 123223
}
```
