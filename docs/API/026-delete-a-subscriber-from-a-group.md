# Delete a Subscriber from a Group

- Doc ID: 26
- Source URL: https://mail.mailvio.com/apidocs/26
- Parent ID: 23
- Requires Auth: Yes
- Request Method: delete
- Request URL: /group/:groupId/subscriber
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Removes a subscriber, or subscribers from a group.</p>
<p>If the subscriber is still a member of other groups, the subscriber record is left intact and only the binding to the current group is removed. If the subscriber is only a member of this group, the entire record is deleted.</p>
<p>You must&nbsp;<strong>either</strong>&nbsp;push an array of "ids" or "emailAddresses" into this route.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "ids",
    "dataType": "STRING[]",
    "required": "on",
    "description": "Either a single subscriber id, or an array of subscriber ids to remove from the group."
  },
  {
    "fieldName": "emailAddresses",
    "dataType": "STRING[]",
    "description": "Either a single email address, or an array of email addresses to remove from the group.",
    "required": "on"
  },
  {
    "fieldName": "fromBlackList",
    "dataType": "BOOLEAN",
    "description": "Optional: If deleting subscribers from the blacklist group, removes blacklist flag on global subscriber record as well as deleting from group"
  },
  {
    "fieldName": "source",
    "dataType": "STRING",
    "description": "Optional: Delete only matching subscribers who have the status selected here. Valid values are \"Active\", \"In-Active\" and \"Unsubscribed\". Useful for deleting subscribers who are for example unsubscribed only."
  },
  {
    "fieldName": "all",
    "dataType": "BOOLEAN",
    "description": "Optional: If set to TRUE all subscribers will be deleted, no matter which ID's you select. The \"source\" field will still be honoured. Useful for deleting ALL Unsubscribers for example."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the delete was a success or not"
  }
]
```



## Request Example

Using subscriber Ids:

{
     "ids": [1,2,3,4]
}

Using emailAddresses:

{
     "emailAddresses": ["test1@test.com","test2@test.com"]
}


## Response Example


```json
{
  "Success": true
}
```

