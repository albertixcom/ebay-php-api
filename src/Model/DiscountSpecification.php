<?php
/**
 * DiscountSpecification
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
 * DiscountSpecification Class Doc Comment
 *
 * @category Class
 * @description This container defines the criteria for when the discounts of a promotion trigger, such as the minimum quantity the buyer must purchase before the promotion kicks in. The promotional discount is applied each time the criteria defined by this container is met.  &lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the &lt;b&gt;discountSpecification&lt;/b&gt; container:&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;b&gt;minAmount&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;minQuantity&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;forEachQuantity&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;forEachAmount&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt; &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/sell/static/marketing/ip-specifying-discounts.html\&quot;&gt;Configuring discounts for threshold promotions&lt;/a&gt; for information and examples on how to combine &lt;b&gt;discountBenefit&lt;/b&gt; and &lt;b&gt;discountSpecification&lt;/b&gt; to create different types of promotions.&lt;/p&gt;
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscountSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'for_each_amount' => '\Albertix\EbayPhpApi\Model\Amount',
        'for_each_quantity' => 'int',
        'min_amount' => '\Albertix\EbayPhpApi\Model\Amount',
        'min_quantity' => 'int',
        'number_of_discounted_items' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'for_each_amount' => null,
        'for_each_quantity' => null,
        'min_amount' => null,
        'min_quantity' => null,
        'number_of_discounted_items' => null
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
        'for_each_amount' => 'forEachAmount',
        'for_each_quantity' => 'forEachQuantity',
        'min_amount' => 'minAmount',
        'min_quantity' => 'minQuantity',
        'number_of_discounted_items' => 'numberOfDiscountedItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'for_each_amount' => 'setForEachAmount',
        'for_each_quantity' => 'setForEachQuantity',
        'min_amount' => 'setMinAmount',
        'min_quantity' => 'setMinQuantity',
        'number_of_discounted_items' => 'setNumberOfDiscountedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'for_each_amount' => 'getForEachAmount',
        'for_each_quantity' => 'getForEachQuantity',
        'min_amount' => 'getMinAmount',
        'min_quantity' => 'getMinQuantity',
        'number_of_discounted_items' => 'getNumberOfDiscountedItems'
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
        $this->container['for_each_amount'] = isset($data['for_each_amount']) ? $data['for_each_amount'] : null;
        $this->container['for_each_quantity'] = isset($data['for_each_quantity']) ? $data['for_each_quantity'] : null;
        $this->container['min_amount'] = isset($data['min_amount']) ? $data['min_amount'] : null;
        $this->container['min_quantity'] = isset($data['min_quantity']) ? $data['min_quantity'] : null;
        $this->container['number_of_discounted_items'] = isset($data['number_of_discounted_items']) ? $data['number_of_discounted_items'] : null;
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
     * Gets for_each_amount
     *
     * @return \Albertix\EbayPhpApi\Model\Amount
     */
    public function getForEachAmount()
    {
        return $this->container['for_each_amount'];
    }

    /**
     * Sets for_each_amount
     *
     * @param \Albertix\EbayPhpApi\Model\Amount $for_each_amount for_each_amount
     *
     * @return $this
     */
    public function setForEachAmount($for_each_amount)
    {
        $this->container['for_each_amount'] = $for_each_amount;

        return $this;
    }

    /**
     * Gets for_each_quantity
     *
     * @return int
     */
    public function getForEachQuantity()
    {
        return $this->container['for_each_quantity'];
    }

    /**
     * Sets for_each_quantity
     *
     * @param int $for_each_quantity The number of items that must be purchased in order to qualify for the discount. Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 &nbsp; 20, 25, 50, 75, 100
     *
     * @return $this
     */
    public function setForEachQuantity($for_each_quantity)
    {
        $this->container['for_each_quantity'] = $for_each_quantity;

        return $this;
    }

    /**
     * Gets min_amount
     *
     * @return \Albertix\EbayPhpApi\Model\Amount
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     *
     * @param \Albertix\EbayPhpApi\Model\Amount $min_amount min_amount
     *
     * @return $this
     */
    public function setMinAmount($min_amount)
    {
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets min_quantity
     *
     * @return int
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity
     *
     * @param int $min_quantity The minimum quantity of promoted items that needs to be bought in order to qualify for the promotion's discount. Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 &nbsp; 20, 25, 50, 75, 100
     *
     * @return $this
     */
    public function setMinQuantity($min_quantity)
    {
        $this->container['min_quantity'] = $min_quantity;

        return $this;
    }

    /**
     * Gets number_of_discounted_items
     *
     * @return int
     */
    public function getNumberOfDiscountedItems()
    {
        return $this->container['number_of_discounted_items'];
    }

    /**
     * Sets number_of_discounted_items
     *
     * @param int $number_of_discounted_items The number of promoted items to be discounted when other promotion criteria is met. Couple this field with amountOffItem and percentOffItem to configure &quot;Buy one Get One&quot; promotions (this field is not valid with order-based promotions). Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
     *
     * @return $this
     */
    public function setNumberOfDiscountedItems($number_of_discounted_items)
    {
        $this->container['number_of_discounted_items'] = $number_of_discounted_items;

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


