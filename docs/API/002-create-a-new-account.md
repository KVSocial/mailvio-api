# Create a new Account

- Doc ID: 2
- Source URL: https://mail.mailvio.com/apidocs/2
- Parent ID: 3
- Requires Auth: No
- Request Method: post
- Request URL: /register
- Published: Yes
- Last Updated: 2026-02-28T13:51:22.000Z

## Body

<p>Creates a new "AccountMaster" along with a new "AccountUser" and returns the ID's of both.</p>
<p>An "AccountMaster" may contain one or more "AccountUser"s.</p>
<p>When an account is created an email will be sent to the user detailing next steps. They will be asked to click to confirm their email address, and will then be asked questions about their account. An account will not be active until all of this is completed which means all routes are available via the API, but no actual emails will be sent (transactional, preview, campaign, etc.</p>

## Related Articles

- None

## Request Fields

```json
[
  {
    "fieldName": "accountName",
    "dataType": "STRING",
    "required": "on",
    "description": "The company name or account name"
  },
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The email address associated with the new account"
  },
  {
    "fieldName": "password",
    "dataType": "STRING",
    "required": "on",
    "description": "A strong password. Must be 8 or more characters in length and include one special character."
  },
  {
    "fieldName": "firstName",
    "dataType": "STRING",
    "required": "on",
    "description": "The first name of the account user."
  },
  {
    "fieldName": "lastName",
    "dataType": "STRING",
    "required": "on",
    "description": "The last name of the account user."
  },
  {
    "fieldName": "url",
    "dataType": "STRING",
    "required": "on",
    "description": "The url of the the control panel (ie mail.mailvio.com)"
  },
  {
    "fieldName": "userLanguage",
    "dataType": "STRING",
    "description": "The default language for the user. May be \"en\",\"de\",\"fi\" or \"fr\". Defaults to \"en\" if ommitted."
  }
]
```

## Response Fields

```json
[
  {
    "fieldName": "accountMasterId",
    "dataType": "INT",
    "description": "The ID of the new accountMaster"
  },
  {
    "fieldName": "accountUserId",
    "dataType": "INT",
    "description": "The ID of the new accountUser"
  },
  {
    "fieldName": "apiKey",
    "dataType": "STRING",
    "description": "An API key you can store and use against all future requests for this account"
  }
]
```

## Request Example

```json
{
  "accountName": "My New Company",
  "emailAddress": "myemail@address.com",
  "password": "superduperpassword123!!",
  "firstName": "Mighty",
  "lastName": "Mike",
  "url": "mail.mailvio.com"
}
```

## Response Example

```json
{
  "accountMasterId": 12345,
  "accountUserId": 12345,
  "apiKey": "dsavasas214214124FMwakfmawfkwaFWAWF.AWFWAFAWfAWC2141412k4n21412n4k1nfwkWKFNAKFawmawvWVWA"
}
```
