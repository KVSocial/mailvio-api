<?php
/**
 * GetTransacAggregatedSmsReport
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
 * GetTransacAggregatedSmsReport Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetTransacAggregatedSmsReport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getTransacAggregatedSmsReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'range' => 'string',
        'requests' => 'int',
        'delivered' => 'int',
        'hard_bounces' => 'int',
        'soft_bounces' => 'int',
        'blocked' => 'int',
        'unsubscribed' => 'int',
        'replied' => 'int',
        'accepted' => 'int',
        'rejected' => 'int'
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
        'range' => 'range',
        'requests' => 'requests',
        'delivered' => 'delivered',
        'hard_bounces' => 'hardBounces',
        'soft_bounces' => 'softBounces',
        'blocked' => 'blocked',
        'unsubscribed' => 'unsubscribed',
        'replied' => 'replied',
        'accepted' => 'accepted',
        'rejected' => 'rejected'
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
        'range' => 'setRange',
        'requests' => 'setRequests',
        'delivered' => 'setDelivered',
        'hard_bounces' => 'setHardBounces',
        'soft_bounces' => 'setSoftBounces',
        'blocked' => 'setBlocked',
        'unsubscribed' => 'setUnsubscribed',
        'replied' => 'setReplied',
        'accepted' => 'setAccepted',
        'rejected' => 'setRejected'
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
        'range' => 'getRange',
        'requests' => 'getRequests',
        'delivered' => 'getDelivered',
        'hard_bounces' => 'getHardBounces',
        'soft_bounces' => 'getSoftBounces',
        'blocked' => 'getBlocked',
        'unsubscribed' => 'getUnsubscribed',
        'replied' => 'getReplied',
        'accepted' => 'getAccepted',
        'rejected' => 'getRejected'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['hard_bounces'] = isset($data['hard_bounces']) ? $data['hard_bounces'] : null;
        $this->container['soft_bounces'] = isset($data['soft_bounces']) ? $data['soft_bounces'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['unsubscribed'] = isset($data['unsubscribed']) ? $data['unsubscribed'] : null;
        $this->container['replied'] = isset($data['replied']) ? $data['replied'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['rejected'] = isset($data['rejected']) ? $data['rejected'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['range'] === null) {
            $invalid_properties[] = "'range' can't be null";
        }
        if ($this->container['requests'] === null) {
            $invalid_properties[] = "'requests' can't be null";
        }
        if ($this->container['delivered'] === null) {
            $invalid_properties[] = "'delivered' can't be null";
        }
        if ($this->container['hard_bounces'] === null) {
            $invalid_properties[] = "'hard_bounces' can't be null";
        }
        if ($this->container['soft_bounces'] === null) {
            $invalid_properties[] = "'soft_bounces' can't be null";
        }
        if ($this->container['blocked'] === null) {
            $invalid_properties[] = "'blocked' can't be null";
        }
        if ($this->container['unsubscribed'] === null) {
            $invalid_properties[] = "'unsubscribed' can't be null";
        }
        if ($this->container['replied'] === null) {
            $invalid_properties[] = "'replied' can't be null";
        }
        if ($this->container['accepted'] === null) {
            $invalid_properties[] = "'accepted' can't be null";
        }
        if ($this->container['rejected'] === null) {
            $invalid_properties[] = "'rejected' can't be null";
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
        if ($this->container['range'] === null) {
            return false;
        }
        if ($this->container['requests'] === null) {
            return false;
        }
        if ($this->container['delivered'] === null) {
            return false;
        }
        if ($this->container['hard_bounces'] === null) {
            return false;
        }
        if ($this->container['soft_bounces'] === null) {
            return false;
        }
        if ($this->container['blocked'] === null) {
            return false;
        }
        if ($this->container['unsubscribed'] === null) {
            return false;
        }
        if ($this->container['replied'] === null) {
            return false;
        }
        if ($this->container['accepted'] === null) {
            return false;
        }
        if ($this->container['rejected'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets range
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     * @param string $range Time frame of the report
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets requests
     * @return int
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     * @param int $requests Number of requests for the timeframe
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets delivered
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     * @param int $delivered Number of delivered SMS for the timeframe
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets hard_bounces
     * @return int
     */
    public function getHardBounces()
    {
        return $this->container['hard_bounces'];
    }

    /**
     * Sets hard_bounces
     * @param int $hard_bounces Number of hardbounces for the timeframe
     * @return $this
     */
    public function setHardBounces($hard_bounces)
    {
        $this->container['hard_bounces'] = $hard_bounces;

        return $this;
    }

    /**
     * Gets soft_bounces
     * @return int
     */
    public function getSoftBounces()
    {
        return $this->container['soft_bounces'];
    }

    /**
     * Sets soft_bounces
     * @param int $soft_bounces Number of softbounces for the timeframe
     * @return $this
     */
    public function setSoftBounces($soft_bounces)
    {
        $this->container['soft_bounces'] = $soft_bounces;

        return $this;
    }

    /**
     * Gets blocked
     * @return int
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param int $blocked Number of blocked contact for the timeframe
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets unsubscribed
     * @return int
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     * @param int $unsubscribed Number of unsubscription for the timeframe
     * @return $this
     */
    public function setUnsubscribed($unsubscribed)
    {
        $this->container['unsubscribed'] = $unsubscribed;

        return $this;
    }

    /**
     * Gets replied
     * @return int
     */
    public function getReplied()
    {
        return $this->container['replied'];
    }

    /**
     * Sets replied
     * @param int $replied Number of answered SMS for the timeframe
     * @return $this
     */
    public function setReplied($replied)
    {
        $this->container['replied'] = $replied;

        return $this;
    }

    /**
     * Gets accepted
     * @return int
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     * @param int $accepted Number of accepted for the timeframe
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

        return $this;
    }

    /**
     * Gets rejected
     * @return int
     */
    public function getRejected()
    {
        return $this->container['rejected'];
    }

    /**
     * Sets rejected
     * @param int $rejected Number of rejected for the timeframe
     * @return $this
     */
    public function setRejected($rejected)
    {
        $this->container['rejected'] = $rejected;

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


