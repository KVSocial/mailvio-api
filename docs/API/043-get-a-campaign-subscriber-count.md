# Get a campaign subscriber count

- Doc ID: 43
- Source URL: https://mail.mailvio.com/apidocs/43
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/count
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Retrieves a quick count of the subscribers against a campaign. Useful for quickly&nbsp;seeing how many subscribers are going to be sent to in a campaign once segments, groups, and exlusions have been applied.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Count",
    "dataType": "INTEGER",
    "description": "The number of subscribers that will be sent to"
  }
]
```




## Response Example


```json
{
  "Count": 12345
}
```

