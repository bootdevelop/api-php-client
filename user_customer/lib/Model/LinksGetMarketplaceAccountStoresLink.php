<?php
/**
 * LinksGetMarketplaceAccountStoresLink
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
 * LinksGetMarketplaceAccountStoresLink Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LinksGetMarketplaceAccountStoresLink implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'links.GetMarketplaceAccountStoresLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'doc_url' => '\Swagger\Client\Model\BeezUPCommonDocUrl',
        'description' => 'string',
        'href' => '\Swagger\Client\Model\BeezUPCommonHref',
        'operation_id' => '\Swagger\Client\Model\BeezUPCommonOperationId',
        'method' => '\Swagger\Client\Model\BeezUPCommonHttpMethod',
        'parameters' => 'map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3]',
        'templated' => 'bool',
        'info' => '\Swagger\Client\Model\BeezUPCommonInfoSummaries'
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
        'doc_url' => 'docUrl',
        'description' => 'description',
        'href' => 'href',
        'operation_id' => 'operationId',
        'method' => 'method',
        'parameters' => 'parameters',
        'templated' => 'templated',
        'info' => 'info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'doc_url' => 'setDocUrl',
        'description' => 'setDescription',
        'href' => 'setHref',
        'operation_id' => 'setOperationId',
        'method' => 'setMethod',
        'parameters' => 'setParameters',
        'templated' => 'setTemplated',
        'info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'doc_url' => 'getDocUrl',
        'description' => 'getDescription',
        'href' => 'getHref',
        'operation_id' => 'getOperationId',
        'method' => 'getMethod',
        'parameters' => 'getParameters',
        'templated' => 'getTemplated',
        'info' => 'getInfo'
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
        $this->container['doc_url'] = isset($data['doc_url']) ? $data['doc_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['templated'] = isset($data['templated']) ? $data['templated'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
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
     * Gets doc_url
     * @return \Swagger\Client\Model\BeezUPCommonDocUrl
     */
    public function getDocUrl()
    {
        return $this->container['doc_url'];
    }

    /**
     * Sets doc_url
     * @param \Swagger\Client\Model\BeezUPCommonDocUrl $doc_url
     * @return $this
     */
    public function setDocUrl($doc_url)
    {
        $this->container['doc_url'] = $doc_url;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The description of the link
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets href
     * @return \Swagger\Client\Model\BeezUPCommonHref
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     * @param \Swagger\Client\Model\BeezUPCommonHref $href
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets operation_id
     * @return \Swagger\Client\Model\BeezUPCommonOperationId
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     * @param \Swagger\Client\Model\BeezUPCommonOperationId $operation_id
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets method
     * @return \Swagger\Client\Model\BeezUPCommonHttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param \Swagger\Client\Model\BeezUPCommonHttpMethod $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets parameters
     * @return map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     * @param map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3] $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets templated
     * @return bool
     */
    public function getTemplated()
    {
        return $this->container['templated'];
    }

    /**
     * Sets templated
     * @param bool $templated indicates whether the href is templated or not
     * @return $this
     */
    public function setTemplated($templated)
    {
        $this->container['templated'] = $templated;

        return $this;
    }

    /**
     * Gets info
     * @return \Swagger\Client\Model\BeezUPCommonInfoSummaries
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Swagger\Client\Model\BeezUPCommonInfoSummaries $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

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


