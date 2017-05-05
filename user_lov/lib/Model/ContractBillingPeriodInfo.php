<?php
/**
 * ContractBillingPeriodInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer
 *
 * This API will gives you the ability to : - manage your account - manage your stores - shares your stores with your friends - manage your contracts - access to your invoices
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
 * ContractBillingPeriodInfo Class Doc Comment
 *
 * @category    Class
 * @description Describe the billing period information related to the offer.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContractBillingPeriodInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'contractBillingPeriodInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_billing_period_discount' => 'double',
        'billing_period_percent_discount' => 'double',
        'billing_period_in_month' => '\Swagger\Client\Model\BillingPeriodInMonth'
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
        'amount_billing_period_discount' => 'amountBillingPeriodDiscount',
        'billing_period_percent_discount' => 'billingPeriodPercentDiscount',
        'billing_period_in_month' => 'billingPeriodInMonth'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount_billing_period_discount' => 'setAmountBillingPeriodDiscount',
        'billing_period_percent_discount' => 'setBillingPeriodPercentDiscount',
        'billing_period_in_month' => 'setBillingPeriodInMonth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount_billing_period_discount' => 'getAmountBillingPeriodDiscount',
        'billing_period_percent_discount' => 'getBillingPeriodPercentDiscount',
        'billing_period_in_month' => 'getBillingPeriodInMonth'
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
        $this->container['amount_billing_period_discount'] = isset($data['amount_billing_period_discount']) ? $data['amount_billing_period_discount'] : null;
        $this->container['billing_period_percent_discount'] = isset($data['billing_period_percent_discount']) ? $data['billing_period_percent_discount'] : null;
        $this->container['billing_period_in_month'] = isset($data['billing_period_in_month']) ? $data['billing_period_in_month'] : null;
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
     * Gets amount_billing_period_discount
     * @return double
     */
    public function getAmountBillingPeriodDiscount()
    {
        return $this->container['amount_billing_period_discount'];
    }

    /**
     * Sets amount_billing_period_discount
     * @param double $amount_billing_period_discount The amount discounted related to the billing period
     * @return $this
     */
    public function setAmountBillingPeriodDiscount($amount_billing_period_discount)
    {
        $this->container['amount_billing_period_discount'] = $amount_billing_period_discount;

        return $this;
    }

    /**
     * Gets billing_period_percent_discount
     * @return double
     */
    public function getBillingPeriodPercentDiscount()
    {
        return $this->container['billing_period_percent_discount'];
    }

    /**
     * Sets billing_period_percent_discount
     * @param double $billing_period_percent_discount The discount percent related to the billing period
     * @return $this
     */
    public function setBillingPeriodPercentDiscount($billing_period_percent_discount)
    {
        $this->container['billing_period_percent_discount'] = $billing_period_percent_discount;

        return $this;
    }

    /**
     * Gets billing_period_in_month
     * @return \Swagger\Client\Model\BillingPeriodInMonth
     */
    public function getBillingPeriodInMonth()
    {
        return $this->container['billing_period_in_month'];
    }

    /**
     * Sets billing_period_in_month
     * @param \Swagger\Client\Model\BillingPeriodInMonth $billing_period_in_month
     * @return $this
     */
    public function setBillingPeriodInMonth($billing_period_in_month)
    {
        $this->container['billing_period_in_month'] = $billing_period_in_month;

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

