<?php

declare(strict_types=1);

/**
 * Message - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Message.
 * @implements \ArrayAccess<string, mixed>
 */
class Message implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'has_been_read' => 'bool',
        'info_url' => 'string',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_relation' => '\Brixion\Kolibri\Model\LinkedRelation',
        'linked_media_contract' => '\Brixion\Kolibri\Model\LinkedMediaContract',
        'linked_search_assignment' => '\Brixion\Kolibri\Model\LinkedSearchAssignment',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'message_type' => '\Brixion\Kolibri\Model\MessageType',
        'region' => 'string',
        'sender' => 'string',
        'subject' => 'string',
        'content' => 'string',
        'date_time_sent' => '\DateTime',
        'user_data' => '\Brixion\Kolibri\Model\UserData',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'is_new' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
        'id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'has_been_read' => null,
        'info_url' => null,
        'linked_assignment' => null,
        'linked_relation' => null,
        'linked_media_contract' => null,
        'linked_search_assignment' => null,
        'linked_employee' => null,
        'message_type' => null,
        'region' => null,
        'sender' => null,
        'subject' => null,
        'content' => null,
        'date_time_sent' => 'date-time',
        'user_data' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'is_new' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'has_been_read' => false,
        'info_url' => false,
        'linked_assignment' => false,
        'linked_relation' => false,
        'linked_media_contract' => false,
        'linked_search_assignment' => false,
        'linked_employee' => false,
        'message_type' => false,
        'region' => false,
        'sender' => false,
        'subject' => false,
        'content' => false,
        'date_time_sent' => false,
        'user_data' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_active' => false,
        'is_new' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
        'id' => false,
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
        'has_been_read' => 'hasBeenRead',
        'info_url' => 'infoUrl',
        'linked_assignment' => 'linkedAssignment',
        'linked_relation' => 'linkedRelation',
        'linked_media_contract' => 'linkedMediaContract',
        'linked_search_assignment' => 'linkedSearchAssignment',
        'linked_employee' => 'linkedEmployee',
        'message_type' => 'messageType',
        'region' => 'region',
        'sender' => 'sender',
        'subject' => 'subject',
        'content' => 'content',
        'date_time_sent' => 'dateTimeSent',
        'user_data' => 'userData',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_active' => 'isActive',
        'is_new' => 'isNew',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_been_read' => 'setHasBeenRead',
        'info_url' => 'setInfoUrl',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_relation' => 'setLinkedRelation',
        'linked_media_contract' => 'setLinkedMediaContract',
        'linked_search_assignment' => 'setLinkedSearchAssignment',
        'linked_employee' => 'setLinkedEmployee',
        'message_type' => 'setMessageType',
        'region' => 'setRegion',
        'sender' => 'setSender',
        'subject' => 'setSubject',
        'content' => 'setContent',
        'date_time_sent' => 'setDateTimeSent',
        'user_data' => 'setUserData',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'is_new' => 'setIsNew',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_been_read' => 'getHasBeenRead',
        'info_url' => 'getInfoUrl',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_relation' => 'getLinkedRelation',
        'linked_media_contract' => 'getLinkedMediaContract',
        'linked_search_assignment' => 'getLinkedSearchAssignment',
        'linked_employee' => 'getLinkedEmployee',
        'message_type' => 'getMessageType',
        'region' => 'getRegion',
        'sender' => 'getSender',
        'subject' => 'getSubject',
        'content' => 'getContent',
        'date_time_sent' => 'getDateTimeSent',
        'user_data' => 'getUserData',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'is_new' => 'getIsNew',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'id' => 'getId',
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
        $this->setIfExists('has_been_read', $data ?? [], null);
        $this->setIfExists('info_url', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_relation', $data ?? [], null);
        $this->setIfExists('linked_media_contract', $data ?? [], null);
        $this->setIfExists('linked_search_assignment', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
        $this->setIfExists('message_type', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('date_time_sent', $data ?? [], null);
        $this->setIfExists('user_data', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['has_been_read'] === null) {
            $invalidProperties[] = "'has_been_read' can't be null";
        }
        if ($this->container['message_type'] === null) {
            $invalidProperties[] = "'message_type' can't be null";
        }
        if ($this->container['date_time_sent'] === null) {
            $invalidProperties[] = "'date_time_sent' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalidProperties[] = "'is_new' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
     * Gets has_been_read
     *
     * @return bool
     */
    public function getHasBeenRead()
    {
        return $this->container['has_been_read'];
    }

    /**
     * Sets has_been_read
     *
     * @param bool $has_been_read has_been_read
     *
     * @return self
     */
    public function setHasBeenRead($has_been_read)
    {
        if (is_null($has_been_read)) {
            throw new \InvalidArgumentException('non-nullable has_been_read cannot be null');
        }
        $this->container['has_been_read'] = $has_been_read;

        return $this;
    }

    /**
     * Gets info_url
     *
     * @return string|null
     */
    public function getInfoUrl()
    {
        return $this->container['info_url'];
    }

    /**
     * Sets info_url
     *
     * @param string|null $info_url info_url
     *
     * @return self
     */
    public function setInfoUrl($info_url)
    {
        if (is_null($info_url)) {
            throw new \InvalidArgumentException('non-nullable info_url cannot be null');
        }
        $this->container['info_url'] = $info_url;

        return $this;
    }

    /**
     * Gets linked_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_assignment linked_assignment
     *
     * @return self
     */
    public function setLinkedAssignment($linked_assignment)
    {
        if (is_null($linked_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment cannot be null');
        }
        $this->container['linked_assignment'] = $linked_assignment;

        return $this;
    }

    /**
     * Gets linked_relation
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation|null
     */
    public function getLinkedRelation()
    {
        return $this->container['linked_relation'];
    }

    /**
     * Sets linked_relation
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation|null $linked_relation linked_relation
     *
     * @return self
     */
    public function setLinkedRelation($linked_relation)
    {
        if (is_null($linked_relation)) {
            throw new \InvalidArgumentException('non-nullable linked_relation cannot be null');
        }
        $this->container['linked_relation'] = $linked_relation;

        return $this;
    }

    /**
     * Gets linked_media_contract
     *
     * @return \Brixion\Kolibri\Model\LinkedMediaContract|null
     */
    public function getLinkedMediaContract()
    {
        return $this->container['linked_media_contract'];
    }

    /**
     * Sets linked_media_contract
     *
     * @param \Brixion\Kolibri\Model\LinkedMediaContract|null $linked_media_contract linked_media_contract
     *
     * @return self
     */
    public function setLinkedMediaContract($linked_media_contract)
    {
        if (is_null($linked_media_contract)) {
            throw new \InvalidArgumentException('non-nullable linked_media_contract cannot be null');
        }
        $this->container['linked_media_contract'] = $linked_media_contract;

        return $this;
    }

    /**
     * Gets linked_search_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedSearchAssignment|null
     */
    public function getLinkedSearchAssignment()
    {
        return $this->container['linked_search_assignment'];
    }

    /**
     * Sets linked_search_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedSearchAssignment|null $linked_search_assignment linked_search_assignment
     *
     * @return self
     */
    public function setLinkedSearchAssignment($linked_search_assignment)
    {
        if (is_null($linked_search_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_search_assignment cannot be null');
        }
        $this->container['linked_search_assignment'] = $linked_search_assignment;

        return $this;
    }

    /**
     * Gets linked_employee
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_employee linked_employee
     *
     * @return self
     */
    public function setLinkedEmployee($linked_employee)
    {
        if (is_null($linked_employee)) {
            throw new \InvalidArgumentException('non-nullable linked_employee cannot be null');
        }
        $this->container['linked_employee'] = $linked_employee;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return \Brixion\Kolibri\Model\MessageType
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \Brixion\Kolibri\Model\MessageType $message_type message_type
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        if (is_null($message_type)) {
            throw new \InvalidArgumentException('non-nullable message_type cannot be null');
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
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
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets date_time_sent
     *
     * @return \DateTime
     */
    public function getDateTimeSent()
    {
        return $this->container['date_time_sent'];
    }

    /**
     * Sets date_time_sent
     *
     * @param \DateTime $date_time_sent date_time_sent
     *
     * @return self
     */
    public function setDateTimeSent($date_time_sent)
    {
        if (is_null($date_time_sent)) {
            throw new \InvalidArgumentException('non-nullable date_time_sent cannot be null');
        }
        $this->container['date_time_sent'] = $date_time_sent;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return \Brixion\Kolibri\Model\UserData|null
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param \Brixion\Kolibri\Model\UserData|null $user_data user_data
     *
     * @return self
     */
    public function setUserData($user_data)
    {
        if (is_null($user_data)) {
            throw new \InvalidArgumentException('non-nullable user_data cannot be null');
        }
        $this->container['user_data'] = $user_data;

        return $this;
    }

    /**
     * Gets date_time_created
     *
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime $date_time_created date_time_created
     *
     * @return self
     */
    public function setDateTimeCreated($date_time_created)
    {
        if (is_null($date_time_created)) {
            throw new \InvalidArgumentException('non-nullable date_time_created cannot be null');
        }
        $this->container['date_time_created'] = $date_time_created;

        return $this;
    }

    /**
     * Gets date_time_modified
     *
     * @return \DateTime
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime $date_time_modified date_time_modified
     *
     * @return self
     */
    public function setDateTimeModified($date_time_modified)
    {
        if (is_null($date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable date_time_modified cannot be null');
        }
        $this->container['date_time_modified'] = $date_time_modified;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_new
     *
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool $is_new is_new
     *
     * @return self
     */
    public function setIsNew($is_new)
    {
        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets linked_created_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedCreatedBy()
    {
        return $this->container['linked_created_by'];
    }

    /**
     * Sets linked_created_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_created_by linked_created_by
     *
     * @return self
     */
    public function setLinkedCreatedBy($linked_created_by)
    {
        if (is_null($linked_created_by)) {
            throw new \InvalidArgumentException('non-nullable linked_created_by cannot be null');
        }
        $this->container['linked_created_by'] = $linked_created_by;

        return $this;
    }

    /**
     * Gets linked_modified_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedModifiedBy()
    {
        return $this->container['linked_modified_by'];
    }

    /**
     * Sets linked_modified_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_modified_by linked_modified_by
     *
     * @return self
     */
    public function setLinkedModifiedBy($linked_modified_by)
    {
        if (is_null($linked_modified_by)) {
            throw new \InvalidArgumentException('non-nullable linked_modified_by cannot be null');
        }
        $this->container['linked_modified_by'] = $linked_modified_by;

        return $this;
    }

    /**
     * Gets real_estate_agency_id
     *
     * @return string
     */
    public function getRealEstateAgencyId()
    {
        return $this->container['real_estate_agency_id'];
    }

    /**
     * Sets real_estate_agency_id
     *
     * @param string $real_estate_agency_id real_estate_agency_id
     *
     * @return self
     */
    public function setRealEstateAgencyId($real_estate_agency_id)
    {
        if (is_null($real_estate_agency_id)) {
            throw new \InvalidArgumentException('non-nullable real_estate_agency_id cannot be null');
        }
        $this->container['real_estate_agency_id'] = $real_estate_agency_id;

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
            throw new \InvalidArgumentException('invalid length for $id when calling Message., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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
