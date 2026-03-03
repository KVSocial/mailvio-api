# Add a Segment

- Doc ID: 87
- Source URL: https://mail.mailvio.com/apidocs/87
- Parent ID: 85
- Requires Auth: Yes
- Request Method: post
- Request URL: /segment
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Create a new segment. For details on how to construct the Query Object please <a href="/apidocs/88">click here</a>.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "queryObj",
    "required": "on",
    "dataType": "ARRAY",
    "description": "An array of JSON query objects. Please see the \"How to construct a query object\" page for details."
  },
  {
    "fieldName": "name",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the new segment"
  },
  {
    "fieldName": "temporary",
    "dataType": "BOOLEAN",
    "required": "on",
    "description": "Wether the segment is temporary, or permenant. Temporary segments should only be used in conjunction with campaigns. They will not be visible via the UI or the API."
  }
]
```



## Query Fields


```json
[
  {
    "fieldName": "simpleResponse",
    "dataType": "BOOLEAN",
    "required": "on",
    "description": "When enabled only returns the new segment name and id"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "segmentId",
    "dataType": "INTEGER",
    "description": "The ID of the new segment"
  }
]
```



## Request Example


```json
{
  "queryObj": [
    {
      "queryObj": {
        "or": [],
        "and": [
          {
            "value": "Test Value",
            "operator": "=",
            "customFieldId": "540190"
          }
        ]
      }
    },
    {
      "queryObj": {
        "or": [
          {
            "value": "Test Value2",
            "operator": "=",
            "customFieldId": "530102"
          }
        ],
        "and": []
      }
    }
  ],
  "name": "Test Segment",
  "temporary": false
}
```



## Response Example


```json
{
  "segmentId": 12314
}
```

