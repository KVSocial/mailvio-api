# Create a new ApiKey

- Doc ID: 64
- Source URL: https://mail.mailvio.com/apidocs/64
- Parent ID: 61
- Requires Auth: Yes
- Request Method: post
- Request URL: /accountMaster/apikey
- Published: Yes
- Last Updated: 2026-02-26T18:47:02.000Z

## Body

<p>Creates a new API key, and returns the new&nbsp;auth key</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "write",
    "dataType": "BOOLEAN",
    "required": "on",
    "description": "Wether the key should have write access"
  },
  {
    "fieldName": "name",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the new key"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "ApiKey",
    "dataType": "STRING",
    "description": "The new API Key to use for future auth"
  }
]
```



## Request Example

{
    name: "MyNewAPIKey"
    write: true 
}


## Response Example

{
    ApiKey: "231321321414n12r1j2ffj2121jbfjb12jifb12jifb1j2ibfj1i2bfij21"
}
