<?php

declare(strict_types=1);

/**
 * DimensionsRange - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * DimensionsRange.
 * @implements \ArrayAccess<string, mixed>
 */
class DimensionsRange implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'DimensionsRange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'max_area' => 'float',
        'max_height' => 'float',
        'max_length' => 'float',
        'max_volume' => 'float',
        'max_width' => 'float',
        'min_area' => 'float',
        'min_height' => 'float',
        'min_length' => 'float',
        'min_volume' => 'float',
        'min_width' => 'float',
        'unit_of_measurement' => '\Brixion\Kolibri\Model\UnitOfMeasurement',
        'unit_of_volume' => '\Brixion\Kolibri\Model\UnitOfVolume',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'max_area' => 'decimal',
        'max_height' => 'decimal',
        'max_length' => 'decimal',
        'max_volume' => 'decimal',
        'max_width' => 'decimal',
        'min_area' => 'decimal',
        'min_height' => 'decimal',
        'min_length' => 'decimal',
        'min_volume' => 'decimal',
        'min_width' => 'decimal',
        'unit_of_measurement' => null,
        'unit_of_volume' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'max_area' => false,
        'max_height' => false,
        'max_length' => false,
        'max_volume' => false,
        'max_width' => false,
        'min_area' => false,
        'min_height' => false,
        'min_length' => false,
        'min_volume' => false,
        'min_width' => false,
        'unit_of_measurement' => false,
        'unit_of_volume' => false,
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
        'max_area' => 'maxArea',
        'max_height' => 'maxHeight',
        'max_length' => 'maxLength',
        'max_volume' => 'maxVolume',
        'max_width' => 'maxWidth',
        'min_area' => 'minArea',
        'min_height' => 'minHeight',
        'min_length' => 'minLength',
        'min_volume' => 'minVolume',
        'min_width' => 'minWidth',
        'unit_of_measurement' => 'unitOfMeasurement',
        'unit_of_volume' => 'unitOfVolume',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_area' => 'setMaxArea',
        'max_height' => 'setMaxHeight',
        'max_length' => 'setMaxLength',
        'max_volume' => 'setMaxVolume',
        'max_width' => 'setMaxWidth',
        'min_area' => 'setMinArea',
        'min_height' => 'setMinHeight',
        'min_length' => 'setMinLength',
        'min_volume' => 'setMinVolume',
        'min_width' => 'setMinWidth',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'unit_of_volume' => 'setUnitOfVolume',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_area' => 'getMaxArea',
        'max_height' => 'getMaxHeight',
        'max_length' => 'getMaxLength',
        'max_volume' => 'getMaxVolume',
        'max_width' => 'getMaxWidth',
        'min_area' => 'getMinArea',
        'min_height' => 'getMinHeight',
        'min_length' => 'getMinLength',
        'min_volume' => 'getMinVolume',
        'min_width' => 'getMinWidth',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'unit_of_volume' => 'getUnitOfVolume',
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
        $this->setIfExists('max_area', $data ?? [], null);
        $this->setIfExists('max_height', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
        $this->setIfExists('max_volume', $data ?? [], null);
        $this->setIfExists('max_width', $data ?? [], null);
        $this->setIfExists('min_area', $data ?? [], null);
        $this->setIfExists('min_height', $data ?? [], null);
        $this->setIfExists('min_length', $data ?? [], null);
        $this->setIfExists('min_volume', $data ?? [], null);
        $this->setIfExists('min_width', $data ?? [], null);
        $this->setIfExists('unit_of_measurement', $data ?? [], null);
        $this->setIfExists('unit_of_volume', $data ?? [], null);
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
     * Gets max_area
     *
     * @return float|null
     */
    public function getMaxArea()
    {
        return $this->container['max_area'];
    }

    /**
     * Sets max_area
     *
     * @param float|null $max_area max_area
     *
     * @return self
     */
    public function setMaxArea($max_area)
    {
        if (is_null($max_area)) {
            throw new \InvalidArgumentException('non-nullable max_area cannot be null');
        }
        $this->container['max_area'] = $max_area;

        return $this;
    }

    /**
     * Gets max_height
     *
     * @return float|null
     */
    public function getMaxHeight()
    {
        return $this->container['max_height'];
    }

    /**
     * Sets max_height
     *
     * @param float|null $max_height max_height
     *
     * @return self
     */
    public function setMaxHeight($max_height)
    {
        if (is_null($max_height)) {
            throw new \InvalidArgumentException('non-nullable max_height cannot be null');
        }
        $this->container['max_height'] = $max_height;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return float|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param float|null $max_length max_length
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        if (is_null($max_length)) {
            throw new \InvalidArgumentException('non-nullable max_length cannot be null');
        }
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_volume
     *
     * @return float|null
     */
    public function getMaxVolume()
    {
        return $this->container['max_volume'];
    }

    /**
     * Sets max_volume
     *
     * @param float|null $max_volume max_volume
     *
     * @return self
     */
    public function setMaxVolume($max_volume)
    {
        if (is_null($max_volume)) {
            throw new \InvalidArgumentException('non-nullable max_volume cannot be null');
        }
        $this->container['max_volume'] = $max_volume;

        return $this;
    }

    /**
     * Gets max_width
     *
     * @return float|null
     */
    public function getMaxWidth()
    {
        return $this->container['max_width'];
    }

    /**
     * Sets max_width
     *
     * @param float|null $max_width max_width
     *
     * @return self
     */
    public function setMaxWidth($max_width)
    {
        if (is_null($max_width)) {
            throw new \InvalidArgumentException('non-nullable max_width cannot be null');
        }
        $this->container['max_width'] = $max_width;

        return $this;
    }

    /**
     * Gets min_area
     *
     * @return float|null
     */
    public function getMinArea()
    {
        return $this->container['min_area'];
    }

    /**
     * Sets min_area
     *
     * @param float|null $min_area min_area
     *
     * @return self
     */
    public function setMinArea($min_area)
    {
        if (is_null($min_area)) {
            throw new \InvalidArgumentException('non-nullable min_area cannot be null');
        }
        $this->container['min_area'] = $min_area;

        return $this;
    }

    /**
     * Gets min_height
     *
     * @return float|null
     */
    public function getMinHeight()
    {
        return $this->container['min_height'];
    }

    /**
     * Sets min_height
     *
     * @param float|null $min_height min_height
     *
     * @return self
     */
    public function setMinHeight($min_height)
    {
        if (is_null($min_height)) {
            throw new \InvalidArgumentException('non-nullable min_height cannot be null');
        }
        $this->container['min_height'] = $min_height;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return float|null
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param float|null $min_length min_length
     *
     * @return self
     */
    public function setMinLength($min_length)
    {
        if (is_null($min_length)) {
            throw new \InvalidArgumentException('non-nullable min_length cannot be null');
        }
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets min_volume
     *
     * @return float|null
     */
    public function getMinVolume()
    {
        return $this->container['min_volume'];
    }

    /**
     * Sets min_volume
     *
     * @param float|null $min_volume min_volume
     *
     * @return self
     */
    public function setMinVolume($min_volume)
    {
        if (is_null($min_volume)) {
            throw new \InvalidArgumentException('non-nullable min_volume cannot be null');
        }
        $this->container['min_volume'] = $min_volume;

        return $this;
    }

    /**
     * Gets min_width
     *
     * @return float|null
     */
    public function getMinWidth()
    {
        return $this->container['min_width'];
    }

    /**
     * Sets min_width
     *
     * @param float|null $min_width min_width
     *
     * @return self
     */
    public function setMinWidth($min_width)
    {
        if (is_null($min_width)) {
            throw new \InvalidArgumentException('non-nullable min_width cannot be null');
        }
        $this->container['min_width'] = $min_width;

        return $this;
    }

    /**
     * Gets unit_of_measurement
     *
     * @return \Brixion\Kolibri\Model\UnitOfMeasurement|null
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param \Brixion\Kolibri\Model\UnitOfMeasurement|null $unit_of_measurement unit_of_measurement
     *
     * @return self
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        if (is_null($unit_of_measurement)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measurement cannot be null');
        }
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets unit_of_volume
     *
     * @return \Brixion\Kolibri\Model\UnitOfVolume|null
     */
    public function getUnitOfVolume()
    {
        return $this->container['unit_of_volume'];
    }

    /**
     * Sets unit_of_volume
     *
     * @param \Brixion\Kolibri\Model\UnitOfVolume|null $unit_of_volume unit_of_volume
     *
     * @return self
     */
    public function setUnitOfVolume($unit_of_volume)
    {
        if (is_null($unit_of_volume)) {
            throw new \InvalidArgumentException('non-nullable unit_of_volume cannot be null');
        }
        $this->container['unit_of_volume'] = $unit_of_volume;

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
