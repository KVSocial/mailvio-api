# Delete AccountUser

- Doc ID: 10
- Source URL: https://mail.mailvio.com/apidocs/10
- Parent ID: 15
- Requires Auth: Yes
- Request Method: delete
- Request URL: /accountMaster/:accountUserId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Deletes an accountuser from an accountmaster.</p>
<p>Note: Deleting an accountuser only removes the binding to the current accountmaster. The accountuser remains and can still be bound to other accountmasters.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "True or False depending on wether the deletion was a success"
  }
]
```




## Response Example


```json
{
  "Success": true
}
```

