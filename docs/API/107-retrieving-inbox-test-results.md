# Retrieving Inbox Test Results

- Doc ID: 107
- Source URL: https://mail.mailvio.com/apidocs/107
- Parent ID: 105
- Requires Auth: Yes
- Request Method: get
- Request URL: /spamTest/:inboxTestId
- Published: Yes
- Last Updated: 2026-02-26T18:43:14.000Z

## Body

<p>Retrieve an Inbox Test result.&nbsp;We recommend polling for around 4 minutes to allow&nbsp;all results to come in.</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "emailSubject",
    "dataType": "STRING",
    "description": "The email subject that was sent"
  },
  {
    "fieldName": "emailFromAddress",
    "dataType": "STRING",
    "description": "The email address the email was sent from"
  },
  {
    "fieldName": "emailFromName",
    "dataType": "STRING",
    "description": "The name the email was sent from"
  },
  {
    "fieldName": "emailHeaders",
    "dataType": "ARRAY",
    "description": "Any additional email headers that were sent"
  },
  {
    "fieldName": "spamAssassinResults",
    "dataType": "ARRAY",
    "description": "An array of any spam Assassin results"
  },
  {
    "fieldName": "barracudaResults",
    "dataType": "ARRAY",
    "description": "An array of any Barracuda results"
  },
  {
    "fieldName": "devieryStats",
    "dataType": "OBJECT",
    "description": "In depth stats relating to delivery, what was inboxed, spammed, etc."
  },
  {
    "fieldName": "devieryStats.totalSpam",
    "dataType": "INTEGER",
    "description": "The number of emails that landed in the spam folder"
  },
  {
    "fieldName": "deliveryStats.totalInbox",
    "dataType": "INTEGER",
    "description": "The number of emails that landed in the Inbox or Promotions folders."
  },
  {
    "fieldName": "deliveryStats.totalTests",
    "dataType": "INTEGER",
    "description": "The number of email tests that were sent"
  },
  {
    "fieldName": "status",
    "dataType": "INTEGER",
    "description": "The status of the job. 0 is awaiting start, 1 is started."
  },
  {
    "fieldName": "emailBody",
    "dataType": "STRING",
    "description": "The original email that was sent."
  },
  {
    "fieldName": "createdAt",
    "dataType": "DATETIME",
    "description": "The date the test was created"
  },
  {
    "fieldName": "AccountMasterId",
    "dataType": "INTEGER",
    "description": "The account master that conducted the test"
  },
  {
    "fieldName": "inboxes",
    "dataType": "ARRAY",
    "description": "An array containing all of the providers that were tested"
  },
  {
    "fieldName": "inboxes.providerName",
    "dataType": "STRING",
    "description": "The provider that was tested"
  },
  {
    "fieldName": "inboxes.SpamTestInboxes",
    "dataType": "ARRAY",
    "description": "An array containing all of the tests that were sent to the provider"
  },
  {
    "fieldName": "mailServers",
    "dataType": "ARRAY",
    "description": "An array of all of the mail server that were detected sending your emails."
  }
]
```




## Response Example


```json
{
  "id": 446244145,
  "emailSubject": "Email Subject Test",
  "emailFromAddress": "test@test.com",
  "emailFromName": "Test User",
  "emailHeaders": [],
  "spamAssassinResults": [],
  "barracudaResults": null,
  "deliveryStats": {
    "totalSpam": 0,
    "totalInbox": 8,
    "totalTests": 17
  },
  "deliveryScore": 0,
  "status": 1,
  "emailBody": "<html/>",
  "skipServerBlacklists": 0,
  "createdAt": "2021-01-26T12:11:18.000Z",
  "updatedAt": "2021-01-26T12:13:36.000Z",
  "AccountMasterId": 5125226,
  "inboxes": [
    {
      "id": 1,
      "providerName": "GMAIL",
      "createdAt": "2018-01-01T00:00:00.000Z",
      "updatedAt": "2018-01-01T00:00:00.000Z",
      "SpamTestInboxes": [
        {
          "id": 2,
          "emailAddress": "testreceiver@gmail.com",
          "lastChecked": "2021-01-26T12:14:20.000Z",
          "live": true,
          "createdAt": "2019-01-01T00:00:00.000Z",
          "updatedAt": "2021-01-26T12:14:20.000Z",
          "SpamTestInboxProviderId": 1,
          "SpamTestInboxResults": [
            {
              "id": 15533945645,
              "delivered": true,
              "deliveredType": 0,
              "mailHeaders": {},
              "createdAt": "2021-01-26T12:11:56.000Z",
              "updatedAt": "2021-01-26T12:11:56.000Z",
              "SpamTestInboxId": 2,
              "SpamTestId": 44624,
              "SpamTestMailServerResultId": 26815,
              "SpamTestMailServerResult": {
                "id": 26815,
                "mailServerAuthentication": {
                  "spfPass": 2,
                  "dkimPass": 2,
                  "dmarcPass": 2
                },
                "mailServerSenderScore": 100,
                "mailServerBlackLists": [],
                "createdAt": "2021-01-26T12:11:56.000Z",
                "updatedAt": "2021-01-26T12:13:36.000Z",
                "SpamTestMailServerId": 1259,
                "AccountMasterId": 6,
                "SpamTestId": 446244145,
                "SpamTestMailServer": {
                  "id": 124125,
                  "mailServerIp": "1.2.3.4",
                  "mailServerHostName": "test.mailserver.com",
                  "createdAt": "2019-11-28T09:54:00.000Z",
                  "updatedAt": "2020-06-01T09:39:36.000Z",
                  "AccountMasterId": 6325235
                }
              }
            }
          ]
        }
      ]
    }
  ],
  "mailServers": [
    {
      "id": 26815124124,
      "mailServerAuthentication": {
        "spfPass": 2,
        "dkimPass": 2,
        "dmarcPass": 2
      },
      "mailServerSenderScore": 100,
      "mailServerBlackLists": [],
      "createdAt": "2021-01-26T12:11:56.000Z",
      "updatedAt": "2021-01-26T12:13:36.000Z",
      "SpamTestMailServerId": 12591124,
      "AccountMasterId": 6,
      "SpamTestId": 44624,
      "SpamTestMailServer": {
        "id": 124125,
        "mailServerIp": "1.2.3.4",
        "mailServerHostName": "test.mailserver.com",
        "createdAt": "2019-11-28T09:54:00.000Z",
        "updatedAt": "2020-06-01T09:39:36.000Z",
        "AccountMasterId": 6214124124
      }
    }
  ]
}
```

