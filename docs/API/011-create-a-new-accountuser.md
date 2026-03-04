# Create a new AccountUser

- Doc ID: 11
- Source URL: https://mail.mailvio.com/apidocs/11
- Parent ID: 15
- Requires Auth: Yes
- Request Method: post
- Request URL: /accountMaster/register
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Creates a new accountUser for the current accountMaster.</p>
<p>If an AccountUser does not already exist on the&nbsp;Mailvio&nbsp;platform, they will be automatically sent an email asking them wether they wish to proceed with the registration. They will not be marked as "Active" until this occurs.</p>

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
    "fieldName": "RoleId",
    "dataType": "INTEGER",
    "description": "The ID of the role to assign. If ommitted users are automatically added as \"Standard\" users."
  },
  {
    "fieldName": "firstName",
    "dataType": "STRING",
    "description": "The first name of the user"
  },
  {
    "fieldName": "lastName",
    "dataType": "STRING",
    "description": "The last name of the user"
  },
  {
    "fieldName": "dateOfBirth",
    "dataType": "DATE",
    "description": "The date of birth of the new user (yyyy-mm-dd)"
  },
  {
    "fieldName": "language",
    "dataType": "STRING",
    "description": "The default language for the new user"
  },
  {
    "fieldName": "timeZone",
    "dataType": "STRING",
    "description": "The default timezone for the new user"
  },
  {
    "fieldName": "dateFormat",
    "dataType": "STRING",
    "description": "The default date format for the new user"
  }
]
```

## Response Fields

```json
[
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "description": "The new AccountUser ID"
  },
  {
    "fieldName": "firstName",
    "dataType": "STRING",
    "description": "The first name of the user"
  },
  {
    "fieldName": "lastName",
    "dataType": "STRING",
    "description": "The last name of the user"
  },
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "description": "The email address of the user"
  },
  {
    "fieldName": "dateOfBirth",
    "dataType": "DATE",
    "description": "The date of birth of the user"
  },
  {
    "fieldName": "registered",
    "dataType": "BOOLEAN",
    "description": "Wether the user is already registered on the platform. (Maybe they already belong to another accountMaster)"
  }
]
```

## Request Example

```json
{
  "emailAddress": "test@test.com",
  "RoleId": "123",
  "firstName": "Mike",
  "lastName": "Way",
  "dateOfBirth": "2017-01-01"
}
```

## Response Example

```json
{
  "id": 992313,
  "firstName": "Mike",
  "lastName": "Way",
  "emailAddress": "test@test.com",
  "dateOfBirth": "2017-01-01",
  "registered": true
}
```
