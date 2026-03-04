# Monitor a Subscriber Export

- Doc ID: 124
- Source URL: https://mail.mailvio.com/apidocs/124
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /export/:exportJobId
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Monitor an <a href="/apidocs/123">export job</a> to check when it has finished. Send the id of the an export job you have created in the url.<br /><br />When a job has finished you can then download the export fileusing the "<a href="/apidocs/125">Retrieve an Export Job</a>" route.</p>

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
    "description": "The id of the export Job"
  },
  {
    "fieldName": "ExportJob.status",
    "dataType": "STRING",
    "description": "The status of the export job. Will change to \"Finished\" when complete."
  },
  {
    "fieldName": "ExportJob.error",
    "dataType": "STRING",
    "description": "If there has been an error, it will be presented here."
  },
  {
    "fieldName": "ExportJob.totalSubscribers",
    "dataType": "INTEGER",
    "description": "The total number of contacts in the export job"
  },
  {
    "fieldName": "ExportJob.exportedSubscribers",
    "dataType": "INTEGER",
    "description": "The total number of contacts that have been processed so far."
  }
]
```




## Response Example

{
    ExportJob: {
        id: 1,
        status: "Finished",
        error: "",
        totalSubscribers: 1000,
        exportedSubscribers: 1000
    }
}
