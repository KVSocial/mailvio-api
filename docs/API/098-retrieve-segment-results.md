# Retrieve Segment Results

- Doc ID: 98
- Source URL: https://mail.mailvio.com/apidocs/98
- Parent ID: 85
- Requires Auth: Yes
- Request Method: get
- Request URL: /segment/:segmentId/results
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieves subscribers across all groups that match the segment rules.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "limit",
    "dataType": "INTEGER",
    "description": "The number of records to return in each request",
    "required": ""
  },
  {
    "fieldName": "offset",
    "dataType": "INTEGER",
    "description": "The record number to start at.",
    "required": ""
  },
  {
    "fieldName": "orderby",
    "dataType": "STRING",
    "description": "The field name to order by (createdAt,updatedAt,emailAddress,etc)"
  },
  {
    "fieldName": "orderdir",
    "dataType": "STRING",
    "description": "Wether to order ASC or DESC"
  },
  {
    "fieldName": "search",
    "dataType": "STRING",
    "description": "Search for subscriber email address"
  },
  {
    "fieldName": "fields",
    "dataType": "ARRAY",
    "description": "An array of custom field ids to return in the results"
  },
  {
    "fieldName": "count",
    "dataType": "BOOLEAN",
    "description": "Wether the return the number of subscribers that match this segment"
  }
]
```





## Response Example

{
    Subscribers: [],
    count: 0
}
