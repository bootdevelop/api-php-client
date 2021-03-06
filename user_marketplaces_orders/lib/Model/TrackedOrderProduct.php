<?php
/**
 * TrackedOrderProduct
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics
 *
 * This API will help you to manage the tracking of your clicks and your sales, get reporting on this trackings and put in place rules based on this reporting to automatically optimize your channel catalogs. \\ Also, you will be able to consult the rule execution reporting.
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
 * TrackedOrderProduct Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrackedOrderProduct implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'trackedOrderProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'product_sku' => 'string',
        'product_title' => 'string',
        'product_image_url' => 'string',
        'product_active' => 'bool',
        'unit_price' => 'float',
        'quantity' => 'float',
        'margin' => 'float'
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
        'product_id' => 'productId',
        'product_sku' => 'productSku',
        'product_title' => 'productTitle',
        'product_image_url' => 'productImageUrl',
        'product_active' => 'productActive',
        'unit_price' => 'unitPrice',
        'quantity' => 'quantity',
        'margin' => 'margin'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_sku' => 'setProductSku',
        'product_title' => 'setProductTitle',
        'product_image_url' => 'setProductImageUrl',
        'product_active' => 'setProductActive',
        'unit_price' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'margin' => 'setMargin'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_sku' => 'getProductSku',
        'product_title' => 'getProductTitle',
        'product_image_url' => 'getProductImageUrl',
        'product_active' => 'getProductActive',
        'unit_price' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'margin' => 'getMargin'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['product_image_url'] = isset($data['product_image_url']) ? $data['product_image_url'] : null;
        $this->container['product_active'] = isset($data['product_active']) ? $data['product_active'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['product_sku'] === null) {
            $invalid_properties[] = "'product_sku' can't be null";
        }
        if ($this->container['product_title'] === null) {
            $invalid_properties[] = "'product_title' can't be null";
        }
        if ($this->container['product_image_url'] === null) {
            $invalid_properties[] = "'product_image_url' can't be null";
        }
        if ($this->container['product_active'] === null) {
            $invalid_properties[] = "'product_active' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalid_properties[] = "'unit_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if ($this->container['margin'] === null) {
            $invalid_properties[] = "'margin' can't be null";
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

        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['product_sku'] === null) {
            return false;
        }
        if ($this->container['product_title'] === null) {
            return false;
        }
        if ($this->container['product_image_url'] === null) {
            return false;
        }
        if ($this->container['product_active'] === null) {
            return false;
        }
        if ($this->container['unit_price'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['margin'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param string $product_id The product identifier
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_sku
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     * @param string $product_sku The product SKU
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets product_title
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     * @param string $product_title The product tile
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_image_url
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->container['product_image_url'];
    }

    /**
     * Sets product_image_url
     * @param string $product_image_url The product image Url
     * @return $this
     */
    public function setProductImageUrl($product_image_url)
    {
        $this->container['product_image_url'] = $product_image_url;

        return $this;
    }

    /**
     * Gets product_active
     * @return bool
     */
    public function getProductActive()
    {
        return $this->container['product_active'];
    }

    /**
     * Sets product_active
     * @param bool $product_active Indicates if the product still exists in your catalog
     * @return $this
     */
    public function setProductActive($product_active)
    {
        $this->container['product_active'] = $product_active;

        return $this;
    }

    /**
     * Gets unit_price
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     * @param float $unit_price The product's unit price related to this order
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity Indicate the product's quantity ordered.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets margin
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     * @param float $margin Indicate the product's margin related to this order.
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

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


