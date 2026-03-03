# Update AccountMaster

- Doc ID: 9
- Source URL: https://mail.mailvio.com/apidocs/9
- Parent ID: 13
- Requires Auth: Yes
- Request Method: put
- Request URL: /accountMaster
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Update the AccountMaster details. Things like AccountName, default currency, etc.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "accountName",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the account"
  },
  {
    "fieldName": "address1",
    "description": "The Account address"
  },
  {
    "fieldName": "address2",
    "description": "The Account address"
  },
  {
    "fieldName": "address3",
    "description": "The Account address"
  },
  {
    "fieldName": "city",
    "description": "The Account city/town"
  },
  {
    "fieldName": "county",
    "description": "The Account county/state"
  },
  {
    "fieldName": "country",
    "description": "The Account country"
  },
  {
    "fieldName": "postCode",
    "description": "The Account post/zip code"
  },
  {
    "fieldName": "currency",
    "description": "The default currency associated with the account"
  }
]
```



## Query Fields


```json
[]
```



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the update was a success or not"
  }
]
```



## Request Example

{
    "accountName": "My New Company",
    "address1": "Street 1",  //optional
    "address2": "Street 2",  //optional
    "address3": null,  //optional
    "city": "Poole",  //optional
    "county": "Dorset",  //optional
    "country": "United Kingdom",  //optional
    "postCode": "BH124JL",  //optional
    "currency": "GBP",  //optional
}


## Response Example


```json
{
  "Success": true
}
```

