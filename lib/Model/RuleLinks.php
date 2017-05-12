<?php
/**
 * RuleLinks
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
 * RuleLinks Class Doc Comment
 *
 * @category    Class
 * @description Links to retrieve/action on other entities
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RuleLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ruleLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\Swagger\Client\Model\DefinitionsLinksGetRuleLink',
        'run' => '\Swagger\Client\Model\DefinitionsLinksRunRuleLink',
        'delete' => '\Swagger\Client\Model\DefinitionsLinksDeleteRuleLink',
        'moveup' => '\Swagger\Client\Model\DefinitionsLinksMoveUpRuleLink',
        'movedown' => '\Swagger\Client\Model\DefinitionsLinksMoveDownRuleLink',
        'enable' => '\Swagger\Client\Model\DefinitionsLinksEnableRuleLink',
        'disable' => '\Swagger\Client\Model\DefinitionsLinksDisableRuleLink',
        'update' => '\Swagger\Client\Model\DefinitionsLinksUpdateRuleLink',
        'report_filter' => '\Swagger\Client\Model\DefinitionsLinksGetReportFilterLink'
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
        'run' => 'run',
        'delete' => 'delete',
        'moveup' => 'moveup',
        'movedown' => 'movedown',
        'enable' => 'enable',
        'disable' => 'disable',
        'update' => 'update',
        'report_filter' => 'reportFilter'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'run' => 'setRun',
        'delete' => 'setDelete',
        'moveup' => 'setMoveup',
        'movedown' => 'setMovedown',
        'enable' => 'setEnable',
        'disable' => 'setDisable',
        'update' => 'setUpdate',
        'report_filter' => 'setReportFilter'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'run' => 'getRun',
        'delete' => 'getDelete',
        'moveup' => 'getMoveup',
        'movedown' => 'getMovedown',
        'enable' => 'getEnable',
        'disable' => 'getDisable',
        'update' => 'getUpdate',
        'report_filter' => 'getReportFilter'
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
        $this->container['run'] = isset($data['run']) ? $data['run'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['moveup'] = isset($data['moveup']) ? $data['moveup'] : null;
        $this->container['movedown'] = isset($data['movedown']) ? $data['movedown'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['report_filter'] = isset($data['report_filter']) ? $data['report_filter'] : null;
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
     * @return \Swagger\Client\Model\DefinitionsLinksGetRuleLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \Swagger\Client\Model\DefinitionsLinksGetRuleLink $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets run
     * @return \Swagger\Client\Model\DefinitionsLinksRunRuleLink
     */
    public function getRun()
    {
        return $this->container['run'];
    }

    /**
     * Sets run
     * @param \Swagger\Client\Model\DefinitionsLinksRunRuleLink $run
     * @return $this
     */
    public function setRun($run)
    {
        $this->container['run'] = $run;

        return $this;
    }

    /**
     * Gets delete
     * @return \Swagger\Client\Model\DefinitionsLinksDeleteRuleLink
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     * @param \Swagger\Client\Model\DefinitionsLinksDeleteRuleLink $delete
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets moveup
     * @return \Swagger\Client\Model\DefinitionsLinksMoveUpRuleLink
     */
    public function getMoveup()
    {
        return $this->container['moveup'];
    }

    /**
     * Sets moveup
     * @param \Swagger\Client\Model\DefinitionsLinksMoveUpRuleLink $moveup
     * @return $this
     */
    public function setMoveup($moveup)
    {
        $this->container['moveup'] = $moveup;

        return $this;
    }

    /**
     * Gets movedown
     * @return \Swagger\Client\Model\DefinitionsLinksMoveDownRuleLink
     */
    public function getMovedown()
    {
        return $this->container['movedown'];
    }

    /**
     * Sets movedown
     * @param \Swagger\Client\Model\DefinitionsLinksMoveDownRuleLink $movedown
     * @return $this
     */
    public function setMovedown($movedown)
    {
        $this->container['movedown'] = $movedown;

        return $this;
    }

    /**
     * Gets enable
     * @return \Swagger\Client\Model\DefinitionsLinksEnableRuleLink
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     * @param \Swagger\Client\Model\DefinitionsLinksEnableRuleLink $enable
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets disable
     * @return \Swagger\Client\Model\DefinitionsLinksDisableRuleLink
     */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
     * Sets disable
     * @param \Swagger\Client\Model\DefinitionsLinksDisableRuleLink $disable
     * @return $this
     */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;

        return $this;
    }

    /**
     * Gets update
     * @return \Swagger\Client\Model\DefinitionsLinksUpdateRuleLink
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     * @param \Swagger\Client\Model\DefinitionsLinksUpdateRuleLink $update
     * @return $this
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets report_filter
     * @return \Swagger\Client\Model\DefinitionsLinksGetReportFilterLink
     */
    public function getReportFilter()
    {
        return $this->container['report_filter'];
    }

    /**
     * Sets report_filter
     * @param \Swagger\Client\Model\DefinitionsLinksGetReportFilterLink $report_filter
     * @return $this
     */
    public function setReportFilter($report_filter)
    {
        $this->container['report_filter'] = $report_filter;

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


