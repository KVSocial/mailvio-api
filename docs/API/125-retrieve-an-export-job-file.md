# Retrieve an Export Job File

- Doc ID: 125
- Source URL: https://mail.mailvio.com/apidocs/125
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /export/:exportJobId/file
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>When an <a href="/apidocs/123">export job</a> has finished, you can retrieve the final exported CSV file using this route.<br />Calling this route on a finished export will provide a URL where you can retrieve the export file.<br />Please note: Export file links expire after one hour.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "url",
    "dataType": "STRING",
    "description": "The URL from which to download the exported file"
  }
]
```




## Response Example

{
    url: "http://thelink.com/to/your/file.csv"
}
