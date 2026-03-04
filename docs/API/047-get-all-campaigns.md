# Get all Campaigns

- Doc ID: 47
- Source URL: https://mail.mailvio.com/apidocs/47
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Retrieves a list of campaigns. Can be filtered. Returns up to 1000 results.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "startRecord",
    "dataType": "INTEGER",
    "description": "The record to start on"
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "The number of rows to return (default is 100)"
  },
  {
    "fieldName": "sortOrder",
    "dataType": "STRING",
    "description": "The order to return results (\"ASC\",\"DESC\")"
  },
  {
    "fieldName": "sortColumn",
    "dataType": "STRING",
    "description": "The column to order by. Default is \"startDate\"."
  },
  {
    "fieldName": "searchText",
    "dataType": "STRING",
    "description": "Search by campaign title."
  },
  {
    "fieldName": "status",
    "dataType": "STRING",
    "description": "Retrieve campaigns by status. Values are \"All\", \"Draft\",\"Awaiting Start\",\"Sending\",\"Finished\"."
  },
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "description": "Retrieve just one id by supplying an the Campaign ID here."
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "Campaigns",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "Campaigns.id",
    "dataType": "INTEGER",
    "description": "The ID of the campaign"
  },
  {
    "fieldName": "Campaigns.dateAdded",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was created."
  },
  {
    "fieldName": "Campaigns.lastUpdated",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was last updated."
  },
  {
    "fieldName": "Campaigns.campaignName",
    "dataType": "STRING",
    "description": "The friendly name of the campaign"
  },
  {
    "fieldName": "Campaigns.subject",
    "dataType": "STRING",
    "description": "The email subject"
  },
  {
    "fieldName": "Campaigns.fromAddress",
    "dataType": "STRING",
    "description": "The sent from email address"
  },
  {
    "fieldName": "Campaigns.replyAddress",
    "dataType": "STRING",
    "description": "The reply-to email address"
  },
  {
    "fieldName": "Campaigns.fromName",
    "dataType": "STRING",
    "description": "The name of the sender"
  },
  {
    "fieldName": "Campaigns.startDate",
    "dataType": "DATETIME",
    "description": "The date/time the campaign is/was scheduled to start"
  },
  {
    "fieldName": "Campaigns.status",
    "dataType": "STRING",
    "description": "The current status of the campaign. Values are \"Draft\",\"Awaiting Start\",\"Queued\",\"Processing\",\"Sending\",\"Finished\",\"Errored\""
  },
  {
    "fieldName": "Campaigns.type",
    "dataType": "INTEGER",
    "description": "The type of campaign. 1 is a normal campaign."
  },
  {
    "fieldName": "Campaigns.resendAfter",
    "dataType": "INTEGER",
    "description": "The number of days to wait until resending to people who didn't open the email the first time."
  },
  {
    "fieldName": "Campaigns.notes",
    "dataType": "TEXT",
    "description": "Notes against a campaign"
  },
  {
    "fieldName": "Campaigns.TemplateId",
    "dataType": "INTEGER",
    "description": "The ID of the template that was sent."
  },
  {
    "fieldName": "Campaigns.finishedDate",
    "dataType": "DATETIME",
    "description": "The date/time the campaign finished sending"
  },
  {
    "fieldName": "Campaigns.error",
    "dataType": "STRING",
    "description": "If there has been an error in sending, a text description of the problem will go here"
  },
  {
    "fieldName": "Campaigns.stats",
    "dataType": "OBJECT",
    "description": ""
  },
  {
    "fieldName": "Campaigns.stats.Total Subscribers",
    "dataType": "INTEGER",
    "description": "The total number of subscribers which were being sent to"
  },
  {
    "fieldName": "Campaigns.stats.Total Opens",
    "dataType": "INTEGER",
    "description": "The total number of emails opened"
  },
  {
    "fieldName": "Campaigns.stats.Total Clicks",
    "dataType": "INTEGER",
    "description": "The total number of links clicked"
  },
  {
    "fieldName": "Campaigns.stats.Hard Bounces",
    "dataType": "INTEGER",
    "description": "The total number of Hard Bounces"
  },
  {
    "fieldName": "Campaigns.stats.Soft Bounces",
    "dataType": "INTEGER",
    "description": "The total number of Soft Bounces"
  },
  {
    "fieldName": "Campaigns.stats.Unique Opens",
    "dataType": "INTEGER",
    "description": "The total number of unique emails opened"
  },
  {
    "fieldName": "Campaigns.stats.Unique Clicks",
    "dataType": "INTEGER",
    "description": "The total number of unique links clicked"
  },
  {
    "fieldName": "Campaigns.stats.Total Sent",
    "dataType": "INTEGER",
    "description": "The total number of emails that were actually sent succesfully"
  },
  {
    "fieldName": "Campaigns.stats.Total Unsubscribes",
    "dataType": "INTEGER",
    "description": "The total number of unsubscribers"
  }
]
```




## Response Example


```json
{
  "Campaigns": [
    {
      "id": 33,
      "dateAdded": "2018-03-29T14:42:31.000Z",
      "lastUpdated": "2018-03-30T15:52:47.000Z",
      "campaignName": "My First Test Campaign",
      "subject": "Super Duper Test",
      "fromAddress": "mike.way@thisisatest.com",
      "replyAddress": "mike.way@thisisatest.com",
      "fromName": "Mike Way",
      "startDate": "2018-03-29T14:57:19.000Z",
      "status": "Finished",
      "type": 1,
      "resendAfter": 0,
      "TemplateId": 80,
      "finishedDate": "2018-03-30T15:52:47.000Z",
      "error": null,
      "notes": "",
      "stats": {
        "Total Subscribers": 1,
        "Total Opens": 0,
        "Total Clicks": 0,
        "Hard Bounces": 0,
        "Soft Bounces": 0,
        "Unique Opens": 0,
        "Unique Clicks": 0,
        "Total Sent": 0,
        "Total Unsubscribes": 0
      }
    }
  ]
}
```

