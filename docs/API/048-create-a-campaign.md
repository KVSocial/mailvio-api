# Create a Campaign

- Doc ID: 48
- Source URL: https://mail.mailvio.com/apidocs/48
- Parent ID: 40
- Requires Auth: Yes
- Request Method: post
- Request URL: /campaign
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Create a new campaign to be sent.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "campaignName",
    "dataType": "STRING",
    "required": "on",
    "description": "A friendly name for the campaign. Not sent/shown to recipients."
  },
  {
    "fieldName": "subject",
    "dataType": "STRING",
    "required": "on",
    "description": "The subject of the email"
  },
  {
    "fieldName": "fromAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The sender email address"
  },
  {
    "fieldName": "replyAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The reply-to address"
  },
  {
    "fieldName": "type",
    "dataType": "INTEGER",
    "required": "on",
    "description": "The type of campaign. \"1\" is a normal campaign."
  },
  {
    "fieldName": "fromName",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the sender"
  },
  {
    "fieldName": "startDate",
    "dataType": "DATETIME",
    "required": "on",
    "description": "The start date and time of the campaign"
  },
  {
    "fieldName": "notes",
    "dataType": "TEXT",
    "description": "Notes against a campaign"
  },
  {
    "fieldName": "templateHtml",
    "dataType": "TEXT",
    "description": "The HTML to send (Optional - either send html here, or use a template Id below)",
    "required": ""
  },
  {
    "fieldName": "TemplateId",
    "dataType": "INTEGER",
    "description": "The ID of the template to send (Optional - either send a templateId, or push in HTML above)"
  },
  {
    "fieldName": "TrackingDomainId",
    "dataType": "INTEGER",
    "required": "",
    "description": "If there is one, you can send a tracking domain id here."
  },
  {
    "fieldName": "CdnDomainId",
    "dataType": "INTEGER",
    "required": "",
    "description": "If there is one, you can send a cdn domain id here."
  },
  {
    "fieldName": "resendAfter",
    "dataType": "INTEGER",
    "description": "The number of days to send again to people who haven't opened the email."
  },
  {
    "fieldName": "Groups",
    "dataType": "OBJECT[]",
    "description": "An array of groups to include (or exclude) from the campaign"
  },
  {
    "fieldName": "Groups.id",
    "dataType": "INTEGER",
    "description": "The id of the group"
  },
  {
    "fieldName": "Groups.include",
    "dataType": "BOOLEAN",
    "description": "Wether to include or exclude the group"
  },
  {
    "fieldName": "Segments",
    "dataType": "OBJECT[]",
    "description": "An array of segments to include (or exclude) from the campaign"
  },
  {
    "fieldName": "Segments.id",
    "dataType": "INTEGER",
    "required": "",
    "description": "The id of the segment"
  },
  {
    "fieldName": "Segments.include",
    "dataType": "BOOLEAN",
    "description": "Wether to include or exclude the segment"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Campaign",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Campaign.id",
    "description": "The ID of the new campaign",
    "dataType": "INTEGER"
  },
  {
    "fieldName": "Campaign.campaignName",
    "dataType": "STRING",
    "description": "The friendly name of the campaign"
  },
  {
    "fieldName": "Campaign.subject",
    "dataType": "STRING",
    "description": "The email subject"
  },
  {
    "fieldName": "Campaign.fromAddress",
    "dataType": "STRING",
    "description": "The sent from email address"
  },
  {
    "fieldName": "Campaign.replyAddress",
    "dataType": "STRING",
    "description": "The reply-to email address"
  },
  {
    "fieldName": "Campaign.fromName",
    "dataType": "STRING",
    "description": "The name of the sender"
  },
  {
    "fieldName": "Campaign.startDate",
    "dataType": "DATETIME",
    "description": "The date/time the campaign is/was scheduled to start"
  },
  {
    "fieldName": "Campaign.status",
    "dataType": "STRING",
    "description": "The current status of the campaign. Values are \"Draft\",\"Awaiting Start\",\"Queued\",\"Processing\",\"Sending\",\"Finished\",\"Errored\""
  },
  {
    "fieldName": "Campaign.resendAfter",
    "dataType": "INTEGER",
    "description": "The number of days to wait until resending to people who didn't open the email the first time."
  },
  {
    "fieldName": "Campaign.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was created."
  },
  {
    "fieldName": "Campaign.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was last updated."
  },
  {
    "fieldName": "Campaign.TemplateId",
    "dataType": "INTEGER",
    "description": "The ID of the template that was sent."
  },
  {
    "fieldName": "Campaign.notes",
    "dataType": "TEXT",
    "description": "Notes against a campaign"
  }
]
```



## Request Example


```json
{
  "campaignName": "Test Campaign",
  "subject": "Hello do you like my test",
  "fromAddress": "mike.way@thisisatest.com",
  "replyAddress": "noreply@thisisatest.com",
  "type": 1,
  "fromName": "Mike Way",
  "startDate": "2018-03-21T11:59:20.000Z",
  "templateHtml": null,
  "TemplateId": 123,
  "TrackingDomainId": 1,
  "CdnDomainId": 2,
  "resendAfter": 5,
  "notes": "This is a note",
  "Groups": [
    {
      "id": 1234,
      "include": true
    }
  ]
}
```



## Response Example


```json
{
  "Campaign": {
    "id": 17,
    "campaignName": "Test Campaign",
    "subject": "Hello do you like my test",
    "fromAddress": "mike.way@thisisatest.com",
    "replyAddress": "noreply@thisisatest.com",
    "fromName": "Mike Way",
    "startDate": "2018-03-21T11:59:20.000Z",
    "status": "Queued",
    "resendAfter": 5,
    "notes": "This is a note",
    "createdAt": "2018-03-21T11:59:20.000Z",
    "updatedAt": "2018-03-21T11:59:20.000Z",
    "TemplateId": 123
  }
}
```

