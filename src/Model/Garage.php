<?php

declare(strict_types=1);

/**
 * Garage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Garage.
 * @implements \ArrayAccess<string, mixed>
 */
class Garage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Garage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'amenities' => '\Brixion\Kolibri\Model\Amenities[]',
        'capacity' => 'int',
        'garage_type' => '\Brixion\Kolibri\Model\GarageType',
        'insulation_types' => '\Brixion\Kolibri\Model\InsulationType[]',
        'name' => 'string',
        'size' => '\Brixion\Kolibri\Model\Size',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'amenities' => null,
        'capacity' => 'int32',
        'garage_type' => null,
        'insulation_types' => null,
        'name' => null,
        'size' => null,
        'description' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'amenities' => false,
        'capacity' => false,
        'garage_type' => false,
        'insulation_types' => false,
        'name' => false,
        'size' => false,
        'description' => false,
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
        'amenities' => 'amenities',
        'capacity' => 'capacity',
        'garage_type' => 'garageType',
        'insulation_types' => 'insulationTypes',
        'name' => 'name',
        'size' => 'size',
        'description' => 'description',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amenities' => 'setAmenities',
        'capacity' => 'setCapacity',
        'garage_type' => 'setGarageType',
        'insulation_types' => 'setInsulationTypes',
        'name' => 'setName',
        'size' => 'setSize',
        'description' => 'setDescription',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amenities' => 'getAmenities',
        'capacity' => 'getCapacity',
        'garage_type' => 'getGarageType',
        'insulation_types' => 'getInsulationTypes',
        'name' => 'getName',
        'size' => 'getSize',
        'description' => 'getDescription',
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
        $this->setIfExists('amenities', $data ?? [], null);
        $this->setIfExists('capacity', $data ?? [], null);
        $this->setIfExists('garage_type', $data ?? [], null);
        $this->setIfExists('insulation_types', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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
     * Gets amenities
     *
     * @return \Brixion\Kolibri\Model\Amenities[]|null
     */
    public function getAmenities()
    {
        return $this->container['amenities'];
    }

    /**
     * Sets amenities
     *
     * @param \Brixion\Kolibri\Model\Amenities[]|null $amenities amenities
     *
     * @return self
     */
    public function setAmenities($amenities)
    {
        if (is_null($amenities)) {
            throw new \InvalidArgumentException('non-nullable amenities cannot be null');
        }
        $this->container['amenities'] = $amenities;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int|null $capacity capacity
     *
     * @return self
     */
    public function setCapacity($capacity)
    {
        if (is_null($capacity)) {
            throw new \InvalidArgumentException('non-nullable capacity cannot be null');
        }
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets garage_type
     *
     * @return \Brixion\Kolibri\Model\GarageType|null
     */
    public function getGarageType()
    {
        return $this->container['garage_type'];
    }

    /**
     * Sets garage_type
     *
     * @param \Brixion\Kolibri\Model\GarageType|null $garage_type garage_type
     *
     * @return self
     */
    public function setGarageType($garage_type)
    {
        if (is_null($garage_type)) {
            throw new \InvalidArgumentException('non-nullable garage_type cannot be null');
        }
        $this->container['garage_type'] = $garage_type;

        return $this;
    }

    /**
     * Gets insulation_types
     *
     * @return \Brixion\Kolibri\Model\InsulationType[]|null
     */
    public function getInsulationTypes()
    {
        return $this->container['insulation_types'];
    }

    /**
     * Sets insulation_types
     *
     * @param \Brixion\Kolibri\Model\InsulationType[]|null $insulation_types insulation_types
     *
     * @return self
     */
    public function setInsulationTypes($insulation_types)
    {
        if (is_null($insulation_types)) {
            throw new \InvalidArgumentException('non-nullable insulation_types cannot be null');
        }
        $this->container['insulation_types'] = $insulation_types;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Brixion\Kolibri\Model\Size|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
