# Count all Subscribers

- Doc ID: 30
- Source URL: https://mail.mailvio.com/apidocs/30
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /subscriber/count
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Returns the total number of subscribers across all groups</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "search",
    "dataType": "STRING",
    "description": "Filter by email address or custom field value"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Count",
    "dataType": "INTEGER",
    "description": "The total subscribers"
  }
]
```




## Response Example


```json
{
  "Count": 123123
}
```

