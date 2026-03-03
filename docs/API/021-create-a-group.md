# Create a Group

- Doc ID: 21
- Source URL: https://mail.mailvio.com/apidocs/21
- Parent ID: 16
- Requires Auth: Yes
- Request Method: post
- Request URL: /group
- Published: Yes
- Last Updated: 2026-02-28T13:51:27.000Z

## Body

<p>Create a new group.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "groupName",
    "required": "on",
    "dataType": "STRING",
    "description": "The name of the group to be created"
  },
  {
    "fieldName": "defaultFromName",
    "dataType": "STRING",
    "description": "The default FROM name for this group"
  },
  {
    "fieldName": "defaultFromEmailAddress",
    "dataType": "STRING",
    "description": "The default FROM email address for this group"
  },
  {
    "fieldName": "defaultReplyAddress",
    "dataType": "STRING",
    "description": "The default REPLY TO email address for this group"
  },
  {
    "fieldName": "defaultEmailSubject",
    "dataType": "STRING",
    "description": "The default email subject for this group"
  },
  {
    "fieldName": "sendNewSubscriberNotificationsTo",
    "dataType": "STRING",
    "description": "An email that will recieve new subscriber notifications"
  },
  {
    "fieldName": "sendNewUnsubscribeNotificationsTo",
    "dataType": "STRING",
    "description": "An email that will receive unsubscriber notifications"
  },
  {
    "fieldName": "sendDailyUpdateEmailTo",
    "dataType": "STRING",
    "description": "An email address that will receive daily update emails"
  },
  {
    "fieldName": "friendlyName",
    "dataType": "STRING",
    "description": "The friendly name for the group (This is what end users will see)"
  },
  {
    "fieldName": "signupReminderText",
    "dataType": "STRING",
    "description": "A reminder of where the subscribers were added to the group"
  },
  {
    "fieldName": "public",
    "required": "on",
    "dataType": "BOOLEAN",
    "description": "Whether other accountUsers under this accountMaster can see this group by default"
  },
  {
    "fieldName": "users",
    "dataType": "OBJECT[]",
    "description": "An array of accountUsers that have access to this group with if not public"
  },
  {
    "fieldName": "users.userId",
    "dataType": "INTEGER",
    "description": "The ID of the AccountUser to share with"
  },
  {
    "fieldName": "users.accessLevel",
    "dataType": "STRING",
    "description": "The access type given to the user. Can be READ or WRITE."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "groupId",
    "dataType": "INTEGER",
    "description": "The ID of the new group"
  }
]
```



## Request Example


```json
{
  "id": 123,
  "groupName": "My Test Group",
  "defaultFromName": "Mike Way",
  "defaultFromEmailAddress": "test@test.com",
  "defaultReplyAddress": "test@test.com",
  "defaultEmailSubject": "This is my subject",
  "sendNewSubscriberNotificationsTo": "test@test.com",
  "sendNewUnsubscribeNotificationsTo": "test@test.com",
  "sendDailyUpdateEmailTo": "test@test.com",
  "signupReminderText": "You joined this group when you registered on our website"
}
```



## Response Example


```json
{
  "groupId": 123123
}
```

