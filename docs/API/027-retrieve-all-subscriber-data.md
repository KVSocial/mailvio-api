# Retrieve all Subscriber Data

- Doc ID: 27
- Source URL: https://mail.mailvio.com/apidocs/27
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /subscriber/:subscriberId/downloadAllData
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Retrieves all data held against a subscriber. This includes all custom fields, sending history, etc. This is useful for things like GDPR requests where a user asks to see all data held against them.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the operation was a success"
  },
  {
    "fieldName": "UserData",
    "dataType": "OBJECT",
    "description": "A large object of data detailing everything held against them"
  }
]
```




## Response Example


```json
{
  "Success": true,
  "UserData": {}
}
```

