<?php

declare(strict_types=1);

/**
 * CancellationMessage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CancellationMessage.
 * @implements \ArrayAccess<string, mixed>
 */
class CancellationMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CancellationMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_cancelled_email_enabled' => 'bool',
        'is_cancelled_sms_enabled' => 'bool',
        'cancelled_email_text' => 'string',
        'cancelled_email_subject' => 'string',
        'cancelled_sms_text' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'is_cancelled_email_enabled' => null,
        'is_cancelled_sms_enabled' => null,
        'cancelled_email_text' => null,
        'cancelled_email_subject' => null,
        'cancelled_sms_text' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_cancelled_email_enabled' => false,
        'is_cancelled_sms_enabled' => false,
        'cancelled_email_text' => false,
        'cancelled_email_subject' => false,
        'cancelled_sms_text' => false,
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
        'is_cancelled_email_enabled' => 'isCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'isCancelledSMSEnabled',
        'cancelled_email_text' => 'cancelledEmailText',
        'cancelled_email_subject' => 'cancelledEmailSubject',
        'cancelled_sms_text' => 'cancelledSmsText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_cancelled_email_enabled' => 'setIsCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'setIsCancelledSmsEnabled',
        'cancelled_email_text' => 'setCancelledEmailText',
        'cancelled_email_subject' => 'setCancelledEmailSubject',
        'cancelled_sms_text' => 'setCancelledSmsText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_cancelled_email_enabled' => 'getIsCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'getIsCancelledSmsEnabled',
        'cancelled_email_text' => 'getCancelledEmailText',
        'cancelled_email_subject' => 'getCancelledEmailSubject',
        'cancelled_sms_text' => 'getCancelledSmsText',
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
        $this->setIfExists('is_cancelled_email_enabled', $data ?? [], null);
        $this->setIfExists('is_cancelled_sms_enabled', $data ?? [], null);
        $this->setIfExists('cancelled_email_text', $data ?? [], null);
        $this->setIfExists('cancelled_email_subject', $data ?? [], null);
        $this->setIfExists('cancelled_sms_text', $data ?? [], null);
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

        if ($this->container['is_cancelled_email_enabled'] === null) {
            $invalidProperties[] = "'is_cancelled_email_enabled' can't be null";
        }
        if ($this->container['is_cancelled_sms_enabled'] === null) {
            $invalidProperties[] = "'is_cancelled_sms_enabled' can't be null";
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
     * Gets is_cancelled_email_enabled
     *
     * @return bool
     */
    public function getIsCancelledEmailEnabled()
    {
        return $this->container['is_cancelled_email_enabled'];
    }

    /**
     * Sets is_cancelled_email_enabled
     *
     * @param bool $is_cancelled_email_enabled is_cancelled_email_enabled
     *
     * @return self
     */
    public function setIsCancelledEmailEnabled($is_cancelled_email_enabled)
    {
        if (is_null($is_cancelled_email_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_cancelled_email_enabled cannot be null');
        }
        $this->container['is_cancelled_email_enabled'] = $is_cancelled_email_enabled;

        return $this;
    }

    /**
     * Gets is_cancelled_sms_enabled
     *
     * @return bool
     */
    public function getIsCancelledSmsEnabled()
    {
        return $this->container['is_cancelled_sms_enabled'];
    }

    /**
     * Sets is_cancelled_sms_enabled
     *
     * @param bool $is_cancelled_sms_enabled is_cancelled_sms_enabled
     *
     * @return self
     */
    public function setIsCancelledSmsEnabled($is_cancelled_sms_enabled)
    {
        if (is_null($is_cancelled_sms_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_cancelled_sms_enabled cannot be null');
        }
        $this->container['is_cancelled_sms_enabled'] = $is_cancelled_sms_enabled;

        return $this;
    }

    /**
     * Gets cancelled_email_text
     *
     * @return string|null
     */
    public function getCancelledEmailText()
    {
        return $this->container['cancelled_email_text'];
    }

    /**
     * Sets cancelled_email_text
     *
     * @param string|null $cancelled_email_text cancelled_email_text
     *
     * @return self
     */
    public function setCancelledEmailText($cancelled_email_text)
    {
        if (is_null($cancelled_email_text)) {
            throw new \InvalidArgumentException('non-nullable cancelled_email_text cannot be null');
        }
        $this->container['cancelled_email_text'] = $cancelled_email_text;

        return $this;
    }

    /**
     * Gets cancelled_email_subject
     *
     * @return string|null
     */
    public function getCancelledEmailSubject()
    {
        return $this->container['cancelled_email_subject'];
    }

    /**
     * Sets cancelled_email_subject
     *
     * @param string|null $cancelled_email_subject cancelled_email_subject
     *
     * @return self
     */
    public function setCancelledEmailSubject($cancelled_email_subject)
    {
        if (is_null($cancelled_email_subject)) {
            throw new \InvalidArgumentException('non-nullable cancelled_email_subject cannot be null');
        }
        $this->container['cancelled_email_subject'] = $cancelled_email_subject;

        return $this;
    }

    /**
     * Gets cancelled_sms_text
     *
     * @return string|null
     */
    public function getCancelledSmsText()
    {
        return $this->container['cancelled_sms_text'];
    }

    /**
     * Sets cancelled_sms_text
     *
     * @param string|null $cancelled_sms_text cancelled_sms_text
     *
     * @return self
     */
    public function setCancelledSmsText($cancelled_sms_text)
    {
        if (is_null($cancelled_sms_text)) {
            throw new \InvalidArgumentException('non-nullable cancelled_sms_text cannot be null');
        }
        $this->container['cancelled_sms_text'] = $cancelled_sms_text;

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
