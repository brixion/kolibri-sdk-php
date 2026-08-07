<?php

declare(strict_types=1);

/**
 * EventHubMessage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * EventHubMessage.
 * @implements \ArrayAccess<string, mixed>
 */
class EventHubMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'EventHubMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'agency_id' => 'string',
        'id' => 'string',
        'stamp' => '\DateTime',
        'cat' => '\Brixion\Kolibri\Model\EventCategory',
        'reminder' => '\Brixion\Kolibri\Model\ReminderEventDetails',
        'msg' => '\Brixion\Kolibri\Model\MessageEventDetails',
        'pub' => '\Brixion\Kolibri\Model\PublicationEventDetails',
        'presence' => '\Brixion\Kolibri\Model\PresenceEventDetails',
        'entity' => '\Brixion\Kolibri\Model\EntityEventDetails',
        'usr' => '\Brixion\Kolibri\Model\UserDetails',
        'version' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'agency_id' => 'guid',
        'id' => 'guid',
        'stamp' => 'date-time',
        'cat' => null,
        'reminder' => null,
        'msg' => null,
        'pub' => null,
        'presence' => null,
        'entity' => null,
        'usr' => null,
        'version' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'agency_id' => false,
        'id' => false,
        'stamp' => false,
        'cat' => false,
        'reminder' => false,
        'msg' => false,
        'pub' => false,
        'presence' => false,
        'entity' => false,
        'usr' => false,
        'version' => false,
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
        'agency_id' => 'agencyId',
        'id' => 'id',
        'stamp' => 'stamp',
        'cat' => 'cat',
        'reminder' => 'reminder',
        'msg' => 'msg',
        'pub' => 'pub',
        'presence' => 'presence',
        'entity' => 'entity',
        'usr' => 'usr',
        'version' => 'version',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agency_id' => 'setAgencyId',
        'id' => 'setId',
        'stamp' => 'setStamp',
        'cat' => 'setCat',
        'reminder' => 'setReminder',
        'msg' => 'setMsg',
        'pub' => 'setPub',
        'presence' => 'setPresence',
        'entity' => 'setEntity',
        'usr' => 'setUsr',
        'version' => 'setVersion',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agency_id' => 'getAgencyId',
        'id' => 'getId',
        'stamp' => 'getStamp',
        'cat' => 'getCat',
        'reminder' => 'getReminder',
        'msg' => 'getMsg',
        'pub' => 'getPub',
        'presence' => 'getPresence',
        'entity' => 'getEntity',
        'usr' => 'getUsr',
        'version' => 'getVersion',
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
        $this->setIfExists('agency_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('stamp', $data ?? [], null);
        $this->setIfExists('cat', $data ?? [], null);
        $this->setIfExists('reminder', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('pub', $data ?? [], null);
        $this->setIfExists('presence', $data ?? [], null);
        $this->setIfExists('entity', $data ?? [], null);
        $this->setIfExists('usr', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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

        if ($this->container['agency_id'] === null) {
            $invalidProperties[] = "'agency_id' can't be null";
        }
        if ((mb_strlen($this->container['agency_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'agency_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['stamp'] === null) {
            $invalidProperties[] = "'stamp' can't be null";
        }
        if ($this->container['cat'] === null) {
            $invalidProperties[] = "'cat' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) < 1)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
     * Gets agency_id
     *
     * @return string
     */
    public function getAgencyId()
    {
        return $this->container['agency_id'];
    }

    /**
     * Sets agency_id
     *
     * @param string $agency_id agency_id
     *
     * @return self
     */
    public function setAgencyId($agency_id)
    {
        if (is_null($agency_id)) {
            throw new \InvalidArgumentException('non-nullable agency_id cannot be null');
        }

        if ((mb_strlen($agency_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $agency_id when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['agency_id'] = $agency_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->container['stamp'];
    }

    /**
     * Sets stamp
     *
     * @param \DateTime $stamp stamp
     *
     * @return self
     */
    public function setStamp($stamp)
    {
        if (is_null($stamp)) {
            throw new \InvalidArgumentException('non-nullable stamp cannot be null');
        }
        $this->container['stamp'] = $stamp;

        return $this;
    }

    /**
     * Gets cat
     *
     * @return \Brixion\Kolibri\Model\EventCategory
     */
    public function getCat()
    {
        return $this->container['cat'];
    }

    /**
     * Sets cat
     *
     * @param \Brixion\Kolibri\Model\EventCategory $cat cat
     *
     * @return self
     */
    public function setCat($cat)
    {
        if (is_null($cat)) {
            throw new \InvalidArgumentException('non-nullable cat cannot be null');
        }
        $this->container['cat'] = $cat;

        return $this;
    }

    /**
     * Gets reminder
     *
     * @return \Brixion\Kolibri\Model\ReminderEventDetails|null
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param \Brixion\Kolibri\Model\ReminderEventDetails|null $reminder reminder
     *
     * @return self
     */
    public function setReminder($reminder)
    {
        if (is_null($reminder)) {
            throw new \InvalidArgumentException('non-nullable reminder cannot be null');
        }
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return \Brixion\Kolibri\Model\MessageEventDetails|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param \Brixion\Kolibri\Model\MessageEventDetails|null $msg msg
     *
     * @return self
     */
    public function setMsg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets pub
     *
     * @return \Brixion\Kolibri\Model\PublicationEventDetails|null
     */
    public function getPub()
    {
        return $this->container['pub'];
    }

    /**
     * Sets pub
     *
     * @param \Brixion\Kolibri\Model\PublicationEventDetails|null $pub pub
     *
     * @return self
     */
    public function setPub($pub)
    {
        if (is_null($pub)) {
            throw new \InvalidArgumentException('non-nullable pub cannot be null');
        }
        $this->container['pub'] = $pub;

        return $this;
    }

    /**
     * Gets presence
     *
     * @return \Brixion\Kolibri\Model\PresenceEventDetails|null
     */
    public function getPresence()
    {
        return $this->container['presence'];
    }

    /**
     * Sets presence
     *
     * @param \Brixion\Kolibri\Model\PresenceEventDetails|null $presence presence
     *
     * @return self
     */
    public function setPresence($presence)
    {
        if (is_null($presence)) {
            throw new \InvalidArgumentException('non-nullable presence cannot be null');
        }
        $this->container['presence'] = $presence;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \Brixion\Kolibri\Model\EntityEventDetails|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \Brixion\Kolibri\Model\EntityEventDetails|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        if (is_null($entity)) {
            throw new \InvalidArgumentException('non-nullable entity cannot be null');
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets usr
     *
     * @return \Brixion\Kolibri\Model\UserDetails|null
     */
    public function getUsr()
    {
        return $this->container['usr'];
    }

    /**
     * Sets usr
     *
     * @param \Brixion\Kolibri\Model\UserDetails|null $usr usr
     *
     * @return self
     */
    public function setUsr($usr)
    {
        if (is_null($usr)) {
            throw new \InvalidArgumentException('non-nullable usr cannot be null');
        }
        $this->container['usr'] = $usr;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The Message Type version specifies the version of the format of the event message. When the version number is not equal to what is expected the format of this event message might be different. Each time the format of the EventMessage class is changed the version number is incremented.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        if ((mb_strlen($version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

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
