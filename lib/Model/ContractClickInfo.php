<?php
/**
 * ContractClickInfo
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
 * ContractClickInfo Class Doc Comment
 *
 * @category    Class
 * @description Describe the click information related to the offer.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContractClickInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'contractClickInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_click_price' => 'double',
        'click_included' => 'int',
        'initial_offer_click_included' => 'int'
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
        'additional_click_price' => 'additionalClickPrice',
        'click_included' => 'clickIncluded',
        'initial_offer_click_included' => 'initialOfferClickIncluded'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_click_price' => 'setAdditionalClickPrice',
        'click_included' => 'setClickIncluded',
        'initial_offer_click_included' => 'setInitialOfferClickIncluded'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_click_price' => 'getAdditionalClickPrice',
        'click_included' => 'getClickIncluded',
        'initial_offer_click_included' => 'getInitialOfferClickIncluded'
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
        $this->container['additional_click_price'] = isset($data['additional_click_price']) ? $data['additional_click_price'] : null;
        $this->container['click_included'] = isset($data['click_included']) ? $data['click_included'] : null;
        $this->container['initial_offer_click_included'] = isset($data['initial_offer_click_included']) ? $data['initial_offer_click_included'] : null;
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
     * Gets additional_click_price
     * @return double
     */
    public function getAdditionalClickPrice()
    {
        return $this->container['additional_click_price'];
    }

    /**
     * Sets additional_click_price
     * @param double $additional_click_price The addition click price in the offer
     * @return $this
     */
    public function setAdditionalClickPrice($additional_click_price)
    {
        $this->container['additional_click_price'] = $additional_click_price;

        return $this;
    }

    /**
     * Gets click_included
     * @return int
     */
    public function getClickIncluded()
    {
        return $this->container['click_included'];
    }

    /**
     * Sets click_included
     * @param int $click_included The click included in the offer
     * @return $this
     */
    public function setClickIncluded($click_included)
    {
        $this->container['click_included'] = $click_included;

        return $this;
    }

    /**
     * Gets initial_offer_click_included
     * @return int
     */
    public function getInitialOfferClickIncluded()
    {
        return $this->container['initial_offer_click_included'];
    }

    /**
     * Sets initial_offer_click_included
     * @param int $initial_offer_click_included The click included in your current contract
     * @return $this
     */
    public function setInitialOfferClickIncluded($initial_offer_click_included)
    {
        $this->container['initial_offer_click_included'] = $initial_offer_click_included;

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


