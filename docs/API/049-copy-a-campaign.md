# Copy a Campaign

- Doc ID: 49
- Source URL: https://mail.mailvio.com/apidocs/49
- Parent ID: 40
- Requires Auth: Yes
- Request Method: post
- Request URL: /campaign/copy
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Creates a copy of a campaign which you can then modify and send.</p>
<p>The new campaign will be set to "Draft" mode.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "id",
    "dataType": "INTEGER",
    "required": "on",
    "description": "CampaignId to copy/clone"
  },
  {
    "fieldName": "name",
    "dataType": "STRING",
    "description": "Specify a name for the campaign. Otherwise the name is set to the original campaign name with a (copy) at the end."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "CampaignId",
    "dataType": "INTEGER",
    "description": "The id of the new campaign"
  }
]
```



## Request Example


```json
{
  "id": 123123,
  "name": "My new campaign"
}
```



## Response Example


```json
{
  "CampaignId": 21323
}
```

