<?php
/**
 * ReportFilterLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ReportFilterLinks Class Doc Comment
 *
 * @category    Class
 * @description Indicates the actions you can do on this report filter
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportFilterLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportFilterLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\Swagger\Client\Model\LinksGetReportFilterLink',
        'save' => '\Swagger\Client\Model\LinksSaveReportFilterLink',
        'delete' => '\Swagger\Client\Model\LinksDeleteReportFilterLink'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'self' => 'self',
        'save' => 'save',
        'delete' => 'delete'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'save' => 'setSave',
        'delete' => 'setDelete'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'save' => 'getSave',
        'delete' => 'getDelete'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['save'] = isset($data['save']) ? $data['save'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets self
     * @return \Swagger\Client\Model\LinksGetReportFilterLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \Swagger\Client\Model\LinksGetReportFilterLink $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets save
     * @return \Swagger\Client\Model\LinksSaveReportFilterLink
     */
    public function getSave()
    {
        return $this->container['save'];
    }

    /**
     * Sets save
     * @param \Swagger\Client\Model\LinksSaveReportFilterLink $save
     * @return $this
     */
    public function setSave($save)
    {
        $this->container['save'] = $save;

        return $this;
    }

    /**
     * Gets delete
     * @return \Swagger\Client\Model\LinksDeleteReportFilterLink
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     * @param \Swagger\Client\Model\LinksDeleteReportFilterLink $delete
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

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


