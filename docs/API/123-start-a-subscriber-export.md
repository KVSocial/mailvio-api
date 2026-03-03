# Start a Subscriber Export

- Doc ID: 123
- Source URL: https://mail.mailvio.com/apidocs/123
- Parent ID: 23
- Requires Auth: Yes
- Request Method: post
- Request URL: /export
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Create an export job for all subscribers, or filter by a group or segment.<br />If no segmentId or groupId is specified, all contacts will be exported.<br /><br />An export job ID will be returned, which you can then <a href="/apidocs/124">monitor</a> and eventually <a href="/apidocs/125">retrieve the export file</a>.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "segmentId",
    "dataType": "INTEGER",
    "description": "The id of a segment. Cannot be used in conjunction with groupId. WIll only export contacts that match the segment."
  },
  {
    "fieldName": "groupId",
    "dataType": "INTEGER",
    "description": "The id of a group. Cannot be used in conjunction with segmentId. WIll only export contacts that are members of the group."
  },
  {
    "fieldName": "subscriberStatus",
    "dataType": "STRING",
    "required": "",
    "description": "The status of contacts. Values are \"active\",\"bounce\" or \"blackListed\". Leave blank for all statuses."
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
    "description": "The ID of the export job."
  }
]
```



## Request Example

{
    groupId: 1,
    subscriberStatus: "active"
}


## Response Example

{
    ExportJob: {
        id: 1,
        status: "Finished"
    }
}
