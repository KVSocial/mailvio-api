# oAuth

- Doc ID: 66
- Source URL: https://mail.mailvio.com/apidocs/66
- Parent ID: 1
- Requires Auth: No
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-28T13:59:14.000Z

## Body

<p>oAuth is a secure, industry standard way to authenticate users and retrieve an access token that can be used to access secure api routes for a user account.</p>
<p>oAuth requires an application be setup on&nbsp;Mailvio before you can use it. Please <a href="https://support.mailvio.com/portal/en/home">contact us</a> to have a new application setup.</p>
<p>Once you have an application, use the following methods to authenticate users and retrieve an access token:</p>
<ol>
<li><strong>Direct users to the following url:</strong><br />https://mail.mailvio.com/oauth2/authorise?response_type=code&amp;appid=YOURAPPID&amp;redirect_uri=REDIRECTURI</li>
<ul>
<li>YOURAPPID: This is the app id we will provide you</li>
<li>REDIRECTURI: Enter a full&nbsp;uri to a page on your own system that will handle the oauth response<br /><br /></li>
</ul>
<li>A<strong> user will login via the page above. If they login succesfully we will then redirect to your REDIRECTURI with the following query string parameters:</strong></li>
<ul>
<li>code: This is a temporary token which expires 30 seconds after it is created.<br /><br /></li>
</ul>
<li><strong>When the user returns to your&nbsp; REDIRECTURI, immediately POST a request to the following URI:</strong><br />https://apiv2.mailvio.com/api/oauth/token<br /><br />Data to post:</li>
<ul>
<li>grant_type: "authorization_code"</li>
<li>code: The&nbsp;code you received in the query string</li>
<li>client_id: YOURAPPID</li>
<li>client_secret: YOURAPPSECRETCODE</li>
<li>redirect_uri: REDIRECTURI (the same one you used earlier)<br /><br /></li>
</ul>
<li><strong>You will receive the following from the above post:</strong><br /><br />"access_token": The new, final access token you can use for all future requests. Please store this against your local user.<br />"api_endpoint": The full URI of the api server to query for all future api calls<br />"login_uri": The full URI of the web server the user would login to.</li>
</ol>
<p>And that's it.<br /><br />If all went well you now have stored an access_token that can be used for any secure API call :)</p>

## Related Articles

- None
