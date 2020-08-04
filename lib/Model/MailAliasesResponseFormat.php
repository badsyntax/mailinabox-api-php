<?php
/**
 * MailAliasesResponseFormat
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
 * Mail-in-a-Box API HTTP specification.
 *
 * The version of the OpenAPI document: 0.46.0
 * Contact: contact@mailinabox.email
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailInABoxAPI\Client\Model;
use MailInABoxAPI\Client\ObjectSerializer;

/**
 * MailAliasesResponseFormat Class Doc Comment
 *
 * @category Class
 * @description Response format (&#x60;application/json&#x60; or &#x60;text/html&#x60;).
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MailAliasesResponseFormat
{
    /**
     * Possible values of this enum
     */
    const TEXT = 'text';
    const JSON = 'json';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [self::TEXT, self::JSON];
    }
}
