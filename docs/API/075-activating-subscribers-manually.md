# Activating Subscribers Manually

- Doc ID: 75
- Source URL: https://mail.mailvio.com/apidocs/75
- Parent ID: 74
- Requires Auth: No
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-26T20:26:52.000Z

## Body

<h2>The Problem</h2>
<p><strong>Sometimes we want to add a subscriber to a list manually, but still have them double opt in to receive our mailings.</strong> <br />Of course, we could use the pre-built forms (Subscribers -&gt; Groups -&gt; Edit Group -&gt; Forms) which&nbsp;do the&nbsp;whole double opt in process for you easily, but what if you&nbsp;need to program this yourself. For example if you want to&nbsp;add a custom tick box to an ecommerce checkout that just signs them up to a group and sends them a confirmation email?</p>
<p>There are&nbsp;a number of ways we can achieve this using the system and the api. Here's two&nbsp;ways you could go about creating this double opt in process manually...<br /><br /></p>
<h2>Solution 1 -&nbsp;100% API</h2>
<p>This is probably the more complicated solution. We can use only the API to create the subscriber, send an email, and then activate the subscriber when they click a link in the email. Here's how we would do it...</p>
<ol>
<li><strong>Add the subscriber to a group</strong><br />The first step is to <a href="/apidocs/24">send the subscriber into a group</a>, and importantly mark them as "IN ACTIVE" for now. Like this...<br /><br />{ <span class="hljs-attr">"emailAddress"</span>: <span class="hljs-string">"test@example.com"</span>, <span class="hljs-attr">"blackListed"</span>: <span class="hljs-literal">false</span>,&nbsp; "active": false,&nbsp;<span class="hljs-attr">"customFields"</span>: { 1234: <span class="hljs-string">"Test"</span>, 1235: <span class="hljs-string">"User"</span> } }}}<br /><br />Don't forget, if you are pushing custom fields your will need to <a href="/apidocs/38">retrieve the custom field IDs</a> first.<br /><br /></li>
<li><strong>Create an Email Template<br /></strong>Login to your account and create a template which we will send to the subscriber in the next step, asking them to confirm their subscription.&nbsp; Make sure you create a button or link on the template that directs the user back to your website where they can confirm the subscription. <br /><br />Make sure to add the following to the end of your link https://yourlink.com/?subid={{SUBSCRIBER_ID}}. This will pass the subscriber ID back to your landing page.<br /><br />Make a note of the ID of the template.<br /><br /></li>
<li><strong>Send the Confirmation Email</strong><br />Use the "Transactional Email" system to send this template to the subscriber. You can find documentation by logging in to your account and clicking the "Transactions" tab at the top of the page.<br /><br />In this example i would post a request like this:<br /><br /><strong>POST TO:<br /></strong>https://apiv2.mailvio.com/transaction<br /><br /><strong>Data to send:</strong><br />"fromAddress": "test@test.com",<br /> "fromName": "Test Name",<br /> "replyAddress": "test@test.com",<br /> "toAddress": "thesubscribers@emailaddress.com",<br /> "toName": "Subscriber Name",<br /> "subject": "Confirm your Registration",<br /> "TemplateId": THE TEMPLATE ID<br /><br /></li>
<li><strong>Capture the Click</strong><br />When the subscriber clicks the button you added to the template, they are redirected to a landing page on your website.<br /><br />We should have received a query string parameter of "subid" if we setup our link correctly in step 2.<br /><br />At this point we can call the <a href="/apidocs/28">API to update the status of the subscriber</a><br /><br />We would send this sort of request:<br /><br />{ <span class="hljs-attr">"subscriberIds"</span>: [<span class="hljs-number">1123123</span>], <span class="hljs-attr">"newStatus"</span>: <span class="hljs-string">"active"</span> }}}<br /><br /></li>
<li><strong>Done!</strong><br />We have used the API to create a subscriber who is set to "in active". We have sent the subscriber an email asking them to confirm. They have clicked the link, visited your landing page and we have then sent a final API call to update the subscriber status to "Active"</li>
</ol>
<p>&nbsp;</p>
<h2>Solution 2 - Using the API and Automation</h2>
<p>This solution uses the "Automation" feature to take a lot of the hard work out of the process of a double opt in. Using automation make it much easier to reproduce the above steps with less coding. Here's how it works:</p>
<ol>
<li><strong>Add the subscriber to a group</strong><br />The first step is to&nbsp;<a href="/apidocs/24">send the subscriber into a group</a>, and importantly mark them as "IN ACTIVE" for now. Like this...<br /><br />{&nbsp;<span class="hljs-attr">"emailAddress"</span>:&nbsp;<span class="hljs-string">"test@example.com"</span>,&nbsp;<span class="hljs-attr">"blackListed"</span>:&nbsp;<span class="hljs-literal">false</span>,&nbsp; "active": false,&nbsp;<span class="hljs-attr">"customFields"</span>: { 1234:&nbsp;<span class="hljs-string">"Test"</span>, 1235:&nbsp;<span class="hljs-string">"User"</span>&nbsp;} }}}<br /><br /><br /></li>
<li><strong>Create a new Automation</strong></li>
<ol>
<li>Login to your account, and then click the Automation tab at the top of the screen.</li>
<li>Now click "Add Automation"<br /><br /></li>
</ol>
<li><strong>Define a group</strong><br />In the first step, select the group that you want to monitor for new subscribers. Pick the group that you are pushing the subscriber into in step 1.<br /><br /></li>
<li><strong>Add an&nbsp;Email Step<br /></strong>Now we are going to add our first step. Sending the confirmation email to the subscriber.<br /><br />Click the little circle button with a + in it to add a step to your automation, and then choose the "Send an Email" option.<br /><br /></li>
<li><strong>Design your Email</strong><br />Complete the details like sender name, subject, etc and then click Design Email.<br />Design&nbsp;your confirmation email, and dont forget to include a button or link where the user can click to confirm their subscription.<br />This link should point to a page on your website and should include a query string of http://yourdomain.com/?subid={{SUBSCRIBER_ID}}<br /><br />Click save and continue.<br /><br /></li>
<li><strong>Your workflow is ready to go!<br /></strong>Your new workflow should look a bit like this...<br /><br /><img src="https://cdn1.ourmailsender.com/userContent/6/fileManager/12/automationActivateSubscriberSample.PNG" /><br /><br /> When you are happy, Click Save and Start and your automation will be live.<br /><br /></li>
<li><strong>Set the subscriber to Active</strong><br /><br />Finally,&nbsp;create an <a href="/apidocs/28">API call to update the subscriber</a> when they visit the landing page you linked to in step 4. <br />You should see subscribers landing on this page with a querystring of "subid" which now has their Subscriber ID populated. Use this as follows:<br /><br />{ <span class="hljs-attr">"subscriberIds"</span>: [THESUBID], <span class="hljs-attr">"newStatus"</span>: <span class="hljs-string">"active"</span> }</li>
</ol>
<h2><br />Wrapping up</h2>
<p>So here we have explored two ways in which we could replicate the double opt in process for new subscribers ourselves, using pure code in the first case, and a combination of the api and the automation functions in the other.</p>
<p>Thanks to the flexibility of the system, there are even more ways we could replicate the double opt in process, for example we could create a form and then take apart the code it generates to use for our own purposes. However the two methods described above offer a solid way to replicate the process for yourself.</p>
<p>We hope this has been an interesting read. As always, if you have any questions please get in touch!</p>

## Related Articles

- None
