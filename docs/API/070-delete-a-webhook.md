# Delete a Webhook

- Doc ID: 70
- Source URL: https://mail.mailvio.com/apidocs/70
- Parent ID: 67
- Requires Auth: Yes
- Request Method: delete
- Request URL: /webhook/:webhookId
- Published: Yes
- Last Updated: 2026-02-28T09:52:20.000Z

## Body

<p>Deletes an existing webhook. Once deleted the webhook will stop functioning completely.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "deleted",
    "dataType": "BOOLEAN",
    "description": "True if the webhook was deleted."
  }
]
```




## Response Example


```json
{
  "deleted": true
}
```

