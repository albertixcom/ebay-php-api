<?php
/**
 * ProductIdentifierTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Albertix\EbayPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There is also a call in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: v1.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Albertix\EbayPhpApi;

/**
 * ProductIdentifierTest Class Doc Comment
 *
 * @category    Class */
// * @description &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; This type is for future use only.&lt;/span&gt;This type will be used to identify a motor vehicle that is compatible with the corresponding inventory item (the SKU that is passed in as part of the call URI). The motor vehicle can be identified through an eBay Product ID, a K type value, or a Global Trade Item Number. If the specified motor vehicle is found in the eBay product catalog, the motor vehicle properties (engine, make, model, trim, and year) will automatically get picked up for that motor vehicle.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; Once this functionality becomes available for use, it will only be used to identify motor vehicles in the eBay catalog. However, it is possible that the Product Compatibility feature is expanded to other (non-vehicle) products in the future. &lt;/span&gt;
/**
 * @package     Albertix\EbayPhpApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductIdentifierTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ProductIdentifier"
     */
    public function testProductIdentifier()
    {
    }

    /**
     * Test attribute "epid"
     */
    public function testPropertyEpid()
    {
    }

    /**
     * Test attribute "gtin"
     */
    public function testPropertyGtin()
    {
    }

    /**
     * Test attribute "ktype"
     */
    public function testPropertyKtype()
    {
    }
}
