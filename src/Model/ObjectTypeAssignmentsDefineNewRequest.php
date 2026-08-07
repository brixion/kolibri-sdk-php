<?php

declare(strict_types=1);

/**
 * ObjectTypeAssignmentsDefineNewRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ObjectTypeAssignmentsDefineNewRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class ObjectTypeAssignmentsDefineNewRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ObjectTypeAssignmentsDefineNewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'employee_id' => 'string',
        'office_id' => 'string',
        'project_id' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'type_part' => '\Brixion\Kolibri\Model\TypePART',
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
        'project_id' => 'guid',
        'real_estate_group' => null,
        'type_part' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'employee_id' => false,
        'office_id' => false,
        'project_id' => false,
        'real_estate_group' => false,
        'type_part' => false,
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
        'project_id' => 'projectId',
        'real_estate_group' => 'realEstateGroup',
        'type_part' => 'typePART',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'office_id' => 'setOfficeId',
        'project_id' => 'setProjectId',
        'real_estate_group' => 'setRealEstateGroup',
        'type_part' => 'setTypePart',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'office_id' => 'getOfficeId',
        'project_id' => 'getProjectId',
        'real_estate_group' => 'getRealEstateGroup',
        'type_part' => 'getTypePart',
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
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('type_part', $data ?? [], null);
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

        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ((mb_strlen($this->container['project_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'project_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if ($this->container['type_part'] === null) {
            $invalidProperties[] = "'type_part' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $employee_id when calling ObjectTypeAssignmentsDefineNewRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $office_id when calling ObjectTypeAssignmentsDefineNewRequest., must be bigger than or equal to 1.');
        }

        $this->container['office_id'] = $office_id;

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
     * @param string $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }

        if ((mb_strlen($project_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $project_id when calling ObjectTypeAssignmentsDefineNewRequest., must be bigger than or equal to 1.');
        }

        $this->container['project_id'] = $project_id;

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
     * Gets type_part
     *
     * @return \Brixion\Kolibri\Model\TypePART
     */
    public function getTypePart()
    {
        return $this->container['type_part'];
    }

    /**
     * Sets type_part
     *
     * @param \Brixion\Kolibri\Model\TypePART $type_part type_part
     *
     * @return self
     */
    public function setTypePart($type_part)
    {
        if (is_null($type_part)) {
            throw new \InvalidArgumentException('non-nullable type_part cannot be null');
        }
        $this->container['type_part'] = $type_part;

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
