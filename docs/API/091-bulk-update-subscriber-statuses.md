# Bulk Update Subscriber Statuses

- Doc ID: 91
- Source URL: https://mail.mailvio.com/apidocs/91
- Parent ID: 23
- Requires Auth: Yes
- Request Method: post
- Request URL: /subscriber/bulk/changeStatus
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Use this route to update the status of subscribers. This route should be used if you are planning to update lots of subscriber in one call, or if you are planning to send many API requests in a day.</p>
<p>This route always returns Success: True, because it does not process updates instantly. Instead it adds them to a queue.<br />Using this route allows for many large requests in one day.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "subscriberIds",
    "dataType": "INTEGER[]",
    "required": "on",
    "description": "A single subscriber ID, or a numeric array of Subscribers Ids"
  },
  {
    "fieldName": "newStatus",
    "dataType": "STRING",
    "required": "on",
    "description": "The new status of the subscriber(s). Can be \"active\",\"bounced\" or \"blacklisted\""
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "Wether the request was a success"
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
    4
  ],
  "newStatus": "active"
}
```



## Response Example

{
     success: true
}
