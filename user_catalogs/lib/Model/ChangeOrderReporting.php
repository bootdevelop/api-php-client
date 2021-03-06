<?php
/**
 * ChangeOrderReporting
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
 * ChangeOrderReporting Class Doc Comment
 *
 * @category    Class
 * @description The reporting related to a change order operation
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChangeOrderReporting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'changeOrderReporting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'execution_uuid' => '\Swagger\Client\Model\ExecutionUUID',
        'change_order_type' => '\Swagger\Client\Model\BusinessOperationType',
        'source_type' => '\Swagger\Client\Model\SourceType',
        'source_user_id' => '\Swagger\Client\Model\BeezUPCommonUserId',
        'source_user_name' => 'string',
        'creation_utc_date' => '\DateTime',
        'processing_status' => 'string',
        'last_update_utc_date' => '\DateTime',
        'error_message' => 'string',
        'ip_address' => 'string',
        'test_mode' => 'bool',
        'details' => 'map[string,object]'
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
        'execution_uuid' => 'executionUUID',
        'change_order_type' => 'changeOrderType',
        'source_type' => 'sourceType',
        'source_user_id' => 'sourceUserId',
        'source_user_name' => 'sourceUserName',
        'creation_utc_date' => 'creationUtcDate',
        'processing_status' => 'processingStatus',
        'last_update_utc_date' => 'lastUpdateUtcDate',
        'error_message' => 'errorMessage',
        'ip_address' => 'ipAddress',
        'test_mode' => 'testMode',
        'details' => 'details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'execution_uuid' => 'setExecutionUuid',
        'change_order_type' => 'setChangeOrderType',
        'source_type' => 'setSourceType',
        'source_user_id' => 'setSourceUserId',
        'source_user_name' => 'setSourceUserName',
        'creation_utc_date' => 'setCreationUtcDate',
        'processing_status' => 'setProcessingStatus',
        'last_update_utc_date' => 'setLastUpdateUtcDate',
        'error_message' => 'setErrorMessage',
        'ip_address' => 'setIpAddress',
        'test_mode' => 'setTestMode',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'execution_uuid' => 'getExecutionUuid',
        'change_order_type' => 'getChangeOrderType',
        'source_type' => 'getSourceType',
        'source_user_id' => 'getSourceUserId',
        'source_user_name' => 'getSourceUserName',
        'creation_utc_date' => 'getCreationUtcDate',
        'processing_status' => 'getProcessingStatus',
        'last_update_utc_date' => 'getLastUpdateUtcDate',
        'error_message' => 'getErrorMessage',
        'ip_address' => 'getIpAddress',
        'test_mode' => 'getTestMode',
        'details' => 'getDetails'
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
        $this->container['execution_uuid'] = isset($data['execution_uuid']) ? $data['execution_uuid'] : null;
        $this->container['change_order_type'] = isset($data['change_order_type']) ? $data['change_order_type'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['source_user_id'] = isset($data['source_user_id']) ? $data['source_user_id'] : null;
        $this->container['source_user_name'] = isset($data['source_user_name']) ? $data['source_user_name'] : null;
        $this->container['creation_utc_date'] = isset($data['creation_utc_date']) ? $data['creation_utc_date'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['last_update_utc_date'] = isset($data['last_update_utc_date']) ? $data['last_update_utc_date'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
     * Gets execution_uuid
     * @return \Swagger\Client\Model\ExecutionUUID
     */
    public function getExecutionUuid()
    {
        return $this->container['execution_uuid'];
    }

    /**
     * Sets execution_uuid
     * @param \Swagger\Client\Model\ExecutionUUID $execution_uuid
     * @return $this
     */
    public function setExecutionUuid($execution_uuid)
    {
        $this->container['execution_uuid'] = $execution_uuid;

        return $this;
    }

    /**
     * Gets change_order_type
     * @return \Swagger\Client\Model\BusinessOperationType
     */
    public function getChangeOrderType()
    {
        return $this->container['change_order_type'];
    }

    /**
     * Sets change_order_type
     * @param \Swagger\Client\Model\BusinessOperationType $change_order_type
     * @return $this
     */
    public function setChangeOrderType($change_order_type)
    {
        $this->container['change_order_type'] = $change_order_type;

        return $this;
    }

    /**
     * Gets source_type
     * @return \Swagger\Client\Model\SourceType
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     * @param \Swagger\Client\Model\SourceType $source_type
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets source_user_id
     * @return \Swagger\Client\Model\BeezUPCommonUserId
     */
    public function getSourceUserId()
    {
        return $this->container['source_user_id'];
    }

    /**
     * Sets source_user_id
     * @param \Swagger\Client\Model\BeezUPCommonUserId $source_user_id
     * @return $this
     */
    public function setSourceUserId($source_user_id)
    {
        $this->container['source_user_id'] = $source_user_id;

        return $this;
    }

    /**
     * Gets source_user_name
     * @return string
     */
    public function getSourceUserName()
    {
        return $this->container['source_user_name'];
    }

    /**
     * Sets source_user_name
     * @param string $source_user_name
     * @return $this
     */
    public function setSourceUserName($source_user_name)
    {
        $this->container['source_user_name'] = $source_user_name;

        return $this;
    }

    /**
     * Gets creation_utc_date
     * @return \DateTime
     */
    public function getCreationUtcDate()
    {
        return $this->container['creation_utc_date'];
    }

    /**
     * Sets creation_utc_date
     * @param \DateTime $creation_utc_date The creation UTC date of the execution
     * @return $this
     */
    public function setCreationUtcDate($creation_utc_date)
    {
        $this->container['creation_utc_date'] = $creation_utc_date;

        return $this;
    }

    /**
     * Gets processing_status
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     * @param string $processing_status The processing status of the execution
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets last_update_utc_date
     * @return \DateTime
     */
    public function getLastUpdateUtcDate()
    {
        return $this->container['last_update_utc_date'];
    }

    /**
     * Sets last_update_utc_date
     * @param \DateTime $last_update_utc_date The last update UTC date of the execution
     * @return $this
     */
    public function setLastUpdateUtcDate($last_update_utc_date)
    {
        $this->container['last_update_utc_date'] = $last_update_utc_date;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message The error message during the execution
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     * @param string $ip_address The IP address who request this operation
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets test_mode
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     * @param bool $test_mode This operation was a test
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets details
     * @return map[string,object]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param map[string,object] $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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


