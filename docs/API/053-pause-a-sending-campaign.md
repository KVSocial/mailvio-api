# Pause a Sending Campaign

- Doc ID: 53
- Source URL: https://mail.mailvio.com/apidocs/53
- Parent ID: 40
- Requires Auth: Yes
- Request Method: put
- Request URL: /campaign/:campaignId/pause
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Pause a campaign if it is sending.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the pause was a success"
  }
]
```




## Response Example


```json
{
  "Success": true
}
```

