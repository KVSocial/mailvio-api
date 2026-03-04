# Bulk Add/Update Multiple Subscribers

- Doc ID: 101
- Source URL: https://mail.mailvio.com/apidocs/101
- Parent ID: 23
- Requires Auth: Yes
- Request Method: put
- Request URL: /subscriber/bulk
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Use this route to add or update&nbsp;subscribers in bulk. This route should be used if you are planning to send many API requests.</p>
<p>This route queues updates rather than processing them in real-time, and as such can handle many many subscriber adds/updates per day.<br /><br />Send a JSON array as detailed below, containing the email address and/or subscriber id and we will attempt to insert new subscribers, or update any&nbsp;existing records.<br /><br /><strong>For new Subscribers:</strong><br />If you are adding new subscribers via this route, make sure to include the groupId of the group you would like them to appear within&nbsp;each subscriber object.<br />If groupId is not found they will be added to the first group that was created.<br /><br />This route always returns Success: True, because it does not process updates instantly. Instead it adds them to a queue.</p>

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
    id: 123123 //optional. The existing subscriber id
    groupId: 1223 //only needed when adding new subscribers
}]


## Response Example


```json
{
  "success": true
}
```

