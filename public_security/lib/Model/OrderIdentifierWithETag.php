<?php
/**
 * OrderIdentifierWithETag
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplaces - Orders
 *
 * The features exposed in this API are centered around managing Orders harvested from your configured marketplaces.\\ This includes: - fetching current information (as known by BeezUP) for a single or multiple Orders, - requesting Order harvest to synchronize your marketplaces and BeezUP accounts, - changing BeezUP data and requesting changes to your marketplaces (accepting, shipping, etc), - configuring automatic changes to marketplace based our newly fetched data, - creating and exporting reports for your Orders.
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
 * OrderIdentifierWithETag Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderIdentifierWithETag implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderIdentifierWithETag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode',
        'account_id' => '\Swagger\Client\Model\AccountId',
        'beez_up_order_id' => '\Swagger\Client\Model\BeezUPOrderId',
        'etag' => '\Swagger\Client\Model\Etag'
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
        'marketplace_technical_code' => 'marketplaceTechnicalCode',
        'account_id' => 'accountId',
        'beez_up_order_id' => 'beezUPOrderId',
        'etag' => 'etag'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'account_id' => 'setAccountId',
        'beez_up_order_id' => 'setBeezUpOrderId',
        'etag' => 'setEtag'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'account_id' => 'getAccountId',
        'beez_up_order_id' => 'getBeezUpOrderId',
        'etag' => 'getEtag'
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
        $this->container['marketplace_technical_code'] = isset($data['marketplace_technical_code']) ? $data['marketplace_technical_code'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['beez_up_order_id'] = isset($data['beez_up_order_id']) ? $data['beez_up_order_id'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['marketplace_technical_code'] === null) {
            $invalid_properties[] = "'marketplace_technical_code' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['beez_up_order_id'] === null) {
            $invalid_properties[] = "'beez_up_order_id' can't be null";
        }
        if ($this->container['etag'] === null) {
            $invalid_properties[] = "'etag' can't be null";
        }
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

        if ($this->container['marketplace_technical_code'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_order_id'] === null) {
            return false;
        }
        if ($this->container['etag'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets marketplace_technical_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode
     */
    public function getMarketplaceTechnicalCode()
    {
        return $this->container['marketplace_technical_code'];
    }

    /**
     * Sets marketplace_technical_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode $marketplace_technical_code
     * @return $this
     */
    public function setMarketplaceTechnicalCode($marketplace_technical_code)
    {
        $this->container['marketplace_technical_code'] = $marketplace_technical_code;

        return $this;
    }

    /**
     * Gets account_id
     * @return \Swagger\Client\Model\AccountId
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param \Swagger\Client\Model\AccountId $account_id
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets beez_up_order_id
     * @return \Swagger\Client\Model\BeezUPOrderId
     */
    public function getBeezUpOrderId()
    {
        return $this->container['beez_up_order_id'];
    }

    /**
     * Sets beez_up_order_id
     * @param \Swagger\Client\Model\BeezUPOrderId $beez_up_order_id
     * @return $this
     */
    public function setBeezUpOrderId($beez_up_order_id)
    {
        $this->container['beez_up_order_id'] = $beez_up_order_id;

        return $this;
    }

    /**
     * Gets etag
     * @return \Swagger\Client\Model\Etag
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     * @param \Swagger\Client\Model\Etag $etag
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

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


