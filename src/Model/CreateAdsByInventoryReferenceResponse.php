<?php
/**
 * CreateAdsByInventoryReferenceResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * The Marketing API offers two platforms that let sellers promote and advertise their products: Promoted Listings is an eBay ad service that lets sellers set up ad campaigns for the products they want to promote. eBay displays the ads in search results and in other marketing modules as SPONSORED listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage of the sales price. For complete details, see Promoted Listings. Promotions Manager gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as &quot;20% off&quot; and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion teasers throughout buyer flows. For complete details, see Promotions Manager. Marketing reports, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts. Important! Sellers must have an active eBay Store subscription, and they must accept the Terms and Conditions before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the &quot;requirements and restrictions&quot; sections for Promoted Listings and Promotions Manager. The table below lists all the Marketing API calls grouped by resource.
 *
 * OpenAPI spec version: v1.4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * CreateAdsByInventoryReferenceResponse Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields returned when you create an ad by inventory reference ID.
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateAdsByInventoryReferenceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateAdsByInventoryReferenceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ads' => '\Albertix\EbayPhpApi\Model\AdReference[]',
        'errors' => '\Albertix\EbayPhpApi\Model\Error[]',
        'inventory_reference_id' => 'string',
        'inventory_reference_type' => 'string',
        'status_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ads' => null,
        'errors' => null,
        'inventory_reference_id' => null,
        'inventory_reference_type' => null,
        'status_code' => null
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
        'ads' => 'ads',
        'errors' => 'errors',
        'inventory_reference_id' => 'inventoryReferenceId',
        'inventory_reference_type' => 'inventoryReferenceType',
        'status_code' => 'statusCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ads' => 'setAds',
        'errors' => 'setErrors',
        'inventory_reference_id' => 'setInventoryReferenceId',
        'inventory_reference_type' => 'setInventoryReferenceType',
        'status_code' => 'setStatusCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ads' => 'getAds',
        'errors' => 'getErrors',
        'inventory_reference_id' => 'getInventoryReferenceId',
        'inventory_reference_type' => 'getInventoryReferenceType',
        'status_code' => 'getStatusCode'
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
        $this->container['ads'] = isset($data['ads']) ? $data['ads'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['inventory_reference_id'] = isset($data['inventory_reference_id']) ? $data['inventory_reference_id'] : null;
        $this->container['inventory_reference_type'] = isset($data['inventory_reference_type']) ? $data['inventory_reference_type'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
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
     * Gets ads
     *
     * @return \Albertix\EbayPhpApi\Model\AdReference[]
     */
    public function getAds()
    {
        return $this->container['ads'];
    }

    /**
     * Sets ads
     *
     * @param \Albertix\EbayPhpApi\Model\AdReference[] $ads A list of ad IDs (based on their inventory reference IDs) and the URIs that point to them.
     *
     * @return $this
     */
    public function setAds($ads)
    {
        $this->container['ads'] = $ads;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Albertix\EbayPhpApi\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Albertix\EbayPhpApi\Model\Error[] $errors An array of errors or warnings associated with the create-ads request.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets inventory_reference_id
     *
     * @return string
     */
    public function getInventoryReferenceId()
    {
        return $this->container['inventory_reference_id'];
    }

    /**
     * Sets inventory_reference_id
     *
     * @param string $inventory_reference_id The seller's inventory reference ID that's associated with the ad.
     *
     * @return $this
     */
    public function setInventoryReferenceId($inventory_reference_id)
    {
        $this->container['inventory_reference_id'] = $inventory_reference_id;

        return $this;
    }

    /**
     * Gets inventory_reference_type
     *
     * @return string
     */
    public function getInventoryReferenceType()
    {
        return $this->container['inventory_reference_type'];
    }

    /**
     * Sets inventory_reference_type
     *
     * @param string $inventory_reference_type Indicates the item type of the listing referenced by inventoryReferenceId, and can be either INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an inventory_reference_id with and inventory_reference_type. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryReferenceTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setInventoryReferenceType($inventory_reference_type)
    {
        $this->container['inventory_reference_type'] = $inventory_reference_type;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successful created.
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

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


