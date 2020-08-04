<?php
/**
 * SystemBackupStatus
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
 *
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
 * SystemBackupStatus Class Doc Comment
 *
 * @category Class
 * @description Backup status details.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SystemBackupStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SystemBackupStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'date' => '\DateTime',
        'dateDelta' => 'string',
        'dateStr' => 'string',
        'deletedIn' => 'string',
        'full' => 'bool',
        'size' => 'int',
        'volumes' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'date' => 'date-time',
        'dateDelta' => null,
        'dateStr' => null,
        'deletedIn' => null,
        'full' => null,
        'size' => 'int32',
        'volumes' => 'int32',
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
        'date' => 'date',
        'dateDelta' => 'date_delta',
        'dateStr' => 'date_str',
        'deletedIn' => 'deleted_in',
        'full' => 'full',
        'size' => 'size',
        'volumes' => 'volumes',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'dateDelta' => 'setDateDelta',
        'dateStr' => 'setDateStr',
        'deletedIn' => 'setDeletedIn',
        'full' => 'setFull',
        'size' => 'setSize',
        'volumes' => 'setVolumes',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'dateDelta' => 'getDateDelta',
        'dateStr' => 'getDateStr',
        'deletedIn' => 'getDeletedIn',
        'full' => 'getFull',
        'size' => 'getSize',
        'volumes' => 'getVolumes',
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['dateDelta'] = isset($data['dateDelta'])
            ? $data['dateDelta']
            : null;
        $this->container['dateStr'] = isset($data['dateStr'])
            ? $data['dateStr']
            : null;
        $this->container['deletedIn'] = isset($data['deletedIn'])
            ? $data['deletedIn']
            : null;
        $this->container['full'] = isset($data['full']) ? $data['full'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['volumes'] = isset($data['volumes'])
            ? $data['volumes']
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

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['dateDelta'] === null) {
            $invalidProperties[] = "'dateDelta' can't be null";
        }
        if ($this->container['dateStr'] === null) {
            $invalidProperties[] = "'dateStr' can't be null";
        }
        if ($this->container['full'] === null) {
            $invalidProperties[] = "'full' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['volumes'] === null) {
            $invalidProperties[] = "'volumes' can't be null";
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets dateDelta
     *
     * @return string
     */
    public function getDateDelta()
    {
        return $this->container['dateDelta'];
    }

    /**
     * Sets dateDelta
     *
     * @param string $dateDelta dateDelta
     *
     * @return $this
     */
    public function setDateDelta($dateDelta)
    {
        $this->container['dateDelta'] = $dateDelta;

        return $this;
    }

    /**
     * Gets dateStr
     *
     * @return string
     */
    public function getDateStr()
    {
        return $this->container['dateStr'];
    }

    /**
     * Sets dateStr
     *
     * @param string $dateStr dateStr
     *
     * @return $this
     */
    public function setDateStr($dateStr)
    {
        $this->container['dateStr'] = $dateStr;

        return $this;
    }

    /**
     * Gets deletedIn
     *
     * @return string|null
     */
    public function getDeletedIn()
    {
        return $this->container['deletedIn'];
    }

    /**
     * Sets deletedIn
     *
     * @param string|null $deletedIn deletedIn
     *
     * @return $this
     */
    public function setDeletedIn($deletedIn)
    {
        $this->container['deletedIn'] = $deletedIn;

        return $this;
    }

    /**
     * Gets full
     *
     * @return bool
     */
    public function getFull()
    {
        return $this->container['full'];
    }

    /**
     * Sets full
     *
     * @param bool $full full
     *
     * @return $this
     */
    public function setFull($full)
    {
        $this->container['full'] = $full;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets volumes
     *
     * @return int
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     *
     * @param int $volumes volumes
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

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