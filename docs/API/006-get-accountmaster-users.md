# Get AccountMaster Users

- Doc ID: 6
- Source URL: https://mail.mailvio.com/apidocs/6
- Parent ID: 13
- Requires Auth: Yes
- Request Method: GET
- Request URL: /accountMaster/users
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Gets all account users who are bound to&nbsp;the current accountmaster. Requires Auth-Header.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "AccountUsers.accountUserId",
    "dataType": "INTEGER",
    "description": "The id of the account user"
  },
  {
    "fieldName": "AccountUsers.firstName",
    "dataType": "STRING",
    "description": "The First Name"
  },
  {
    "fieldName": "AccountUsers.lastName",
    "dataType": "STRING",
    "description": "The Last Name"
  },
  {
    "fieldName": "AccountUsers.emailAddress",
    "dataType": "STRING",
    "description": "The Email Address"
  },
  {
    "fieldName": "AccountUsers.admin",
    "dataType": "BOOLEAN",
    "description": "Wether they are an account admin or not"
  },
  {
    "fieldName": "AccountUsers.dateOfBirth",
    "dataType": "Date",
    "description": "Date of Birth"
  },
  {
    "fieldName": "AccountUsers.roleId",
    "dataType": "INTEGER",
    "description": "Their current Role ID"
  },
  {
    "fieldName": "AccountUsers.profilePicFileName",
    "dataType": "SRING",
    "description": "A URL to the users profile picture"
  },
  {
    "fieldName": "Total",
    "dataType": "INTEGER",
    "description": "The total account user records returned"
  }
]
```




## Response Example


```json
{
  "AccountUsers": [
    {
      "id": 871241241,
      "firstName": "Mighty",
      "lastName": "Mike",
      "emailAddress": "myemail@myemailaddress.com",
      "dateOfBirth": null,
      "registered": true,
      "roleId": 1,
      "profilePicFileName": "userContent/avatars/avatar-2.jpg"
    }
  ]
}
```

