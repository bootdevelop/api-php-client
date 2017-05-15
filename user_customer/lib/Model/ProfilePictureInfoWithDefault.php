<?php
/**
 * ProfilePictureInfoWithDefault
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
 * ProfilePictureInfoWithDefault Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProfilePictureInfoWithDefault implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'profilePictureInfoWithDefault';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile_picture_url' => '\Swagger\Client\Model\ProfilePictureUrl',
        'profile_picture_selected' => '\Swagger\Client\Model\ProfilePictureSelected',
        'initials_profile_picture_url' => '\Swagger\Client\Model\InitialsProfilePictureUrl',
        'gravatar_profile_picture_url' => '\Swagger\Client\Model\GravatarProfilePictureUrl'
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
        'profile_picture_url' => 'profilePictureUrl',
        'profile_picture_selected' => 'profilePictureSelected',
        'initials_profile_picture_url' => 'initialsProfilePictureUrl',
        'gravatar_profile_picture_url' => 'gravatarProfilePictureUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'profile_picture_url' => 'setProfilePictureUrl',
        'profile_picture_selected' => 'setProfilePictureSelected',
        'initials_profile_picture_url' => 'setInitialsProfilePictureUrl',
        'gravatar_profile_picture_url' => 'setGravatarProfilePictureUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'profile_picture_url' => 'getProfilePictureUrl',
        'profile_picture_selected' => 'getProfilePictureSelected',
        'initials_profile_picture_url' => 'getInitialsProfilePictureUrl',
        'gravatar_profile_picture_url' => 'getGravatarProfilePictureUrl'
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
        $this->container['profile_picture_url'] = isset($data['profile_picture_url']) ? $data['profile_picture_url'] : null;
        $this->container['profile_picture_selected'] = isset($data['profile_picture_selected']) ? $data['profile_picture_selected'] : null;
        $this->container['initials_profile_picture_url'] = isset($data['initials_profile_picture_url']) ? $data['initials_profile_picture_url'] : null;
        $this->container['gravatar_profile_picture_url'] = isset($data['gravatar_profile_picture_url']) ? $data['gravatar_profile_picture_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['profile_picture_selected'] === null) {
            $invalid_properties[] = "'profile_picture_selected' can't be null";
        }
        if ($this->container['initials_profile_picture_url'] === null) {
            $invalid_properties[] = "'initials_profile_picture_url' can't be null";
        }
        if ($this->container['gravatar_profile_picture_url'] === null) {
            $invalid_properties[] = "'gravatar_profile_picture_url' can't be null";
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

        if ($this->container['profile_picture_selected'] === null) {
            return false;
        }
        if ($this->container['initials_profile_picture_url'] === null) {
            return false;
        }
        if ($this->container['gravatar_profile_picture_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets profile_picture_url
     * @return \Swagger\Client\Model\ProfilePictureUrl
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     * @param \Swagger\Client\Model\ProfilePictureUrl $profile_picture_url
     * @return $this
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets profile_picture_selected
     * @return \Swagger\Client\Model\ProfilePictureSelected
     */
    public function getProfilePictureSelected()
    {
        return $this->container['profile_picture_selected'];
    }

    /**
     * Sets profile_picture_selected
     * @param \Swagger\Client\Model\ProfilePictureSelected $profile_picture_selected
     * @return $this
     */
    public function setProfilePictureSelected($profile_picture_selected)
    {
        $this->container['profile_picture_selected'] = $profile_picture_selected;

        return $this;
    }

    /**
     * Gets initials_profile_picture_url
     * @return \Swagger\Client\Model\InitialsProfilePictureUrl
     */
    public function getInitialsProfilePictureUrl()
    {
        return $this->container['initials_profile_picture_url'];
    }

    /**
     * Sets initials_profile_picture_url
     * @param \Swagger\Client\Model\InitialsProfilePictureUrl $initials_profile_picture_url
     * @return $this
     */
    public function setInitialsProfilePictureUrl($initials_profile_picture_url)
    {
        $this->container['initials_profile_picture_url'] = $initials_profile_picture_url;

        return $this;
    }

    /**
     * Gets gravatar_profile_picture_url
     * @return \Swagger\Client\Model\GravatarProfilePictureUrl
     */
    public function getGravatarProfilePictureUrl()
    {
        return $this->container['gravatar_profile_picture_url'];
    }

    /**
     * Sets gravatar_profile_picture_url
     * @param \Swagger\Client\Model\GravatarProfilePictureUrl $gravatar_profile_picture_url
     * @return $this
     */
    public function setGravatarProfilePictureUrl($gravatar_profile_picture_url)
    {
        $this->container['gravatar_profile_picture_url'] = $gravatar_profile_picture_url;

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


