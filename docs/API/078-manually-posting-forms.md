# Manually posting forms

- Doc ID: 78
- Source URL: https://mail.mailvio.com/apidocs/78
- Parent ID: 77
- Requires Auth: No
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>If you have deployed&nbsp;Mailvio&nbsp;forms on your website, you may want to occasionally submit a form programatically which is an easy way to start the Double Opt In process for a subscriber.</p>
<p>You can use the following request to manually submit a form...</p>
<p>POST https://apiv2.mailvio.com/form?am=[ACCOUNTID]&amp;fid=[FORMID]<br />body: {<br />&nbsp; &nbsp; &nbsp;'emailAddress': 'the@emailaddress.com',<br />&nbsp; &nbsp; &nbsp;'FIELDNAME1': 'your value',<br />&nbsp; &nbsp; &nbsp;'FIELDNAME2':&nbsp;'another value'<br />}</p>
<p>Your ACCOUNTID can be found in the "Company" section of the control panel.<br />The FORMID can be found in the Signup Forms area.<br />EmailAddress is REQUIRED.<br /><br />Finally, post any Custom Field names you require in the body.</p>

## Related Articles

- None
