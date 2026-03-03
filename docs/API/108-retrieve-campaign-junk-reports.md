# Retrieve Campaign Junk Reports

- Doc ID: 108
- Source URL: https://mail.mailvio.com/apidocs/108
- Parent ID: 56
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignid/stats/junk
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Retrieve a list of subscribers that have reported a campaign as junk. Users that report emails as junk are automatically added to an accounts blacklist so the will not be emailed to again unless they are removed from the blacklist.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "startDate",
    "dataType": "DATETIME",
    "description": "The date to start getting statistics from"
  },
  {
    "fieldName": "endDate",
    "dataType": "DATETIME",
    "description": "The date to end getting statistics from"
  },
  {
    "fieldName": "startRecord",
    "description": "The row number to start on",
    "dataType": "INTEGER"
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "The total rows to return"
  },
  {
    "fieldName": "sortOrder",
    "description": "The order direction \"ASC\",\"DESC\"",
    "dataType": "STRING"
  },
  {
    "fieldName": "sortColumn",
    "dataType": "STRING",
    "description": "The column to sort on"
  },
  {
    "fieldName": "searchText",
    "dataType": "STRING",
    "description": "\tThe email address to search for"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "JunkReports",
    "dataType": "OBJECT[]\t",
    "description": ""
  },
  {
    "fieldName": "JunkReports.createdAt",
    "description": "The date the junk report was received",
    "dataType": "DATETIME"
  },
  {
    "fieldName": "JunkReports.subemailAddress",
    "dataType": "STRING",
    "description": "The email address that reported the email as junk"
  },
  {
    "fieldName": "JunkReports.SubscriberId",
    "dataType": "INTEGER",
    "description": "The ID of the subscriber who reported the email"
  },
  {
    "fieldName": "JunkReports.gravatar",
    "dataType": "STRING",
    "description": "The URL of the Gravatar Image for the subscriber"
  },
  {
    "fieldName": "CountTotal",
    "dataType": "INTEGER",
    "description": "The total number of Junk Reports"
  }
]
```




## Response Example

[
    {
        createdAt: '2020-01-01 01:02:03',
        subemailAddress: "test@test.com",
        SubscriberId: 123456,
        gravatar: "https://theurl"
  }
]
