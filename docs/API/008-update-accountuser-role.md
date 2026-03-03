# Update AccountUser Role

- Doc ID: 8
- Source URL: https://mail.mailvio.com/apidocs/8
- Parent ID: 15
- Requires Auth: Yes
- Request Method: put
- Request URL: /accountMaster/:accountUserId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Updates the role of an account user</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "RoleId",
    "dataType": "INTEGER",
    "required": "on",
    "description": "The ID of the Role that you would like to change the user to."
  }
]
```



## Query Fields


```json
[]
```



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "True or False depending on wether the update was a success"
  },
  {
    "fieldName": "error",
    "dataType": "STRING",
    "description": "Only present if there was an error. Provide the error reason."
  }
]
```



## Request Example


```json
{
  "RoleId": 123213
}
```



## Response Example


```json
{
  "success": false,
  "error": "RoleID Not Found"
}
```

