# Update an Existing Api Key

- Doc ID: 63
- Source URL: https://mail.mailvio.com/apidocs/63
- Parent ID: 61
- Requires Auth: Yes
- Request Method: put
- Request URL: /accountMaster/apikey/:apiKeyId
- Published: Yes
- Last Updated: 2026-02-28T01:48:44.000Z

## Body

<p>Updates an api key</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "name",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the new api key"
  },
  {
    "fieldName": "enabled",
    "dataType": "BOOLEAN",
    "required": "on",
    "description": "Wether the api key is enabled or not"
  },
  {
    "fieldName": "write",
    "dataType": "BOOLEAN",
    "required": "on",
    "description": "Wether the api key has write access"
  },
  {
    "fieldName": "expiry",
    "dataType": "DATETIME",
    "required": "",
    "description": "The expiry date of the key. Leave null for none."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "ApiKey",
    "dataType": "STRING",
    "description": "The new updated API key"
  }
]
```



## Request Example


```json
{
  "name": "test key",
  "enabled": true,
  "write": true,
  "expiry": null
}
```



## Response Example


```json
{
  "ApiKey": "2114221n4j21n4jn12j4n12j4nj12412"
}
```

