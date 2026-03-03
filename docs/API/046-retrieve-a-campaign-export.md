# Retrieve a Campaign Export

- Doc ID: 46
- Source URL: https://mail.mailvio.com/apidocs/46
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/export/:exportId
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Retrieves a campaign statistics export that has been started.</p>
<p>Keep polling this until the campaign job is finished, at which time a file download link will be available to grab the CSV from.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "ExportJob",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "ExportJob.id",
    "dataType": "INTEGER",
    "description": "The ID of the current campaign export job"
  },
  {
    "fieldName": "ExportJob.status",
    "dataType": "STRING",
    "description": "Shows wether the job is in progress, finished or errored"
  },
  {
    "fieldName": "ExportJob.finished",
    "dataType": "BOOLEAN",
    "description": "Wether the job has finished"
  },
  {
    "fieldName": "ExportJob.location",
    "dataType": "STRING",
    "description": "Once the job has finished, a URL will be available here where you can download the CSV"
  }
]
```




## Response Example


```json
{
  "ExportJob": {
    "id": 213123,
    "status": "finished",
    "finished": true,
    "location": "https://theurl.com/thefile.csv"
  }
}
```

