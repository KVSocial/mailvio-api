# Start a Campaign

- Doc ID: 51
- Source URL: https://mail.mailvio.com/apidocs/51
- Parent ID: 40
- Requires Auth: Yes
- Request Method: put
- Request URL: /campaign/:campaignId/start
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Starts a campaign. You must have created a campaign first and completed all required fields.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "startDate",
    "dataType": "DATETIME",
    "description": "This is optional. You can override any start date already associated with a campaign here if needed."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "id",
    "description": "The ID of the campaign"
  },
  {
    "fieldName": "campaignName",
    "description": "The friendly name of the campaign"
  },
  {
    "fieldName": "subject",
    "description": "The email subject"
  },
  {
    "fieldName": "fromAddress",
    "description": "The sent from email address"
  },
  {
    "fieldName": "replyAddress",
    "description": "The reply-to email address"
  },
  {
    "fieldName": "fromName",
    "description": "The name of the sender"
  },
  {
    "fieldName": "startDate",
    "description": "The date/time the campaign is/was scheduled to start"
  },
  {
    "fieldName": "status",
    "description": "The current status of the campaign. Values are \"Draft\",\"Awaiting Start\",\"Queued\",\"Processing\",\"Sending\",\"Finished\",\"Errored\""
  },
  {
    "fieldName": "createdAt",
    "description": "The date/time the campaign was created."
  },
  {
    "fieldName": "updatedAt",
    "description": "The date/time the campaign was last updated."
  },
  {
    "fieldName": "TemplateId",
    "description": "The ID of the template that was sent."
  },
  {
    "fieldName": "templateHtml",
    "description": "The HTML of the email that was sent (if you sent it in)"
  }
]
```




## Response Example

{
            "id": 17,
            "campaignName": "Test Campaign",
            "subject": "Hello do you like my test",
            "fromAddress": "mike.way@thisisatest.com",
            "replyAddress": "noreply@thisisatest.com",
            "fromName": "Mike Way",
            "startDate": "2018-03-21T11:59:20.000Z",
            "status": "Queued",
            "createdAt": "2018-03-21T11:59:20.000Z",
            "updatedAt": "2018-03-21T11:59:20.000Z",
            "TemplateId": 123,
            "templateHtml": undefined
}
