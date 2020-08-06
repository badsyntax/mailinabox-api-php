<?php
/**
 * SystemBackupConfigUpdateRequest
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
 * SystemBackupConfigUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Backup config update request.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SystemBackupConfigUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SystemBackupConfigUpdateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'target' => 'string',
        'targetUser' => 'string',
        'targetPass' => 'string',
        'minAge' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'target' => 'hostname',
        'targetUser' => null,
        'targetPass' => 'password',
        'minAge' => 'int32',
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
        'target' => 'target',
        'targetUser' => 'target_user',
        'targetPass' => 'target_pass',
        'minAge' => 'min_age',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target' => 'setTarget',
        'targetUser' => 'setTargetUser',
        'targetPass' => 'setTargetPass',
        'minAge' => 'setMinAge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target' => 'getTarget',
        'targetUser' => 'getTargetUser',
        'targetPass' => 'getTargetPass',
        'minAge' => 'getMinAge',
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
        $this->container['target'] = isset($data['target'])
            ? $data['target']
            : null;
        $this->container['targetUser'] = isset($data['targetUser'])
            ? $data['targetUser']
            : null;
        $this->container['targetPass'] = isset($data['targetPass'])
            ? $data['targetPass']
            : null;
        $this->container['minAge'] = isset($data['minAge'])
            ? $data['minAge']
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

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['targetUser'] === null) {
            $invalidProperties[] = "'targetUser' can't be null";
        }
        if ($this->container['targetPass'] === null) {
            $invalidProperties[] = "'targetPass' can't be null";
        }
        if ($this->container['minAge'] === null) {
            $invalidProperties[] = "'minAge' can't be null";
        }
        if ($this->container['minAge'] < 1) {
            $invalidProperties[] =
                "invalid value for 'minAge', must be bigger than or equal to 1.";
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
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets targetUser
     *
     * @return string
     */
    public function getTargetUser()
    {
        return $this->container['targetUser'];
    }

    /**
     * Sets targetUser
     *
     * @param string $targetUser targetUser
     *
     * @return $this
     */
    public function setTargetUser($targetUser)
    {
        $this->container['targetUser'] = $targetUser;

        return $this;
    }

    /**
     * Gets targetPass
     *
     * @return string
     */
    public function getTargetPass()
    {
        return $this->container['targetPass'];
    }

    /**
     * Sets targetPass
     *
     * @param string $targetPass targetPass
     *
     * @return $this
     */
    public function setTargetPass($targetPass)
    {
        $this->container['targetPass'] = $targetPass;

        return $this;
    }

    /**
     * Gets minAge
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->container['minAge'];
    }

    /**
     * Sets minAge
     *
     * @param int $minAge minAge
     *
     * @return $this
     */
    public function setMinAge($minAge)
    {
        if ($minAge < 1) {
            throw new \InvalidArgumentException(
                'invalid value for $minAge when calling SystemBackupConfigUpdateRequest., must be bigger than or equal to 1.'
            );
        }

        $this->container['minAge'] = $minAge;

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
