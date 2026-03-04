# Retrieves a campaign report file

- Doc ID: 112
- Source URL: https://mail.mailvio.com/apidocs/112
- Parent ID: 109
- Requires Auth: Yes
- Request Method: get
- Request URL: /reports/:id/file
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>When a campaign report has a status of "finished" you can use this route to retrieve the export file.<br />You will receive a url where you can retrieve the file. This link remains valid for 60 seconds, after which you will receive an error.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "url",
    "dataType": "STRING",
    "description": "The URL to query to retrieve the file"
  }
]
```




## Response Example


```json
{
  "url": "https://thedownload.com/location/filename.csv"
}
```

