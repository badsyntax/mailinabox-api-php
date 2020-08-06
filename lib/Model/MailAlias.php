<?php
/**
 * MailAlias
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
 * The version of the OpenAPI document: 0.47.0
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

use \ArrayAccess;
use MailInABoxAPI\Client\ObjectSerializer;

/**
 * MailAlias Class Doc Comment
 *
 * @category Class
 * @description Mail alias details.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MailAlias implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MailAlias';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'address' => 'string',
        'addressDisplay' => 'string',
        'forwardsTo' => 'string[]',
        'permittedSenders' => 'string[]',
        'required' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'address' => 'email',
        'addressDisplay' => 'email',
        'forwardsTo' => 'email',
        'permittedSenders' => 'email',
        'required' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'addressDisplay' => 'address_display',
        'forwardsTo' => 'forwards_to',
        'permittedSenders' => 'permitted_senders',
        'required' => 'required',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'addressDisplay' => 'setAddressDisplay',
        'forwardsTo' => 'setForwardsTo',
        'permittedSenders' => 'setPermittedSenders',
        'required' => 'setRequired',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'addressDisplay' => 'getAddressDisplay',
        'forwardsTo' => 'getForwardsTo',
        'permittedSenders' => 'getPermittedSenders',
        'required' => 'getRequired',
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
        return self::$openAPIModelName;
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
        $this->container['address'] = isset($data['address'])
            ? $data['address']
            : null;
        $this->container['addressDisplay'] = isset($data['addressDisplay'])
            ? $data['addressDisplay']
            : null;
        $this->container['forwardsTo'] = isset($data['forwardsTo'])
            ? $data['forwardsTo']
            : null;
        $this->container['permittedSenders'] = isset($data['permittedSenders'])
            ? $data['permittedSenders']
            : null;
        $this->container['required'] = isset($data['required'])
            ? $data['required']
            : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['addressDisplay'] === null) {
            $invalidProperties[] = "'addressDisplay' can't be null";
        }
        if ($this->container['forwardsTo'] === null) {
            $invalidProperties[] = "'forwardsTo' can't be null";
        }
        if ($this->container['permittedSenders'] === null) {
            $invalidProperties[] = "'permittedSenders' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Email format.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addressDisplay
     *
     * @return string
     */
    public function getAddressDisplay()
    {
        return $this->container['addressDisplay'];
    }

    /**
     * Sets addressDisplay
     *
     * @param string $addressDisplay Email format.
     *
     * @return $this
     */
    public function setAddressDisplay($addressDisplay)
    {
        $this->container['addressDisplay'] = $addressDisplay;

        return $this;
    }

    /**
     * Gets forwardsTo
     *
     * @return string[]
     */
    public function getForwardsTo()
    {
        return $this->container['forwardsTo'];
    }

    /**
     * Sets forwardsTo
     *
     * @param string[] $forwardsTo forwardsTo
     *
     * @return $this
     */
    public function setForwardsTo($forwardsTo)
    {
        $this->container['forwardsTo'] = $forwardsTo;

        return $this;
    }

    /**
     * Gets permittedSenders
     *
     * @return string[]
     */
    public function getPermittedSenders()
    {
        return $this->container['permittedSenders'];
    }

    /**
     * Sets permittedSenders
     *
     * @param string[] $permittedSenders permittedSenders
     *
     * @return $this
     */
    public function setPermittedSenders($permittedSenders)
    {
        $this->container['permittedSenders'] = $permittedSenders;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
        return isset($this->container[$offset])
            ? $this->container[$offset]
            : null;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
