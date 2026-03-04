# Create a Campaign Report

- Doc ID: 110
- Source URL: https://mail.mailvio.com/apidocs/110
- Parent ID: 109
- Requires Auth: Yes
- Request Method: post
- Request URL: /reports
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Create a new Campaign Report. Once created, poll the report id until it is finished, and once finished you can retrieve the file generated.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "type",
    "dataType": "STRING",
    "required": "on",
    "description": "The type of report the generate. Valid values are \"campaign\", \"sent\", \"open\", \"bounce\", \"click\", \"unsubscribe\", \"deliverability\" "
  },
  {
    "fieldName": "name",
    "dataType": "STRING",
    "required": "on",
    "description": "The friendly name for the report"
  },
  {
    "fieldName": "fields",
    "dataType": "ARRAY",
    "description": "An array of customField id's to include in the report."
  },
  {
    "fieldName": "filters",
    "dataType": "OBJECT",
    "description": "An object of filters"
  },
  {
    "fieldName": "--> startDate",
    "dataType": "DATETIME",
    "required": "",
    "description": "The start date to include statistics from"
  },
  {
    "fieldName": "--> endDate",
    "dataType": "DATETIME",
    "required": "",
    "description": "The end date to include statistics to"
  },
  {
    "fieldName": "--> campaigns",
    "dataType": "ARRAY",
    "description": "An array of campaign ids that are to be included"
  },
  {
    "fieldName": "--> bounceType",
    "dataType": "STRING",
    "description": "If generating a bounce report, specify wether you would like to filter by \"hard\" or \"soft\" bounces"
  }
]
```




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
    "description": "The id of the new report"
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



## Request Example


```json
{
  "type": "sent",
  "name": "test report",
  "fields": [
    1,
    2,
    3,
    4,
    5
  ],
  "filters": {
    "startDate": "2022-01-01 00:00:00",
    "endDate": "2022-02-01 00:00:00",
    "campaigns": [
      1,
      2,
      3
    ]
  }
}
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
