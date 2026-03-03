# Get a Group

- Doc ID: 19
- Source URL: https://mail.mailvio.com/apidocs/19
- Parent ID: 16
- Requires Auth: Yes
- Request Method: get
- Request URL: /group/:groupId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Retreives all details about a specific group</p>

## Related Articles

- None


## Query Fields


```json
[]
```



## Response Fields


```json
[
  {
    "fieldName": "Group",
    "dataType": "Object"
  },
  {
    "fieldName": "Group.id",
    "dataType": "INTEGER",
    "description": "The group ID"
  },
  {
    "fieldName": "Group.groupName",
    "dataType": "STRING",
    "description": "The name of the group"
  },
  {
    "fieldName": "Group.defaultFromName",
    "dataType": "STRING",
    "description": "The FROM name that will be added to mailouts by default"
  },
  {
    "fieldName": "Group.defaultFromEmailAddress",
    "dataType": "STRING",
    "description": "The FROM email address that will be added to mailouts by default"
  },
  {
    "fieldName": "Groups.defaultReplyAddress",
    "dataType": "STRING",
    "description": "The REPLY TO email address that will be added to mailouts by default"
  },
  {
    "fieldName": "Group.defaultEmailSubject",
    "dataType": "STRING",
    "description": "The default email subject for mailouts sent from the group"
  },
  {
    "fieldName": "Group.sendNewSubscriberNotificationsTo",
    "dataType": "STRING",
    "description": "When a subscriber joins this group, this email is notified"
  },
  {
    "fieldName": "Group.sendNewUnsubscribeNotificationsTo",
    "dataType": "STRING",
    "description": "When a subsciber unsubscribes from this group, this email is notified"
  },
  {
    "fieldName": "Group.sendDailyUpdateEmailTo",
    "dataType": "STRING",
    "description": "This address receives daily updates about this group"
  },
  {
    "fieldName": "Group.signupReminderText",
    "dataType": "STRING",
    "description": "A reminder of where the subscribers were added to the group"
  },
  {
    "fieldName": "Group.createdAt",
    "dataType": "DATETIME",
    "description": "The datetime the group was created"
  },
  {
    "fieldName": "Group.updatedAt",
    "dataType": "DATETIME",
    "description": "The datetime the group was last updated"
  },
  {
    "fieldName": "Group.subscribersCount",
    "dataType": "INTEGER",
    "description": "The number of subscribers in the group"
  }
]
```




## Response Example


```json
{
  "Group": {
    "id": 123,
    "groupName": "My Test Group",
    "defaultFromName": "Mike Way",
    "defaultFromEmailAddress": "test@test.com",
    "defaultReplyAddress": "test@test.com",
    "defaultEmailSubject": "This is my subject",
    "sendNewSubscriberNotificationsTo": "test@test.com",
    "sendNewUnsubscribeNotificationsTo": "test@test.com",
    "sendDailyUpdateEmailTo": "test@test.com",
    "signupReminderText": "You joined this group when you registered on our website",
    "createdAt": "2018-01-01",
    "updatedAt": "2018-01-10",
    "subscribersCount": 123123
  }
}
```

