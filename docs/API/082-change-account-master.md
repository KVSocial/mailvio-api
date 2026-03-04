# Change Account Master

- Doc ID: 82
- Source URL: https://mail.mailvio.com/apidocs/82
- Parent ID: 13
- Requires Auth: Yes
- Request Method: post
- Request URL: /accountMaster/change
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>If a user is bound to multiple account masters, you are able to change the current account master using this route.</p>
<p>The current Account Master is stored against the user so the next time a user logs in, they will automatically be assigned to the last Account Master that has been set.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "required": "on",
    "description": "The ID of the Account Master to change to. The user must be a member of the Account Master."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "AccountMaster",
    "dataType": "OBJECT",
    "description": "The complete Account Master object for the Account Master that was changed to."
  },
  {
    "fieldName": "token",
    "dataType": "STRING",
    "description": "A new access token which must be used for new requests."
  }
]
```



## Request Example


```json
{
  "id": 12346
}
```



## Response Example

{
     "AccountMaster": {...Account Master Object},
     "token":"jsad212d1kacsakqkqwfkqwf1225%^wwrqwqrw"
}
