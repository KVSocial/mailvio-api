# Bulk Update Single Subscribers

- Doc ID: 92
- Source URL: https://mail.mailvio.com/apidocs/92
- Parent ID: 23
- Requires Auth: Yes
- Request Method: put
- Request URL: /subscriber/bulk/:id
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Use this route to update single subscribers in bulk. This route should be used if you are planning to send many API requests.</p>
<p>This route queues updates rather than processing them in real-time, and as such can handle many subscriber updates per day.<br /><br />This route always returns Success: True, because it does not process updates instantly. Instead, it adds them to a queue.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "REQUIRED",
    "required": "on",
    "description": "The email address of the subscriber"
  },
  {
    "fieldName": "blackListed",
    "dataType": "BOOLEAN",
    "description": "Set true to set the email address as blacklisted, which means it cannot be sent to."
  },
  {
    "fieldName": "customFields",
    "dataType": "OBJECT[]",
    "description": "An array of custom field objects"
  }
]
```



## Query Fields


```json
[]
```



## Response Fields


```json
[
  {
    "fieldName": "success",
    "dataType": "BOOLEAN",
    "description": "Wether the request was a success or not"
  }
]
```



## Request Example

[{
    "emailAddress": "test@test.com",
    "blackListed": false,
    "customFields": {
          1234: "Mike",
          1235: "Way"
     },
}]


## Response Example


```json
{
  "success": true
}
```

