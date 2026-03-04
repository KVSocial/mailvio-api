# Get Subscribers for a Group

- Doc ID: 25
- Source URL: https://mail.mailvio.com/apidocs/25
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /group/:groupId/subscriber
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Retrieves a list of subscribers that are bound to a group. Maximum 1000 records. Please use paging if more than 1000 results are required.</p>

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
    "fieldName": "startRecord",
    "dataType": "INTEGER",
    "description": "The record number to start on"
  },
  {
    "fieldName": "recordLimit",
    "dataType": "INTEGER",
    "description": "The number of records to return"
  },
  {
    "fieldName": "sortOrder",
    "description": "The order to sort by \"ASC,DESC\""
  },
  {
    "fieldName": "searchText",
    "description": "Search for subscriber email address"
  },
  {
    "fieldName": "sortColumn",
    "description": "The column to sort by"
  },
  {
    "fieldName": "segmentId",
    "description": "The id of a segment to apply to filter by"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "Subscribers",
    "dataType": "OBJECT[]",
    "description": ""
  },
  {
    "fieldName": "Subscribers.subscriberId",
    "dataType": "INTEGER",
    "description": "The subscriber ID"
  },
  {
    "fieldName": "Subscribers.addedToGroup",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber was added to the group"
  },
  {
    "fieldName": "Subscribers.lastUpdated",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber was last updated"
  },
  {
    "fieldName": "Subscribers.unsubscribed",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber has unsubscribed to this group"
  },
  {
    "fieldName": "Subscribers.bounced",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber has bounced"
  },
  {
    "fieldName": "Subscribers.active",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is active (Can be emailed)"
  },
  {
    "fieldName": "Subscribers.emailAddress",
    "dataType": "STRING",
    "description": "The email address of the subscriber"
  },
  {
    "fieldName": "Subscribers.blackListed",
    "dataType": "BOOLEAN",
    "description": "Wether the subscriber is blacklisted"
  },
  {
    "fieldName": "Subscribers.customFields",
    "dataType": "OBJECT[]",
    "description": "Custom fields for the subscriber"
  },
  {
    "fieldName": "Subscribers.customFields.id",
    "dataType": "INTEGER",
    "description": "id of the custom field"
  },
  {
    "fieldName": "Subscribers.customFields.fieldDesc",
    "dataType": "STRING",
    "description": "The friendly name of the field"
  },
  {
    "fieldName": "Subscribers.customFields.fieldName",
    "dataType": "STRING",
    "description": "The merge field name"
  },
  {
    "fieldName": "Subscribers.customFields.value",
    "dataType": "STRING",
    "description": "The value of the custom field"
  },
  {
    "fieldName": "count",
    "dataType": "INTEGER",
    "description": "The total number of results"
  }
]
```




## Response Example

{
    "Subscribers": 
    {
        "subscriberId": 1234,
        "addedToGroup": "2018-01-01",
        "lastUpdated": "2018-02-01",
        "unsubscribed": false,
        "bounced": false,
        "active": true,
        "emailAddress": "test@test.com",
        "blackListed" false
    },
    "Count": 1
}
