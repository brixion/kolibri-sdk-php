<?php

declare(strict_types=1);

/**
 * Space - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Space.
 * @implements \ArrayAccess<string, mixed>
 */
class Space implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Space';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'balcony_type' => '\Brixion\Kolibri\Model\BalconyType',
        'bathroom_facilities' => '\Brixion\Kolibri\Model\BathroomFacility[]',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'has_stairway' => 'bool',
        'is_renewed' => 'bool',
        'kitchen_type' => '\Brixion\Kolibri\Model\KitchenType[]',
        'living_room_types' => '\Brixion\Kolibri\Model\LivingRoomType[]',
        'construction_year' => 'int',
        'kitchen_facilities' => '\Brixion\Kolibri\Model\KitchenFacility[]',
        'name' => 'string',
        'orientation' => '\Brixion\Kolibri\Model\Orientation',
        'size' => '\Brixion\Kolibri\Model\Size',
        'stove' => '\Brixion\Kolibri\Model\Stove',
        'type' => '\Brixion\Kolibri\Model\SpaceType',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'balcony_type' => null,
        'bathroom_facilities' => null,
        'description' => null,
        'has_stairway' => null,
        'is_renewed' => null,
        'kitchen_type' => null,
        'living_room_types' => null,
        'construction_year' => 'int32',
        'kitchen_facilities' => null,
        'name' => null,
        'orientation' => null,
        'size' => null,
        'stove' => null,
        'type' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'balcony_type' => false,
        'bathroom_facilities' => false,
        'description' => false,
        'has_stairway' => false,
        'is_renewed' => false,
        'kitchen_type' => false,
        'living_room_types' => false,
        'construction_year' => false,
        'kitchen_facilities' => false,
        'name' => false,
        'orientation' => false,
        'size' => false,
        'stove' => false,
        'type' => false,
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
        'balcony_type' => 'balconyType',
        'bathroom_facilities' => 'bathroomFacilities',
        'description' => 'description',
        'has_stairway' => 'hasStairway',
        'is_renewed' => 'isRenewed',
        'kitchen_type' => 'kitchenType',
        'living_room_types' => 'livingRoomTypes',
        'construction_year' => 'constructionYear',
        'kitchen_facilities' => 'kitchenFacilities',
        'name' => 'name',
        'orientation' => 'orientation',
        'size' => 'size',
        'stove' => 'stove',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balcony_type' => 'setBalconyType',
        'bathroom_facilities' => 'setBathroomFacilities',
        'description' => 'setDescription',
        'has_stairway' => 'setHasStairway',
        'is_renewed' => 'setIsRenewed',
        'kitchen_type' => 'setKitchenType',
        'living_room_types' => 'setLivingRoomTypes',
        'construction_year' => 'setConstructionYear',
        'kitchen_facilities' => 'setKitchenFacilities',
        'name' => 'setName',
        'orientation' => 'setOrientation',
        'size' => 'setSize',
        'stove' => 'setStove',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balcony_type' => 'getBalconyType',
        'bathroom_facilities' => 'getBathroomFacilities',
        'description' => 'getDescription',
        'has_stairway' => 'getHasStairway',
        'is_renewed' => 'getIsRenewed',
        'kitchen_type' => 'getKitchenType',
        'living_room_types' => 'getLivingRoomTypes',
        'construction_year' => 'getConstructionYear',
        'kitchen_facilities' => 'getKitchenFacilities',
        'name' => 'getName',
        'orientation' => 'getOrientation',
        'size' => 'getSize',
        'stove' => 'getStove',
        'type' => 'getType',
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
        $this->setIfExists('balcony_type', $data ?? [], null);
        $this->setIfExists('bathroom_facilities', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('has_stairway', $data ?? [], null);
        $this->setIfExists('is_renewed', $data ?? [], null);
        $this->setIfExists('kitchen_type', $data ?? [], null);
        $this->setIfExists('living_room_types', $data ?? [], null);
        $this->setIfExists('construction_year', $data ?? [], null);
        $this->setIfExists('kitchen_facilities', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('orientation', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('stove', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
     * Gets balcony_type
     *
     * @return \Brixion\Kolibri\Model\BalconyType|null
     */
    public function getBalconyType()
    {
        return $this->container['balcony_type'];
    }

    /**
     * Sets balcony_type
     *
     * @param \Brixion\Kolibri\Model\BalconyType|null $balcony_type balcony_type
     *
     * @return self
     */
    public function setBalconyType($balcony_type)
    {
        if (is_null($balcony_type)) {
            throw new \InvalidArgumentException('non-nullable balcony_type cannot be null');
        }
        $this->container['balcony_type'] = $balcony_type;

        return $this;
    }

    /**
     * Gets bathroom_facilities
     *
     * @return \Brixion\Kolibri\Model\BathroomFacility[]|null
     */
    public function getBathroomFacilities()
    {
        return $this->container['bathroom_facilities'];
    }

    /**
     * Sets bathroom_facilities
     *
     * @param \Brixion\Kolibri\Model\BathroomFacility[]|null $bathroom_facilities bathroom_facilities
     *
     * @return self
     */
    public function setBathroomFacilities($bathroom_facilities)
    {
        if (is_null($bathroom_facilities)) {
            throw new \InvalidArgumentException('non-nullable bathroom_facilities cannot be null');
        }
        $this->container['bathroom_facilities'] = $bathroom_facilities;

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
     * Gets has_stairway
     *
     * @return bool|null
     */
    public function getHasStairway()
    {
        return $this->container['has_stairway'];
    }

    /**
     * Sets has_stairway
     *
     * @param bool|null $has_stairway has_stairway
     *
     * @return self
     */
    public function setHasStairway($has_stairway)
    {
        if (is_null($has_stairway)) {
            throw new \InvalidArgumentException('non-nullable has_stairway cannot be null');
        }
        $this->container['has_stairway'] = $has_stairway;

        return $this;
    }

    /**
     * Gets is_renewed
     *
     * @return bool|null
     */
    public function getIsRenewed()
    {
        return $this->container['is_renewed'];
    }

    /**
     * Sets is_renewed
     *
     * @param bool|null $is_renewed is_renewed
     *
     * @return self
     */
    public function setIsRenewed($is_renewed)
    {
        if (is_null($is_renewed)) {
            throw new \InvalidArgumentException('non-nullable is_renewed cannot be null');
        }
        $this->container['is_renewed'] = $is_renewed;

        return $this;
    }

    /**
     * Gets kitchen_type
     *
     * @return \Brixion\Kolibri\Model\KitchenType[]|null
     */
    public function getKitchenType()
    {
        return $this->container['kitchen_type'];
    }

    /**
     * Sets kitchen_type
     *
     * @param \Brixion\Kolibri\Model\KitchenType[]|null $kitchen_type kitchen_type
     *
     * @return self
     */
    public function setKitchenType($kitchen_type)
    {
        if (is_null($kitchen_type)) {
            throw new \InvalidArgumentException('non-nullable kitchen_type cannot be null');
        }
        $this->container['kitchen_type'] = $kitchen_type;

        return $this;
    }

    /**
     * Gets living_room_types
     *
     * @return \Brixion\Kolibri\Model\LivingRoomType[]|null
     */
    public function getLivingRoomTypes()
    {
        return $this->container['living_room_types'];
    }

    /**
     * Sets living_room_types
     *
     * @param \Brixion\Kolibri\Model\LivingRoomType[]|null $living_room_types living_room_types
     *
     * @return self
     */
    public function setLivingRoomTypes($living_room_types)
    {
        if (is_null($living_room_types)) {
            throw new \InvalidArgumentException('non-nullable living_room_types cannot be null');
        }
        $this->container['living_room_types'] = $living_room_types;

        return $this;
    }

    /**
     * Gets construction_year
     *
     * @return int|null
     */
    public function getConstructionYear()
    {
        return $this->container['construction_year'];
    }

    /**
     * Sets construction_year
     *
     * @param int|null $construction_year construction_year
     *
     * @return self
     */
    public function setConstructionYear($construction_year)
    {
        if (is_null($construction_year)) {
            throw new \InvalidArgumentException('non-nullable construction_year cannot be null');
        }
        $this->container['construction_year'] = $construction_year;

        return $this;
    }

    /**
     * Gets kitchen_facilities
     *
     * @return \Brixion\Kolibri\Model\KitchenFacility[]|null
     */
    public function getKitchenFacilities()
    {
        return $this->container['kitchen_facilities'];
    }

    /**
     * Sets kitchen_facilities
     *
     * @param \Brixion\Kolibri\Model\KitchenFacility[]|null $kitchen_facilities kitchen_facilities
     *
     * @return self
     */
    public function setKitchenFacilities($kitchen_facilities)
    {
        if (is_null($kitchen_facilities)) {
            throw new \InvalidArgumentException('non-nullable kitchen_facilities cannot be null');
        }
        $this->container['kitchen_facilities'] = $kitchen_facilities;

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
     * Gets stove
     *
     * @return \Brixion\Kolibri\Model\Stove|null
     */
    public function getStove()
    {
        return $this->container['stove'];
    }

    /**
     * Sets stove
     *
     * @param \Brixion\Kolibri\Model\Stove|null $stove stove
     *
     * @return self
     */
    public function setStove($stove)
    {
        if (is_null($stove)) {
            throw new \InvalidArgumentException('non-nullable stove cannot be null');
        }
        $this->container['stove'] = $stove;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\SpaceType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\SpaceType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
