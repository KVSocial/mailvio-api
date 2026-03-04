# Get all Account Masters

- Doc ID: 83
- Source URL: https://mail.mailvio.com/apidocs/83
- Parent ID: 15
- Requires Auth: Yes
- Request Method: get
- Request URL: /me/accounts
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieves a list of all Account Masters the logged in user has access to or is a member of.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Accounts",
    "dataType": "ARRAY",
    "description": "An array of Account Master's that the user has access to."
  }
]
```




## Response Example

{
    Accounts: [
    {
        "id":123456,
        "name":"Test Company 1",
        "companyLogo":"https://linktocompanylogo/image.png"
    },
    {
        "id":654321,
        "name":"Test Company 2",
        "companyLogo":"https://linktocompanylogo/image2.png"
    }]
}
