# Retrieve AccountMaster

- Doc ID: 4
- Source URL: https://mail.mailvio.com/apidocs/4
- Parent ID: 13
- Requires Auth: Yes
- Request Method: GET
- Request URL: /accountMaster
- Published: Yes
- Last Updated: 2026-02-26T18:43:55.000Z

## Body

Retrieve details about an account, based on the API key you are currently using. Requires X-Access-Token header with API key.

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "AccountMaster.id",
    "dataType": "INTEGER",
    "description": "The id of the AccountMaster"
  },
  {
    "fieldName": "AccountMaster.accountName",
    "dataType": "STRING",
    "description": "The name of the Account"
  },
  {
    "fieldName": "AccountMaster.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the account was created"
  },
  {
    "fieldName": "AccountMaster.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the account was last updated"
  },
  {
    "fieldName": "AccountMaster.siteMasterId",
    "dataType": "INTEGER",
    "description": "The ID of the site that hosts the account (AGENCY ACCOUNTS ONLY)"
  },
  {
    "fieldName": "AccountMaster.address1",
    "dataType": "STRING",
    "description": "The Account address"
  },
  {
    "fieldName": "AccountMaster.address2",
    "dataType": "STRING",
    "description": "The Account address"
  },
  {
    "fieldName": "AccountMaster.address3",
    "dataType": "STRING",
    "description": "The Account address"
  },
  {
    "fieldName": "AccountMaster.city",
    "dataType": "STRING",
    "description": "The Account city/town"
  },
  {
    "fieldName": "AccountMaster.county",
    "dataType": "STRING",
    "description": "The Account county/state"
  },
  {
    "fieldName": " AccountMaster.country",
    "dataType": "STRING",
    "description": "The Account country"
  },
  {
    "fieldName": "AccountMaster.postCode",
    "dataType": "STRING",
    "description": "The Account post/zip code"
  },
  {
    "fieldName": "AccountMaster.companyLogo",
    "dataType": "STRING",
    "description": "The URL to the company logo image"
  },
  {
    "fieldName": "AccountMaster.totalSubscribers",
    "dataType": "INTEGER",
    "description": "The total number of subscribers uploaded"
  },
  {
    "fieldName": "AccountMaster.currency",
    "dataType": "STRING",
    "description": "The default currency associated with the account"
  },
  {
    "fieldName": "AccountMaster.options",
    "dataType": "JSON",
    "description": "Misc other options"
  }
]
```




## Response Example


```json
{
  "AccountMaster": {
    "id": 4241214214124,
    "accountName": "My New Company",
    "createdAt": "2018-08-07T15:01:32.000Z",
    "updatedAt": "2018-08-07T15:01:33.000Z",
    "siteMasterId": 1,
    "address1": "Street 1",
    "address2": "Street 2",
    "address3": null,
    "city": "Poole",
    "county": "Dorset",
    "country": "United Kingdom",
    "postCode": "BH124JL",
    "companyLogo": "userContent/avatars/avatar-8.jpg",
    "totalSubscribers": 0,
    "currency": "GBP",
    "options": null
  }
}
```

