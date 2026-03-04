# Get all Custom Fields

- Doc ID: 38
- Source URL: https://mail.mailvio.com/apidocs/38
- Parent ID: 37
- Requires Auth: Yes
- Request Method: get
- Request URL: /customField
- Published: Yes
- Last Updated: 2026-02-26T18:43:13.000Z

## Body

<p>Retrieves all custom fields currently setup for an accountMaster</p>

## Related Articles

- None



## Response Fields


```json
[
  {
    "fieldName": "CustomFields",
    "dataType": "OBJECT"
  },
  {
    "fieldName": "CustomFields.id",
    "dataType": "INTEGER",
    "description": "The id of the custom field"
  },
  {
    "fieldName": "CustomFields.fieldName",
    "dataType": "STRING",
    "description": "The system name for the custom field. This is used for merge tags etc."
  },
  {
    "fieldName": "CustomFields.fieldDesc",
    "dataType": "STRING",
    "description": "The friendly name for the custom field. What the user see's in the control panel etc."
  },
  {
    "fieldName": "CustomFields.fieldType",
    "dataType": "STRING",
    "description": "The type of data to store in the field. \"TEXT\",\"NUMBER\",\"DATE\""
  },
  {
    "fieldName": "CustomFields.isRequired",
    "dataType": "BOOLEAN",
    "description": "Wether the field is required when users are being added etc."
  },
  {
    "fieldName": "CustomFields.AccountMasterId",
    "dataType": "INTEGER",
    "description": "The accountMaster that owns the custom field"
  },
  {
    "fieldName": "CustomFields.hidden",
    "dataType": "BOOLEAN",
    "description": "Wether the field is hidden from the control panel"
  },
  {
    "fieldName": "CustomFields.createdAt",
    "dataType": "DATETIME",
    "description": "The date the field was created"
  },
  {
    "fieldName": "CustomFields.updatedAt",
    "dataType": "DATETIME",
    "description": "The date the field was last updated"
  }
]
```




## Response Example

{
    "CustomFields": [
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
        },
        {
            "id": 62,
            "fieldName": "LASTNAME",
            "fieldDesc": "LastName",
            "fieldType": "TEXT",
            "isRequired": false,
            "AccountMasterId": 6,
            "hidden": false,
            "createdAt": "2018-05-02T09:26:10.000Z",
            "updatedAt": "2018-05-02T09:26:10.000Z"
        },
        {
            "id": 63,
            "fieldName": "LASTCHANGED",
            "fieldDesc": "Last Changed",
            "fieldType": "DATE",
            "isRequired": false,
            "AccountMasterId": 6,
            "hidden": false,
            "createdAt": "2018-05-02T09:26:24.000Z",
            "updatedAt": "2018-05-02T09:26:24.000Z"
        }
}
