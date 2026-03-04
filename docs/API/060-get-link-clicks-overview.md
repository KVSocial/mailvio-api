# Get Link Clicks Overview

- Doc ID: 60
- Source URL: https://mail.mailvio.com/apidocs/60
- Parent ID: 56
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/stats/clicked
- Published: Yes
- Last Updated: 2026-02-26T18:43:09.000Z

## Body

<p>Gets an array of the links that were automatically found in the template that was sent, along with overview stats for each link.</p>
<p>You can filter the request using the below options.</p>

## Related Articles

- None


## Query Fields


```json
[
  {
    "fieldName": "startDate",
    "dataType": "DATETIME",
    "description": "The date to start getting statistics from"
  },
  {
    "fieldName": "endDate",
    "dataType": "DATETIME",
    "description": "The date to end getting statistics from"
  }
]
```



## Response Fields


```json
[
  {
    "fieldName": "TemplateLinks",
    "dataType": "OBJECT[]"
  },
  {
    "fieldName": "TemplateLinks.id",
    "dataType": "INTEGER",
    "description": "The id of the Campaign Link"
  },
  {
    "fieldName": "TemplateLinks.name",
    "dataType": "STRING",
    "description": "The name of the link (if it has one)"
  },
  {
    "fieldName": "TemplateLinks.link",
    "dataType": "STRING",
    "description": "The link URI"
  },
  {
    "fieldName": "TemplateLinks.index",
    "dataType": "INTEGER",
    "description": "The data index number"
  },
  {
    "fieldName": "TemplateLinks.clicks",
    "dataType": "INTEGER",
    "description": "The number of clicks the link has recieved"
  },
  {
    "fieldName": "TemplateLinks.Unique",
    "dataType": "INTEGER",
    "description": "The number of unique clicks the link has received"
  }
]
```




## Response Example


```json
{
  "Opened": [
    {
      "sendDate": "2018-04-23T13:05:42.000Z",
      "openCount": 3,
      "openDate": "2018-04-23T16:07:51.000Z",
      "emailAddress": "test@thetester.com",
      "SubscriberId": 211987
    }
  ],
  "countTotal": 1
}
```

