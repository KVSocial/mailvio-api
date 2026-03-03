# Copy / Move Subscriber(s) to another Group

- Doc ID: 84
- Source URL: https://mail.mailvio.com/apidocs/84
- Parent ID: 23
- Requires Auth: Yes
- Request Method: post
- Request URL: /group/:groupid/subscriber/copy
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Copies or moves subscribers from one group to another, simply by posting an array of subscriber id's and the new group id</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "subscriberIds",
    "dataType": "ARRAY",
    "required": "on",
    "description": "An array of subscriber ids to copy"
  },
  {
    "fieldName": "destination",
    "dataType": "INTEGER",
    "required": "on",
    "description": "The ID of the group to copy the subscriber to"
  },
  {
    "fieldName": "delete",
    "dataType": "BOOLEAN",
    "description": "Used to MOVE subscribers from one group to another. Set true to delete the original group subscriber."
  },
  {
    "fieldName": "source",
    "dataType": "STRING",
    "description": "Used to filter subscribers based on status. Values are \"Active\",\"In_active\" and \"Unsubscribed\""
  }
]
```



## Query Fields


```json
[]
```



## Response Fields


```json
[]
```



## Request Example


```json
{
  "subscriberIds": [
    123456,
    54321
  ],
  "destination": 12345
}
```



## Response Example


```json
{
  "Success": true
}
```

