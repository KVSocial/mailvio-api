# Pause a Campaign

- Doc ID: 52
- Source URL: https://mail.mailvio.com/apidocs/52
- Parent ID: 40
- Requires Auth: Yes
- Request Method: put
- Request URL: /campaign/:campaignId/cancel
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Cancels and campaign if it has not started yet.</p>

## Related Articles

- None

## Request Fields


```json
[]
```




## Response Fields


```json
[
  {
    "fieldName": "Success",
    "dataType": "BOOLEAN",
    "description": "Wether the cancellation was a success"
  }
]
```




## Response Example


```json
{
  "Success": true
}
```

