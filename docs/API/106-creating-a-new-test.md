# Creating a new Test

- Doc ID: 106
- Source URL: https://mail.mailvio.com/apidocs/106
- Parent ID: 105
- Requires Auth: Yes
- Request Method: post
- Request URL: /spamTest/campaign/:campaignId
- Published: Yes
- Last Updated: 2026-02-26T18:43:14.000Z

## Body

<p>Create a new Inbox Test by sending a campaign ID. You will receive details of the test in response which you can then use to poll for results.<br /><br />Note: The campaign ID you send must be for a campaign in DRAFT stage.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "id",
    "dataType": "INT",
    "description": "The ID of the spam test. Use this to pull for results"
  }
]
```




## Response Example


```json
{
  "id": 44624
}
```

