# Overview Statistics

- Doc ID: 57
- Source URL: https://mail.mailvio.com/apidocs/57
- Parent ID: 56
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/stats
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Retrieve basic statistics about a campaign</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Stats",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Stats.Total Subscribers",
    "dataType": "INTEGER",
    "description": "The total number of subscribers which were being sent to"
  },
  {
    "fieldName": "Stats.Total Opens",
    "dataType": "INTEGER",
    "description": "The total number of emails opened"
  },
  {
    "fieldName": "Stats.Total Clicks",
    "dataType": "INTEGER",
    "description": "The total number of links clicked"
  },
  {
    "fieldName": "Stats.Hard Bounces",
    "dataType": "INTEGER",
    "description": "The total number of Hard Bounces"
  },
  {
    "fieldName": "Stats.Soft Bounces",
    "dataType": "INTEGER",
    "description": "The total number of Soft Bounces"
  },
  {
    "fieldName": "Stats.Unique Opens",
    "dataType": "INTEGER",
    "description": "The total number of unique emails opened"
  },
  {
    "fieldName": "Stats.Unique Clicks",
    "dataType": "INTEGER",
    "description": "The total number of unique links clicked"
  },
  {
    "fieldName": "Stats.Total Sent",
    "dataType": "INTEGER",
    "description": "The total number of emails that were actually sent succesfully"
  },
  {
    "fieldName": "Stats.Total Unsubscribes",
    "dataType": "INTEGER",
    "description": "The total number of unsubscribers"
  },
  {
    "fieldName": "Stats.Total Junk Reports",
    "dataType": "INTEGER",
    "description": "The total number of junk reports"
  },
  {
    "fieldName": "Stats.Unique Junk Reports",
    "dataType": "INTEGER",
    "description": "The unique number of junk reports"
  }
]
```




## Response Example


```json
{
  "Stats": {
    "Total Subscribers": 3,
    "Total Opens": 0,
    "Total Clicks": 0,
    "Hard Bounces": 0,
    "Soft Bounces": 0,
    "Unique Opens": 0,
    "Unique Clicks": 0,
    "Total Sent": 3,
    "Total Unsubscribes": 0,
    "Total Junk Reports": 0,
    "Unique Junk Reports": 0
  }
}
```

