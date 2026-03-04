# Updating a Subscriber

- Doc ID: 95
- Source URL: https://mail.mailvio.com/apidocs/95
- Parent ID: 23
- Requires Auth: Yes
- Request Method: put
- Request URL: /subscriber/:id
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Update an existing subscriber.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "he email address of the subscriber"
  },
  {
    "fieldName": "active",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is set to \"ACTIVE\" or \"INACTIVE\". Set TRUE for Active. Default is Active."
  },
  {
    "fieldName": "blackListed",
    "dataType": "BOOLEAN",
    "description": "Set true to set the email address as blacklisted, which means it cannot be sent to."
  },
  {
    "fieldName": "customFields",
    "description": "An array of custom field objects. You can use either the MERGE TAG or the ID of the custom field here.",
    "dataType": "OBJECT[]"
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
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "Wether the update was a success, or not."
  }
]
```



## Request Example


```json
{
  "emailAddress": "test@test.com",
  "blackListed": false,
  "customFields": {
    "FIRSTNAME": "Mike",
    "LASTNAME": "Way"
  }
}
```



## Response Example


```json
{
  "success": true
}
```

