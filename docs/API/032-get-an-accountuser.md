# Get an AccountUser

- Doc ID: 32
- Source URL: https://mail.mailvio.com/apidocs/32
- Parent ID: 15
- Requires Auth: Yes
- Request Method: get
- Request URL: /accountUser/:accountUserId
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Retrieves a specific account user for an account master by passing the accountUser id in the uri.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "AccountUserData",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "AccountUserData.id",
    "dataType": "INTEGER",
    "description": "The id of the accountUser"
  },
  {
    "fieldName": "AccountUserData.firstName",
    "dataType": "STRING",
    "description": "The first name of the user"
  },
  {
    "fieldName": "AccountUserData.lastName",
    "dataType": "STRING",
    "description": "The last name of the user"
  },
  {
    "fieldName": "AccountUserData.emailAddress",
    "dataType": "STRING",
    "description": "The email address of the user"
  },
  {
    "fieldName": "AccountUserData.dateOfBirth",
    "dataType": "DATE",
    "description": "The date of birth of the user"
  },
  {
    "fieldName": "AccountUserData.language",
    "dataType": "STRING",
    "description": "The default language of the user (for example \"en\")"
  },
  {
    "fieldName": "AccountUserData.timeZone",
    "dataType": "STRING",
    "description": "The default time zone for the user (ie \"Europe/London\")"
  },
  {
    "fieldName": "AccountUserData.dateFormat",
    "dataType": "STRING",
    "description": "The default date format for the user (ie \"DD/MM/YYYY\")"
  },
  {
    "fieldName": "AccountUserData.profilePicFileName",
    "dataType": "STRING",
    "description": "The URI to for the users avatar image"
  },
  {
    "fieldName": "AccountUserData.lastAccountMaster",
    "dataType": "INTEGER",
    "description": "The id of the last accountMaster the user accessed"
  },
  {
    "fieldName": "AccountUserData.loginCount",
    "dataType": "INTEGER",
    "description": "The total number of times the user has logged in"
  },
  {
    "fieldName": "AccountUserData.lastLoginDate",
    "dataType": "DATETIME",
    "description": "The last date/time the user logged in"
  },
  {
    "fieldName": "AccountUserData.lastAccessDate",
    "dataType": "DATETIME",
    "description": "The last date/time the user accessed an API route"
  },
  {
    "fieldName": "AccountUserData.lastAccessRoute",
    "dataType": "STRING",
    "description": "The route the user accessed last"
  },
  {
    "fieldName": "AccountUserData.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the user account was created"
  },
  {
    "fieldName": "AccountUserData.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the user account was last updated"
  },
  {
    "fieldName": "AccountUserData.SiteMasterId",
    "dataType": "INTEGER",
    "description": "The id of the site master above this user"
  }
]
```




## Response Example


```json
{
  "AccountUserData": {
    "id": 141246,
    "firstName": "Sample",
    "lastName": "User",
    "emailAddress": "sample@user.com",
    "dateOfBirth": null,
    "language": "en",
    "timeZone": "Europe/London",
    "dateFormat": "DD/MM/YYYY",
    "profilePicFileName": "userContent/users/avatars/6/test-logo-facebook.png",
    "lastAccountMaster": 1236,
    "loginCount": 585,
    "lastLoginDate": "2018-08-11T18:50:52.000Z",
    "lastAccessDate": "2018-08-13T21:02:36.000Z",
    "lastAccessRoute": "/accountUser/6412",
    "createdAt": "2018-03-16T14:05:15.000Z",
    "updatedAt": "2018-08-13T21:02:36.000Z",
    "SiteMasterId": 1
  }
}
```

