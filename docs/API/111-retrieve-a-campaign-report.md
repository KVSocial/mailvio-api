# Retrieve a campaign report

- Doc ID: 111
- Source URL: https://mail.mailvio.com/apidocs/111
- Parent ID: 109
- Requires Auth: Yes
- Request Method: get
- Request URL: /reports/:id
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Retrieves a campaign report</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Report",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "--> id",
    "dataType": "INTEGER",
    "description": "The id of the report"
  },
  {
    "fieldName": "--> name",
    "dataType": "STRING",
    "description": "The name of the report"
  },
  {
    "fieldName": "--> path",
    "dataType": "STRING",
    "description": "The path from where you can retrieve the report (DISCONTINUED)"
  },
  {
    "fieldName": "--> status",
    "dataType": "STRING",
    "description": "The status of the report. \"queued\", \"finished\", \"errored\""
  },
  {
    "fieldName": "--> createdAt",
    "dataType": "DATETIME",
    "description": "The date and time the report was created"
  }
]
```




## Response Example

{
     "Report": {
          "id": 1,
          "name: "test report",
          "path": "/",
          "status": "finished",
          "createdAt": "2022-02-02 00:00:00"
     }
}
