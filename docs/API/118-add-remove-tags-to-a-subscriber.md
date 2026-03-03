# Add/Remove Tags to a Subscriber

- Doc ID: 118
- Source URL: https://mail.mailvio.com/apidocs/118
- Parent ID: 113
- Requires Auth: Yes
- Request Method: put
- Request URL: /subscriber/:subscriberId/tags
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Pass an array of tag id's that the subscriber has assigned to them.<br />If you need to remove a tag, pass a new array of tags, excluding any you would like to remove.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "tags",
    "dataType": "INTEGER[]",
    "required": "on",
    "description": "An array of tag id's to add to the subscriber"
  },
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "description": "(optional) Supply an email address of a subscriber and leave :subscriberId as 0 in the URL"
  }
]
```



## Query Fields


```json
[
  {
    "fieldName": "append",
    "dataType": "BOOLEAN",
    "description": "(Optional) Set to 1 to only append tags. Otherwise the tag array sent will overwrite."
  }
]
```



## Response Fields


```json
[]
```



## Request Example


```json
{
  "tags": [
    1,
    2
  ]
}
```



## Response Example


```json
{
  "success": true
}
```

