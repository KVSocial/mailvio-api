# Updating a Template

- Doc ID: 120
- Source URL: https://mail.mailvio.com/apidocs/120
- Parent ID: 96
- Requires Auth: Yes
- Request Method: put
- Request URL: /template/:templateId
- Published: Yes
- Last Updated: 2026-02-26T18:43:11.000Z

## Body

<p>Update an existing Template</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "templateName",
    "dataType": "STRING",
    "description": "The name of the template (Optional)"
  },
  {
    "fieldName": "templateJson",
    "dataType": "JSON",
    "description": "If drag and drop, the JSON that makes up the drag and drop template (Optional)"
  },
  {
    "fieldName": "templateHTML",
    "dataType": "STRING",
    "description": "The html body of the template (Optional)"
  },
  {
    "fieldName": "templateText",
    "dataType": "STRING",
    "description": "The text version of the template (Optional)"
  },
  {
    "fieldName": "CampaignId",
    "dataType": "INT",
    "description": "The id of the campaign the template is associate with (Optional)"
  },
  {
    "fieldName": "groupID",
    "dataType": "INT",
    "required": "",
    "description": "The id of the Template Group the template is associated with (Optional)"
  },
  {
    "fieldName": "public",
    "dataType": "BOOLEAN",
    "description": "Wether the template is accessible to all users of an accountMaster, or just the creator"
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "Template",
    "dataType": "OBJECT",
    "description": "The updated copy of the template"
  }
]
```



## Request Example


```json
{
  "templateName": "My new template",
  "templateHTML": "<div>hi</div>"
}
```



## Response Example

{
     Template: 
     {
           id: 1234,
           ......                   
     }
}
