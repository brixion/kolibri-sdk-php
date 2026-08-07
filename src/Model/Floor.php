<?php

declare(strict_types=1);

/**
 * Floor - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Floor.
 * @implements \ArrayAccess<string, mixed>
 */
class Floor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Floor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'attic_options' => '\Brixion\Kolibri\Model\AtticOption[]',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'floor_number' => 'int',
        'floor_type' => '\Brixion\Kolibri\Model\FloorType',
        'name' => 'string',
        'number_of_bedrooms' => 'int',
        'number_of_spaces' => 'int',
        'spaces' => '\Brixion\Kolibri\Model\Space[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'attic_options' => null,
        'description' => null,
        'floor_number' => 'int32',
        'floor_type' => null,
        'name' => null,
        'number_of_bedrooms' => 'int32',
        'number_of_spaces' => 'int32',
        'spaces' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'attic_options' => false,
        'description' => false,
        'floor_number' => false,
        'floor_type' => false,
        'name' => false,
        'number_of_bedrooms' => false,
        'number_of_spaces' => false,
        'spaces' => false,
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
        'attic_options' => 'atticOptions',
        'description' => 'description',
        'floor_number' => 'floorNumber',
        'floor_type' => 'floorType',
        'name' => 'name',
        'number_of_bedrooms' => 'numberOfBedrooms',
        'number_of_spaces' => 'numberOfSpaces',
        'spaces' => 'spaces',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attic_options' => 'setAtticOptions',
        'description' => 'setDescription',
        'floor_number' => 'setFloorNumber',
        'floor_type' => 'setFloorType',
        'name' => 'setName',
        'number_of_bedrooms' => 'setNumberOfBedrooms',
        'number_of_spaces' => 'setNumberOfSpaces',
        'spaces' => 'setSpaces',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attic_options' => 'getAtticOptions',
        'description' => 'getDescription',
        'floor_number' => 'getFloorNumber',
        'floor_type' => 'getFloorType',
        'name' => 'getName',
        'number_of_bedrooms' => 'getNumberOfBedrooms',
        'number_of_spaces' => 'getNumberOfSpaces',
        'spaces' => 'getSpaces',
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
        $this->setIfExists('attic_options', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('floor_number', $data ?? [], null);
        $this->setIfExists('floor_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number_of_bedrooms', $data ?? [], null);
        $this->setIfExists('number_of_spaces', $data ?? [], null);
        $this->setIfExists('spaces', $data ?? [], null);
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

        if ($this->container['floor_type'] === null) {
            $invalidProperties[] = "'floor_type' can't be null";
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
     * Gets attic_options
     *
     * @return \Brixion\Kolibri\Model\AtticOption[]|null
     */
    public function getAtticOptions()
    {
        return $this->container['attic_options'];
    }

    /**
     * Sets attic_options
     *
     * @param \Brixion\Kolibri\Model\AtticOption[]|null $attic_options attic_options
     *
     * @return self
     */
    public function setAtticOptions($attic_options)
    {
        if (is_null($attic_options)) {
            throw new \InvalidArgumentException('non-nullable attic_options cannot be null');
        }
        $this->container['attic_options'] = $attic_options;

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
     * Gets floor_number
     *
     * @return int|null
     */
    public function getFloorNumber()
    {
        return $this->container['floor_number'];
    }

    /**
     * Sets floor_number
     *
     * @param int|null $floor_number floor_number
     *
     * @return self
     */
    public function setFloorNumber($floor_number)
    {
        if (is_null($floor_number)) {
            throw new \InvalidArgumentException('non-nullable floor_number cannot be null');
        }
        $this->container['floor_number'] = $floor_number;

        return $this;
    }

    /**
     * Gets floor_type
     *
     * @return \Brixion\Kolibri\Model\FloorType
     */
    public function getFloorType()
    {
        return $this->container['floor_type'];
    }

    /**
     * Sets floor_type
     *
     * @param \Brixion\Kolibri\Model\FloorType $floor_type floor_type
     *
     * @return self
     */
    public function setFloorType($floor_type)
    {
        if (is_null($floor_type)) {
            throw new \InvalidArgumentException('non-nullable floor_type cannot be null');
        }
        $this->container['floor_type'] = $floor_type;

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
     * Gets number_of_bedrooms
     *
     * @return int|null
     */
    public function getNumberOfBedrooms()
    {
        return $this->container['number_of_bedrooms'];
    }

    /**
     * Sets number_of_bedrooms
     *
     * @param int|null $number_of_bedrooms number_of_bedrooms
     *
     * @return self
     */
    public function setNumberOfBedrooms($number_of_bedrooms)
    {
        if (is_null($number_of_bedrooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_bedrooms cannot be null');
        }
        $this->container['number_of_bedrooms'] = $number_of_bedrooms;

        return $this;
    }

    /**
     * Gets number_of_spaces
     *
     * @return int|null
     */
    public function getNumberOfSpaces()
    {
        return $this->container['number_of_spaces'];
    }

    /**
     * Sets number_of_spaces
     *
     * @param int|null $number_of_spaces number_of_spaces
     *
     * @return self
     */
    public function setNumberOfSpaces($number_of_spaces)
    {
        if (is_null($number_of_spaces)) {
            throw new \InvalidArgumentException('non-nullable number_of_spaces cannot be null');
        }
        $this->container['number_of_spaces'] = $number_of_spaces;

        return $this;
    }

    /**
     * Gets spaces
     *
     * @return \Brixion\Kolibri\Model\Space[]|null
     */
    public function getSpaces()
    {
        return $this->container['spaces'];
    }

    /**
     * Sets spaces
     *
     * @param \Brixion\Kolibri\Model\Space[]|null $spaces spaces
     *
     * @return self
     */
    public function setSpaces($spaces)
    {
        if (is_null($spaces)) {
            throw new \InvalidArgumentException('non-nullable spaces cannot be null');
        }
        $this->container['spaces'] = $spaces;

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
