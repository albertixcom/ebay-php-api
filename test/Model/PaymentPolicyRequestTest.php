<?php
/**
 * PaymentPolicyRequestTest
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
 * PaymentPolicyRequestTest Class Doc Comment
 *
 * @category    Class */
// * @description This root container defines a seller&#39;s payment policy for a specific marketplace and category type. Used when creating or updating a payment policy, &lt;b&gt;paymentPolicyRequest&lt;/b&gt; encapsulates a seller&#39;s terms for how buyers can pay for the items they buy. While each seller must define at least one payment policy for every marketplace into which they sell, sellers can define multiple payment policies for a single marketplace by specifying different configurations for the unique policies.  &lt;br&gt;&lt;br&gt;A successful call returns a &lt;b&gt;paymentPolicyId&lt;/b&gt;, plus the &lt;b&gt;Location&lt;/b&gt; response header contains the URI to the resource.  &lt;br&gt;&lt;br&gt;Policy instructions can be localized by providing a locale in the &lt;code&gt;Content-Language&lt;/code&gt; HTTP request header. For example: &lt;code&gt;Content-Language: de-DE&lt;/code&gt;.  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip: &lt;/b&gt;For more on using business policies, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/seller-accounts/business-policies.html\&quot;&gt;eBay business policies&lt;/a&gt;.&lt;/p&gt;
/**
 * @package     Albertix\EbayPhpApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentPolicyRequestTest extends \PHPUnit_Framework_TestCase
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
     * Test "PaymentPolicyRequest"
     */
    public function testPaymentPolicyRequest()
    {
    }

    /**
     * Test attribute "category_types"
     */
    public function testPropertyCategoryTypes()
    {
    }

    /**
     * Test attribute "deposit"
     */
    public function testPropertyDeposit()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "full_payment_due_in"
     */
    public function testPropertyFullPaymentDueIn()
    {
    }

    /**
     * Test attribute "immediate_pay"
     */
    public function testPropertyImmediatePay()
    {
    }

    /**
     * Test attribute "marketplace_id"
     */
    public function testPropertyMarketplaceId()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "payment_instructions"
     */
    public function testPropertyPaymentInstructions()
    {
    }

    /**
     * Test attribute "payment_methods"
     */
    public function testPropertyPaymentMethods()
    {
    }
}