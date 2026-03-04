# Delete a Custom Field

- Doc ID: 34
- Source URL: https://mail.mailvio.com/apidocs/34
- Parent ID: 37
- Requires Auth: Yes
- Request Method: delete
- Request URL: /customfield/:customFieldId
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Deletes a custom field. If you delete a custom field any data that is stored against a subscriber in the custom field may be deleted.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the field was deleted or not"
  }
]
```




## Response Example


```json
{
  "Success": true
}
```

