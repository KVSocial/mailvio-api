# Bulk Delete multiple Subscribers

- Doc ID: 94
- Source URL: https://mail.mailvio.com/apidocs/94
- Parent ID: 23
- Requires Auth: Yes
- Request Method: delete
- Request URL: /subscriber/bulk
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Use this route to&nbsp;delete multiple&nbsp;subscribers. This route should be used if you are planning to send many API requests in a day.</p>
<p>This route always returns Success: True, because it does not process updates instantly. Instead it adds them to a queue.<br />Using this route allows for many large requests in one day.</p>
<p>You must <strong>either</strong> push an array of "subscriberIds" or "emailAddresses" into this route.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "subscriberIds",
    "dataType": "INTEGER[]",
    "required": "on",
    "description": "A numeric array of subscriber id's to delete"
  },
  {
    "fieldName": "emailAddresses",
    "dataType": "STRING[]",
    "required": "on",
    "description": "A string array of subscriber email addresses to delete"
  }
]
```




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



## Request Example

Using subscriberIds:

{
     "subscriberIds": [1,2,3,4]
}

Using emailAddresses:

{
     "emailAddresses": ["test1@test.com","test2@test.com"]
}



## Response Example


```json
{
  "success": true
}
```

