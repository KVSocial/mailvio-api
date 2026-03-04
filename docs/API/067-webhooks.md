# Webhooks

- Doc ID: 67
- Source URL: https://mail.mailvio.com/apidocs/67
- Parent ID: 0
- Requires Auth: Yes
- Request Method:
- Request URL:
- Published: Yes
- Last Updated: 2026-02-28T09:52:26.000Z

## Body

<p>Mailvio&nbsp;provides a number of webhooks that you can subscribe to which enable you to receive notifications when things happen.<br /><br />We provide webhooks for things like Campaign Clicks, Campaign Sends, Unsubscriber, and many more.</p>
<p>You can configure webhooks that monitor actions that relate to an entire account, or just&nbsp;certain subscriber&nbsp;groups</p>
<p><strong>Webhook Types</strong></p>
<p>When you create or update webhook, you can specify the type of webhook it is, which determines when your hook will be triggered. For example&nbsp;a webhook type of "CampaignSend" is sent every time an email is sent to a subscriber from a campaign.</p>
<p>Here's the webhook types that you can subscribe to:</p>
<ul>
<li><strong>CampaignSend</strong><br />Triggers whenever a subscriber is sent to from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignSend",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp; AccountMasterId: 1234,<br />&nbsp; &nbsp; CampaignName: "Sample Campaign Name"<br /><br />}</li>
<li><strong>CampaignOpen</strong><br />Triggers whenever a subscriber opens an email they were sent from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignOpen",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234,<br />&nbsp; &nbsp;&nbsp;CampaignName: "Sample Campaign Name"<br />}</li>
<li><strong>CampaignClick</strong><br />Triggers whenever a subscriber&nbsp;clicks a link&nbsp;in&nbsp;an email they were sent&nbsp;from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignClick",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; LinkId: 1234,<br />&nbsp; &nbsp; LinkUrl: "https://thelinkclicked.com",<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234,<br />&nbsp; &nbsp;&nbsp;CampaignName: "Sample Campaign Name"<br />}</li>
<li><strong>CampaignUnsubscribe</strong><br />Triggers whenever a subscriber unsubscribes&nbsp;&nbsp;from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignUnsubscribe",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234,<br />&nbsp; &nbsp;&nbsp;CampaignName: "Sample Campaign Name"<br />}</li>
<li><strong>CampaignBounce</strong><br />Triggers whenever a subscribers email address bounces.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignBounce",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234,<br />&nbsp; &nbsp;&nbsp;CampaignName: "Sample Campaign Name"<br />}</li>
<li><strong>CampaignJunkReport</strong><br />Triggers whenever a subscriber&nbsp;reports an email sent&nbsp; from a campaign as junk.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignJunkReport",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; CampaignId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234,<br />&nbsp; &nbsp;&nbsp;CampaignName: "Sample Campaign Name"<br />}</li>
<li><strong>CampaignDeleteSubscriber</strong><br />Triggers whenever a subscriber&nbsp;chooses to delete their whole profile, after being sent&nbsp;an email from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp;&nbsp;eventType: "CampaignDeleteSubscriber",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234<br />}</li>
<li><strong>CampaignUpdateSubscriber</strong><br />Triggers whenever a subscriber&nbsp;chooses to&nbsp;update their profile after being sent&nbsp;an email from a campaign.<br /><br />Returns:<br />{<br />&nbsp; &nbsp; eventType: "CampaignUpdateSubscriber",<br />&nbsp; &nbsp; SubscriberId: 1234,<br />&nbsp; &nbsp; EmailAddress: "the@emailaddress.com",<br />&nbsp; &nbsp;&nbsp;AccountMasterId: 1234<br />}</li>
</ul>
<h2>Related Articles</h2>
<ul>
<li><a href="/apidocs/72">Retrieve a Webhook</a></li>
<li><a href="/apidocs/71">Retrieve All Webhooks</a></li>
<li><a href="/apidocs/70">Delete a Webhook</a></li>
<li><a href="/apidocs/69">Update an Existing Webhook</a></li>
<li><a href="/apidocs/68">Register a new Webhook</a></li>
</ul>
<p>&nbsp;</p>

## Related Articles

- 68: Register a new Webhook
- 69: Update an Existing Webhook
- 70: Delete a Webhook
- 71: Retrieve All Webhooks
- 72: Retrieve a Webhook
