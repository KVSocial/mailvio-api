# Create a Tag

- Doc ID: 114
- Source URL: https://mail.mailvio.com/apidocs/114
- Parent ID: 113
- Requires Auth: Yes
- Request Method: post
- Request URL: /tags
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Create a new tag for subscribers.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "tagType",
    "dataType": "INTEGER",
    "required": "on",
    "description": "0 for Subscriber tags"
  },
  {
    "fieldName": "tagName",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the new tag"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "description": "The Id of the new tag"
  },
  {
    "fieldName": "tagName",
    "dataType": "STRING",
    "description": "The name of the new tag"
  },
  {
    "fieldName": "tagType",
    "dataType": "INTEGER",
    "description": "The type of tag (0 for Subscribers)"
  },
  {
    "fieldName": "AccountMasterId",
    "dataType": "INTEGER",
    "description": "The account master id the tag belongs to"
  },
  {
    "fieldName": "ApplicationId",
    "dataType": "INTEGER",
    "description": "The id of any Application associated with the tag"
  },
  {
    "fieldName": "ApplicationDataId",
    "dataType": "INTEGER",
    "description": "If an application is associated with the tag, the id of the tag in the application"
  },
  {
    "fieldName": "createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the tag was created"
  },
  {
    "fieldName": "updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the tag was last updated"
  }
]
```



## Request Example


```json
{
  "tagType": 0,
  "tagName": "My Sample Tag"
}
```



## Response Example


```json
{
  "id": 1,
  "tagName": "My Sample Tag",
  "tagType": 0,
  "AccountMasterId": 1,
  "ApplicationId": null,
  "ApplicationDataId": null,
  "createdAt": "2000-01-01 01:01:01",
  "updatedAt": "2000-01-01 01:01:01"
}
```

