# Login to an Account

- Doc ID: 14
- Source URL: https://mail.mailvio.com/apidocs/14
- Parent ID: 3
- Requires Auth: No
- Request Method: post
- Request URL: /auth
- Published: Yes
- Last Updated: 2026-02-26T20:26:54.000Z

## Body

<p>Send a username and password and retrieve an authentication token which can be used to access all other API calls. Authentication tokens expire within 2 hours if they are not used, so this method is really only useful if you are creating quick sessions.</p>

## Related Articles

- None

## Request Fields

```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The email address of the user"
  },
  {
    "fieldName": "password",
    "dataType": "STRING",
    "required": "on",
    "description": "The password of the user"
  },
  {
    "fieldName": "url",
    "dataType": "STRING",
    "required": "on",
    "description": "The url of the the control panel (ie mail.mailvio.com)"
  }
]
```

## Response Fields

```json
[
  {
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "True or false depending on the login success"
  },
  {
    "fieldName": "token",
    "dataType": "STRING",
    "description": "The access token used to access other routes that require authentication"
  },
  {
    "fieldName": "AccountMasterId",
    "dataType": "INTEGER",
    "description": "The ID of the last accountMaster that this AccountUser accessed."
  },
  {
    "fieldName": "AccountMaster",
    "dataType": "OBJECT",
    "description": "The full account master data object for the current logged in AccountMaster"
  },
  {
    "fieldName": "AccountUserId",
    "dataType": "INTEGER",
    "description": "The ID of the accountUser"
  }
]
```

## Request Example

```json
{
  "emailAddress": "test@test.com",
  "password": "myPasswOrd312!",
  "url": "mail.mailvio.com"
}
```

## Response Example

```json
{
  "success": "true",
  "token": "asfassafsaf8sa9ff21f211i0c2ni21ni21ncini201n01ini2fwavwav9ww9av89awvwav",
  "AccountMasterId": 123124,
  "AccountMaster": {},
  "AccountUserId": 123123
}
```
