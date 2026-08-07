<?php

declare(strict_types=1);

/**
 * Garden - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Garden.
 * @implements \ArrayAccess<string, mixed>
 */
class Garden implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Garden';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'garden_quality' => '\Brixion\Kolibri\Model\GardenQuality',
        'garden_type' => '\Brixion\Kolibri\Model\GardenType',
        'has_back_entrance' => 'bool',
        'is_main_garden' => 'bool',
        'name' => 'string',
        'orientation' => '\Brixion\Kolibri\Model\Orientation',
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
        'garden_quality' => null,
        'garden_type' => null,
        'has_back_entrance' => null,
        'is_main_garden' => null,
        'name' => null,
        'orientation' => null,
        'size' => null,
        'description' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'garden_quality' => false,
        'garden_type' => false,
        'has_back_entrance' => false,
        'is_main_garden' => false,
        'name' => false,
        'orientation' => false,
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
        'garden_quality' => 'gardenQuality',
        'garden_type' => 'gardenType',
        'has_back_entrance' => 'hasBackEntrance',
        'is_main_garden' => 'isMainGarden',
        'name' => 'name',
        'orientation' => 'orientation',
        'size' => 'size',
        'description' => 'description',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'garden_quality' => 'setGardenQuality',
        'garden_type' => 'setGardenType',
        'has_back_entrance' => 'setHasBackEntrance',
        'is_main_garden' => 'setIsMainGarden',
        'name' => 'setName',
        'orientation' => 'setOrientation',
        'size' => 'setSize',
        'description' => 'setDescription',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'garden_quality' => 'getGardenQuality',
        'garden_type' => 'getGardenType',
        'has_back_entrance' => 'getHasBackEntrance',
        'is_main_garden' => 'getIsMainGarden',
        'name' => 'getName',
        'orientation' => 'getOrientation',
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
        $this->setIfExists('garden_quality', $data ?? [], null);
        $this->setIfExists('garden_type', $data ?? [], null);
        $this->setIfExists('has_back_entrance', $data ?? [], null);
        $this->setIfExists('is_main_garden', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('orientation', $data ?? [], null);
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
     * Gets garden_quality
     *
     * @return \Brixion\Kolibri\Model\GardenQuality|null
     */
    public function getGardenQuality()
    {
        return $this->container['garden_quality'];
    }

    /**
     * Sets garden_quality
     *
     * @param \Brixion\Kolibri\Model\GardenQuality|null $garden_quality garden_quality
     *
     * @return self
     */
    public function setGardenQuality($garden_quality)
    {
        if (is_null($garden_quality)) {
            throw new \InvalidArgumentException('non-nullable garden_quality cannot be null');
        }
        $this->container['garden_quality'] = $garden_quality;

        return $this;
    }

    /**
     * Gets garden_type
     *
     * @return \Brixion\Kolibri\Model\GardenType|null
     */
    public function getGardenType()
    {
        return $this->container['garden_type'];
    }

    /**
     * Sets garden_type
     *
     * @param \Brixion\Kolibri\Model\GardenType|null $garden_type garden_type
     *
     * @return self
     */
    public function setGardenType($garden_type)
    {
        if (is_null($garden_type)) {
            throw new \InvalidArgumentException('non-nullable garden_type cannot be null');
        }
        $this->container['garden_type'] = $garden_type;

        return $this;
    }

    /**
     * Gets has_back_entrance
     *
     * @return bool|null
     */
    public function getHasBackEntrance()
    {
        return $this->container['has_back_entrance'];
    }

    /**
     * Sets has_back_entrance
     *
     * @param bool|null $has_back_entrance has_back_entrance
     *
     * @return self
     */
    public function setHasBackEntrance($has_back_entrance)
    {
        if (is_null($has_back_entrance)) {
            throw new \InvalidArgumentException('non-nullable has_back_entrance cannot be null');
        }
        $this->container['has_back_entrance'] = $has_back_entrance;

        return $this;
    }

    /**
     * Gets is_main_garden
     *
     * @return bool|null
     */
    public function getIsMainGarden()
    {
        return $this->container['is_main_garden'];
    }

    /**
     * Sets is_main_garden
     *
     * @param bool|null $is_main_garden is_main_garden
     *
     * @return self
     */
    public function setIsMainGarden($is_main_garden)
    {
        if (is_null($is_main_garden)) {
            throw new \InvalidArgumentException('non-nullable is_main_garden cannot be null');
        }
        $this->container['is_main_garden'] = $is_main_garden;

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
     * Gets orientation
     *
     * @return \Brixion\Kolibri\Model\Orientation|null
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param \Brixion\Kolibri\Model\Orientation|null $orientation orientation
     *
     * @return self
     */
    public function setOrientation($orientation)
    {
        if (is_null($orientation)) {
            throw new \InvalidArgumentException('non-nullable orientation cannot be null');
        }
        $this->container['orientation'] = $orientation;

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
