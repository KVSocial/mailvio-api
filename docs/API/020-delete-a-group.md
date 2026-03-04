# Delete a Group

- Doc ID: 20
- Source URL: https://mail.mailvio.com/apidocs/20
- Parent ID: 16
- Requires Auth: Yes
- Request Method: delete
- Request URL: /group/:groupId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Deletes a group and removes an Subscriber binds from it. If a subscriber does not exist in any other groups, the subscriber record is also deleted.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "True or False depending on the result"
  }
]
```




## Response Example


```json
{
  "Success": true
}
```

