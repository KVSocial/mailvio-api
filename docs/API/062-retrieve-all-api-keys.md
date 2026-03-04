# Retrieve all API Keys

- Doc ID: 62
- Source URL: https://mail.mailvio.com/apidocs/62
- Parent ID: 61
- Requires Auth: Yes
- Request Method: get
- Request URL: /accountMaster/apikey
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Retrieves all api keys configured for an account</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "ApiKeys",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "ApiKeys.id",
    "dataType": "INTEGER",
    "description": "The id of the ApiKey"
  },
  {
    "fieldName": "ApiKeys.name",
    "dataType": "STRING",
    "description": "The name of the key"
  },
  {
    "fieldName": "ApiKeys.apiKey",
    "dataType": "STRING",
    "description": "The actual key to use as an auth token"
  },
  {
    "fieldName": "ApiKeys.enabled",
    "dataType": "BOOLEAN",
    "description": "Wether the api key is enabled"
  },
  {
    "fieldName": "ApiKeys.write",
    "description": "Wether the api key has write access"
  },
  {
    "fieldName": "ApiKeys.expiry",
    "dataType": "DATETIME",
    "description": "The expiry date of the key. Can be null if there is no expiry."
  },
  {
    "fieldName": "ApiKeys.createdAt",
    "dataType": "DATETIME",
    "description": "When the key was created"
  },
  {
    "fieldName": "ApiKeys.updatedAt",
    "dataType": "DATETIME",
    "description": "The date the key was last updated"
  },
  {
    "fieldName": "ApiKeys.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The account master id the key belongs to"
  }
]
```




## Response Example


```json
{
  "ApiKeys": [
    {
      "id": 18,
      "name": "testKey",
      "apiKey": "wafwafwafwafawfwafwafwafwafawfawfwafawfwafawfawfawfawfwaf",
      "domain": null,
      "enabled": false,
      "demo": false,
      "write": false,
      "expiry": null,
      "createdAt": "2018-05-29T12:34:13.000Z",
      "updatedAt": "2018-05-29T12:34:13.000Z",
      "AccountMasterId": 6
    }
  ]
}
```

