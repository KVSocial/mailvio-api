# Export Campaign Statistics

- Doc ID: 45
- Source URL: https://mail.mailvio.com/apidocs/45
- Parent ID: 40
- Requires Auth: Yes
- Request Method: put
- Request URL: /campaign/:campaignId/export
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Starts an export Job which creates a CSV file that you can download containing campaign statistics.</p>
<p>You can send filters in via the query string to filter on sent, opened, clicks, bounces, etc.</p>
<p>After you have used this API route to create a new export job, you need to keep polling the&nbsp;/campaign/:id/export/:exportId route, where a file download link will be presented once the file has been generated.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "filter",
    "dataType": "STRING",
    "required": "on",
    "description": "What type of stats to return. Options are \"sent\",\"opened\",\"clicked\",\"bounced\",\"unsubscribed\""
  }
]
```



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
    "description": "The id of the new export job."
  },
  {
    "fieldName": "ExportJob.status",
    "dataType": "INTEGER",
    "description": "The current status of the export job."
  },
  {
    "fieldName": "ExportJob.finished",
    "dataType": "BOOLEAN",
    "description": "Wether the export job is finished."
  }
]
```




## Response Example


```json
{
  "ExportJob": {
    "id": 12314,
    "status": "finished",
    "finished": true
  }
}
```

