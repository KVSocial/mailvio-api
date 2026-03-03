# Upload AccountMaster Avatar

- Doc ID: 12
- Source URL: https://mail.mailvio.com/apidocs/12
- Parent ID: 13
- Requires Auth: Yes
- Request Method: post
- Request URL: /avatar
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Upload a new image for the accountMaster avatar image. The file can be a "GIF","JPG" or "PNG" and must be 2mb or less in size.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "file",
    "dataType": "FILEDATA",
    "required": "on",
    "description": "A fileData object"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "fileName",
    "dataType": "STRING",
    "description": "The new file name of the uploaded file"
  },
  {
    "fieldName": "filePath",
    "dataType": "STRING",
    "description": "The full URI to the new file"
  },
  {
    "fieldName": "size",
    "dataType": "INTEGER",
    "description": "The size in KB of the new file"
  }
]
```



## Request Example

{
    "file":  <your file object> 
}


## Response Example


```json
{
  "fileName": "test.png",
  "filePath": "https://thecdn.com/thepath",
  "size": 12313
}
```

