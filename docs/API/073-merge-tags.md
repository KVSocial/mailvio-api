# Merge Tags

- Doc ID: 73
- Source URL: https://mail.mailvio.com/apidocs/73
- Parent ID: 1
- Requires Auth: No
- Request Method: 
- Request URL: 
- Published: Yes
- Last Updated: 2026-02-28T13:58:42.000Z

## Body

<section class="article-info">
<div class="article-content">
<div class="article-body">
<p>Merge tags are extremely useful snippets of code that you can insert into your email body and subject lines to insert personalisation.</p>
<p>For example. you have a custom field called "First Name"&nbsp; and you would like to insert each customers first name into the emails as they go out.</p>
<p>Merge tags make this very easy, and can even be expanded out to perform more than just basic personalisation. You can also use rules to adjust what is shown on each email depending on the data associated with the subscriber.</p>
<p>For example if you have a GENDER custom field, you could send Hello MR for all males, and Hello MRS for all females.</p>
<p>You can also insert non-subscriber specific information, like unsubscribe links, the date, and much more.</p>
<p>You can see a list of available merge tags whenever you are editing content. For example when editing text in the drag and drop editor, there is a INSERT drop down list that contains all of the available merge tags. When editing a WYSIWYG template there is a big "Merge Tags" button towards the bottom of the page.</p>
<h2>System Merge Tags</h2>
<p>There are a number of Merge Tags that are built into the system and can be used by everyone. They are as follows:</p>
<table>
<tbody>
<tr>
<td>The Merge Tag</td>
<td>What it Does</td>
</tr>
<tr>
<td>{{{__UPDATE_URL}}}</td>
<td>The URL for Subscribers to View and Update their details. Use this in things like link HREF tags. For example &lt;a href="{{{_UPDATE_URL}}}"&gt;</td>
</tr>
<tr>
<td>{{{__UPDATE_LINK}}}</td>
<td>Inserts text that says "Update your Profile" and links to a page where subscribers can update their profiles.</td>
</tr>
<tr>
<td>{{{__UNSUBSCRIBE_URL}}}</td>
<td>
<table width="80%">
<tbody>
<tr>
<td>The URL for Subscribers to Unsubscribe. Use this in things like link HREF tags. For example &lt;a href="{{{__UNSUBSCRIBE_URL}}}"&gt;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>{{{__UNSUBSCRIBE_LINK}}}</td>
<td>Inserts text that says "Unsubscribe" and links to a page where subscribers unsubscribe from future mailings.</td>
</tr>
<tr>
<td>{{{__PREVIEW_URL}}}</td>
<td>The URL for Subscribers to View the Email in a browser. Use this in things like link HREF tags. For example &lt;a href="{{{__PREVIEW_URL}}}"&gt;</td>
</tr>
<tr>
<td>{{{__PREVIEW_LINK}}}</td>
<td>Inserts text that says "Preview in a Browser" and links to a page where subscribers&nbsp; can view the email in a web browser.</td>
</tr>
<tr>
<td>{{{__OPEN_LINK}}}</td>
<td>Insert's a hidden image that is used to track campaign opens.</td>
</tr>
<tr>
<td>{{{__JUNK_URL}}}</td>
<td>The URL for Subscribers to Report an email as junk. Use this in things like link HREF tags. For example &lt;a href="{{{__JUNK_URL}}}"&gt;</td>
</tr>
<tr>
<td>{{{__JUNK_LINK}}}</td>
<td>Inserts text that says "Report as Junk" and links to a page where subscribers&nbsp;can report the email as junk.</td>
</tr>
<tr>
<td>{{{__GDPRYES}}}</td>
<td>The URL for a GDPR Confirmation.&nbsp;Use this in things like link HREF tags. For example &lt;a href="{{{__GDPRYES}}}"&gt;</td>
</tr>
<tr>
<td>{{{__GDPRNO}}}</td>
<td>The URL for a GDPR Opt Out.&nbsp;&nbsp;Use this in things like link HREF tags. For example &lt;a href="{{{__GDPRNO}}}"&gt;</td>
</tr>
<tr>
<td>{{SUBSCRIBER_ID}}</td>
<td>The Id of the Subscriber</td>
</tr>
<tr>
<td>{{SUB_LAST_UPDATED}}</td>
<td>The date the subscriber record was last modified</td>
</tr>
<tr>
<td>{{SUB_EMAILADDRESS}}</td>
<td>The email address of the subscriber</td>
</tr>
<tr>
<td>{{SUB_DATE_JOINED}}</td>
<td>The date the subscriber joined</td>
</tr>
<tr>
<td>{{SENDING_ID}}</td>
<td>The Id of the Email</td>
</tr>
<tr>
<td>{{CURRENT_YEAR}}</td>
<td>The current year</td>
</tr>
<tr>
<td>{{CURRENT_DATE}}</td>
<td>The current date</td>
</tr>
<tr>
<td>{{CAMPAIGN_ID}}</td>
<td>The Id of the Campaign</td>
</tr>
</tbody>
</table>
<h2><br />Custom Field Merge Tags</h2>
<p>Any field you create using the platform can also be used as a merge tag.&nbsp;<br /><br />When you add a custom field, you will be given the Merge Tag value. Simply insert this into your campaign as follows.</p>
<p>Assuming your custom field is name "Firstname", the merge tag would be:</p>
<p>{{FIRSTNAME}}</p>
<h2>Conditional Merge Tags</h2>
<p>As well as inserting straight forward merge tags, there is also the option dynamically alter the data that is shown. We call this "Conditional Merge Tags" and they work a bit like a very basic programming language.</p>
<p>Lets say we want to show a "Hello Mr" or "Hello Mrs" at the top of our email, depending on wether the subscriber has a custom field called Gender.</p>
<p>We would write this:</p>
<p><strong>{{#if (eq [GENDER] 'Male') }}Hello Mr{{else}}Hello Mrs{{/if}}</strong></p>
<p>We can use any merge tag or custom field here instead of GENDER.</p>
<p>Lets take it a little further...</p>
<p>If we wanted to say hi to the Ladies, and then Gentleman, but we also have some subscribers that do not have a gender marked against them, we could do this</p>
<p><strong>{{#if (eq [GENDER] Male) }}</strong><strong>Hello Mr{{else if (eq [GENDER] 'Female') }}Hello Mrs{{else}}Hello There{{/if}}&nbsp;</strong></p>
<p>The above example would show "Hello Mr" to an Males, "Hello Mrs" to any Females, and finally "Hello There" to anyone who hasn't got a gender set.</p>
<p>&nbsp;</p>
<h2>Nesting</h2>
<p>As well as straight forward conditions, you can also nest statements. For example if you want to show a different greeting to men and women, but also want to show a different message to men who like shoes we could do this.</p>
<p><strong>{{#if (eq [GENDER] 'Male') }}</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; {{#if (eq [LIKESSHOES] 'YES') }}</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hello Shoe Lover!</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; {{else}}</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hello Mr Non Shoe Lover</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; {{/if}}</strong></p>
<p><strong>{{else if (eq [GENDER] 'Female']}}</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; Hello Mrs</strong></p>
<p><strong>{{else}}</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; Hello There</strong></p>
<p><strong>{{/if}}&nbsp;</strong></p>
<h2>And Or?</h2>
<p>The example above details what we call an IF statemement, which is going to work for a lot of situations. But what about if we want to add some slight more in depth rules. What if we we want to include everyone who is male OR everyone who is&nbsp;exactly 30 years of age. For this we can use an OR statement.&nbsp;</p>
<p><strong>{{#if (or (eq [GENDER] 'Male') (eq [AGE] '30') ) }}Hello Mr{{/if}}</strong></p>
<p>And now taking it a little further, what about if we want everyone who is female or OVER the age of 40...</p>
<p><strong>{{#if (or (eq [GENDER] 'Female') (gte [AGE] 40) ) }}</strong><br /><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hello Mr</strong><br /><strong>{{/if}}</strong></p>
<p>You can see we have used a tag called gte above, which stands for "Greater than or Equal To". So in the example above we are saying the gender must be female, OR AGE must be greater than or equal to 40.</p>
<p>There are multiple "Operators" you can use here, instead of gte.. They are as follows:</p>
<p><strong>gte</strong>: Greater than or equal to<br /><strong>lte</strong>: Less than or equal to<br /><strong>lt</strong>: Less than<br /><strong>gt</strong>: Greater than<br /><strong>eq</strong>: Equals<br /><strong>ne</strong>: Doesn't equal<br /><br />And finally, you can also use the word AND instead of OR if you require multiple details to match. For example in this example we need gender to be "Male" and age to be 40</p>
<p><strong>{{#if (and (eq [GENDER] 'Female') (eq [AGE] 40) ) }}</strong><br /><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hello Mr</strong><br /><strong>{{/if}}</strong></p>
<p>&nbsp;</p>
<h1>Misc Functions</h1>
<h2>Date Formatting&nbsp;</h2>
<p>You can change the format of any date field by using the following...</p>
<p><strong>{{formatDate CUSTOMFIELD "YYYY-MM-DD"}}<br /></strong><br />Available values are:</p>
<table width="100%">
<tbody>
<tr>
<td>Value</td>
<td>Unit</td>
<td>Example</td>
</tr>
<tr>
<td>M</td>
<td>Month</td>
<td>1 2 ... 11 12</td>
</tr>
<tr>
<td>Mo</td>
<td>&nbsp;</td>
<td>1st 2nd ... 11th 12th</td>
</tr>
<tr>
<td>MM</td>
<td>&nbsp;</td>
<td>01 02 ... 11 12</td>
</tr>
<tr>
<td>MMM</td>
<td>&nbsp;</td>
<td>Jan Feb ... Nov Dec</td>
</tr>
<tr>
<td>MMMM</td>
<td>&nbsp;</td>
<td>January February ... November December</td>
</tr>
<tr>
<td>Q</td>
<td>Quarter</td>
<td>1 2 3 4</td>
</tr>
<tr>
<td>Qo</td>
<td>&nbsp;</td>
<td>1st 2nd 3rd 4th</td>
</tr>
<tr>
<td>D</td>
<td>Day of Month</td>
<td>1 2 ... 30 31</td>
</tr>
<tr>
<td>Do</td>
<td>&nbsp;</td>
<td>1st 2nd ... 30th 31st</td>
</tr>
<tr>
<td>DD</td>
<td>&nbsp;</td>
<td>01 02 ... 30 31</td>
</tr>
<tr>
<td>DDD</td>
<td>Day of Year</td>
<td>1 2 ... 364 365</td>
</tr>
<tr>
<td>DDDo</td>
<td>&nbsp;</td>
<td>1st 2nd ... 364th 365th</td>
</tr>
<tr>
<td>DDDD</td>
<td>&nbsp;</td>
<td>001 002 ... 364 365</td>
</tr>
<tr>
<td>d</td>
<td>Day of Week</td>
<td>0 1 ... 5 6</td>
</tr>
<tr>
<td>do</td>
<td>&nbsp;</td>
<td>0th 1st ... 5th 6th</td>
</tr>
<tr>
<td>dd</td>
<td>&nbsp;</td>
<td>Su Mo ... Fr Sa</td>
</tr>
<tr>
<td>ddd</td>
<td>&nbsp;</td>
<td>Sun Mon ... Fri Sat</td>
</tr>
<tr>
<td>dddd</td>
<td>&nbsp;</td>
<td>Sunday Monday ... Friday Saturday</td>
</tr>
<tr>
<td>e</td>
<td>Day of Week (Locale)</td>
<td>0 1 ... 5 6</td>
</tr>
<tr>
<td>E</td>
<td>Day of Week (ISO)</td>
<td>1 2 ... 6 7</td>
</tr>
<tr>
<td>w</td>
<td>Week of Year</td>
<td>1 2 ... 52 53</td>
</tr>
<tr>
<td>wo</td>
<td>&nbsp;</td>
<td>1st 2nd ... 52nd 53rd</td>
</tr>
<tr>
<td>ww</td>
<td>&nbsp;</td>
<td>01 02 ... 52 53</td>
</tr>
<tr>
<td>W</td>
<td>Week of Year (ISO)</td>
<td>1 2 ... 52 53</td>
</tr>
<tr>
<td>Wo</td>
<td>&nbsp;</td>
<td>1st 2nd ... 52nd 53rd</td>
</tr>
<tr>
<td>WW</td>
<td>&nbsp;</td>
<td>01 02 ... 52 53</td>
</tr>
<tr>
<td>YY</td>
<td>Year</td>
<td>70 71 ... 29 30</td>
</tr>
<tr>
<td>YYYY</td>
<td>&nbsp;</td>
<td>1970 1971 ... 2029 2030</td>
</tr>
<tr>
<td rowspan="2">Y</td>
<td rowspan="2">&nbsp;</td>
<td>1970 1971 ... 9999 +10000 +10001</td>
</tr>
<tr>
<td>Note:&nbsp;This complies with the ISO 8601 standard for dates past the year 9999</td>
</tr>
<tr>
<td>y</td>
<td>Era Year</td>
<td>1 2 ... 2020 ...</td>
</tr>
<tr>
<td rowspan="2">N</td>
<td rowspan="2">Era</td>
<td>BC AD</td>
</tr>
<tr>
<td>Note:&nbsp;Abbr era name</td>
</tr>
<tr>
<td rowspan="2">NN</td>
<td rowspan="2">&nbsp;</td>
<td>BC AD</td>
</tr>
<tr>
<td>Note:&nbsp;Narrow era name</td>
</tr>
<tr>
<td rowspan="2">NNN</td>
<td rowspan="2">&nbsp;</td>
<td>Before Christ, Anno Domini</td>
</tr>
<tr>
<td>Note:&nbsp;Full era name</td>
</tr>
<tr>
<td>gg</td>
<td>Week Year</td>
<td>70 71 ... 29 30</td>
</tr>
<tr>
<td>gggg</td>
<td>&nbsp;</td>
<td>1970 1971 ... 2029 2030</td>
</tr>
<tr>
<td>GG</td>
<td>Week Year (ISO)</td>
<td>70 71 ... 29 30</td>
</tr>
<tr>
<td>GGGG</td>
<td>&nbsp;</td>
<td>1970 1971 ... 2029 2030</td>
</tr>
<tr>
<td>A</td>
<td>AM/PM</td>
<td>AM PM</td>
</tr>
<tr>
<td>a</td>
<td>&nbsp;</td>
<td>am pm</td>
</tr>
<tr>
<td>H</td>
<td>Hour</td>
<td>0 1 ... 22 23</td>
</tr>
<tr>
<td>HH</td>
<td>&nbsp;</td>
<td>00 01 ... 22 23</td>
</tr>
<tr>
<td>h</td>
<td>&nbsp;</td>
<td>1 2 ... 11 12</td>
</tr>
<tr>
<td>hh</td>
<td>&nbsp;</td>
<td>01 02 ... 11 12</td>
</tr>
<tr>
<td>k</td>
<td>&nbsp;</td>
<td>1 2 ... 23 24</td>
</tr>
<tr>
<td>kk</td>
<td>&nbsp;</td>
<td>01 02 ... 23 24</td>
</tr>
<tr>
<td>m</td>
<td>Minute</td>
<td>0 1 ... 58 59</td>
</tr>
<tr>
<td>mm</td>
<td>&nbsp;</td>
<td>00 01 ... 58 59</td>
</tr>
<tr>
<td>s</td>
<td>Second</td>
<td>0 1 ... 58 59</td>
</tr>
<tr>
<td>ss</td>
<td>&nbsp;</td>
<td>00 01 ... 58 59</td>
</tr>
<tr>
<td>S</td>
<td>Fractional Second</td>
<td>0 1 ... 8 9</td>
</tr>
<tr>
<td>SS</td>
<td>&nbsp;</td>
<td>00 01 ... 98 99</td>
</tr>
<tr>
<td>SSS</td>
<td>&nbsp;</td>
<td>000 001 ... 998 999</td>
</tr>
<tr>
<td>SSSS ... SSSSSSSSS</td>
<td>&nbsp;</td>
<td>000[0..] 001[0..] ... 998[0..] 999[0..]</td>
</tr>
</tbody>
</table>
<h3>Happy Merge Tagging!</h3>
</div>
</div>
</section>

## Related Articles

- None




