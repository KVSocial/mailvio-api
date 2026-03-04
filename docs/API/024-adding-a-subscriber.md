# Adding a Subscriber

- Doc ID: 24
- Source URL: https://mail.mailvio.com/apidocs/24
- Parent ID: 23
- Requires Auth: Yes
- Request Method: post
- Request URL: /group/:groupId/subscriber
- Published: Yes
- Last Updated: 2026-02-26T20:18:28.000Z

## Body

<p>Create a new subscriber within a Group</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The email address of the subscriber"
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
    "dataType": "OBJECT[]",
    "description": "An array of custom field objects. You can use either the MERGE TAG or the ID of the custom field here."
  },
  {
    "fieldName": "unsubscribe",
    "dataType": "BOOLEAN",
    "required": "",
    "description": "Wether the subscriber is set to Unsubscribed. Set TRUE for Unsubscribed."
  },
  {
    "fieldName": "bounced",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is set to Bounced. Set TRUE for Bounced."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "subscriberId",
    "dataType": "INTEGER",
    "description": "The ID of the new subscriber"
  },
  {
    "fieldName": "addedToGroup",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber was added"
  },
  {
    "fieldName": "lastUpdated",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber was last updated"
  },
  {
    "fieldName": "unsubscribed",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is unsubscribed"
  },
  {
    "fieldName": "bounced",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber has bounced"
  },
  {
    "fieldName": "active",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is Active (Can be mailed to)"
  },
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "description": "The email address of the new subscriber"
  },
  {
    "fieldName": "blackListed",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is Blacklisted"
  },
  {
    "fieldName": "customFields",
    "dataType": "OBJECT",
    "description": "An object of custom fields associated with the subscriber"
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

"Subscriber": {
    "subscriberId":  123123,
    "addedToGroup": "2018-01-01"
    "lastUpdated": "2018-01-01",
    "unsubscribed": false,
    "bounced": false,
    "active": true,
    "emailAddress": "test@test.com",
    "blackListed": false,
    "customFields": {
          1234: "Mike",
          1235: "Way"
     }
 }
