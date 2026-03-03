# Retrieving Subscriber Statistics

- Doc ID: 100
- Source URL: https://mail.mailvio.com/apidocs/100
- Parent ID: 23
- Requires Auth: Yes
- Request Method: get
- Request URL: /subscriber/:id/stats
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Use this route to retrieve statistics for a Subscriber. Includes last known location, sends, opens, bounces, etc.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Stats",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Stats.automations",
    "dataType": "ARRAY",
    "description": "An array of automation steps this subscriber completed."
  },
  {
    "fieldName": "Stats.bounces",
    "dataType": "ARRAY",
    "description": "An array of each bounce that has occured for this subscriber."
  },
  {
    "fieldName": "Stats.clicks",
    "dataType": "ARRAY",
    "description": "An array of each link this subscriber has clicked."
  },
  {
    "fieldName": "Stats.firstOpen",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber first ever opened an email."
  },
  {
    "fieldName": "Stats.geolocation",
    "dataType": "OBJECT",
    "description": "Details of the last known physical location of the subscriber"
  },
  {
    "fieldName": "Stats.lastOpen",
    "dataType": "DATETIME",
    "description": "The date/time the subscriber last opened an email."
  },
  {
    "fieldName": "Stats.opens",
    "dataType": "ARRAY",
    "description": "An array of each instance the subscriber has opened a campaign."
  },
  {
    "fieldName": "Stats.replies",
    "dataType": "ARRAY",
    "description": "An array of each reply the subscriber has sent."
  },
  {
    "fieldName": "Stats.sends",
    "dataType": "ARRAY",
    "description": "An array of each campaign or transaction sent to the suscriber."
  },
  {
    "fieldName": "Stats.tracking",
    "dataType": "ARRAY",
    "description": "An array of every web page the subscriber has visited via Web Tracking"
  }
]
```




## Response Example

{
    Stats: {
        automations: [],
        bounces: [],
        clicks: [],
        firstOpen: "2020-05-11T12:32:09.000Z",
        geolocation: {},
        lastOpen: "2020-05-11T12:32:09.000Z",
        opens: [],
        replies: [],
        sends: [],
        tracking: []
    }
}
