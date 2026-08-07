<?php

declare(strict_types=1);

/**
 * ObjectAssignmentUnlinkRelationRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ObjectAssignmentUnlinkRelationRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class ObjectAssignmentUnlinkRelationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ObjectAssignmentUnlinkRelationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'relation_id' => 'string',
        'relation_type' => '\Brixion\Kolibri\Model\RelationType',
        'object_assignment_id' => 'string',
        'relation_role' => '\Brixion\Kolibri\Model\RelationRole',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'relation_id' => 'guid',
        'relation_type' => null,
        'object_assignment_id' => 'guid',
        'relation_role' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'relation_id' => false,
        'relation_type' => false,
        'object_assignment_id' => false,
        'relation_role' => false,
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
        'relation_id' => 'relationId',
        'relation_type' => 'relationType',
        'object_assignment_id' => 'objectAssignmentId',
        'relation_role' => 'relationRole',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relation_id' => 'setRelationId',
        'relation_type' => 'setRelationType',
        'object_assignment_id' => 'setObjectAssignmentId',
        'relation_role' => 'setRelationRole',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relation_id' => 'getRelationId',
        'relation_type' => 'getRelationType',
        'object_assignment_id' => 'getObjectAssignmentId',
        'relation_role' => 'getRelationRole',
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
        $this->setIfExists('relation_id', $data ?? [], null);
        $this->setIfExists('relation_type', $data ?? [], null);
        $this->setIfExists('object_assignment_id', $data ?? [], null);
        $this->setIfExists('relation_role', $data ?? [], null);
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

        if ($this->container['relation_id'] === null) {
            $invalidProperties[] = "'relation_id' can't be null";
        }
        if ((mb_strlen($this->container['relation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'relation_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['relation_type'] === null) {
            $invalidProperties[] = "'relation_type' can't be null";
        }
        if ($this->container['object_assignment_id'] === null) {
            $invalidProperties[] = "'object_assignment_id' can't be null";
        }
        if ((mb_strlen($this->container['object_assignment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'object_assignment_id', the character length must be bigger than or equal to 1.";
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
     * Gets relation_id
     *
     * @return string
     */
    public function getRelationId()
    {
        return $this->container['relation_id'];
    }

    /**
     * Sets relation_id
     *
     * @param string $relation_id The ID of the relation (either a contact company or contact person)
     *
     * @return self
     */
    public function setRelationId($relation_id)
    {
        if (is_null($relation_id)) {
            throw new \InvalidArgumentException('non-nullable relation_id cannot be null');
        }

        if ((mb_strlen($relation_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $relation_id when calling ObjectAssignmentUnlinkRelationRequest., must be bigger than or equal to 1.');
        }

        $this->container['relation_id'] = $relation_id;

        return $this;
    }

    /**
     * Gets relation_type
     *
     * @return \Brixion\Kolibri\Model\RelationType
     */
    public function getRelationType()
    {
        return $this->container['relation_type'];
    }

    /**
     * Sets relation_type
     *
     * @param \Brixion\Kolibri\Model\RelationType $relation_type The type of the specified relation. (Contact company and Contact persons are allowed).
     *
     * @return self
     */
    public function setRelationType($relation_type)
    {
        if (is_null($relation_type)) {
            throw new \InvalidArgumentException('non-nullable relation_type cannot be null');
        }
        $this->container['relation_type'] = $relation_type;

        return $this;
    }

    /**
     * Gets object_assignment_id
     *
     * @return string
     */
    public function getObjectAssignmentId()
    {
        return $this->container['object_assignment_id'];
    }

    /**
     * Sets object_assignment_id
     *
     * @param string $object_assignment_id The object assignment to unlink the relation from.
     *
     * @return self
     */
    public function setObjectAssignmentId($object_assignment_id)
    {
        if (is_null($object_assignment_id)) {
            throw new \InvalidArgumentException('non-nullable object_assignment_id cannot be null');
        }

        if ((mb_strlen($object_assignment_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object_assignment_id when calling ObjectAssignmentUnlinkRelationRequest., must be bigger than or equal to 1.');
        }

        $this->container['object_assignment_id'] = $object_assignment_id;

        return $this;
    }

    /**
     * Gets relation_role
     *
     * @return \Brixion\Kolibri\Model\RelationRole|null
     */
    public function getRelationRole()
    {
        return $this->container['relation_role'];
    }

    /**
     * Sets relation_role
     *
     * @param \Brixion\Kolibri\Model\RelationRole|null $relation_role Unlink given relation linked at given assignment, but only in the role given below. Not required: when not given, all links between assignment and relation will be removed.
     *
     * @return self
     */
    public function setRelationRole($relation_role)
    {
        if (is_null($relation_role)) {
            throw new \InvalidArgumentException('non-nullable relation_role cannot be null');
        }
        $this->container['relation_role'] = $relation_role;

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
