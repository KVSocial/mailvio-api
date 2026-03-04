# Retrieve a Subscriber

- Doc ID: 79
- Source URL: https://mail.mailvio.com/apidocs/79
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /subscriber/:subscriberId
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Retrieve a subscriber including groups and custom fields.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Subscriber",
    "dataType": "Object"
  },
  {
    "fieldName": "Subscriber.emailAddress",
    "dataType": "STRING",
    "description": "The email address of the subscriber"
  },
  {
    "fieldName": "Subscriber.blackListed",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is blacklisted"
  },
  {
    "fieldName": "Subscriber.bounce",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber has hard bounced"
  },
  {
    "fieldName": "Subscriber.score",
    "dataType": "INTEGER",
    "description": "The current score of the subscriber"
  },
  {
    "fieldName": "Subscriber.importId",
    "dataType": "INTEGER",
    "description": "If the subscriber was originally imported from a file or app, the ID of the transaction will be recorded here"
  },
  {
    "fieldName": "Subscriber.customFields",
    "dataType": "ARRAY",
    "description": "An array of custom field names and values for the subscriber"
  },
  {
    "fieldName": "Subscriber.country",
    "dataType": "STRING",
    "description": "The country the subscriber has been detected as coming from"
  },
  {
    "fieldName": "Subscriber.lastOpened",
    "dataType": "DATETIME",
    "description": "The last time the subscriber opened an email"
  },
  {
    "fieldName": "Subscriber.lastClicked",
    "dataType": "DATETIME",
    "description": "The last time the subscriber clicked a link"
  },
  {
    "fieldName": "Subscriber.createdAt",
    "dataType": "DATETIME",
    "description": "The date the subscriber was created"
  },
  {
    "fieldName": "Subscriber.updatedAt",
    "dataType": "DATETIME",
    "description": "The date the subscriber was last updated"
  },
  {
    "fieldName": "Subscriber.importDataId",
    "dataType": "DATETIME",
    "description": "If the subscriber was originally imported from a file or app, the ID of the file will be recorded here"
  },
  {
    "fieldName": "Subscriber.Groups",
    "dataType": "ARRAY",
    "description": "The groups the subscriber is a member of"
  }
]
```




## Response Example


```json
{
  "Subscriber": {
    "emailAddress": "test@test.com",
    "blackListed": false,
    "bounce": false,
    "score": null,
    "importId": null,
    "customFields": [
      {
        "id": 123,
        "fieldName": "FIRSTNAME",
        "fieldDesc": "First name",
        "fieldType": "TEXT",
        "isRequired": 0,
        "AccountMasterId": 32322,
        "hidden": 0,
        "customerHidden": 0,
        "options": null,
        "createdAt": "2019-04-11T09:55:06.000Z",
        "updatedAt": "2019-04-11T09:55:06.000Z",
        "value": "Test"
      },
      {
        "id": 124,
        "fieldName": "LASTNAME",
        "fieldDesc": "Last name",
        "fieldType": "TEXT",
        "isRequired": 0,
        "AccountMasterId": 32322,
        "hidden": 0,
        "customerHidden": 0,
        "options": null,
        "createdAt": "2019-04-11T09:55:15.000Z",
        "updatedAt": "2019-04-11T09:55:15.000Z",
        "value": "User"
      }
    ]
  }
}
```

