<?php

declare(strict_types=1);

/**
 * ConfirmationMessage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ConfirmationMessage.
 * @implements \ArrayAccess<string, mixed>
 */
class ConfirmationMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ConfirmationMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_confirmed_email_enabled' => 'bool',
        'is_confirmed_sms_enabled' => 'bool',
        'confirmed_email_text' => 'string',
        'confirmed_email_subject' => 'string',
        'confirmed_sms_text' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'is_confirmed_email_enabled' => null,
        'is_confirmed_sms_enabled' => null,
        'confirmed_email_text' => null,
        'confirmed_email_subject' => null,
        'confirmed_sms_text' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_confirmed_email_enabled' => false,
        'is_confirmed_sms_enabled' => false,
        'confirmed_email_text' => false,
        'confirmed_email_subject' => false,
        'confirmed_sms_text' => false,
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
        'is_confirmed_email_enabled' => 'isConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'isConfirmedSMSEnabled',
        'confirmed_email_text' => 'confirmedEmailText',
        'confirmed_email_subject' => 'confirmedEmailSubject',
        'confirmed_sms_text' => 'confirmedSMSText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_confirmed_email_enabled' => 'setIsConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'setIsConfirmedSmsEnabled',
        'confirmed_email_text' => 'setConfirmedEmailText',
        'confirmed_email_subject' => 'setConfirmedEmailSubject',
        'confirmed_sms_text' => 'setConfirmedSmsText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_confirmed_email_enabled' => 'getIsConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'getIsConfirmedSmsEnabled',
        'confirmed_email_text' => 'getConfirmedEmailText',
        'confirmed_email_subject' => 'getConfirmedEmailSubject',
        'confirmed_sms_text' => 'getConfirmedSmsText',
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
        $this->setIfExists('is_confirmed_email_enabled', $data ?? [], null);
        $this->setIfExists('is_confirmed_sms_enabled', $data ?? [], null);
        $this->setIfExists('confirmed_email_text', $data ?? [], null);
        $this->setIfExists('confirmed_email_subject', $data ?? [], null);
        $this->setIfExists('confirmed_sms_text', $data ?? [], null);
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

        if ($this->container['is_confirmed_email_enabled'] === null) {
            $invalidProperties[] = "'is_confirmed_email_enabled' can't be null";
        }
        if ($this->container['is_confirmed_sms_enabled'] === null) {
            $invalidProperties[] = "'is_confirmed_sms_enabled' can't be null";
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
     * Gets is_confirmed_email_enabled
     *
     * @return bool
     */
    public function getIsConfirmedEmailEnabled()
    {
        return $this->container['is_confirmed_email_enabled'];
    }

    /**
     * Sets is_confirmed_email_enabled
     *
     * @param bool $is_confirmed_email_enabled is_confirmed_email_enabled
     *
     * @return self
     */
    public function setIsConfirmedEmailEnabled($is_confirmed_email_enabled)
    {
        if (is_null($is_confirmed_email_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_confirmed_email_enabled cannot be null');
        }
        $this->container['is_confirmed_email_enabled'] = $is_confirmed_email_enabled;

        return $this;
    }

    /**
     * Gets is_confirmed_sms_enabled
     *
     * @return bool
     */
    public function getIsConfirmedSmsEnabled()
    {
        return $this->container['is_confirmed_sms_enabled'];
    }

    /**
     * Sets is_confirmed_sms_enabled
     *
     * @param bool $is_confirmed_sms_enabled is_confirmed_sms_enabled
     *
     * @return self
     */
    public function setIsConfirmedSmsEnabled($is_confirmed_sms_enabled)
    {
        if (is_null($is_confirmed_sms_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_confirmed_sms_enabled cannot be null');
        }
        $this->container['is_confirmed_sms_enabled'] = $is_confirmed_sms_enabled;

        return $this;
    }

    /**
     * Gets confirmed_email_text
     *
     * @return string|null
     */
    public function getConfirmedEmailText()
    {
        return $this->container['confirmed_email_text'];
    }

    /**
     * Sets confirmed_email_text
     *
     * @param string|null $confirmed_email_text confirmed_email_text
     *
     * @return self
     */
    public function setConfirmedEmailText($confirmed_email_text)
    {
        if (is_null($confirmed_email_text)) {
            throw new \InvalidArgumentException('non-nullable confirmed_email_text cannot be null');
        }
        $this->container['confirmed_email_text'] = $confirmed_email_text;

        return $this;
    }

    /**
     * Gets confirmed_email_subject
     *
     * @return string|null
     */
    public function getConfirmedEmailSubject()
    {
        return $this->container['confirmed_email_subject'];
    }

    /**
     * Sets confirmed_email_subject
     *
     * @param string|null $confirmed_email_subject confirmed_email_subject
     *
     * @return self
     */
    public function setConfirmedEmailSubject($confirmed_email_subject)
    {
        if (is_null($confirmed_email_subject)) {
            throw new \InvalidArgumentException('non-nullable confirmed_email_subject cannot be null');
        }
        $this->container['confirmed_email_subject'] = $confirmed_email_subject;

        return $this;
    }

    /**
     * Gets confirmed_sms_text
     *
     * @return string|null
     */
    public function getConfirmedSmsText()
    {
        return $this->container['confirmed_sms_text'];
    }

    /**
     * Sets confirmed_sms_text
     *
     * @param string|null $confirmed_sms_text confirmed_sms_text
     *
     * @return self
     */
    public function setConfirmedSmsText($confirmed_sms_text)
    {
        if (is_null($confirmed_sms_text)) {
            throw new \InvalidArgumentException('non-nullable confirmed_sms_text cannot be null');
        }
        $this->container['confirmed_sms_text'] = $confirmed_sms_text;

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
