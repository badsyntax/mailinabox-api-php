<?php
/**
 * SystemBackupConfigResponse
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
 * Do not edit the class manually.
 */

namespace MailInABoxAPI\Client\Model;

use \ArrayAccess;
use MailInABoxAPI\Client\ObjectSerializer;

/**
 * SystemBackupConfigResponse Class Doc Comment
 *
 * @category Class
 * @description Backup config response.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SystemBackupConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SystemBackupConfigResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'encPwFile' => 'string',
        'fileTargetDirectory' => 'string',
        'minAgeInDays' => 'int',
        'sshPubKey' => 'string',
        'target' => 'string',
        'targetUser' => 'string',
        'targetPass' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'encPwFile' => null,
        'fileTargetDirectory' => null,
        'minAgeInDays' => 'int32',
        'sshPubKey' => null,
        'target' => 'hostname',
        'targetUser' => null,
        'targetPass' => null,
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
        'encPwFile' => 'enc_pw_file',
        'fileTargetDirectory' => 'file_target_directory',
        'minAgeInDays' => 'min_age_in_days',
        'sshPubKey' => 'ssh_pub_key',
        'target' => 'target',
        'targetUser' => 'target_user',
        'targetPass' => 'target_pass',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encPwFile' => 'setEncPwFile',
        'fileTargetDirectory' => 'setFileTargetDirectory',
        'minAgeInDays' => 'setMinAgeInDays',
        'sshPubKey' => 'setSshPubKey',
        'target' => 'setTarget',
        'targetUser' => 'setTargetUser',
        'targetPass' => 'setTargetPass',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encPwFile' => 'getEncPwFile',
        'fileTargetDirectory' => 'getFileTargetDirectory',
        'minAgeInDays' => 'getMinAgeInDays',
        'sshPubKey' => 'getSshPubKey',
        'target' => 'getTarget',
        'targetUser' => 'getTargetUser',
        'targetPass' => 'getTargetPass',
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
        $this->container['encPwFile'] = isset($data['encPwFile'])
            ? $data['encPwFile']
            : null;
        $this->container['fileTargetDirectory'] = isset(
            $data['fileTargetDirectory']
        )
            ? $data['fileTargetDirectory']
            : null;
        $this->container['minAgeInDays'] = isset($data['minAgeInDays'])
            ? $data['minAgeInDays']
            : null;
        $this->container['sshPubKey'] = isset($data['sshPubKey'])
            ? $data['sshPubKey']
            : null;
        $this->container['target'] = isset($data['target'])
            ? $data['target']
            : null;
        $this->container['targetUser'] = isset($data['targetUser'])
            ? $data['targetUser']
            : null;
        $this->container['targetPass'] = isset($data['targetPass'])
            ? $data['targetPass']
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

        if ($this->container['encPwFile'] === null) {
            $invalidProperties[] = "'encPwFile' can't be null";
        }
        if ($this->container['fileTargetDirectory'] === null) {
            $invalidProperties[] = "'fileTargetDirectory' can't be null";
        }
        if ($this->container['minAgeInDays'] === null) {
            $invalidProperties[] = "'minAgeInDays' can't be null";
        }
        if ($this->container['minAgeInDays'] < 1) {
            $invalidProperties[] =
                "invalid value for 'minAgeInDays', must be bigger than or equal to 1.";
        }

        if ($this->container['sshPubKey'] === null) {
            $invalidProperties[] = "'sshPubKey' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
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
     * Gets encPwFile
     *
     * @return string
     */
    public function getEncPwFile()
    {
        return $this->container['encPwFile'];
    }

    /**
     * Sets encPwFile
     *
     * @param string $encPwFile encPwFile
     *
     * @return $this
     */
    public function setEncPwFile($encPwFile)
    {
        $this->container['encPwFile'] = $encPwFile;

        return $this;
    }

    /**
     * Gets fileTargetDirectory
     *
     * @return string
     */
    public function getFileTargetDirectory()
    {
        return $this->container['fileTargetDirectory'];
    }

    /**
     * Sets fileTargetDirectory
     *
     * @param string $fileTargetDirectory fileTargetDirectory
     *
     * @return $this
     */
    public function setFileTargetDirectory($fileTargetDirectory)
    {
        $this->container['fileTargetDirectory'] = $fileTargetDirectory;

        return $this;
    }

    /**
     * Gets minAgeInDays
     *
     * @return int
     */
    public function getMinAgeInDays()
    {
        return $this->container['minAgeInDays'];
    }

    /**
     * Sets minAgeInDays
     *
     * @param int $minAgeInDays minAgeInDays
     *
     * @return $this
     */
    public function setMinAgeInDays($minAgeInDays)
    {
        if ($minAgeInDays < 1) {
            throw new \InvalidArgumentException(
                'invalid value for $minAgeInDays when calling SystemBackupConfigResponse., must be bigger than or equal to 1.'
            );
        }

        $this->container['minAgeInDays'] = $minAgeInDays;

        return $this;
    }

    /**
     * Gets sshPubKey
     *
     * @return string
     */
    public function getSshPubKey()
    {
        return $this->container['sshPubKey'];
    }

    /**
     * Sets sshPubKey
     *
     * @param string $sshPubKey sshPubKey
     *
     * @return $this
     */
    public function setSshPubKey($sshPubKey)
    {
        $this->container['sshPubKey'] = $sshPubKey;

        return $this;
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
     * @return string|null
     */
    public function getTargetUser()
    {
        return $this->container['targetUser'];
    }

    /**
     * Sets targetUser
     *
     * @param string|null $targetUser targetUser
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
     * @return string|null
     */
    public function getTargetPass()
    {
        return $this->container['targetPass'];
    }

    /**
     * Sets targetPass
     *
     * @param string|null $targetPass targetPass
     *
     * @return $this
     */
    public function setTargetPass($targetPass)
    {
        $this->container['targetPass'] = $targetPass;

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
