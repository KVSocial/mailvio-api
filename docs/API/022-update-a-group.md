# Update a Group

- Doc ID: 22
- Source URL: https://mail.mailvio.com/apidocs/22
- Parent ID: 16
- Requires Auth: Yes
- Request Method: put
- Request URL: /group/:groupId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Updates a group</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "groupName",
    "dataType": "STRING",
    "description": "The group name"
  },
  {
    "fieldName": "defaultFromName",
    "dataType": "STRING",
    "description": "The default name to use in the FROM field in email campaigns"
  },
  {
    "fieldName": "defaultFromEmailAddress",
    "dataType": "STRING",
    "description": "The default email address to use in the FROM field in email campaigns"
  },
  {
    "fieldName": "defaultReplyAddress",
    "dataType": "STRING",
    "description": "The default reply email address to use in the REPLY TO field in email campaigns"
  },
  {
    "fieldName": "defaultEmailSubject",
    "dataType": "STRING",
    "description": "The default email subject for campaigns sent to this group"
  },
  {
    "fieldName": "sendNewSubscriberNotificationsTo",
    "dataType": "STRING",
    "description": "The email address to send new subscriber notifications to (Leave blank for none)"
  },
  {
    "fieldName": "sendNewUnsubscribeNotificationsTo",
    "dataType": "STRING",
    "description": "The email address to send new unsubscriber notifications to (Leave blank for none)"
  },
  {
    "fieldName": "sendDailyUpdateEmailTo",
    "dataType": "STRING",
    "description": "The email address to send daily email updates to (Leave blank for none)"
  },
  {
    "fieldName": "signupReminderText",
    "dataType": "STRING",
    "description": "A reminder of where the subscribers were added to the group"
  },
  {
    "fieldName": "friendlyName",
    "dataType": "STRING",
    "description": "\tThe friendly name for the group (This is what end users will see)"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "groupName",
    "dataType": "STRING"
  },
  {
    "fieldName": "defaultFromName",
    "dataType": "STRING"
  },
  {
    "fieldName": "defaultFromEmailAddress",
    "dataType": "STRING"
  },
  {
    "fieldName": "defaultReplyAddress",
    "dataType": "STRING"
  },
  {
    "fieldName": "defaultEmailSubject",
    "dataType": "STRING"
  },
  {
    "fieldName": "sendNewSubscriberNotificationsTo",
    "dataType": "STRING"
  },
  {
    "fieldName": "sendNewUnsubscribeNotificationsTo",
    "dataType": "STRING"
  },
  {
    "fieldName": "sendDailyUpdateEmailTo",
    "dataType": "STRING"
  },
  {
    "fieldName": "signupReminderText",
    "dataType": "STRING"
  }
]
```



## Request Example


```json
{
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
  "Group": {
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
}
```

