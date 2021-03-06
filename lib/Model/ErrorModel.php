<?php
/**
 * ErrorModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailvio API Reference
 *
 * Mailvio provides a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/KVSocial/mailvio-api  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: support@mailvio.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ErrorModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'errorModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'code' => 'string',
        'message' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'code' => 'code',
        'message' => 'message'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'code' => 'setCode',
        'message' => 'setMessage'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'code' => 'getCode',
        'message' => 'getMessage'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const CODE_INVALID_PARAMETER = 'invalid_parameter';
    const CODE_MISSING_PARAMETER = 'missing_parameter';
    const CODE_OUT_OF_RANGE = 'out_of_range';
    const CODE_CAMPAIGN_PROCESSING = 'campaign_processing';
    const CODE_CAMPAIGN_SENT = 'campaign_sent';
    const CODE_DOCUMENT_NOT_FOUND = 'document_not_found';
    const CODE_RESELLER_PERMISSION_DENIED = 'reseller_permission_denied';
    const CODE_NOT_ENOUGH_CREDITS = 'not_enough_credits';
    const CODE_PERMISSION_DENIED = 'permission_denied';
    const CODE_DUPLICATE_PARAMETER = 'duplicate_parameter';
    const CODE_DUPLICATE_REQUEST = 'duplicate_request';
    const CODE_METHOD_NOT_ALLOWED = 'method_not_allowed';
    const CODE_UNAUTHORIZED = 'unauthorized';
    const CODE_ACCOUNT_UNDER_VALIDATION = 'account_under_validation';
    const CODE_NOT_ACCEPTABLE = 'not_acceptable';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_PARAMETER,
            self::CODE_MISSING_PARAMETER,
            self::CODE_OUT_OF_RANGE,
            self::CODE_CAMPAIGN_PROCESSING,
            self::CODE_CAMPAIGN_SENT,
            self::CODE_DOCUMENT_NOT_FOUND,
            self::CODE_RESELLER_PERMISSION_DENIED,
            self::CODE_NOT_ENOUGH_CREDITS,
            self::CODE_PERMISSION_DENIED,
            self::CODE_DUPLICATE_PARAMETER,
            self::CODE_DUPLICATE_REQUEST,
            self::CODE_METHOD_NOT_ALLOWED,
            self::CODE_UNAUTHORIZED,
            self::CODE_ACCOUNT_UNDER_VALIDATION,
            self::CODE_NOT_ACCEPTABLE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        $allowed_values = array("invalid_parameter", "missing_parameter", "out_of_range", "campaign_processing", "campaign_sent", "document_not_found", "reseller_permission_denied", "not_enough_credits", "permission_denied", "duplicate_parameter", "duplicate_request", "method_not_allowed", "unauthorized", "account_under_validation", "not_acceptable");
        if (!in_array($this->container['code'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'code', must be one of #{allowed_values}.";
        }

        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['code'] === null) {
            return false;
        }
        $allowed_values = array("invalid_parameter", "missing_parameter", "out_of_range", "campaign_processing", "campaign_sent", "document_not_found", "reseller_permission_denied", "not_enough_credits", "permission_denied", "duplicate_parameter", "duplicate_request", "method_not_allowed", "unauthorized", "account_under_validation", "not_acceptable");
        if (!in_array($this->container['code'], $allowed_values)) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Error code displayed in case of a failure
     * @return $this
     */
    public function setCode($code)
    {
        $allowed_values = array('invalid_parameter', 'missing_parameter', 'out_of_range', 'campaign_processing', 'campaign_sent', 'document_not_found', 'reseller_permission_denied', 'not_enough_credits', 'permission_denied', 'duplicate_parameter', 'duplicate_request', 'method_not_allowed', 'unauthorized', 'account_under_validation', 'not_acceptable');
        if (!in_array($code, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'code', must be one of 'invalid_parameter', 'missing_parameter', 'out_of_range', 'campaign_processing', 'campaign_sent', 'document_not_found', 'reseller_permission_denied', 'not_enough_credits', 'permission_denied', 'duplicate_parameter', 'duplicate_request', 'method_not_allowed', 'unauthorized', 'account_under_validation', 'not_acceptable'");
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Readable message associated to the failure
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


