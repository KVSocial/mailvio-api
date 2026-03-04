# Check sending limit before send

- Doc ID: 44
- Source URL: https://mail.mailvio.com/apidocs/44
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId/checksendinglimit
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Checks a campaign can be sent based on the users current subscription and how many subscribers they are sending to.</p>
<p>Useful for checking a campaign is ok to be sent and that the subscriber count will not breach the account subscription level,&nbsp; before actually sending it.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "sendingLimitReached",
    "dataType": "BOOLEAN",
    "description": "Wether the limit has been reach. If true, a campaign will error when sent."
  },
  {
    "fieldName": "totalUniqueSentToThisMonth",
    "dataType": "INTEGER",
    "description": "The total number of subscribers sent to so far in the current billing period"
  },
  {
    "fieldName": "totalSubscribersIncludingCampaign",
    "dataType": "INTEGER",
    "description": "The toral number of subscribers being sent to in the current campaign"
  },
  {
    "fieldName": "currentPlanLimit",
    "dataType": "INTEGER",
    "description": "The current monthly limit of the account subscription level"
  }
]
```




## Response Example


```json
{
  "sendingLimitReached": false,
  "totalUniqueSentToThisMonth": "0",
  "totalSubscribersIncludingCampaign": "3",
  "currentPlanLimit": 10000250
}
```

