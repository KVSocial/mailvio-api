# Change status of Subscriber(s)

- Doc ID: 28
- Source URL: https://mail.mailvio.com/apidocs/28
- Parent ID: 23
- Requires Auth: Yes
- Request Method: post
- Request URL: /group/:groupId/subscriber/changeStatus
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Change the status of a subscriber one by one, or en mass. For example you could change a subscriber from ACTIVE to BLACKLISTED.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "subscriberIds",
    "dataType": "INTEGER[]",
    "required": "on",
    "description": "An array of subscriber ids that will be affected"
  },
  {
    "fieldName": "newStatus",
    "dataType": "STRING",
    "required": "on",
    "description": "The new status for the subscriber(s). Can be \"active\", \"inactive\", \"unsubscribed\", \"bounce\" or \"blacklisted\""
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the operation was a success"
  }
]
```



## Request Example


```json
{
  "subscriberIds": [
    1,
    2,
    3,
    4,
    5,
    6
  ],
  "newStatus": "active"
}
```



## Response Example


```json
{
  "Success": true
}
```

