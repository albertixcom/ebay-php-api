<?php
/**
 * RegionSetTest
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
 * Please update the test case below to test the model.
 */

namespace Albertix\EbayPhpApi;

/**
 * RegionSetTest Class Doc Comment
 *
 * @category    Class */
// * @description This complex type contains the &lt;b&gt;regionIncluded&lt;/b&gt; and &lt;b&gt;regionExcluded&lt;/b&gt; fields, which indicate the areas to where the seller does and doesn&#39;t ship. &lt;p&gt;Normally a seller ships to as many areas as possible using both DOMESTIC and INTERNATIONAL shipping options, and they don&#39;t have a need to exclude any regions from their ship-to locations. Here, there&#39;s no reason to set &lt;b&gt;regionExcluded&lt;/b&gt; fields. However, it makes sense to set the &lt;b&gt;regionExcluded&lt;/b&gt; field when a seller wants to exclude a small area that&#39;s within a larger area they service. For example, suppose a seller indicates they ship &#39;Worldwide&#39;, but for some reason must exclude a specific country, or world region. &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Configuring the &lt;b&gt;shipToLocations&lt;/b&gt; is tricky because the &lt;b&gt;regionIncluded&lt;/b&gt; and &lt;b&gt;regionExcluded&lt;/b&gt; fields are valid in different parts of the schema and their allowable settings vary upon the context. For details on setting these fields, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/seller-accounts/ht_shipping-worldwide.html#shipToLocations\&quot;&gt;&lt;/a&gt;.&lt;/p&gt;
/**
 * @package     Albertix\EbayPhpApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RegionSetTest extends \PHPUnit_Framework_TestCase
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
     * Test "RegionSet"
     */
    public function testRegionSet()
    {
    }

    /**
     * Test attribute "region_excluded"
     */
    public function testPropertyRegionExcluded()
    {
    }

    /**
     * Test attribute "region_included"
     */
    public function testPropertyRegionIncluded()
    {
    }
}
