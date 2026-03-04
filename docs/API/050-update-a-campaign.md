# Update a Campaign

- Doc ID: 50
- Source URL: https://mail.mailvio.com/apidocs/50
- Parent ID: 40
- Requires Auth: Yes
- Request Method: put
- Request URL: /campaign/:campaignId
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Updates an existing campaign.</p>
<p>Note: Modifying a campaign once it has processed will not work.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "campaign",
    "dataType": "OBJECT",
    "required": "on"
  },
  {
    "fieldName": "campaign.campaignName",
    "dataType": "STRING",
    "description": "A friendly name for the campaign. Not sent/shown to recipients."
  },
  {
    "fieldName": "campaign.subject",
    "dataType": "STRING",
    "description": "The subject of the email"
  },
  {
    "fieldName": "campaign.fromAddress",
    "dataType": "STRING",
    "description": "The sender email address"
  },
  {
    "fieldName": "campaign.replyAddress",
    "dataType": "STRING",
    "description": "The reply-to address"
  },
  {
    "fieldName": "campaign.fromName",
    "dataType": "STRING",
    "description": "The name of the sender"
  },
  {
    "fieldName": "campaign.startDate",
    "dataType": "DATETIME",
    "description": "The start date and time of the campaign"
  },
  {
    "fieldName": "campaign.templateHtml",
    "dataType": "TEXT",
    "description": "The HTML to send (Optional - either send html here, or use a template Id below)"
  },
  {
    "fieldName": "campaign.TemplateId",
    "dataType": "INTEGER",
    "description": "The ID of the template to send (Optional - either send a templateId, or push in HTML above)"
  },
  {
    "fieldName": "campaign.TrackingDomainId",
    "dataType": "INTEGER",
    "description": "If there is one, you can send a tracking domain id here."
  },
  {
    "fieldName": "campaign.CdnDomainId",
    "dataType": "INTEGER",
    "description": "If there is one, you can send a cdn domain id here."
  },
  {
    "fieldName": "campaign.resendAfter",
    "dataType": "INTEGER",
    "description": "The number of days to send again to people who haven't opened the email."
  },
  {
    "fieldName": "campaign.addUtmTracking",
    "dataType": "BOOLEAN",
    "description": "Add UTM tracking to all clicks"
  },
  {
    "fieldName": "campaign.Groups",
    "dataType": "OBJECT[]",
    "description": "An array of groups to include (or exclude) from the campaign"
  },
  {
    "fieldName": "campaign.Groups.id",
    "dataType": "INTEGER",
    "description": "The id of the group"
  },
  {
    "fieldName": "campaign.Groups.include",
    "dataType": "BOOLEAN",
    "description": "Wether to include or exclude the group"
  },
  {
    "fieldName": "campaign.Segments",
    "dataType": "OBJECT[]",
    "description": "An array of segmentsto include (or exclude) from the campaign"
  },
  {
    "fieldName": "campaign.Segments.id",
    "dataType": "INTEGER",
    "description": "The id of the segment"
  },
  {
    "fieldName": "campaign.Segments.include",
    "dataType": "BOOLEAN",
    "description": "Wether to include or exclude the segment"
  },
  {
    "fieldName": "campaign.options",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "campaign.options.doNoTrackLinks",
    "dataType": "BOOLEAN",
    "description": "Toggle tracking of any clicks"
  },
  {
    "fieldName": "campaign.batchSize",
    "dataType": "INTEGER",
    "description": "Limit the number of emails to be sent in a time range"
  },
  {
    "fieldName": "campaign.batchDelay",
    "dataType": "INTEGER",
    "description": "The time delay between batch of sends"
  },
  {
    "fieldName": "campaign.batchUnit",
    "dataType": "STRING",
    "description": "The unit of time for the delay between sending (minutes or seconds)"
  },
  {
    "fieldName": "campaign.notes",
    "dataType": "TEXT",
    "description": "Notes for a campaign"
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
    "dataType": "INTEGER",
    "description": "The ID of the campaign"
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
    "fieldName": "Campaign.addUtmTracking",
    "dataType": "BOOLEAN",
    "description": "Add UTM tracking to all clicks"
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
    "fieldName": "Campaign.templateHtml",
    "dataType": "TEXT",
    "description": "The HTML of the template if you added it."
  },
  {
    "fieldName": "Campaign.options",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Campaign.options.doNoTrackLinks",
    "dataType": "BOOLEAN",
    "description": "Toggle tracking of any clicks"
  },
  {
    "fieldName": "Campaign.notes",
    "dataType": "TEXT",
    "description": "Notes for a campaign"
  }
]
```



## Request Example

{
    "campaign":
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
        "groups":[
             {
                  "id": 1234,
                  "include": true
             }
         ],
         batchSize: 100,
         batchDelay : 10,
         batchUnit: 'seconds'
    }
}


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

