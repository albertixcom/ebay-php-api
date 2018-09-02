<?php
/**
 * SalesTaxBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Account API
 *
 * The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the restrictions and availability of the methods in this API, see API restrictions.
 *
 * OpenAPI spec version: v1.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Albertix\EbayPhpApi\Model;

use \ArrayAccess;
use \Albertix\EbayPhpApi\ObjectSerializer;

/**
 * SalesTaxBase Class Doc Comment
 *
 * @category Class
 * @description A container that describes the how the sales tax rate is calculated.
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesTaxBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesTaxBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_tax_percentage' => 'string',
        'shipping_and_handling_taxed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_tax_percentage' => null,
        'shipping_and_handling_taxed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sales_tax_percentage' => 'salesTaxPercentage',
        'shipping_and_handling_taxed' => 'shippingAndHandlingTaxed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_tax_percentage' => 'setSalesTaxPercentage',
        'shipping_and_handling_taxed' => 'setShippingAndHandlingTaxed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_tax_percentage' => 'getSalesTaxPercentage',
        'shipping_and_handling_taxed' => 'getShippingAndHandlingTaxed'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sales_tax_percentage'] = isset($data['sales_tax_percentage']) ? $data['sales_tax_percentage'] : null;
        $this->container['shipping_and_handling_taxed'] = isset($data['shipping_and_handling_taxed']) ? $data['shipping_and_handling_taxed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets sales_tax_percentage
     *
     * @return string
     */
    public function getSalesTaxPercentage()
    {
        return $this->container['sales_tax_percentage'];
    }

    /**
     * Sets sales_tax_percentage
     *
     * @param string $sales_tax_percentage The sales tax rate, as a percentage of the sale.
     *
     * @return $this
     */
    public function setSalesTaxPercentage($sales_tax_percentage)
    {
        $this->container['sales_tax_percentage'] = $sales_tax_percentage;

        return $this;
    }

    /**
     * Gets shipping_and_handling_taxed
     *
     * @return bool
     */
    public function getShippingAndHandlingTaxed()
    {
        return $this->container['shipping_and_handling_taxed'];
    }

    /**
     * Sets shipping_and_handling_taxed
     *
     * @param bool $shipping_and_handling_taxed If set to true, shipping and handling charges are taxed.
     *
     * @return $this
     */
    public function setShippingAndHandlingTaxed($shipping_and_handling_taxed)
    {
        $this->container['shipping_and_handling_taxed'] = $shipping_and_handling_taxed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

