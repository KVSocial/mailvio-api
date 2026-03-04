# Get AccountMaster Usage

- Doc ID: 7
- Source URL: https://mail.mailvio.com/apidocs/7
- Parent ID: 13
- Requires Auth: Yes
- Request Method: post
- Request URL: /accountMaster/usage
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Gets the current subscription level that the account is at. Requires X-Access-Token.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Billing",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Billing.id",
    "dataType": "INTEGER",
    "description": "The id of the billing method"
  },
  {
    "fieldName": "Billing.name",
    "dataType": "STRING",
    "description": "The name of the current plan"
  },
  {
    "fieldName": "Billing.maxUniqueSends",
    "dataType": "INTEGER",
    "description": "The total number of unique subscribers this plan allows sending to in a 30 day period"
  },
  {
    "fieldName": "Billing.visible",
    "dataType": "BOOLEAN",
    "description": "Wether the user can see this billing method"
  },
  {
    "fieldName": "Billing.price",
    "dataType": "INTEGER",
    "description": "The monthly price of this billing method"
  },
  {
    "fieldName": "Billing.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The ID of the AccountMaster that owns this payment method."
  },
  {
    "fieldName": "Billing.createdAt",
    "dataType": "DATETIME",
    "description": "The date and time the billing plan was created"
  },
  {
    "fieldName": "Billing.updatedAt",
    "dataType": "DATETIME",
    "description": "The date and time the billing plan was last updated"
  },
  {
    "fieldName": "Billing.SiteMasterId",
    "dataType": "INTEGER",
    "description": "The id of the sitemaster associated with this account (AGENCIES ONLY)"
  },
  {
    "fieldName": "Billing.friendlyPrice",
    "dataType": "INTEGER",
    "description": "The monthly price of this billing method"
  },
  {
    "fieldName": "Billing.symbol",
    "dataType": "STRING",
    "description": "The default currency symbol"
  }
]
```




## Response Example


```json
{
  "Billing": {
    "id": 1,
    "name": "Send free to 1000 subscribers",
    "maxUniqueSends": 1000,
    "visible": false,
    "price": 0,
    "AccountMasterId": null,
    "createdAt": "2018-01-01T00:00:00.000Z",
    "updatedAt": "2018-01-01T00:00:00.000Z",
    "SiteMasterId": 1,
    "friendlyPrice": 0,
    "symbol": "£"
  }
}
```

