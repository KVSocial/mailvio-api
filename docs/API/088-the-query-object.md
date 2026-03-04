# The Query Object

- Doc ID: 88
- Source URL: https://mail.mailvio.com/apidocs/88
- Parent ID: 85
- Requires Auth: Yes
- Request Method: 
- Request URL: 
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Segments allow filtering of Subscribers based on a rule, or a set of rules.</p>
<p>In order for a segment to function, a set of rules detailing how the segment will work must be passed in.<br /><br />The query object is a piece of JSON that contains the rules.<br /><br />The following guide details how a Query Object is constructed, along with the values and operators that can be used to construct your own.</p>
<h2><strong>The&nbsp;Structure</strong></h2>
<p>A query object is made up of&nbsp;2 sections. "And" and "Or". Here is an example of an empty query object.</p>
<p><code> { <br />&nbsp; &nbsp; or: [], <br /></code><code>&nbsp; &nbsp; and: []&nbsp;<br />} </code></p>
<p>Rules pushed into the and section will require subscribers to match all rules.<br />Rules pushed into the OR section will require subscribers to match one or more of the rules.<br /><br /><strong>You cannot populate both OR and AND, you must push rules into only one or the other.<br /><br /></strong></p>
<h2><strong>The Rules</strong></h2>
<p>You can push one or more rules into either the AND or the OR section as detailed above.&nbsp;<br />A rule is structured as follows:</p>
<p><code>{ <br />&nbsp; &nbsp; customFieldId: "FIELDID",<br />&nbsp; &nbsp; operator: "OPERATOR",<br />&nbsp; &nbsp; value: "VALUE"<br />} </code></p>
<p>The rules are essentially quite simple. Let's break this down.<br /><br /><strong>"customFieldId"</strong><br />The custom field id is either the numeric id of a customField, or the text value of one of the system fields (See fields reference below).<br /><br /><strong>"value"</strong><br />The value that the value in the customField should or shouldn't match.<br /><br /><strong>"operator"</strong><br />The Operator determines how the value in the customField should be matched or not matched. Examples of operators would be '='&nbsp; or '!='.<br /><br />An example of a simple rule would be as follows...</p>
<p>{&nbsp;<br />&nbsp; &nbsp; customFieldId: "123",<br />&nbsp; &nbsp; operator: "=",<br />&nbsp; &nbsp; value: "test"<br />}</p>
<p>The above example would return only records who's customField "123" value equals "test".<br /><br /></p>
<h2><strong>Fields</strong></h2>
<p>You may filter using any customField id for an account.</p>
<p>Along with your own customField ids, there are also a number of built in system fields that you can use to segment on. The system fields are as follows...</p>
<p><strong>emailAddress</strong><br />The email address of the subscriber<br /><br /><strong>GroupId</strong><br />Group(s) that subscribers belong to.<br /><br /><strong>score</strong><br />The current score of the subscriber (0-100)<br /><br /><strong>country</strong><br />The country that has been automatically detected for the subscriber.<br /><br /><strong>createdAt</strong><br />The date the subscriber was created.<br /><br /><strong>updatedAt</strong><br />The date the subscriber was last updated<br /><br /><strong>lastOpened</strong><br />The last date/time the subscriber opened any email.<br /><br /><strong>lastClicked</strong><br />The last date/time the subscriber clicked any link<br /><br /><strong>lastBounced</strong><br />The last date/time the subscriber hard bounced.<br /><br /><strong>lastSent</strong><br />The last date/time the subscriber was sent an email.<br /><br /><strong>campaignId</strong><br />The campaign Ids of the campaigns the subscriber has been sent.<br /><br /></p>
<h2><strong>Operators</strong></h2>
<p>The following operators can be used to query data. The operators will change based on the type of field being queried (String, Date, Boolean, etc)</p>
<h3><strong>String Operators</strong></h3>
<p><strong>=</strong><br />Where the&nbsp;field value is a complete match<br /><br /><strong>!=</strong><br />Where the field value is not a complete match<br /><br /><strong>start with</strong><br />Where the field value starts with the value<br /><br /><strong>end with</strong><br />Where the field value ends with the value<br /><br /><strong>not start with</strong><br />Where the field value does not start with the value<br /><br /><strong>not end with</strong><br />Where the field value does not end with the value<br /><br /><strong>contain</strong><br />Where the field value contains the value. (Equivalent to a SQL LIKE '% %' statement)<br /><br /><strong>not contain</strong><br />Where the field value does not contain the value (Equivalent to SQL NOT LIKE '% %' statement)<br /><br /><strong>is blank</strong><br />Where the field value is blank<br /><br /><strong>is not blank</strong><br />Where the field value is not blank<br /><br /></p>
<h3><strong>Number Operators</strong></h3>
<p><strong>=</strong><br />Where the&nbsp;field value is a complete match<br /><br /><strong>!=</strong><br />Where the field value is not a complete match<br /><br /><strong>in</strong><br />Where the field value is in the value<br /><br /><strong>not in</strong><br />Where the field value is not in the value<br /><br /><strong>&gt;</strong><br />Where the field value is greater than the value<br /><br /><strong>&lt;</strong><br />Where the field value is less than the value<br /><br /><strong>&gt;=</strong><br />Where the field value is greater than or equal to the value<br /><br /><strong>&lt;=</strong><br />Where the field value is less than or equal to the value<br /><br /><strong>between</strong><br />Where the field value is between the value<br /><br /><strong>not between</strong><br />Where the field value is not between the value<br /><br /><strong>is blank</strong><br />Where the field value is blank<br /><br /><strong>is not blank</strong><br />Where the field value is not blank<br /><br /></p>
<h3><strong>Boolean Operators</strong></h3>
<p><strong>=</strong><br />Where the&nbsp;field value is a complete match<br /><br /><strong>!=</strong><br />Where the field value is not a complete match<br /><br /></p>
<h3><strong>Date/Time Operators</strong></h3>
<p><strong>=</strong><br />Where the&nbsp;field value is a complete match<br /><br /><strong>!=</strong><br />Where the field value is not a complete match<br /><br /><strong>&gt;</strong><br />Where the field value is greater than the value<br /><br /><strong>&lt;</strong><br />Where the field value is less than the value<br /><br /><strong>&gt;=</strong><br />Where the field value is greater than or equal to the value<br /><br /><strong>&lt;=</strong><br />Where the field value is less than or equal to the value<br /><br /><strong>between</strong><br />Where the field value is between the value<br /><br /><strong>not between</strong><br />Where the field value is not between the value<br /><br /><strong>is blank</strong><br />Where the field value is blank<br /><br /><strong>is not blank</strong><br />Where the field value is not blank<br /><br /></p>
<h3><strong>Group&nbsp;Operators (When segmenting on groupId field)</strong></h3>
<p><strong>=</strong><br />Where the&nbsp;field value is a complete match<br /><br /><strong>!=</strong><br />Where the field value is not a complete match</p>

## Related Articles

- None




