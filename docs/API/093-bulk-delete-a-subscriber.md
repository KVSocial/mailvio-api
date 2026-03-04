# Bulk Delete a Subscriber

- Doc ID: 93
- Source URL: https://mail.mailvio.com/apidocs/93
- Parent ID: 23
- Requires Auth: Yes
- Request Method: delete
- Request URL: /subscriber/bulk/:id
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Use this route to&nbsp;delete a single subscriber. This route should be used if you are planning to send many API requests in a day.</p>
<p>This route always returns Success: True, because it does not process updates instantly. Instead it adds them to a queue.<br />Using this route allows for many large requests in one day.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "Wether the request was a success"
  }
]
```




## Response Example


```json
{
  "success": true
}
```

