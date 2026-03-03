# Get Recent Campaign Stats

- Doc ID: 41
- Source URL: https://mail.mailvio.com/apidocs/41
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/overview
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Retrieve a summary of statistics for all campaign sent in the last 30 days.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Opens",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Opens.last",
    "dataType": "INTEGER",
    "description": "The total number of emails opened last month"
  },
  {
    "fieldName": "Opens.current",
    "dataType": "INTEGER",
    "description": "The total number of emails opened this month so far"
  },
  {
    "fieldName": "Subscribers",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Subscribers.last",
    "dataType": "INTEGER",
    "description": "The total number of subscribers sent to last month"
  },
  {
    "fieldName": "Subscribers.current",
    "dataType": "INTEGER",
    "description": "The total number of subscribers sent to this month so far"
  }
]
```




## Response Example


```json
{
  "Opens": {
    "last": 610,
    "current": 439
  },
  "Subscribers": {
    "last": 5130,
    "current": 1498
  }
}
```

