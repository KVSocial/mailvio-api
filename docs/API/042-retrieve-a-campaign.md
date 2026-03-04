# Retrieve a Campaign

- Doc ID: 42
- Source URL: https://mail.mailvio.com/apidocs/42
- Parent ID: 40
- Requires Auth: Yes
- Request Method: get
- Request URL: /campaign/:campaignId
- Published: Yes
- Last Updated: 2026-02-26T18:43:08.000Z

## Body

<p>Retrieves details about a campaign like the Campaign Name, which template was sent, which groups have been tagged, etc.</p>
<p>Does not retrieve statistics about a campaign.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "Campaign",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "Campaign.id",
    "dataType": "INTEGER",
    "description": "The ID of the campaign"
  },
  {
    "fieldName": "Campaign.campaignName",
    "dataType": "STRING",
    "description": "The friendly name of the campaign"
  },
  {
    "fieldName": "Campaign.subject",
    "dataType": "STRING",
    "description": "The email subject"
  },
  {
    "fieldName": "Campaign.fromAddress",
    "dataType": "STRING",
    "description": "The sent from email address"
  },
  {
    "fieldName": "Campaign.replyAddress",
    "dataType": "STRING",
    "description": "The reply-to email address"
  },
  {
    "fieldName": "Campaign.fromName",
    "dataType": "STRING",
    "description": "The name of the sender"
  },
  {
    "fieldName": "Campaign.startDate",
    "dataType": "DATETIME",
    "description": "The date/time the campaign is/was scheduled to start"
  },
  {
    "fieldName": "Campaign.status",
    "dataType": "STRING",
    "description": "The current status of the campaign. Values are \"Draft\",\"Awaiting Start\",\"Queued\",\"Processing\",\"Sending\",\"Finished\",\"Errored\""
  },
  {
    "fieldName": "Campaign.templateHtml",
    "dataType": "TEXT",
    "description": "The HTML of the template that is being sent"
  },
  {
    "fieldName": "Campaign.error",
    "dataType": "STRING",
    "description": "If there has been an error in sending, a text description of the problem will go here"
  },
  {
    "fieldName": "Campaign.finishedDate",
    "dataType": "DATETIME",
    "description": "The date/time the campaign finished sending"
  },
  {
    "fieldName": "Campaign.type",
    "dataType": "INTEGER",
    "description": "The type of campaign. 1 is a normal campaign."
  },
  {
    "fieldName": "Campaign.resendAfter",
    "dataType": "INTEGER",
    "description": "The number of days to wait until resending to people who didn't open the email the first time."
  },
  {
    "fieldName": "Campaign.addUtmTracking",
    "dataType": "BOOLEAN",
    "description": "Whther UTM tracking links are added to each link"
  },
  {
    "fieldName": "Campaign.notes",
    "dataType": "TEXT",
    "description": "Notes against a campaign"
  },
  {
    "fieldName": "Campaign.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The accountMaster ID that owns this campaign."
  },
  {
    "fieldName": "Campaign.AccountUserId",
    "dataType": "INTEGER",
    "description": "The accountUser ID for the user that created the campaign."
  },
  {
    "fieldName": "Campaign.SiteMasterId",
    "dataType": "INTEGER",
    "description": "The agency ID that owns the accountMaster."
  },
  {
    "fieldName": "Campaign.createdAt",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was created."
  },
  {
    "fieldName": "Campaign.updatedAt",
    "dataType": "DATETIME",
    "description": "The date/time the campaign was last updated."
  },
  {
    "fieldName": "Campaign.TemplateId",
    "dataType": "INTEGER",
    "description": "The ID of the template that was sent."
  },
  {
    "fieldName": "Campaign.TrackingDomainId",
    "dataType": "INTEGER",
    "description": "If the user has setup a tracking domain, an id may be present here."
  },
  {
    "fieldName": "Campaign.CdnDomainId",
    "dataType": "INTEGER",
    "description": "If the user has setup a cdn domain, an id may be present here."
  },
  {
    "fieldName": "Campaign.Template",
    "dataType": "OBJECT",
    "description": "The entire template object for the template sent"
  },
  {
    "fieldName": "Campaign.Groups",
    "dataType": "OBJECT[]",
    "description": "A list of groups that have been either sent to, or excluded from this campaign."
  },
  {
    "fieldName": "Campaign.Groups[].CampaignGroup",
    "dataType": "OBJECT",
    "description": ""
  },
  {
    "fieldName": "Campaign.Groups[].CampaignGroup.include",
    "dataType": "BOOLEAN",
    "description": "Whether this group is included or excluded from sending"
  },
  {
    "fieldName": "Campaign.Segments",
    "dataType": "OBJECT[]",
    "description": "A list of segments that have either been sent to, or excluded from this campaign."
  },
  {
    "fieldName": "Campaign.Segments[].CampaignSegment",
    "dataType": "OBJECT",
    "description": ""
  },
  {
    "fieldName": "Campaign.Segments[].CampaignSegment.include",
    "dataType": "BOOLEAN",
    "description": "Whether this segment is included or excluded from sending"
  }
]
```




## Response Example

{
    "Campaign": {
        "id": 2408,
        "campaignName": "Test",
        "subject": "This is a quick test",
        "fromAddress": "mike.way@thisisatest.com",
        "replyAddress": "mike.way@thisisatest.com",
        "fromName": "Mike",
        "startDate": "2018-08-13T10:11:42.000Z",
        "status": "Finished",
        "templateHtml": "<html><body></body></html>",
        "error": null,
        "finishedDate": "2018-08-13T10:12:43.000Z",
        "type": 1,
        "notes": "",
        "resendAfter": 0,
        "AccountMasterId": 41246,
        "AccountUserId": 6124124,
        "SiteMasterId": 1,
        "createdAt": "2018-08-13T10:11:42.000Z",
        "updatedAt": "2018-08-13T10:12:43.000Z",
        "TemplateId": 6064,
        "TrackingDomainId": null,
        "CdnDomainId": null,
        "Template": {},
        "Groups":[],
        "Segments": []
}
