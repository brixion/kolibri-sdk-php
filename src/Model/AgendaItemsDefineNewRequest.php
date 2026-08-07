<?php

declare(strict_types=1);

/**
 * AgendaItemsDefineNewRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemsDefineNewRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItemsDefineNewRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AgendaItemsDefineNewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'subject' => 'string',
        'all_day_event' => 'bool',
        'end_date_time' => '\DateTime',
        'linked_employee_ids' => 'string[]',
        'start_date_time' => '\DateTime',
        'linked_office_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'subject' => null,
        'all_day_event' => null,
        'end_date_time' => 'date-time',
        'linked_employee_ids' => 'guid',
        'start_date_time' => 'date-time',
        'linked_office_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'subject' => false,
        'all_day_event' => false,
        'end_date_time' => false,
        'linked_employee_ids' => false,
        'start_date_time' => false,
        'linked_office_id' => false,
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
        'subject' => 'subject',
        'all_day_event' => 'allDayEvent',
        'end_date_time' => 'endDateTime',
        'linked_employee_ids' => 'linkedEmployeeIds',
        'start_date_time' => 'startDateTime',
        'linked_office_id' => 'linkedOfficeId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'all_day_event' => 'setAllDayEvent',
        'end_date_time' => 'setEndDateTime',
        'linked_employee_ids' => 'setLinkedEmployeeIds',
        'start_date_time' => 'setStartDateTime',
        'linked_office_id' => 'setLinkedOfficeId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'all_day_event' => 'getAllDayEvent',
        'end_date_time' => 'getEndDateTime',
        'linked_employee_ids' => 'getLinkedEmployeeIds',
        'start_date_time' => 'getStartDateTime',
        'linked_office_id' => 'getLinkedOfficeId',
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
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('all_day_event', $data ?? [], null);
        $this->setIfExists('end_date_time', $data ?? [], null);
        $this->setIfExists('linked_employee_ids', $data ?? [], null);
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('linked_office_id', $data ?? [], null);
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

        if ($this->container['end_date_time'] === null) {
            $invalidProperties[] = "'end_date_time' can't be null";
        }
        if ($this->container['linked_employee_ids'] === null) {
            $invalidProperties[] = "'linked_employee_ids' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets all_day_event
     *
     * @return bool|null
     */
    public function getAllDayEvent()
    {
        return $this->container['all_day_event'];
    }

    /**
     * Sets all_day_event
     *
     * @param bool|null $all_day_event all_day_event
     *
     * @return self
     */
    public function setAllDayEvent($all_day_event)
    {
        if (is_null($all_day_event)) {
            throw new \InvalidArgumentException('non-nullable all_day_event cannot be null');
        }
        $this->container['all_day_event'] = $all_day_event;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time end_date_time
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
     * Gets linked_employee_ids
     *
     * @return string[]
     */
    public function getLinkedEmployeeIds()
    {
        return $this->container['linked_employee_ids'];
    }

    /**
     * Sets linked_employee_ids
     *
     * @param string[] $linked_employee_ids The attendee(s) of this agendaitem.
     *
     * @return self
     */
    public function setLinkedEmployeeIds($linked_employee_ids)
    {
        if (is_null($linked_employee_ids)) {
            throw new \InvalidArgumentException('non-nullable linked_employee_ids cannot be null');
        }
        $this->container['linked_employee_ids'] = $linked_employee_ids;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time start_date_time
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
     * Gets linked_office_id
     *
     * @return string|null
     */
    public function getLinkedOfficeId()
    {
        return $this->container['linked_office_id'];
    }

    /**
     * Sets linked_office_id
     *
     * @param string|null $linked_office_id linked_office_id
     *
     * @return self
     */
    public function setLinkedOfficeId($linked_office_id)
    {
        if (is_null($linked_office_id)) {
            throw new \InvalidArgumentException('non-nullable linked_office_id cannot be null');
        }
        $this->container['linked_office_id'] = $linked_office_id;

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
