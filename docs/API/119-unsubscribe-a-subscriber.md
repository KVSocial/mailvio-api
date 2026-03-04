# Unsubscribe a Subscriber

- Doc ID: 119
- Source URL: https://mail.mailvio.com/apidocs/119
- Parent ID: 23
- Requires Auth: Yes
- Request Method: put
- Request URL: /subscriber/unsubscribe
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Unsubscribes and blacklists a contact from all groups.</p>
<p>Pass an email address to the request, and if a matching contact is found it will be unsubscribed and blacklisted from all groups.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The email address of the subscriber to unsubscribe and blacklist"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "Wether the request was successful"
  }
]
```



## Request Example


```json
{
  "emailAddress": "test@test.com"
}
```



## Response Example


```json
{
  "success": true
}
```

