# Authentication

- Doc ID: 5
- Source URL: https://mail.mailvio.com/apidocs/5
- Parent ID: 1
- Requires Auth: No
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-28T13:58:54.000Z

## Body

<p>In order to obtain access to an account via the API, you must first obtain an Access-Token. <br /><br /> There are three ways to do this programatically:</p>
<ol>
<li><strong><a href="/apidocs/2">Create an Account</a></strong><br />Use the API to create a new account. The API will return an APIKEY access token you can use for requests.<br /><br /></li>
<li><strong><a href="/apidocs/14">Login to an Account</a></strong><br />You can send a username and password and retrieve a temporary APIKEY which expires 2 hours after its last use. Good for apps that require logging in to Mailvio every time before use.<br /><br /></li>
<li><strong><a href="/apidocs/66">Have a user authenticate via OAUTH</a></strong><br />Using our OAUTH route, a user can login to their Mailvio account and you will receive an access token.</li>
</ol>
<p>Once you have an access token, you can use any private route available in the api. To do so simply send a request with a header of&nbsp;<br /><br />x-access-token:&nbsp;APIKey or Access Token<br /><br /><strong>Code Examples:</strong><br />Here are a number of code examples&nbsp;including how to add an x-access-token to the headers...<br /><br /><strong>PHP</strong><br /><code class="php hljs">$ch = curl_init();<br />curl_setopt($ch, CURLOPT_URL,"https://apiv2.mailvio.com/");<br />$headers = [<br /> 'x-access-token: YOURTOKEN',<br />];<br />curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);<br />$server_output = curl_exec ($ch);</code><br /><br /><strong>C#</strong><br /><code class="csharp hljs">var webRequest = System.Net.WebRequest.Create("https://apiv2.mailvio.com/");<br />webRequest.Method = "GET";<br />webRequest.Headers.Add("x-access-token", "YOURTOKEN");<br />webRequest.ContentType = "application/json";<br />using (System.IO.Stream s = webRequest.GetResponse().GetResponseStream())<br /> {<br /> using (System.IO.StreamReader sr = new System.IO.StreamReader(s))<br /> {<br /> var jsonResponse = sr.ReadToEnd();<br /> Console.WriteLine(String.Format("Response: {0}", jsonResponse));<br /> }<br /> }</code><br /><br /> <strong>NODEJS</strong><br /><code class="javascript hljs">var request = require('request');<br /> request({<br /> headers: {<br /> 'Content-Type': 'application/json',<br />'x-access-token':'YOURTOKEN'<br /> },<br /> uri: 'https://apiv2.mailvio.com/',<br /> body: formData,<br /> method: 'GET'<br /> }, function (err, res, body) {<br /> //it works!<br /> });</code></p>

## Related Articles

- None
