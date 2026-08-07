<?php

declare(strict_types=1);

/**
 * MessageSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MessageSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class MessageSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MessageSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_city' => 'string',
        'assignment_house_number' => 'string',
        'assignment_street_name' => 'string',
        'city' => 'string',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'email_address' => 'string',
        'first_name' => 'string',
        'gender' => '\Brixion\Kolibri\Model\Gender',
        'has_been_read' => 'bool',
        'house_number' => 'int',
        'info_url' => 'string',
        'last_name' => 'string',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_relation' => '\Brixion\Kolibri\Model\LinkedRelation',
        'linked_media_contract' => '\Brixion\Kolibri\Model\LinkedMediaContract',
        'linked_search_assignment' => '\Brixion\Kolibri\Model\LinkedSearchAssignment',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'message_type' => '\Brixion\Kolibri\Model\MessageType',
        'mobile_phone_number' => 'string',
        'phone_number' => 'string',
        'postal_code' => 'string',
        'real_estate_agency_id' => 'string',
        'region' => 'string',
        'sender' => 'string',
        'street_name' => 'string',
        'subject' => 'string',
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
        'assignment_city' => null,
        'assignment_house_number' => null,
        'assignment_street_name' => null,
        'city' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'email_address' => null,
        'first_name' => null,
        'gender' => null,
        'has_been_read' => null,
        'house_number' => 'int32',
        'info_url' => null,
        'last_name' => null,
        'linked_assignment' => null,
        'linked_relation' => null,
        'linked_media_contract' => null,
        'linked_search_assignment' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'message_type' => null,
        'mobile_phone_number' => null,
        'phone_number' => null,
        'postal_code' => null,
        'real_estate_agency_id' => 'guid',
        'region' => null,
        'sender' => null,
        'street_name' => null,
        'subject' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'assignment_city' => false,
        'assignment_house_number' => false,
        'assignment_street_name' => false,
        'city' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'email_address' => false,
        'first_name' => false,
        'gender' => false,
        'has_been_read' => false,
        'house_number' => false,
        'info_url' => false,
        'last_name' => false,
        'linked_assignment' => false,
        'linked_relation' => false,
        'linked_media_contract' => false,
        'linked_search_assignment' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'message_type' => false,
        'mobile_phone_number' => false,
        'phone_number' => false,
        'postal_code' => false,
        'real_estate_agency_id' => false,
        'region' => false,
        'sender' => false,
        'street_name' => false,
        'subject' => false,
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
        'assignment_city' => 'assignmentCity',
        'assignment_house_number' => 'assignmentHouseNumber',
        'assignment_street_name' => 'assignmentStreetName',
        'city' => 'city',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'email_address' => 'emailAddress',
        'first_name' => 'firstName',
        'gender' => 'gender',
        'has_been_read' => 'hasBeenRead',
        'house_number' => 'houseNumber',
        'info_url' => 'infoUrl',
        'last_name' => 'lastName',
        'linked_assignment' => 'linkedAssignment',
        'linked_relation' => 'linkedRelation',
        'linked_media_contract' => 'linkedMediaContract',
        'linked_search_assignment' => 'linkedSearchAssignment',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'message_type' => 'messageType',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'phone_number' => 'phoneNumber',
        'postal_code' => 'postalCode',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'region' => 'region',
        'sender' => 'sender',
        'street_name' => 'streetName',
        'subject' => 'subject',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_city' => 'setAssignmentCity',
        'assignment_house_number' => 'setAssignmentHouseNumber',
        'assignment_street_name' => 'setAssignmentStreetName',
        'city' => 'setCity',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'email_address' => 'setEmailAddress',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'has_been_read' => 'setHasBeenRead',
        'house_number' => 'setHouseNumber',
        'info_url' => 'setInfoUrl',
        'last_name' => 'setLastName',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_relation' => 'setLinkedRelation',
        'linked_media_contract' => 'setLinkedMediaContract',
        'linked_search_assignment' => 'setLinkedSearchAssignment',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'message_type' => 'setMessageType',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'phone_number' => 'setPhoneNumber',
        'postal_code' => 'setPostalCode',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'region' => 'setRegion',
        'sender' => 'setSender',
        'street_name' => 'setStreetName',
        'subject' => 'setSubject',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_city' => 'getAssignmentCity',
        'assignment_house_number' => 'getAssignmentHouseNumber',
        'assignment_street_name' => 'getAssignmentStreetName',
        'city' => 'getCity',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'email_address' => 'getEmailAddress',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'has_been_read' => 'getHasBeenRead',
        'house_number' => 'getHouseNumber',
        'info_url' => 'getInfoUrl',
        'last_name' => 'getLastName',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_relation' => 'getLinkedRelation',
        'linked_media_contract' => 'getLinkedMediaContract',
        'linked_search_assignment' => 'getLinkedSearchAssignment',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'message_type' => 'getMessageType',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'phone_number' => 'getPhoneNumber',
        'postal_code' => 'getPostalCode',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'region' => 'getRegion',
        'sender' => 'getSender',
        'street_name' => 'getStreetName',
        'subject' => 'getSubject',
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
        $this->setIfExists('assignment_city', $data ?? [], null);
        $this->setIfExists('assignment_house_number', $data ?? [], null);
        $this->setIfExists('assignment_street_name', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('has_been_read', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('info_url', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_relation', $data ?? [], null);
        $this->setIfExists('linked_media_contract', $data ?? [], null);
        $this->setIfExists('linked_search_assignment', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('message_type', $data ?? [], null);
        $this->setIfExists('mobile_phone_number', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
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

        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['has_been_read'] === null) {
            $invalidProperties[] = "'has_been_read' can't be null";
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
     * Gets assignment_city
     *
     * @return string|null
     */
    public function getAssignmentCity()
    {
        return $this->container['assignment_city'];
    }

    /**
     * Sets assignment_city
     *
     * @param string|null $assignment_city assignment_city
     *
     * @return self
     */
    public function setAssignmentCity($assignment_city)
    {
        if (is_null($assignment_city)) {
            throw new \InvalidArgumentException('non-nullable assignment_city cannot be null');
        }
        $this->container['assignment_city'] = $assignment_city;

        return $this;
    }

    /**
     * Gets assignment_house_number
     *
     * @return string|null
     */
    public function getAssignmentHouseNumber()
    {
        return $this->container['assignment_house_number'];
    }

    /**
     * Sets assignment_house_number
     *
     * @param string|null $assignment_house_number assignment_house_number
     *
     * @return self
     */
    public function setAssignmentHouseNumber($assignment_house_number)
    {
        if (is_null($assignment_house_number)) {
            throw new \InvalidArgumentException('non-nullable assignment_house_number cannot be null');
        }
        $this->container['assignment_house_number'] = $assignment_house_number;

        return $this;
    }

    /**
     * Gets assignment_street_name
     *
     * @return string|null
     */
    public function getAssignmentStreetName()
    {
        return $this->container['assignment_street_name'];
    }

    /**
     * Sets assignment_street_name
     *
     * @param string|null $assignment_street_name assignment_street_name
     *
     * @return self
     */
    public function setAssignmentStreetName($assignment_street_name)
    {
        if (is_null($assignment_street_name)) {
            throw new \InvalidArgumentException('non-nullable assignment_street_name cannot be null');
        }
        $this->container['assignment_street_name'] = $assignment_street_name;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

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
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Brixion\Kolibri\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Brixion\Kolibri\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
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
     * Gets house_number
     *
     * @return int|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int|null $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            throw new \InvalidArgumentException('non-nullable house_number cannot be null');
        }
        $this->container['house_number'] = $house_number;

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
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

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
     * Gets message_type
     *
     * @return \Brixion\Kolibri\Model\MessageType|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \Brixion\Kolibri\Model\MessageType|null $message_type message_type
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
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number mobile_phone_number
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        if (is_null($mobile_phone_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone_number cannot be null');
        }
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

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
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            throw new \InvalidArgumentException('non-nullable street_name cannot be null');
        }
        $this->container['street_name'] = $street_name;

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
            throw new \InvalidArgumentException('invalid length for $id when calling MessageSnapShot., must be bigger than or equal to 1.');
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
