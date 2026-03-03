# Get Emails Sent

- Doc ID: 58
- Source URL: https://mail.mailvio.com/apidocs/58
- Parent ID: 56
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/stats/sent
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Gets an array of email sent in a campaign.</p>
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
    "fieldName": "Sent",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "Sent.sendDate",
    "dataType": "DATETIME",
    "description": "The date the email was sent"
  },
  {
    "fieldName": "Sent.attempts",
    "dataType": "INTEGER",
    "description": "The number of attempts it took to send the email"
  },
  {
    "fieldName": "Sent.openDate",
    "dataType": "DATETIME",
    "description": "The date to email was first opened (if at all)"
  },
  {
    "fieldName": "Sent.emailAddress",
    "dataType": "STRING",
    "description": "The email address of the subscriber"
  },
  {
    "fieldName": "Sent.SubscriberId",
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
  "Sent": [
    {
      "sendDate": "2018-04-30T00:01:29.000Z",
      "attempts": 1,
      "openDate": null,
      "emailAddress": "test@test.com",
      "SubscriberId": 2119847
    }
  ],
  "countTotal": 1
}
```

