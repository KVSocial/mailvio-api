# Upload an AccountUser Avatar

- Doc ID: 35
- Source URL: https://mail.mailvio.com/apidocs/35
- Parent ID: 15
- Requires Auth: Yes
- Request Method: post
- Request URL: /accountUser/avatar
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Uploads a new Avatar Image for the user.&nbsp;</p>
<p>The file must be a JPG, PNG or GIF and must not be more than 2mb in size. Square images are recommended.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "File",
    "dataType": "OBJECT",
    "required": "on",
    "description": "A file object containing the new file"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "File",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "File.fileName",
    "dataType": "STRING",
    "description": "The new file name of the uploaded file"
  },
  {
    "fieldName": "File.filePath",
    "dataType": "STRING",
    "description": "The path to the file located on the repository"
  },
  {
    "fieldName": "File.size",
    "dataType": "INTEGER",
    "description": "The size in bytes of the file uploaded"
  }
]
```




## Response Example

{
    "File": {
                    "fileName": "sampleImage.jpg",
                    "filePath": "https://cdn1.thereponame.com/thedirectory/made/up/here/",
                    "size": 12999,
                }
}
