# Create a Custom Field

- Doc ID: 33
- Source URL: https://mail.mailvio.com/apidocs/33
- Parent ID: 37
- Requires Auth: Yes
- Request Method: post
- Request URL: /customField
- Published: Yes
- Last Updated: 2026-02-26T18:43:12.000Z

## Body

<p>Create a new custom field for subscriber data to be stored in.</p>

## Related Articles

- None

## Request Fields


```json
[
  {
    "fieldName": "fieldName",
    "dataType": "STRING",
    "required": "on",
    "description": "The name of the new field (Used in merge tags etc)"
  },
  {
    "fieldName": "fieldDesc",
    "dataType": "STRING",
    "required": "on",
    "description": "The friendly name of the new field (Shown to user, etc)"
  },
  {
    "fieldName": "fieldType",
    "dataType": "STRING",
    "description": "The type of field to create \"TEXT\",\"NUMBER\",\"DATE\""
  },
  {
    "fieldName": "isRequired",
    "dataType": "BOOLEAN",
    "description": "Wether the field is required when adding new subscribers, etc."
  }
]
```




## Response Fields


```json
[
  {
    "fieldName": "CustomField",
    "dataType": "OBJECT",
    "description": ""
  },
  {
    "fieldName": "CustomField.id",
    "dataType": "INTEGER",
    "description": "The id of the new custom field"
  },
  {
    "fieldName": "CustomField.fieldName",
    "dataType": "STRING",
    "description": "The system name for the custom field. This is used for merge tags etc."
  },
  {
    "fieldName": "CustomField.fieldDesc",
    "dataType": "STRING",
    "description": "The friendly name for the custom field. What the user see's in the control panel etc."
  },
  {
    "fieldName": "CustomField.fieldType",
    "dataType": "STRING",
    "description": "The type of data to store in the field. \"TEXT\",\"NUMBER\",\"DATE\""
  },
  {
    "fieldName": "CustomField.isRequired",
    "dataType": "BOOLEAN",
    "description": "Wether the field is required when users are being added etc."
  },
  {
    "fieldName": "CustomField.AccountMasterid",
    "dataType": "INTEGER",
    "description": "The accountMaster that owns the custom field"
  },
  {
    "fieldName": "CustomField.hidden",
    "dataType": "BOOLEAN",
    "description": "Wether the field is hidden from the control panel"
  },
  {
    "fieldName": "CustomField.createdAt",
    "dataType": "DATETIME",
    "description": "The date the field was created"
  },
  {
    "fieldName": "CustomField.updatedAt",
    "dataType": "DATETIME",
    "description": "The date the field was last updated"
  }
]
```



## Request Example


```json
{
  "fieldName": "FIRSTNAME",
  "fieldDesc": "FirstName",
  "fieldType": "TEXT",
  "isRequired": false
}
```



## Response Example

{
    "CustomField": [
        {
            "id": 61,
            "fieldName": "FIRSTNAME",
            "fieldDesc": "FirstName",
            "fieldType": "TEXT",
            "isRequired": false,
            "AccountMasterId": 6,
            "hidden": false,
            "createdAt": "2018-05-02T09:26:05.000Z",
            "updatedAt": "2018-05-02T09:26:05.000Z"
        }
}
