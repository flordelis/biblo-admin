<?php
/**
 * Campaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  DBCDK\CommunityServices
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * communityservice
 *
 * OpenAPI spec version: 2.0.0
 * 
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

namespace DBCDK\CommunityServices\Model;

use \ArrayAccess;

/**
 * Campaign Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DBCDK\CommunityServices
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Campaign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'campaignName' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'logos' => 'object',
        'type' => 'string',
        'id' => 'double'
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
        'campaignName' => 'campaignName',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'logos' => 'logos',
        'type' => 'type',
        'id' => 'id'
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
        'campaignName' => 'setCampaignName',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'logos' => 'setLogos',
        'type' => 'setType',
        'id' => 'setId'
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
        'campaignName' => 'getCampaignName',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'logos' => 'getLogos',
        'type' => 'getType',
        'id' => 'getId'
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
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['logos'] = isset($data['logos']) ? $data['logos'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['campaignName'] === null) {
            $invalid_properties[] = "'campaignName' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalid_properties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalid_properties[] = "'endDate' can't be null";
        }
        if ($this->container['logos'] === null) {
            $invalid_properties[] = "'logos' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['campaignName'] === null) {
            return false;
        }
        if ($this->container['startDate'] === null) {
            return false;
        }
        if ($this->container['endDate'] === null) {
            return false;
        }
        if ($this->container['logos'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets campaignName
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     * @param string $campaignName
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets startDate
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     * @param \DateTime $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     * @param \DateTime $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets logos
     * @return object
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     * @param object $logos
     * @return $this
     */
    public function setLogos($logos)
    {
        $this->container['logos'] = $logos;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param double $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
            return json_encode(\DBCDK\CommunityServices\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DBCDK\CommunityServices\ObjectSerializer::sanitizeForSerialization($this));
    }
}


