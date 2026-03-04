# Retrieve all Groups

- Doc ID: 17
- Source URL: https://mail.mailvio.com/apidocs/17
- Parent ID: 16
- Requires Auth: Yes
- Request Method: get
- Request URL: /group
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Retrieve a list of all groups for an AccountMaster which the current logged in user has access to.</p>

## Related Articles

- None

## Request Fields


```json
[]
```



## Query Fields


```json
[
  {
    "fieldName": "sortColumn",
    "dataType": "STRING",
    "description": "The column to sort by"
  },
  {
    "fieldName": "sortOrder",
    "dataType": "STRING",
    "description": "The order to sort by \"ASC,DESC\""
  },
  {
    "fieldName": "searchText",
    "dataType": "STRING",
    "description": "Search for a group name"
  },
  {
    "fieldName": "startRecord",
    "dataType": "INTEGER",
    "description": "The record number to start at"
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "The number of records to return"
  },
  {
    "fieldName": "count",
    "dataType": "BOOLEAN",
    "description": "Wether the return the total subscribers in each group"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "dateCreated",
    "dataType": "DATETIME",
    "description": "The date/time the group was created"
  },
  {
    "fieldName": "defaultEmailSubject",
    "dataType": "STRING",
    "description": "The default email subject for campaigns, if there is one"
  },
  {
    "fieldName": "defaultFromEmailAddress",
    "dataType": "STRING",
    "description": "The default email address for campaigns, if there is one"
  },
  {
    "fieldName": "defaultFromName",
    "dataType": "STRING",
    "description": "The default from name for campaigns, if there is one"
  },
  {
    "fieldName": "defaultReplyAddress",
    "dataType": "STRING",
    "description": "The default reply address for campaigns, if there is one"
  },
  {
    "fieldName": "groupName",
    "dataType": "STRING",
    "description": "The name of the group"
  },
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "description": "The ID of the group"
  },
  {
    "fieldName": "lastUpdated",
    "dataType": "DATETIME",
    "description": "The date/time the group was last updated"
  },
  {
    "fieldName": "totalSubscribers",
    "dataType": "INTEGER",
    "description": "The total number of active subscribers in the group"
  },
  {
    "fieldName": "groupUsers",
    "dataType": "OBJECT",
    "description": "An object containing all accountUsers that have permission to access the group"
  },
  {
    "fieldName": "forms",
    "dataType": "INTEGER",
    "description": "The number of forms created and associated with this group"
  },
  {
    "fieldName": "public",
    "dataType": "BOOLEAN",
    "description": "Wether the group can be seen by all other staff members by default"
  },
  {
    "fieldName": "CreatedById",
    "dataType": "INTEGER",
    "description": "The ID of the staff member who created the group"
  },
  {
    "fieldName": "lastCleaned",
    "dataType": "DATETIME",
    "description": "The last date and time the list was cleaned."
  }
]
```




## Response Example


```json
{
  "dateCreated": "2018-01-01",
  "defaultEmailSubject": "Welcome to our email",
  "defaultFromEmailAddress": "test@test.com",
  "defaultFromName": "Mike Way",
  "defaultReplyAddress": "test@test.com",
  "groupName": "My group of subscribers",
  "id": 123,
  "lastUpdated": "2018-01-01",
  "totalSubscribers": 241421,
  "groupUsers": [],
  "forms": 1,
  "public": true,
  "CreatedById": 213123,
  "lastCleaned": null
}
```

