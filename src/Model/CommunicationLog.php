<?php

declare(strict_types=1);

/**
 * CommunicationLog - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLog.
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CommunicationLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date' => '\DateTime',
        'type' => '\Brixion\Kolibri\Model\CommunicationLogType',
        'sub_type' => '\Brixion\Kolibri\Model\CommunicationLogSubType',
        'direction' => '\Brixion\Kolibri\Model\CommunicationLogDirection',
        'subject' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'senders_email_addresses' => 'string[]',
        'receivers_email_addresses' => 'string[]',
        'cc_email_addresses' => 'string[]',
        'bcc_email_addresses' => 'string[]',
        'linked_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
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
        'date' => 'date-time',
        'type' => null,
        'sub_type' => null,
        'direction' => null,
        'subject' => null,
        'summary' => null,
        'description' => null,
        'senders_email_addresses' => null,
        'receivers_email_addresses' => null,
        'cc_email_addresses' => null,
        'bcc_email_addresses' => null,
        'linked_assignments' => null,
        'linked_relations' => null,
        'linked_employees' => null,
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
        'date' => false,
        'type' => false,
        'sub_type' => false,
        'direction' => false,
        'subject' => false,
        'summary' => false,
        'description' => false,
        'senders_email_addresses' => false,
        'receivers_email_addresses' => false,
        'cc_email_addresses' => false,
        'bcc_email_addresses' => false,
        'linked_assignments' => false,
        'linked_relations' => false,
        'linked_employees' => false,
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
        'date' => 'date',
        'type' => 'type',
        'sub_type' => 'subType',
        'direction' => 'direction',
        'subject' => 'subject',
        'summary' => 'summary',
        'description' => 'description',
        'senders_email_addresses' => 'sendersEmailAddresses',
        'receivers_email_addresses' => 'receiversEmailAddresses',
        'cc_email_addresses' => 'ccEmailAddresses',
        'bcc_email_addresses' => 'bccEmailAddresses',
        'linked_assignments' => 'linkedAssignments',
        'linked_relations' => 'linkedRelations',
        'linked_employees' => 'linkedEmployees',
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
        'date' => 'setDate',
        'type' => 'setType',
        'sub_type' => 'setSubType',
        'direction' => 'setDirection',
        'subject' => 'setSubject',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'senders_email_addresses' => 'setSendersEmailAddresses',
        'receivers_email_addresses' => 'setReceiversEmailAddresses',
        'cc_email_addresses' => 'setCcEmailAddresses',
        'bcc_email_addresses' => 'setBccEmailAddresses',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_relations' => 'setLinkedRelations',
        'linked_employees' => 'setLinkedEmployees',
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
        'date' => 'getDate',
        'type' => 'getType',
        'sub_type' => 'getSubType',
        'direction' => 'getDirection',
        'subject' => 'getSubject',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'senders_email_addresses' => 'getSendersEmailAddresses',
        'receivers_email_addresses' => 'getReceiversEmailAddresses',
        'cc_email_addresses' => 'getCcEmailAddresses',
        'bcc_email_addresses' => 'getBccEmailAddresses',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_relations' => 'getLinkedRelations',
        'linked_employees' => 'getLinkedEmployees',
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('sub_type', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('senders_email_addresses', $data ?? [], null);
        $this->setIfExists('receivers_email_addresses', $data ?? [], null);
        $this->setIfExists('cc_email_addresses', $data ?? [], null);
        $this->setIfExists('bcc_email_addresses', $data ?? [], null);
        $this->setIfExists('linked_assignments', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
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

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\CommunicationLogType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\CommunicationLogType $type type
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
     * Gets sub_type
     *
     * @return \Brixion\Kolibri\Model\CommunicationLogSubType|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param \Brixion\Kolibri\Model\CommunicationLogSubType|null $sub_type sub_type
     *
     * @return self
     */
    public function setSubType($sub_type)
    {
        if (is_null($sub_type)) {
            throw new \InvalidArgumentException('non-nullable sub_type cannot be null');
        }
        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \Brixion\Kolibri\Model\CommunicationLogDirection
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \Brixion\Kolibri\Model\CommunicationLogDirection $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            throw new \InvalidArgumentException('non-nullable direction cannot be null');
        }
        $this->container['direction'] = $direction;

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
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
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
     * Gets senders_email_addresses
     *
     * @return string[]|null
     */
    public function getSendersEmailAddresses()
    {
        return $this->container['senders_email_addresses'];
    }

    /**
     * Sets senders_email_addresses
     *
     * @param string[]|null $senders_email_addresses senders_email_addresses
     *
     * @return self
     */
    public function setSendersEmailAddresses($senders_email_addresses)
    {
        if (is_null($senders_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable senders_email_addresses cannot be null');
        }
        $this->container['senders_email_addresses'] = $senders_email_addresses;

        return $this;
    }

    /**
     * Gets receivers_email_addresses
     *
     * @return string[]|null
     */
    public function getReceiversEmailAddresses()
    {
        return $this->container['receivers_email_addresses'];
    }

    /**
     * Sets receivers_email_addresses
     *
     * @param string[]|null $receivers_email_addresses receivers_email_addresses
     *
     * @return self
     */
    public function setReceiversEmailAddresses($receivers_email_addresses)
    {
        if (is_null($receivers_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable receivers_email_addresses cannot be null');
        }
        $this->container['receivers_email_addresses'] = $receivers_email_addresses;

        return $this;
    }

    /**
     * Gets cc_email_addresses
     *
     * @return string[]|null
     */
    public function getCcEmailAddresses()
    {
        return $this->container['cc_email_addresses'];
    }

    /**
     * Sets cc_email_addresses
     *
     * @param string[]|null $cc_email_addresses cc_email_addresses
     *
     * @return self
     */
    public function setCcEmailAddresses($cc_email_addresses)
    {
        if (is_null($cc_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable cc_email_addresses cannot be null');
        }
        $this->container['cc_email_addresses'] = $cc_email_addresses;

        return $this;
    }

    /**
     * Gets bcc_email_addresses
     *
     * @return string[]|null
     */
    public function getBccEmailAddresses()
    {
        return $this->container['bcc_email_addresses'];
    }

    /**
     * Sets bcc_email_addresses
     *
     * @param string[]|null $bcc_email_addresses bcc_email_addresses
     *
     * @return self
     */
    public function setBccEmailAddresses($bcc_email_addresses)
    {
        if (is_null($bcc_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable bcc_email_addresses cannot be null');
        }
        $this->container['bcc_email_addresses'] = $bcc_email_addresses;

        return $this;
    }

    /**
     * Gets linked_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedAssignments()
    {
        return $this->container['linked_assignments'];
    }

    /**
     * Sets linked_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_assignments linked_assignments
     *
     * @return self
     */
    public function setLinkedAssignments($linked_assignments)
    {
        if (is_null($linked_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_assignments cannot be null');
        }
        $this->container['linked_assignments'] = $linked_assignments;

        return $this;
    }

    /**
     * Gets linked_relations
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_relations linked_relations
     *
     * @return self
     */
    public function setLinkedRelations($linked_relations)
    {
        if (is_null($linked_relations)) {
            throw new \InvalidArgumentException('non-nullable linked_relations cannot be null');
        }
        $this->container['linked_relations'] = $linked_relations;

        return $this;
    }

    /**
     * Gets linked_employees
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee[]|null
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee[]|null $linked_employees linked_employees
     *
     * @return self
     */
    public function setLinkedEmployees($linked_employees)
    {
        if (is_null($linked_employees)) {
            throw new \InvalidArgumentException('non-nullable linked_employees cannot be null');
        }
        $this->container['linked_employees'] = $linked_employees;

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
            throw new \InvalidArgumentException('invalid length for $id when calling CommunicationLog., must be bigger than or equal to 1.');
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
