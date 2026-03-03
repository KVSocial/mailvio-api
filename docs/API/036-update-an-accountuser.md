# Update an AccountUser

- Doc ID: 36
- Source URL: https://mail.mailvio.com/apidocs/36
- Parent ID: 15
- Requires Auth: Yes
- Request Method: put
- Request URL: /accountUser/:accountUserId
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Updates an accountUser.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "firstName",
    "description": "The first name of the user",
    "dataType": "STRING"
  },
  {
    "fieldName": "lastName",
    "description": "The last name of the user",
    "dataType": "STRING"
  },
  {
    "fieldName": "emailAddress",
    "description": "The email address of the user",
    "dataType": "STRING"
  },
  {
    "fieldName": "dateOfBirth",
    "description": "The date of birth of the user",
    "dataType": "DATE"
  },
  {
    "fieldName": "language",
    "description": "The default language of the user (for example \"en\")",
    "dataType": "STRING"
  },
  {
    "fieldName": "timeZone",
    "description": "The default time zone for the user (ie \"Europe/London\")",
    "dataType": "STRING"
  },
  {
    "fieldName": "dateFormat",
    "description": "The default date format for the user (ie \"DD/MM/YYYY\")",
    "dataType": "STRING"
  },
  {
    "fieldName": "profilePicFileName",
    "description": "The URI to for the users avatar image",
    "dataType": "STRING"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "True or false depending on the operation success"
  }
]
```



## Request Example

{
    "firstName": "Test",
    "lastName": "User",
    "emailAddress": "test@user.com",
    "dateOfBirth": 2018-01-01",
    "language": "en",
    "timeZone": "Europe/London",
    "dateFormat": "DD/MM/YYYY",
    "profilePicFileName": "https://cdn1.madeup.com/files/go/here/test.jpg"
}


## Response Example


```json
{
  "Success": true
}
```

