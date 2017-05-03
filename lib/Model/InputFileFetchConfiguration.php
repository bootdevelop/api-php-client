<?php
/**
 * InputFileFetchConfiguration
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
 * InputFileFetchConfiguration Class Doc Comment
 *
 * @category    Class
 * @description Describe the way to download the file
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InputFileFetchConfiguration implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inputFileFetchConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uri' => 'string',
        'credential' => '\Swagger\Client\Model\Credential',
        'download_catalog_strategy' => '\Swagger\Client\Model\DownloadCatalogStrategy',
        'compression_format_strategy' => '\Swagger\Client\Model\CompressionFormatStrategy',
        'compressed_relative_path' => 'string',
        'download_timeout' => 'int'
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
        'uri' => 'uri',
        'credential' => 'credential',
        'download_catalog_strategy' => 'downloadCatalogStrategy',
        'compression_format_strategy' => 'compressionFormatStrategy',
        'compressed_relative_path' => 'compressedRelativePath',
        'download_timeout' => 'downloadTimeout'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'credential' => 'setCredential',
        'download_catalog_strategy' => 'setDownloadCatalogStrategy',
        'compression_format_strategy' => 'setCompressionFormatStrategy',
        'compressed_relative_path' => 'setCompressedRelativePath',
        'download_timeout' => 'setDownloadTimeout'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'credential' => 'getCredential',
        'download_catalog_strategy' => 'getDownloadCatalogStrategy',
        'compression_format_strategy' => 'getCompressionFormatStrategy',
        'compressed_relative_path' => 'getCompressedRelativePath',
        'download_timeout' => 'getDownloadTimeout'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['download_catalog_strategy'] = isset($data['download_catalog_strategy']) ? $data['download_catalog_strategy'] : null;
        $this->container['compression_format_strategy'] = isset($data['compression_format_strategy']) ? $data['compression_format_strategy'] : null;
        $this->container['compressed_relative_path'] = isset($data['compressed_relative_path']) ? $data['compressed_relative_path'] : null;
        $this->container['download_timeout'] = isset($data['download_timeout']) ? $data['download_timeout'] : 30;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['uri'] === null) {
            $invalid_properties[] = "'uri' can't be null";
        }
        if ($this->container['download_catalog_strategy'] === null) {
            $invalid_properties[] = "'download_catalog_strategy' can't be null";
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

        if ($this->container['uri'] === null) {
            return false;
        }
        if ($this->container['download_catalog_strategy'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param string $uri Indicate the Uri of the file. (http, https, ftp, ftps, sftp are allowed)
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets credential
     * @return \Swagger\Client\Model\Credential
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     * @param \Swagger\Client\Model\Credential $credential
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

        return $this;
    }

    /**
     * Gets download_catalog_strategy
     * @return \Swagger\Client\Model\DownloadCatalogStrategy
     */
    public function getDownloadCatalogStrategy()
    {
        return $this->container['download_catalog_strategy'];
    }

    /**
     * Sets download_catalog_strategy
     * @param \Swagger\Client\Model\DownloadCatalogStrategy $download_catalog_strategy
     * @return $this
     */
    public function setDownloadCatalogStrategy($download_catalog_strategy)
    {
        $this->container['download_catalog_strategy'] = $download_catalog_strategy;

        return $this;
    }

    /**
     * Gets compression_format_strategy
     * @return \Swagger\Client\Model\CompressionFormatStrategy
     */
    public function getCompressionFormatStrategy()
    {
        return $this->container['compression_format_strategy'];
    }

    /**
     * Sets compression_format_strategy
     * @param \Swagger\Client\Model\CompressionFormatStrategy $compression_format_strategy
     * @return $this
     */
    public function setCompressionFormatStrategy($compression_format_strategy)
    {
        $this->container['compression_format_strategy'] = $compression_format_strategy;

        return $this;
    }

    /**
     * Gets compressed_relative_path
     * @return string
     */
    public function getCompressedRelativePath()
    {
        return $this->container['compressed_relative_path'];
    }

    /**
     * Sets compressed_relative_path
     * @param string $compressed_relative_path Indicate the relative path in the compressed file
     * @return $this
     */
    public function setCompressedRelativePath($compressed_relative_path)
    {
        $this->container['compressed_relative_path'] = $compressed_relative_path;

        return $this;
    }

    /**
     * Gets download_timeout
     * @return int
     */
    public function getDownloadTimeout()
    {
        return $this->container['download_timeout'];
    }

    /**
     * Sets download_timeout
     * @param int $download_timeout Indicate the download time out in second
     * @return $this
     */
    public function setDownloadTimeout($download_timeout)
    {
        $this->container['download_timeout'] = $download_timeout;

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


