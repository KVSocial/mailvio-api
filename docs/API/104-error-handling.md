# Error Handling

- Doc ID: 104
- Source URL: https://mail.mailvio.com/apidocs/104
- Parent ID: 1
- Requires Auth: No
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-28T13:59:40.000Z

## Body

<p>The&nbsp;Mailvio API uses standard REST Api response code error handling to let inform wether a request was a success, or a failure.</p>
<p>The codes used are as follows:</p>
<div style="border: 2px solid green; padding: 20px; margin-bottom: 15px;">
<h2 style="margin: 0px;">200 -&nbsp;The request was successfully completed.</h2>
</div>
<div style="border: 2px solid orange; padding: 20px; margin-bottom: 15px;">
<h2 style="margin: 0px;">400 -&nbsp;The request was invalid.</h2>
<p style="margin: 0px;">This is usually the result of incorrect data being sent to the API. For example requesting a subscriber using the wrong ID, or not submitting values for all required fields.</p>
</div>
<div style="border: 2px solid red; padding: 20px; margin-bottom: 15px;">
<h2 style="margin: 0px;">500 -&nbsp;The request was not completed due to an internal error on the server side.</h2>
<p style="margin: 0px;">If you see this response something has gone wrong at our end. We should already know about this, but feel free to please let us know!</p>
</div>

## Related Articles

- None
