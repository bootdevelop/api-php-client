<?php
/**
 * MarketplaceChannelCatalog
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
 * MarketplaceChannelCatalog Class Doc Comment
 *
 * @category    Class
 * @description This object indicates you the association between a channel catalog and a marketplace. The account identifier will be automatically defined based on your marketplace merchant identfier.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceChannelCatalog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'marketplaceChannelCatalog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode',
        'marketplace_business_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'string',
        'marketplace_iso_country_code_alpha2' => 'string',
        'beez_up_channel_id' => '\Swagger\Client\Model\BeezUPCommonChannelId',
        'beez_up_channel_catalog_id' => '\Swagger\Client\Model\BeezUPCommonChannelCatalogId',
        'beez_up_store_id' => '\Swagger\Client\Model\BeezUPCommonStoreId',
        'beez_up_store_name' => 'string',
        'marketplace_merchant_identifiers' => 'map[string,string]',
        'marketplace_account_id' => '\Swagger\Client\Model\BeezUPCommonMarketplaceAccountId',
        'lov_links' => '\Swagger\Client\Model\MarketplaceChannelCatalogLovLinks',
        'links' => '\Swagger\Client\Model\MarketplaceChannelCatalogLinks'
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
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'marketplace_market_place_id' => 'marketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'marketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'beezUPChannelId',
        'beez_up_channel_catalog_id' => 'beezUPChannelCatalogId',
        'beez_up_store_id' => 'beezUPStoreId',
        'beez_up_store_name' => 'beezUPStoreName',
        'marketplace_merchant_identifiers' => 'marketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'marketplaceAccountId',
        'lov_links' => 'lovLinks',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'setMarketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'setMarketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'setBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'setBeezUpChannelCatalogId',
        'beez_up_store_id' => 'setBeezUpStoreId',
        'beez_up_store_name' => 'setBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'setMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'setMarketplaceAccountId',
        'lov_links' => 'setLovLinks',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'getMarketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'getMarketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'getBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'getBeezUpChannelCatalogId',
        'beez_up_store_id' => 'getBeezUpStoreId',
        'beez_up_store_name' => 'getBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'getMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'getMarketplaceAccountId',
        'lov_links' => 'getLovLinks',
        'links' => 'getLinks'
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
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['marketplace_market_place_id'] = isset($data['marketplace_market_place_id']) ? $data['marketplace_market_place_id'] : null;
        $this->container['marketplace_iso_country_code_alpha2'] = isset($data['marketplace_iso_country_code_alpha2']) ? $data['marketplace_iso_country_code_alpha2'] : null;
        $this->container['beez_up_channel_id'] = isset($data['beez_up_channel_id']) ? $data['beez_up_channel_id'] : null;
        $this->container['beez_up_channel_catalog_id'] = isset($data['beez_up_channel_catalog_id']) ? $data['beez_up_channel_catalog_id'] : null;
        $this->container['beez_up_store_id'] = isset($data['beez_up_store_id']) ? $data['beez_up_store_id'] : null;
        $this->container['beez_up_store_name'] = isset($data['beez_up_store_name']) ? $data['beez_up_store_name'] : null;
        $this->container['marketplace_merchant_identifiers'] = isset($data['marketplace_merchant_identifiers']) ? $data['marketplace_merchant_identifiers'] : null;
        $this->container['marketplace_account_id'] = isset($data['marketplace_account_id']) ? $data['marketplace_account_id'] : null;
        $this->container['lov_links'] = isset($data['lov_links']) ? $data['lov_links'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
        if ($this->container['marketplace_business_code'] === null) {
            $invalid_properties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['marketplace_market_place_id'] === null) {
            $invalid_properties[] = "'marketplace_market_place_id' can't be null";
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            $invalid_properties[] = "'marketplace_iso_country_code_alpha2' can't be null";
        }
        if ($this->container['beez_up_channel_id'] === null) {
            $invalid_properties[] = "'beez_up_channel_id' can't be null";
        }
        if ($this->container['beez_up_channel_catalog_id'] === null) {
            $invalid_properties[] = "'beez_up_channel_catalog_id' can't be null";
        }
        if ($this->container['beez_up_store_id'] === null) {
            $invalid_properties[] = "'beez_up_store_id' can't be null";
        }
        if ($this->container['beez_up_store_name'] === null) {
            $invalid_properties[] = "'beez_up_store_name' can't be null";
        }
        if ($this->container['lov_links'] === null) {
            $invalid_properties[] = "'lov_links' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
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
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['marketplace_market_place_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            return false;
        }
        if ($this->container['beez_up_channel_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_channel_catalog_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_store_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_store_name'] === null) {
            return false;
        }
        if ($this->container['lov_links'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
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
     * Gets marketplace_business_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode
     */
    public function getMarketplaceBusinessCode()
    {
        return $this->container['marketplace_business_code'];
    }

    /**
     * Sets marketplace_business_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode $marketplace_business_code
     * @return $this
     */
    public function setMarketplaceBusinessCode($marketplace_business_code)
    {
        $this->container['marketplace_business_code'] = $marketplace_business_code;

        return $this;
    }

    /**
     * Gets marketplace_market_place_id
     * @return string
     */
    public function getMarketplaceMarketPlaceId()
    {
        return $this->container['marketplace_market_place_id'];
    }

    /**
     * Sets marketplace_market_place_id
     * @param string $marketplace_market_place_id The marketplace identifier in the marketplace
     * @return $this
     */
    public function setMarketplaceMarketPlaceId($marketplace_market_place_id)
    {
        $this->container['marketplace_market_place_id'] = $marketplace_market_place_id;

        return $this;
    }

    /**
     * Gets marketplace_iso_country_code_alpha2
     * @return string
     */
    public function getMarketplaceIsoCountryCodeAlpha2()
    {
        return $this->container['marketplace_iso_country_code_alpha2'];
    }

    /**
     * Sets marketplace_iso_country_code_alpha2
     * @param string $marketplace_iso_country_code_alpha2 The marketplace country iso code alpha 2 (see http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Decoding_table for more details)
     * @return $this
     */
    public function setMarketplaceIsoCountryCodeAlpha2($marketplace_iso_country_code_alpha2)
    {
        $this->container['marketplace_iso_country_code_alpha2'] = $marketplace_iso_country_code_alpha2;

        return $this;
    }

    /**
     * Gets beez_up_channel_id
     * @return \Swagger\Client\Model\BeezUPCommonChannelId
     */
    public function getBeezUpChannelId()
    {
        return $this->container['beez_up_channel_id'];
    }

    /**
     * Sets beez_up_channel_id
     * @param \Swagger\Client\Model\BeezUPCommonChannelId $beez_up_channel_id
     * @return $this
     */
    public function setBeezUpChannelId($beez_up_channel_id)
    {
        $this->container['beez_up_channel_id'] = $beez_up_channel_id;

        return $this;
    }

    /**
     * Gets beez_up_channel_catalog_id
     * @return \Swagger\Client\Model\BeezUPCommonChannelCatalogId
     */
    public function getBeezUpChannelCatalogId()
    {
        return $this->container['beez_up_channel_catalog_id'];
    }

    /**
     * Sets beez_up_channel_catalog_id
     * @param \Swagger\Client\Model\BeezUPCommonChannelCatalogId $beez_up_channel_catalog_id
     * @return $this
     */
    public function setBeezUpChannelCatalogId($beez_up_channel_catalog_id)
    {
        $this->container['beez_up_channel_catalog_id'] = $beez_up_channel_catalog_id;

        return $this;
    }

    /**
     * Gets beez_up_store_id
     * @return \Swagger\Client\Model\BeezUPCommonStoreId
     */
    public function getBeezUpStoreId()
    {
        return $this->container['beez_up_store_id'];
    }

    /**
     * Sets beez_up_store_id
     * @param \Swagger\Client\Model\BeezUPCommonStoreId $beez_up_store_id
     * @return $this
     */
    public function setBeezUpStoreId($beez_up_store_id)
    {
        $this->container['beez_up_store_id'] = $beez_up_store_id;

        return $this;
    }

    /**
     * Gets beez_up_store_name
     * @return string
     */
    public function getBeezUpStoreName()
    {
        return $this->container['beez_up_store_name'];
    }

    /**
     * Sets beez_up_store_name
     * @param string $beez_up_store_name The store name
     * @return $this
     */
    public function setBeezUpStoreName($beez_up_store_name)
    {
        $this->container['beez_up_store_name'] = $beez_up_store_name;

        return $this;
    }

    /**
     * Gets marketplace_merchant_identifiers
     * @return map[string,string]
     */
    public function getMarketplaceMerchantIdentifiers()
    {
        return $this->container['marketplace_merchant_identifiers'];
    }

    /**
     * Sets marketplace_merchant_identifiers
     * @param map[string,string] $marketplace_merchant_identifiers The marketplace merchant identifier list
     * @return $this
     */
    public function setMarketplaceMerchantIdentifiers($marketplace_merchant_identifiers)
    {
        $this->container['marketplace_merchant_identifiers'] = $marketplace_merchant_identifiers;

        return $this;
    }

    /**
     * Gets marketplace_account_id
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceAccountId
     */
    public function getMarketplaceAccountId()
    {
        return $this->container['marketplace_account_id'];
    }

    /**
     * Sets marketplace_account_id
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceAccountId $marketplace_account_id
     * @return $this
     */
    public function setMarketplaceAccountId($marketplace_account_id)
    {
        $this->container['marketplace_account_id'] = $marketplace_account_id;

        return $this;
    }

    /**
     * Gets lov_links
     * @return \Swagger\Client\Model\MarketplaceChannelCatalogLovLinks
     */
    public function getLovLinks()
    {
        return $this->container['lov_links'];
    }

    /**
     * Sets lov_links
     * @param \Swagger\Client\Model\MarketplaceChannelCatalogLovLinks $lov_links
     * @return $this
     */
    public function setLovLinks($lov_links)
    {
        $this->container['lov_links'] = $lov_links;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\MarketplaceChannelCatalogLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\MarketplaceChannelCatalogLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


