# Get all Subscribers

- Doc ID: 29
- Source URL: https://mail.mailvio.com/apidocs/29
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /subscriber
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Retrieves a list of ALL subscribers in ALL groups.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "limit",
    "dataType": "INTEGER",
    "description": "The total records to return"
  },
  {
    "fieldName": "offset",
    "dataType": "INTEGER",
    "description": "The record number to start from"
  },
  {
    "fieldName": "orderby",
    "dataType": "STRING",
    "description": "The subscriber field to order by"
  },
  {
    "fieldName": "orderdir",
    "dataType": "STRING",
    "description": "The order direction (ASC,DESC)"
  },
  {
    "fieldName": "search",
    "dataType": "STRING",
    "description": "Search for email address or custom field value"
  },
  {
    "fieldName": "fields",
    "dataType": "ARRAY",
    "description": "An array containing the custom field id's of any custom fields you would like to return"
  },
  {
    "fieldName": "count",
    "dataType": "BOOLEAN",
    "description": "Wether to return a count of the total number of subscribers in the group"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "Subscribers",
    "dataType": "OBJECT",
    "description": "An array of subscriber objects"
  }
]
```




## Response Example


```json
{
  "Subscribers": []
}
```

