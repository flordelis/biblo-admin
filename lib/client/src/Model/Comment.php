<?php
/**
 * Comment
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
 * Comment Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DBCDK\CommunityServices
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Comment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Comment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'content' => 'string',
        'timeCreated' => '\DateTime',
        'id' => 'double',
        'commentownerid' => 'double',
        'commentcontainerpostid' => 'double',
        'postid' => 'double',
        'attachedReviewId' => 'double'
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
        'content' => 'content',
        'timeCreated' => 'timeCreated',
        'id' => 'id',
        'commentownerid' => 'commentownerid',
        'commentcontainerpostid' => 'commentcontainerpostid',
        'postid' => 'postid',
        'attachedReviewId' => 'attachedReviewId'
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
        'content' => 'setContent',
        'timeCreated' => 'setTimeCreated',
        'id' => 'setId',
        'commentownerid' => 'setCommentownerid',
        'commentcontainerpostid' => 'setCommentcontainerpostid',
        'postid' => 'setPostid',
        'attachedReviewId' => 'setAttachedReviewId'
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
        'content' => 'getContent',
        'timeCreated' => 'getTimeCreated',
        'id' => 'getId',
        'commentownerid' => 'getCommentownerid',
        'commentcontainerpostid' => 'getCommentcontainerpostid',
        'postid' => 'getPostid',
        'attachedReviewId' => 'getAttachedReviewId'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['timeCreated'] = isset($data['timeCreated']) ? $data['timeCreated'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['commentownerid'] = isset($data['commentownerid']) ? $data['commentownerid'] : null;
        $this->container['commentcontainerpostid'] = isset($data['commentcontainerpostid']) ? $data['commentcontainerpostid'] : null;
        $this->container['postid'] = isset($data['postid']) ? $data['postid'] : null;
        $this->container['attachedReviewId'] = isset($data['attachedReviewId']) ? $data['attachedReviewId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['timeCreated'] === null) {
            $invalid_properties[] = "'timeCreated' can't be null";
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
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['timeCreated'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets timeCreated
     * @return \DateTime
     */
    public function getTimeCreated()
    {
        return $this->container['timeCreated'];
    }

    /**
     * Sets timeCreated
     * @param \DateTime $timeCreated
     * @return $this
     */
    public function setTimeCreated($timeCreated)
    {
        $this->container['timeCreated'] = $timeCreated;

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
     * Gets commentownerid
     * @return double
     */
    public function getCommentownerid()
    {
        return $this->container['commentownerid'];
    }

    /**
     * Sets commentownerid
     * @param double $commentownerid
     * @return $this
     */
    public function setCommentownerid($commentownerid)
    {
        $this->container['commentownerid'] = $commentownerid;

        return $this;
    }

    /**
     * Gets commentcontainerpostid
     * @return double
     */
    public function getCommentcontainerpostid()
    {
        return $this->container['commentcontainerpostid'];
    }

    /**
     * Sets commentcontainerpostid
     * @param double $commentcontainerpostid
     * @return $this
     */
    public function setCommentcontainerpostid($commentcontainerpostid)
    {
        $this->container['commentcontainerpostid'] = $commentcontainerpostid;

        return $this;
    }

    /**
     * Gets postid
     * @return double
     */
    public function getPostid()
    {
        return $this->container['postid'];
    }

    /**
     * Sets postid
     * @param double $postid
     * @return $this
     */
    public function setPostid($postid)
    {
        $this->container['postid'] = $postid;

        return $this;
    }

    /**
     * Gets attachedReviewId
     * @return double
     */
    public function getAttachedReviewId()
    {
        return $this->container['attachedReviewId'];
    }

    /**
     * Sets attachedReviewId
     * @param double $attachedReviewId
     * @return $this
     */
    public function setAttachedReviewId($attachedReviewId)
    {
        $this->container['attachedReviewId'] = $attachedReviewId;

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


