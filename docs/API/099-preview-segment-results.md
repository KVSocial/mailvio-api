# Preview Segment Results

- Doc ID: 99
- Source URL: https://mail.mailvio.com/apidocs/99
- Parent ID: 85
- Requires Auth: Yes
- Request Method: post
- Request URL: /segment/quickQuery
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieves a quick list of subscribers that match a segment. Useful for use when allowing users to create segments and quickly see for example the first 10 matches.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "queryObj",
    "dataType": "ARRAY",
    "required": "on",
    "description": "An array of query objects"
  }
]
```



## Query Fields


```json
[
  {
    "fieldName": "orderby",
    "dataType": "STRING",
    "description": "The column to order results by. ie createdAt,updatedAt,emailAddress"
  },
  {
    "fieldName": "orderdir",
    "dataType": "STRING",
    "description": "Wether to order ASC or DESC"
  },
  {
    "fieldName": "offset",
    "dataType": "INTEGER",
    "description": "The record number to offset the results by"
  },
  {
    "fieldName": "limit",
    "dataType": "STRING",
    "description": "The number of records to return"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "count",
    "dataType": "INTEGER",
    "description": "The total number of subscribers that match the segment rules"
  },
  {
    "fieldName": "rows",
    "dataType": "ARRAY",
    "description": "An array of subscribers that match the segment rules"
  }
]
```



## Request Example

{
    queryObj: [
        id: 48123, //The id of the segment to query
        queryObj: {
            or: [],
            and: []
        }
    ]
   
}


## Response Example

{
    count: 0,
    rows: []
}
