<?php

declare(strict_types=1);

/**
 * Confirmation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Confirmation.
 * @implements \ArrayAccess<string, mixed>
 */
class Confirmation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Confirmation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'days_until_confirmation' => 'int',
        'is_confirmation_sms_enabled' => 'bool',
        'is_confirmation_email_enabled' => 'bool',
        'email_text' => 'string',
        'email_subject' => 'string',
        'sms_text' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'days_until_confirmation' => 'int32',
        'is_confirmation_sms_enabled' => null,
        'is_confirmation_email_enabled' => null,
        'email_text' => null,
        'email_subject' => null,
        'sms_text' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'days_until_confirmation' => false,
        'is_confirmation_sms_enabled' => false,
        'is_confirmation_email_enabled' => false,
        'email_text' => false,
        'email_subject' => false,
        'sms_text' => false,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $nullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeTypes()
    {
        return self::$attributeTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeFormats()
    {
        return self::$attributeFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function nullables(): array
    {
        return self::$nullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getNullablesSetToNull(): array
    {
        return $this->nullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $nullablesSetToNull
     */
    private function setNullablesSetToNull(array $nullablesSetToNull): void
    {
        $this->nullablesSetToNull = $nullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::nullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getNullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'days_until_confirmation' => 'daysUntilConfirmation',
        'is_confirmation_sms_enabled' => 'isConfirmationSMSEnabled',
        'is_confirmation_email_enabled' => 'isConfirmationEmailEnabled',
        'email_text' => 'emailText',
        'email_subject' => 'emailSubject',
        'sms_text' => 'smsText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days_until_confirmation' => 'setDaysUntilConfirmation',
        'is_confirmation_sms_enabled' => 'setIsConfirmationSmsEnabled',
        'is_confirmation_email_enabled' => 'setIsConfirmationEmailEnabled',
        'email_text' => 'setEmailText',
        'email_subject' => 'setEmailSubject',
        'sms_text' => 'setSmsText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days_until_confirmation' => 'getDaysUntilConfirmation',
        'is_confirmation_sms_enabled' => 'getIsConfirmationSmsEnabled',
        'is_confirmation_email_enabled' => 'getIsConfirmationEmailEnabled',
        'email_text' => 'getEmailText',
        'email_subject' => 'getEmailSubject',
        'sms_text' => 'getSmsText',
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
        return self::$modelTypeName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('days_until_confirmation', $data ?? [], null);
        $this->setIfExists('is_confirmation_sms_enabled', $data ?? [], null);
        $this->setIfExists('is_confirmation_email_enabled', $data ?? [], null);
        $this->setIfExists('email_text', $data ?? [], null);
        $this->setIfExists('email_subject', $data ?? [], null);
        $this->setIfExists('sms_text', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->nullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->nullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['days_until_confirmation'] === null) {
            $invalidProperties[] = "'days_until_confirmation' can't be null";
        }
        if ($this->container['is_confirmation_sms_enabled'] === null) {
            $invalidProperties[] = "'is_confirmation_sms_enabled' can't be null";
        }
        if ($this->container['is_confirmation_email_enabled'] === null) {
            $invalidProperties[] = "'is_confirmation_email_enabled' can't be null";
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
     * Gets days_until_confirmation
     *
     * @return int
     */
    public function getDaysUntilConfirmation()
    {
        return $this->container['days_until_confirmation'];
    }

    /**
     * Sets days_until_confirmation
     *
     * @param int $days_until_confirmation days_until_confirmation
     *
     * @return self
     */
    public function setDaysUntilConfirmation($days_until_confirmation)
    {
        if (is_null($days_until_confirmation)) {
            throw new \InvalidArgumentException('non-nullable days_until_confirmation cannot be null');
        }
        $this->container['days_until_confirmation'] = $days_until_confirmation;

        return $this;
    }

    /**
     * Gets is_confirmation_sms_enabled
     *
     * @return bool
     */
    public function getIsConfirmationSmsEnabled()
    {
        return $this->container['is_confirmation_sms_enabled'];
    }

    /**
     * Sets is_confirmation_sms_enabled
     *
     * @param bool $is_confirmation_sms_enabled is_confirmation_sms_enabled
     *
     * @return self
     */
    public function setIsConfirmationSmsEnabled($is_confirmation_sms_enabled)
    {
        if (is_null($is_confirmation_sms_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_confirmation_sms_enabled cannot be null');
        }
        $this->container['is_confirmation_sms_enabled'] = $is_confirmation_sms_enabled;

        return $this;
    }

    /**
     * Gets is_confirmation_email_enabled
     *
     * @return bool
     */
    public function getIsConfirmationEmailEnabled()
    {
        return $this->container['is_confirmation_email_enabled'];
    }

    /**
     * Sets is_confirmation_email_enabled
     *
     * @param bool $is_confirmation_email_enabled is_confirmation_email_enabled
     *
     * @return self
     */
    public function setIsConfirmationEmailEnabled($is_confirmation_email_enabled)
    {
        if (is_null($is_confirmation_email_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_confirmation_email_enabled cannot be null');
        }
        $this->container['is_confirmation_email_enabled'] = $is_confirmation_email_enabled;

        return $this;
    }

    /**
     * Gets email_text
     *
     * @return string|null
     */
    public function getEmailText()
    {
        return $this->container['email_text'];
    }

    /**
     * Sets email_text
     *
     * @param string|null $email_text email_text
     *
     * @return self
     */
    public function setEmailText($email_text)
    {
        if (is_null($email_text)) {
            throw new \InvalidArgumentException('non-nullable email_text cannot be null');
        }
        $this->container['email_text'] = $email_text;

        return $this;
    }

    /**
     * Gets email_subject
     *
     * @return string|null
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param string|null $email_subject email_subject
     *
     * @return self
     */
    public function setEmailSubject($email_subject)
    {
        if (is_null($email_subject)) {
            throw new \InvalidArgumentException('non-nullable email_subject cannot be null');
        }
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets sms_text
     *
     * @return string|null
     */
    public function getSmsText()
    {
        return $this->container['sms_text'];
    }

    /**
     * Sets sms_text
     *
     * @param string|null $sms_text sms_text
     *
     * @return self
     */
    public function setSmsText($sms_text)
    {
        if (is_null($sms_text)) {
            throw new \InvalidArgumentException('non-nullable sms_text cannot be null');
        }
        $this->container['sms_text'] = $sms_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
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
            JSON_PRETTY_PRINT,
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
