<?php
/**
 * SystemBackupStatusResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mail-in-a-Box
 *
 * Mail-in-a-Box API HTTP specification.  # Introduction This API is documented in [**OpenAPI format**](http://spec.openapis.org/oas/v3.0.3). ([View the full HTTP specification](https://raw.githubusercontent.com/mail-in-a-box/mailinabox/api-spec/api/mailinabox.yml).)  All endpoints are relative to `https://{host}/admin` and are secured with [`Basic Access` authentication](https://en.wikipedia.org/wiki/Basic_access_authentication). If you have multi-factor authentication enabled, authentication with a `user:password` combination will fail unless a valid OTP is supplied via the `x-auth-token` header. Authentication via a `user:user_key` pair is possible without the header being present.
 *
 * The version of the OpenAPI document: 0.51.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace MailInABoxAPI\Client;

use PHPUnit\Framework\TestCase;

/**
 * SystemBackupStatusResponseTest Class Doc Comment
 *
 * @category    Class
 * @description Backup status response. Lists the status for all backups.
 * @package     MailInABoxAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SystemBackupStatusResponseTest extends TestCase
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
     * Test "SystemBackupStatusResponse"
     */
    public function testSystemBackupStatusResponse()
    {
    }

    /**
     * Test attribute "backups"
     */
    public function testPropertyBackups()
    {
    }

    /**
     * Test attribute "unmatchedFileSize"
     */
    public function testPropertyUnmatchedFileSize()
    {
    }

    /**
     * Test attribute "error"
     */
    public function testPropertyError()
    {
    }
}
