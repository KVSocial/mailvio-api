# Adding a Template

- Doc ID: 97
- Source URL: https://mail.mailvio.com/apidocs/97
- Parent ID: 96
- Requires Auth: Yes
- Request Method: post
- Request URL: /template
- Published: Yes
- Last Updated: 2026-02-26T18:43:10.000Z

## Body

<p>Create a template by sending HTML</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "templateHTML",
    "dataType": "Text/HTML",
    "required": "on",
    "description": "The body of the template. Can be HTML or Plain Text."
  },
  {
    "fieldName": "templateName",
    "dataType": "String",
    "required": "on",
    "description": "The name of the new template"
  },
  {
    "fieldName": "templateType",
    "dataType": "INT",
    "required": "on",
    "description": "Sets the template editor type used on the control panel. Set to 1 for \"Code Editor\", or 2 for \"Wysiwyg Editor\"."
  }
]
```





## Request Example

{
    templateHTML: "<div></div>",
    templateName: "My New Template"
}


## Response Example

{
     Template: 
     {
           id: 1234,
           ......                   
     }
}
