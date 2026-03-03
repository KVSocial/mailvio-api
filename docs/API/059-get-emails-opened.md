# Get Emails Opened

- Doc ID: 59
- Source URL: https://mail.mailvio.com/apidocs/59
- Parent ID: 56
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/stats/opened
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Gets an array of email opened in a campaign.</p>
<p>You can filter the request using the below options.</p>
<p>There is a max record limit of 1000 records, so please use paging.</p>

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
    "dataType": "INTEGER",
    "description": "The row number to start on"
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "The total rows to return"
  },
  {
    "fieldName": "sortOrder",
    "dataType": "STRING",
    "description": "The order direction \"ASC\",\"DESC\""
  },
  {
    "fieldName": "sortColumn",
    "dataType": "STRING",
    "description": "The column to sort on"
  },
  {
    "fieldName": "searchText",
    "dataType": "STRING",
    "description": "The email address to search for"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "Opened",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "Opened.sendDate",
    "dataType": "DATETIME",
    "description": "The date the email was sent"
  },
  {
    "fieldName": "Opened.openCount",
    "dataType": "INTEGER",
    "description": "The number of times the user opened the email"
  },
  {
    "fieldName": "Opened.openDate",
    "dataType": "DATETIME",
    "description": "The date to email was first opened (if at all)"
  },
  {
    "fieldName": "Opened.emailAddress",
    "dataType": "STRING",
    "description": "The email address of the subscriber"
  },
  {
    "fieldName": "Opened.SubscriberId",
    "dataType": "INTEGER",
    "description": "The subscriberId"
  },
  {
    "fieldName": "countTotal",
    "dataType": "INTEGER",
    "description": "The total number of records"
  }
]
```




## Response Example


```json
{
  "Opened": [
    {
      "sendDate": "2018-04-23T13:05:42.000Z",
      "openCount": 3,
      "openDate": "2018-04-23T16:07:51.000Z",
      "emailAddress": "test@thetester.com",
      "SubscriberId": 211987
    }
  ],
  "countTotal": 1
}
```

