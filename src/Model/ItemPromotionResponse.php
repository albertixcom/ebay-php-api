<?php
/**
 * ItemPromotionResponse
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
 * ItemPromotionResponse Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields for the response of an item-based promotion.
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemPromotionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemPromotionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'discount_rules' => '\Albertix\EbayPhpApi\Model\DiscountRule[]',
        'end_date' => 'string',
        'inventory_criterion' => '\Albertix\EbayPhpApi\Model\InventoryCriterion',
        'marketplace_id' => 'string',
        'name' => 'string',
        'priority' => 'string',
        'promotion_id' => 'string',
        'promotion_image_url' => 'string',
        'promotion_status' => 'string',
        'start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'discount_rules' => null,
        'end_date' => null,
        'inventory_criterion' => null,
        'marketplace_id' => null,
        'name' => null,
        'priority' => null,
        'promotion_id' => null,
        'promotion_image_url' => null,
        'promotion_status' => null,
        'start_date' => null
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
        'description' => 'description',
        'discount_rules' => 'discountRules',
        'end_date' => 'endDate',
        'inventory_criterion' => 'inventoryCriterion',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'priority' => 'priority',
        'promotion_id' => 'promotionId',
        'promotion_image_url' => 'promotionImageUrl',
        'promotion_status' => 'promotionStatus',
        'start_date' => 'startDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'discount_rules' => 'setDiscountRules',
        'end_date' => 'setEndDate',
        'inventory_criterion' => 'setInventoryCriterion',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'priority' => 'setPriority',
        'promotion_id' => 'setPromotionId',
        'promotion_image_url' => 'setPromotionImageUrl',
        'promotion_status' => 'setPromotionStatus',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'discount_rules' => 'getDiscountRules',
        'end_date' => 'getEndDate',
        'inventory_criterion' => 'getInventoryCriterion',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'priority' => 'getPriority',
        'promotion_id' => 'getPromotionId',
        'promotion_image_url' => 'getPromotionImageUrl',
        'promotion_status' => 'getPromotionStatus',
        'start_date' => 'getStartDate'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_rules'] = isset($data['discount_rules']) ? $data['discount_rules'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['inventory_criterion'] = isset($data['inventory_criterion']) ? $data['inventory_criterion'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['promotion_id'] = isset($data['promotion_id']) ? $data['promotion_id'] : null;
        $this->container['promotion_image_url'] = isset($data['promotion_image_url']) ? $data['promotion_image_url'] : null;
        $this->container['promotion_status'] = isset($data['promotion_status']) ? $data['promotion_status'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description This is the seller-defined &quot;tag line&quot; for the offer, such as &quot;Save on designer shoes.&quot; A tag line appears under the &quot;offer-type text&quot; that is generated for the promotion. The text is displayed under the offer tile that is shown on the seller's All Offers page and on the event page for the promotion. Note: Offer-type text is a teaser that's presented throughout the buyer's journey through the sales flow and is generated by eBay. This text is not editable by the seller&mdash;it's derived from the settings in the discountRules and discountSpecification fields&mdash;and can be, for example, &quot;Extra 20% off when you buy 3+&quot;. Maximum length: 50
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_rules
     *
     * @return \Albertix\EbayPhpApi\Model\DiscountRule[]
     */
    public function getDiscountRules()
    {
        return $this->container['discount_rules'];
    }

    /**
     * Sets discount_rules
     *
     * @param \Albertix\EbayPhpApi\Model\DiscountRule[] $discount_rules A list containing the promotion benefits (discountRule) and the rules that define when the benefit is applied (discountSpecification).
     *
     * @return $this
     */
    public function setDiscountRules($discount_rules)
    {
        $this->container['discount_rules'] = $discount_rules;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date The date and time the promotion ends in UTC format (yyyy-MM-ddThh:mm.ss.sssZ). If this field is blank (null), it indicates the promotion has no end date. For display purposes, convert this time into the local time of the seller.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets inventory_criterion
     *
     * @return \Albertix\EbayPhpApi\Model\InventoryCriterion
     */
    public function getInventoryCriterion()
    {
        return $this->container['inventory_criterion'];
    }

    /**
     * Sets inventory_criterion
     *
     * @param \Albertix\EbayPhpApi\Model\InventoryCriterion $inventory_criterion inventory_criterion
     *
     * @return $this
     */
    public function setInventoryCriterion($inventory_criterion)
    {
        $this->container['inventory_criterion'] = $inventory_criterion;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The eBay marketplace ID of the site where the threshold promotion is hosted. Threshold promotions are currently supported on a limited number of eBay marketplaces. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/marketing/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The seller-defined name or &quot;title&quot; of the promotion that the seller can use to identify a promotion. This label is not displayed in end-user flows. Maximum length: 90
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority Indicates the precedence of the promotion, which eBay uses to determine the position of a promotion on the seller's All Offers page. If an item is associated with multiple promotions, the promotion with the higher priority takes precedence. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/marketing/types/PromotionPriorityEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets promotion_id
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param string $promotion_id A unique eBay-assigned ID for the promotion that's generated when the promotion is created.
     *
     * @return $this
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets promotion_image_url
     *
     * @return string
     */
    public function getPromotionImageUrl()
    {
        return $this->container['promotion_image_url'];
    }

    /**
     * Sets promotion_image_url
     *
     * @param string $promotion_image_url A URL that points to the image that represents the promotion. This image is displayed on the seller's All Offers page. The URL must point to either JPEG or PNG image and it must be a minimum of 500x500 pixels in dimension and cannot exceed 12Mb in size.
     *
     * @return $this
     */
    public function setPromotionImageUrl($promotion_image_url)
    {
        $this->container['promotion_image_url'] = $promotion_image_url;

        return $this;
    }

    /**
     * Gets promotion_status
     *
     * @return string
     */
    public function getPromotionStatus()
    {
        return $this->container['promotion_status'];
    }

    /**
     * Sets promotion_status
     *
     * @param string $promotion_status The current status of the promotion. When creating a new promotion, this value must be set to either DRAFT or SCHEDULED. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/marketing/types/PromotionStatusEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPromotionStatus($promotion_status)
    {
        $this->container['promotion_status'] = $promotion_status;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date The date and time the promotion starts in UTC format (yyyy-MM-ddThh:mm.ss.sssZ). For display purposes, convert this time into the local time of the seller.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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


