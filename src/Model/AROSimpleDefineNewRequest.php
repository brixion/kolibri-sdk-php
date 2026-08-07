<?php

declare(strict_types=1);

/**
 * AROSimpleDefineNewRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AROSimpleDefineNewRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class AROSimpleDefineNewRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AROSimpleDefineNewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'action_type' => '\Brixion\Kolibri\Model\AroActionType',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
        'linked_assignment_id' => 'string',
        'linked_contact_person_id' => 'string',
        'linked_contact_company_id' => 'string',
        'linked_message_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'action_type' => null,
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
        'linked_assignment_id' => 'guid',
        'linked_contact_person_id' => 'guid',
        'linked_contact_company_id' => 'guid',
        'linked_message_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'action_type' => false,
        'start_date_time' => false,
        'end_date_time' => false,
        'linked_assignment_id' => false,
        'linked_contact_person_id' => false,
        'linked_contact_company_id' => false,
        'linked_message_id' => false,
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
        'action_type' => 'actionType',
        'start_date_time' => 'startDateTime',
        'end_date_time' => 'endDateTime',
        'linked_assignment_id' => 'linkedAssignmentId',
        'linked_contact_person_id' => 'linkedContactPersonId',
        'linked_contact_company_id' => 'linkedContactCompanyId',
        'linked_message_id' => 'linkedMessageId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
        'linked_assignment_id' => 'setLinkedAssignmentId',
        'linked_contact_person_id' => 'setLinkedContactPersonId',
        'linked_contact_company_id' => 'setLinkedContactCompanyId',
        'linked_message_id' => 'setLinkedMessageId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
        'linked_assignment_id' => 'getLinkedAssignmentId',
        'linked_contact_person_id' => 'getLinkedContactPersonId',
        'linked_contact_company_id' => 'getLinkedContactCompanyId',
        'linked_message_id' => 'getLinkedMessageId',
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
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('end_date_time', $data ?? [], null);
        $this->setIfExists('linked_assignment_id', $data ?? [], null);
        $this->setIfExists('linked_contact_person_id', $data ?? [], null);
        $this->setIfExists('linked_contact_company_id', $data ?? [], null);
        $this->setIfExists('linked_message_id', $data ?? [], null);
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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
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
     * Gets action_type
     *
     * @return \Brixion\Kolibri\Model\AroActionType
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \Brixion\Kolibri\Model\AroActionType $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime|null $start_date_time start_date_time
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        if (is_null($start_date_time)) {
            throw new \InvalidArgumentException('non-nullable start_date_time cannot be null');
        }
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime|null $end_date_time end_date_time
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        if (is_null($end_date_time)) {
            throw new \InvalidArgumentException('non-nullable end_date_time cannot be null');
        }
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets linked_assignment_id
     *
     * @return string|null
     */
    public function getLinkedAssignmentId()
    {
        return $this->container['linked_assignment_id'];
    }

    /**
     * Sets linked_assignment_id
     *
     * @param string|null $linked_assignment_id linked_assignment_id
     *
     * @return self
     */
    public function setLinkedAssignmentId($linked_assignment_id)
    {
        if (is_null($linked_assignment_id)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment_id cannot be null');
        }
        $this->container['linked_assignment_id'] = $linked_assignment_id;

        return $this;
    }

    /**
     * Gets linked_contact_person_id
     *
     * @return string|null
     */
    public function getLinkedContactPersonId()
    {
        return $this->container['linked_contact_person_id'];
    }

    /**
     * Sets linked_contact_person_id
     *
     * @param string|null $linked_contact_person_id linked_contact_person_id
     *
     * @return self
     */
    public function setLinkedContactPersonId($linked_contact_person_id)
    {
        if (is_null($linked_contact_person_id)) {
            throw new \InvalidArgumentException('non-nullable linked_contact_person_id cannot be null');
        }
        $this->container['linked_contact_person_id'] = $linked_contact_person_id;

        return $this;
    }

    /**
     * Gets linked_contact_company_id
     *
     * @return string|null
     */
    public function getLinkedContactCompanyId()
    {
        return $this->container['linked_contact_company_id'];
    }

    /**
     * Sets linked_contact_company_id
     *
     * @param string|null $linked_contact_company_id linked_contact_company_id
     *
     * @return self
     */
    public function setLinkedContactCompanyId($linked_contact_company_id)
    {
        if (is_null($linked_contact_company_id)) {
            throw new \InvalidArgumentException('non-nullable linked_contact_company_id cannot be null');
        }
        $this->container['linked_contact_company_id'] = $linked_contact_company_id;

        return $this;
    }

    /**
     * Gets linked_message_id
     *
     * @return string|null
     */
    public function getLinkedMessageId()
    {
        return $this->container['linked_message_id'];
    }

    /**
     * Sets linked_message_id
     *
     * @param string|null $linked_message_id linked_message_id
     *
     * @return self
     */
    public function setLinkedMessageId($linked_message_id)
    {
        if (is_null($linked_message_id)) {
            throw new \InvalidArgumentException('non-nullable linked_message_id cannot be null');
        }
        $this->container['linked_message_id'] = $linked_message_id;

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
