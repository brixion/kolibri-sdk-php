<?php

declare(strict_types=1);

/**
 * ObjectAssignmentsDefineNewFromObjectTypeRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ObjectAssignmentsDefineNewFromObjectTypeRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class ObjectAssignmentsDefineNewFromObjectTypeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ObjectAssignmentsDefineNewFromObjectTypeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'employee_id' => 'string',
        'office_id' => 'string',
        'object_type_id' => 'string',
        'project_id' => 'string',
        'construction_nr' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'employee_id' => 'guid',
        'office_id' => 'guid',
        'object_type_id' => 'guid',
        'project_id' => 'guid',
        'construction_nr' => null,
        'real_estate_group' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'employee_id' => false,
        'office_id' => false,
        'object_type_id' => false,
        'project_id' => false,
        'construction_nr' => false,
        'real_estate_group' => false,
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
        'employee_id' => 'employeeId',
        'office_id' => 'officeId',
        'object_type_id' => 'objectTypeId',
        'project_id' => 'projectId',
        'construction_nr' => 'constructionNr',
        'real_estate_group' => 'realEstateGroup',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'office_id' => 'setOfficeId',
        'object_type_id' => 'setObjectTypeId',
        'project_id' => 'setProjectId',
        'construction_nr' => 'setConstructionNr',
        'real_estate_group' => 'setRealEstateGroup',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'office_id' => 'getOfficeId',
        'object_type_id' => 'getObjectTypeId',
        'project_id' => 'getProjectId',
        'construction_nr' => 'getConstructionNr',
        'real_estate_group' => 'getRealEstateGroup',
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('office_id', $data ?? [], null);
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('construction_nr', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
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

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['office_id'] === null) {
            $invalidProperties[] = "'office_id' can't be null";
        }
        if ((mb_strlen($this->container['office_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'office_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ((mb_strlen($this->container['object_type_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'object_type_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ((mb_strlen($this->container['project_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'project_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['construction_nr'] === null) {
            $invalidProperties[] = "'construction_nr' can't be null";
        }
        if ((mb_strlen($this->container['construction_nr']) < 1)) {
            $invalidProperties[] = "invalid value for 'construction_nr', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
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
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id The Id of the employee this assignment belongs to.
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }

        if ((mb_strlen($employee_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling ObjectAssignmentsDefineNewFromObjectTypeRequest., must be bigger than or equal to 1.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return string
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param string $office_id The Id of the office this assignment belongs to.
     *
     * @return self
     */
    public function setOfficeId($office_id)
    {
        if (is_null($office_id)) {
            throw new \InvalidArgumentException('non-nullable office_id cannot be null');
        }

        if ((mb_strlen($office_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $office_id when calling ObjectAssignmentsDefineNewFromObjectTypeRequest., must be bigger than or equal to 1.');
        }

        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets object_type_id
     *
     * @return string
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string $object_type_id The Id of the objectType this assignment belongs to.
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        if (is_null($object_type_id)) {
            throw new \InvalidArgumentException('non-nullable object_type_id cannot be null');
        }

        if ((mb_strlen($object_type_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object_type_id when calling ObjectAssignmentsDefineNewFromObjectTypeRequest., must be bigger than or equal to 1.');
        }

        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id The Id of the objectType this assignment belongs to.
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }

        if ((mb_strlen($project_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $project_id when calling ObjectAssignmentsDefineNewFromObjectTypeRequest., must be bigger than or equal to 1.');
        }

        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets construction_nr
     *
     * @return string
     */
    public function getConstructionNr()
    {
        return $this->container['construction_nr'];
    }

    /**
     * Sets construction_nr
     *
     * @param string $construction_nr The Id of the objectType this assignment belongs to.
     *
     * @return self
     */
    public function setConstructionNr($construction_nr)
    {
        if (is_null($construction_nr)) {
            throw new \InvalidArgumentException('non-nullable construction_nr cannot be null');
        }

        if ((mb_strlen($construction_nr) < 1)) {
            throw new \InvalidArgumentException('invalid length for $construction_nr when calling ObjectAssignmentsDefineNewFromObjectTypeRequest., must be bigger than or equal to 1.');
        }

        $this->container['construction_nr'] = $construction_nr;

        return $this;
    }

    /**
     * Gets real_estate_group
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup $real_estate_group The real estate group (Residential, Commercial, ...) of this Object Assignment.
     *
     * @return self
     */
    public function setRealEstateGroup($real_estate_group)
    {
        if (is_null($real_estate_group)) {
            throw new \InvalidArgumentException('non-nullable real_estate_group cannot be null');
        }
        $this->container['real_estate_group'] = $real_estate_group;

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
