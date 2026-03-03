# Content check a Template

- Doc ID: 103
- Source URL: https://mail.mailvio.com/apidocs/103
- Parent ID: 96
- Requires Auth: Yes
- Request Method: get
- Request URL: /template/spamTest/:templateId
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Check an email template content to see wether it has any issues with spam keywords, blacklisted URL's, and much more.<br /><br />Simply send a template id in and&nbsp;a test result will be returned.</p>

## Related Articles

- None





## Response Example


```json
{
  "results": {
    "score": "0.00",
    "rules": [],
    "error": false,
    "errorMsg": ""
  }
}
```

