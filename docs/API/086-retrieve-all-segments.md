# Retrieve all Segments

- Doc ID: 86
- Source URL: https://mail.mailvio.com/apidocs/86
- Parent ID: 85
- Requires Auth: Yes
- Request Method: get
- Request URL: /segment
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieve all segments for&nbsp;the account master.&nbsp;&nbsp;For details on Query Object and how it is constructed please&nbsp;<a href="/apidocs/88">click here</a>.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "groupId",
    "dataType": "INTEGER",
    "description": "The ID of a group to apply this segment to."
  },
  {
    "fieldName": "notsystem",
    "dataType": "BOOLEAN",
    "description": "Set to TRUE to exlude system segments (Bounced, Unsubscribed, Etc)"
  },
  {
    "fieldName": "startRecord",
    "dataType": "INTEGER",
    "description": "For paging. The record number to start on. Default is 0."
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "For paging. The number of records to retrieve. Default is 1000. Maximum is 1000."
  },
  {
    "fieldName": "sortOrder",
    "dataType": "STRING",
    "description": "ASC or DESC. Default is ASC"
  },
  {
    "fieldName": "sortColumn",
    "dataType": "STRING",
    "description": "The column to sort on. Can be \"id\",\"createdAt\",\"name\". \"Default is \"name\"."
  },
  {
    "fieldName": "count",
    "dataType": "BOOLEAN",
    "description": "Set to TRUE to include a count of subscribers that match each segment."
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "total",
    "dataType": "INTEGER",
    "description": "The total segments returned in the query."
  },
  {
    "fieldName": "Segments",
    "dataType": "ARRAY"
  },
  {
    "fieldName": "Segments.id",
    "dataType": "INTEGER",
    "description": "The ID of the segment."
  },
  {
    "fieldName": "Segments.name",
    "dataType": "STRING",
    "description": "The name of the segment."
  },
  {
    "fieldName": "Segments.queryObj",
    "dataType": "JSON",
    "description": "The full query object for the segment, detailing the rules that have been added."
  },
  {
    "fieldName": "Segments.hasChildren",
    "dataType": "BOOLEAN",
    "description": "Wether the segment has any child segments."
  },
  {
    "fieldName": "Segments.subscriberCount",
    "dataType": "INTEGER",
    "description": "The total number of subscribers that match the rules, across all groups or the group pushed into the query. Requires \"count\" set to \"true\" in querystring."
  },
  {
    "fieldName": "Segments.createdAt",
    "dataType": "DATETIME",
    "description": "The Date/Time the segment was created."
  },
  {
    "fieldName": "readOnly",
    "dataType": "BOOLEAN",
    "description": "Wether the segment is in read only mode, or not."
  }
]
```




## Response Example

{
    "total": 1,
    "Segments": [
          {
               "id": 38630,
               "name": "My Test Segment",
               "queryObj": {or: [], and: [{value: "Test Value", operator: "=", customFieldId: "540190"}]},
               "hasChildren": false,
               "subscriberCount": 13,
               "createdAt": "2019-10-03T15:37:23.000Z",
               "readOnly": 0
          }
     ]
}
