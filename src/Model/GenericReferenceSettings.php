<?php

declare(strict_types=1);

/**
 * GenericReferenceSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * GenericReferenceSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class GenericReferenceSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'GenericReferenceSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'prefix' => 'string',
        'next_number' => 'int',
        'fixed_number_width' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'prefix' => null,
        'next_number' => 'int32',
        'fixed_number_width' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'prefix' => false,
        'next_number' => false,
        'fixed_number_width' => false,
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
        'prefix' => 'prefix',
        'next_number' => 'nextNumber',
        'fixed_number_width' => 'fixedNumberWidth',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prefix' => 'setPrefix',
        'next_number' => 'setNextNumber',
        'fixed_number_width' => 'setFixedNumberWidth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prefix' => 'getPrefix',
        'next_number' => 'getNextNumber',
        'fixed_number_width' => 'getFixedNumberWidth',
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
        $this->setIfExists('prefix', $data ?? [], null);
        $this->setIfExists('next_number', $data ?? [], null);
        $this->setIfExists('fixed_number_width', $data ?? [], null);
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

        if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) > 50)) {
            $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['fixed_number_width']) && ($this->container['fixed_number_width'] > 10)) {
            $invalidProperties[] = "invalid value for 'fixed_number_width', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['fixed_number_width']) && ($this->container['fixed_number_width'] < 2)) {
            $invalidProperties[] = "invalid value for 'fixed_number_width', must be bigger than or equal to 2.";
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
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix prefix
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        if (is_null($prefix)) {
            throw new \InvalidArgumentException('non-nullable prefix cannot be null');
        }
        if ((mb_strlen($prefix) > 50)) {
            throw new \InvalidArgumentException('invalid length for $prefix when calling GenericReferenceSettings., must be smaller than or equal to 50.');
        }

        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets next_number
     *
     * @return int|null
     */
    public function getNextNumber()
    {
        return $this->container['next_number'];
    }

    /**
     * Sets next_number
     *
     * @param int|null $next_number next_number
     *
     * @return self
     */
    public function setNextNumber($next_number)
    {
        if (is_null($next_number)) {
            throw new \InvalidArgumentException('non-nullable next_number cannot be null');
        }
        $this->container['next_number'] = $next_number;

        return $this;
    }

    /**
     * Gets fixed_number_width
     *
     * @return int|null
     */
    public function getFixedNumberWidth()
    {
        return $this->container['fixed_number_width'];
    }

    /**
     * Sets fixed_number_width
     *
     * @param int|null $fixed_number_width fixed_number_width
     *
     * @return self
     */
    public function setFixedNumberWidth($fixed_number_width)
    {
        if (is_null($fixed_number_width)) {
            throw new \InvalidArgumentException('non-nullable fixed_number_width cannot be null');
        }

        if (($fixed_number_width > 10)) {
            throw new \InvalidArgumentException('invalid value for $fixed_number_width when calling GenericReferenceSettings., must be smaller than or equal to 10.');
        }
        if (($fixed_number_width < 2)) {
            throw new \InvalidArgumentException('invalid value for $fixed_number_width when calling GenericReferenceSettings., must be bigger than or equal to 2.');
        }

        $this->container['fixed_number_width'] = $fixed_number_width;

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
