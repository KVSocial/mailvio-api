# Update a Segment

- Doc ID: 90
- Source URL: https://mail.mailvio.com/apidocs/90
- Parent ID: 85
- Requires Auth: Yes
- Request Method: put
- Request URL: /segment/:id
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Updates an existing segment.</p>

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
  },
  {
    "fieldName": "name",
    "dataType": "STRING",
    "required": "on",
    "description": "A new segment name."
  }
]
```



## Query Fields


```json
[]
```



## Response Fields


```json
[
  {
    "fieldName": "name",
    "dataType": "STRING",
    "description": "The name of the new Segment"
  },
  {
    "fieldName": "segmentId",
    "dataType": "INTEGER",
    "description": "The ID of the new segment"
  },
  {
    "fieldName": "queryObj",
    "dataType": "ARRAY",
    "description": "An array of the new query objects"
  }
]
```



## Request Example

{
    "queryObj": [
        "queryObj": {
             or: [], 
             and: [{value: "Test Value", operator: "=", customFieldId: "540190"}]
         },
         "queryObj": {
             or: [
                       {value: "Test Value2", operator: "=", customFieldId: "530102"}
                   ], 
             and: []
         }
     ],
    "name": "Test Segment"
}


## Response Example

{
        "queryObj": [
        "queryObj": {
             or: [], 
             and: [{value: "Test Value", operator: "=", customFieldId: "540190"}]
         },
         "queryObj": {
             or: [
                       {value: "Test Value2", operator: "=", customFieldId: "530102"}
                   ], 
             and: []
         }
     ],
        "name": "Test Segment",
        "segmentId": 12314
}
