# Adding a Subscriber from any Form

- Doc ID: 102
- Source URL: https://mail.mailvio.com/apidocs/102
- Parent ID: 77
- Requires Auth: No
- Request Method: post
- Request URL: /api/addsubscriber
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Create subscribers from normal form posts. Useful for plugging into existing forms on your website etc.</p>
<p>Requires an APIKEY to be generated from your control panel. Make sure if you are publishing on a live site to restrict the APIKEY to your website domain before going live.</p>

## Related Articles

- None

## Request Fields

```json
[
  {
    "fieldName": "emailAddress",
    "dataType": "STRING",
    "required": "on",
    "description": "The email address of the subscriber to add or update"
  },
  {
    "fieldName": "key",
    "dataType": "STRING",
    "required": "on",
    "description": "The API Key you generated on the control panel"
  },
  {
    "fieldName": "groupId",
    "dataType": "INT",
    "required": "on",
    "description": "The ID of the group you would like to add the subscriber to"
  },
  {
    "fieldName": "redirectUri",
    "dataType": "URL",
    "description": "The website address the subscriber will be redirected to upon successful signup. If omitted a normal json response object will be returned."
  },
  {
    "fieldName": "errorUri",
    "dataType": "URL",
    "description": "The website address the subscriber will be redirect to upon any failure. An \"error\" parameter will be added to the querystring detailing the reason the request was not a success. If omitted a json object will be returned."
  },
  {
    "fieldName": "Any other fields",
    "dataType": "VARIOUS",
    "description": "Any other data you post will be added as custom field data if the custom field name matches an existing custom field."
  }
]
```

## Response Fields

```json
[
  {
    "fieldName": "result",
    "dataType": "STRING",
    "description": "Wether the request was a success or not. \"Success\" if ok, \"failed\" if not."
  },
  {
    "fieldName": "subscriber",
    "dataType": "OBJECT",
    "description": "A new subscriber object detailing the new subscriber that was created"
  }
]
```

## Request Example

RAW EXAMPLE

{
"key": "MY API KEY GOES HERE",
"groupId": 12345,
"emailAddress": "test@email.com",
"FIRSTNAME": "Demo",
"LASTNAME": "User"
}

FORM EXAMPLE

<form action="https://apiv2.mailvio.com/api/addsubscriber" method="post">
    <input type="hidden" name="key" value="YOUR API KEY HERE"/>
    <input type="hidden" name="groupId" value="YOUR GROUP ID HERE"/>
    <input type="hidden" name="redirectUri" value="https://mywebsite.com/signupsuccess.html"/>
    <input type="hidden" name="errorUri" value="https://mywebsite.com/signupfailure.html"/>
    <input type="email" name="emailAddress" value=""/>
    <input type="text" name="PRENAME" value=""/>
    <input type="text" name="LASTNAME" value=""/>
    <input type="submit" value="Send"/>
</form>

## Response Example

WITH A REDIRECT URI AND NO ERRORS
Redirected to https://mywebsite.com/signupsuccess.html

WITH AN ERROR URI AND HAS ERRORS
Redirected to https://mywebsite.com/signupfailure.html?error=the_error_text_goes_here

WITHOUT A REDIRECT URI
{
"result": "Success",
"subscriber": {
"subscriberId": 12345678,
"addedToGroup": "2020-09-01T10:54:53.000Z",
"lastUpdated": "2020-09-01T10:54:53.000Z",
"unsubscribed": false,
"active": true,
"emailAddress": "test@email.com",
"blackListed": false,
"customFields": {
"61": "Demo",
"62": "USer"
}
}
}
