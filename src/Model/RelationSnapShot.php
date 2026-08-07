<?php

declare(strict_types=1);

/**
 * RelationSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class RelationSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'RelationSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'avatar_url' => 'string',
        'date_of_birth' => '\DateTime',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'display_name' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'nick_name' => 'string',
        'email' => 'string',
        'second_email_address' => 'string',
        'third_email_address' => 'string',
        'is_active' => 'bool',
        'is_main_office' => 'bool',
        'last_contact' => '\DateTime',
        'letter_avatar' => 'string',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_offices' => '\Brixion\Kolibri\Model\LinkedOffice[]',
        'linked_relation_groups' => '\Brixion\Kolibri\Model\LinkedRelationGroup[]',
        'linked_partner' => '\Brixion\Kolibri\Model\LinkedPartner',
        'linked_vendor_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_applicant_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_notary_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'locality' => 'string',
        'non_capitalized_locality' => 'string',
        'mobile_number' => 'string',
        'phone_number' => 'string',
        'street_name_and_number' => 'string',
        'postal_code' => 'string',
        'type_of_relation' => '\Brixion\Kolibri\Model\RelationType',
        'upcoming_birthday' => '\DateTime',
        'employee_role' => '\Brixion\Kolibri\Model\EmployeeRole',
        'future_street_name_and_number' => 'string',
        'future_postal_code' => 'string',
        'future_locality' => 'string',
        'gender' => '\Brixion\Kolibri\Model\Gender',
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
        'avatar_url' => null,
        'date_of_birth' => 'date-time',
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'display_name' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'nick_name' => null,
        'email' => null,
        'second_email_address' => null,
        'third_email_address' => null,
        'is_active' => null,
        'is_main_office' => null,
        'last_contact' => 'date-time',
        'letter_avatar' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'linked_offices' => null,
        'linked_relation_groups' => null,
        'linked_partner' => null,
        'linked_vendor_assignments' => null,
        'linked_applicant_assignments' => null,
        'linked_notary_assignments' => null,
        'locality' => null,
        'non_capitalized_locality' => null,
        'mobile_number' => null,
        'phone_number' => null,
        'street_name_and_number' => null,
        'postal_code' => null,
        'type_of_relation' => null,
        'upcoming_birthday' => 'date-time',
        'employee_role' => null,
        'future_street_name_and_number' => null,
        'future_postal_code' => null,
        'future_locality' => null,
        'gender' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'avatar_url' => false,
        'date_of_birth' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'display_name' => false,
        'first_name' => false,
        'middle_name' => false,
        'last_name' => false,
        'nick_name' => false,
        'email' => false,
        'second_email_address' => false,
        'third_email_address' => false,
        'is_active' => false,
        'is_main_office' => false,
        'last_contact' => false,
        'letter_avatar' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'linked_offices' => false,
        'linked_relation_groups' => false,
        'linked_partner' => false,
        'linked_vendor_assignments' => false,
        'linked_applicant_assignments' => false,
        'linked_notary_assignments' => false,
        'locality' => false,
        'non_capitalized_locality' => false,
        'mobile_number' => false,
        'phone_number' => false,
        'street_name_and_number' => false,
        'postal_code' => false,
        'type_of_relation' => false,
        'upcoming_birthday' => false,
        'employee_role' => false,
        'future_street_name_and_number' => false,
        'future_postal_code' => false,
        'future_locality' => false,
        'gender' => false,
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
        'avatar_url' => 'avatarUrl',
        'date_of_birth' => 'dateOfBirth',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'display_name' => 'displayName',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'nick_name' => 'nickName',
        'email' => 'email',
        'second_email_address' => 'secondEmailAddress',
        'third_email_address' => 'thirdEmailAddress',
        'is_active' => 'isActive',
        'is_main_office' => 'isMainOffice',
        'last_contact' => 'lastContact',
        'letter_avatar' => 'letterAvatar',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_offices' => 'linkedOffices',
        'linked_relation_groups' => 'linkedRelationGroups',
        'linked_partner' => 'linkedPartner',
        'linked_vendor_assignments' => 'linkedVendorAssignments',
        'linked_applicant_assignments' => 'linkedApplicantAssignments',
        'linked_notary_assignments' => 'linkedNotaryAssignments',
        'locality' => 'locality',
        'non_capitalized_locality' => 'nonCapitalizedLocality',
        'mobile_number' => 'mobileNumber',
        'phone_number' => 'phoneNumber',
        'street_name_and_number' => 'streetNameAndNumber',
        'postal_code' => 'postalCode',
        'type_of_relation' => 'typeOfRelation',
        'upcoming_birthday' => 'upcomingBirthday',
        'employee_role' => 'employeeRole',
        'future_street_name_and_number' => 'futureStreetNameAndNumber',
        'future_postal_code' => 'futurePostalCode',
        'future_locality' => 'futureLocality',
        'gender' => 'gender',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'date_of_birth' => 'setDateOfBirth',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'display_name' => 'setDisplayName',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'nick_name' => 'setNickName',
        'email' => 'setEmail',
        'second_email_address' => 'setSecondEmailAddress',
        'third_email_address' => 'setThirdEmailAddress',
        'is_active' => 'setIsActive',
        'is_main_office' => 'setIsMainOffice',
        'last_contact' => 'setLastContact',
        'letter_avatar' => 'setLetterAvatar',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_offices' => 'setLinkedOffices',
        'linked_relation_groups' => 'setLinkedRelationGroups',
        'linked_partner' => 'setLinkedPartner',
        'linked_vendor_assignments' => 'setLinkedVendorAssignments',
        'linked_applicant_assignments' => 'setLinkedApplicantAssignments',
        'linked_notary_assignments' => 'setLinkedNotaryAssignments',
        'locality' => 'setLocality',
        'non_capitalized_locality' => 'setNonCapitalizedLocality',
        'mobile_number' => 'setMobileNumber',
        'phone_number' => 'setPhoneNumber',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'postal_code' => 'setPostalCode',
        'type_of_relation' => 'setTypeOfRelation',
        'upcoming_birthday' => 'setUpcomingBirthday',
        'employee_role' => 'setEmployeeRole',
        'future_street_name_and_number' => 'setFutureStreetNameAndNumber',
        'future_postal_code' => 'setFuturePostalCode',
        'future_locality' => 'setFutureLocality',
        'gender' => 'setGender',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'date_of_birth' => 'getDateOfBirth',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'display_name' => 'getDisplayName',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'nick_name' => 'getNickName',
        'email' => 'getEmail',
        'second_email_address' => 'getSecondEmailAddress',
        'third_email_address' => 'getThirdEmailAddress',
        'is_active' => 'getIsActive',
        'is_main_office' => 'getIsMainOffice',
        'last_contact' => 'getLastContact',
        'letter_avatar' => 'getLetterAvatar',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_offices' => 'getLinkedOffices',
        'linked_relation_groups' => 'getLinkedRelationGroups',
        'linked_partner' => 'getLinkedPartner',
        'linked_vendor_assignments' => 'getLinkedVendorAssignments',
        'linked_applicant_assignments' => 'getLinkedApplicantAssignments',
        'linked_notary_assignments' => 'getLinkedNotaryAssignments',
        'locality' => 'getLocality',
        'non_capitalized_locality' => 'getNonCapitalizedLocality',
        'mobile_number' => 'getMobileNumber',
        'phone_number' => 'getPhoneNumber',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'postal_code' => 'getPostalCode',
        'type_of_relation' => 'getTypeOfRelation',
        'upcoming_birthday' => 'getUpcomingBirthday',
        'employee_role' => 'getEmployeeRole',
        'future_street_name_and_number' => 'getFutureStreetNameAndNumber',
        'future_postal_code' => 'getFuturePostalCode',
        'future_locality' => 'getFutureLocality',
        'gender' => 'getGender',
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
        $this->setIfExists('avatar_url', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('nick_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('second_email_address', $data ?? [], null);
        $this->setIfExists('third_email_address', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_main_office', $data ?? [], null);
        $this->setIfExists('last_contact', $data ?? [], null);
        $this->setIfExists('letter_avatar', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('linked_offices', $data ?? [], null);
        $this->setIfExists('linked_relation_groups', $data ?? [], null);
        $this->setIfExists('linked_partner', $data ?? [], null);
        $this->setIfExists('linked_vendor_assignments', $data ?? [], null);
        $this->setIfExists('linked_applicant_assignments', $data ?? [], null);
        $this->setIfExists('linked_notary_assignments', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('non_capitalized_locality', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('street_name_and_number', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('type_of_relation', $data ?? [], null);
        $this->setIfExists('upcoming_birthday', $data ?? [], null);
        $this->setIfExists('employee_role', $data ?? [], null);
        $this->setIfExists('future_street_name_and_number', $data ?? [], null);
        $this->setIfExists('future_postal_code', $data ?? [], null);
        $this->setIfExists('future_locality', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
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
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['type_of_relation'] === null) {
            $invalidProperties[] = "'type_of_relation' can't be null";
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
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url avatar_url
     *
     * @return self
     */
    public function setAvatarUrl($avatar_url)
    {
        if (is_null($avatar_url)) {
            throw new \InvalidArgumentException('non-nullable avatar_url cannot be null');
        }
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

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
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

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
     * Gets nick_name
     *
     * @return string|null
     */
    public function getNickName()
    {
        return $this->container['nick_name'];
    }

    /**
     * Sets nick_name
     *
     * @param string|null $nick_name nick_name
     *
     * @return self
     */
    public function setNickName($nick_name)
    {
        if (is_null($nick_name)) {
            throw new \InvalidArgumentException('non-nullable nick_name cannot be null');
        }
        $this->container['nick_name'] = $nick_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets second_email_address
     *
     * @return string|null
     */
    public function getSecondEmailAddress()
    {
        return $this->container['second_email_address'];
    }

    /**
     * Sets second_email_address
     *
     * @param string|null $second_email_address second_email_address
     *
     * @return self
     */
    public function setSecondEmailAddress($second_email_address)
    {
        if (is_null($second_email_address)) {
            throw new \InvalidArgumentException('non-nullable second_email_address cannot be null');
        }
        $this->container['second_email_address'] = $second_email_address;

        return $this;
    }

    /**
     * Gets third_email_address
     *
     * @return string|null
     */
    public function getThirdEmailAddress()
    {
        return $this->container['third_email_address'];
    }

    /**
     * Sets third_email_address
     *
     * @param string|null $third_email_address third_email_address
     *
     * @return self
     */
    public function setThirdEmailAddress($third_email_address)
    {
        if (is_null($third_email_address)) {
            throw new \InvalidArgumentException('non-nullable third_email_address cannot be null');
        }
        $this->container['third_email_address'] = $third_email_address;

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
     * Gets is_main_office
     *
     * @return bool|null
     */
    public function getIsMainOffice()
    {
        return $this->container['is_main_office'];
    }

    /**
     * Sets is_main_office
     *
     * @param bool|null $is_main_office is_main_office
     *
     * @return self
     */
    public function setIsMainOffice($is_main_office)
    {
        if (is_null($is_main_office)) {
            throw new \InvalidArgumentException('non-nullable is_main_office cannot be null');
        }
        $this->container['is_main_office'] = $is_main_office;

        return $this;
    }

    /**
     * Gets last_contact
     *
     * @return \DateTime|null
     */
    public function getLastContact()
    {
        return $this->container['last_contact'];
    }

    /**
     * Sets last_contact
     *
     * @param \DateTime|null $last_contact last_contact
     *
     * @return self
     */
    public function setLastContact($last_contact)
    {
        if (is_null($last_contact)) {
            throw new \InvalidArgumentException('non-nullable last_contact cannot be null');
        }
        $this->container['last_contact'] = $last_contact;

        return $this;
    }

    /**
     * Gets letter_avatar
     *
     * @return string|null
     */
    public function getLetterAvatar()
    {
        return $this->container['letter_avatar'];
    }

    /**
     * Sets letter_avatar
     *
     * @param string|null $letter_avatar letter_avatar
     *
     * @return self
     */
    public function setLetterAvatar($letter_avatar)
    {
        if (is_null($letter_avatar)) {
            throw new \InvalidArgumentException('non-nullable letter_avatar cannot be null');
        }
        $this->container['letter_avatar'] = $letter_avatar;

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
     * Gets linked_offices
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice[]|null
     */
    public function getLinkedOffices()
    {
        return $this->container['linked_offices'];
    }

    /**
     * Sets linked_offices
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice[]|null $linked_offices linked_offices
     *
     * @return self
     */
    public function setLinkedOffices($linked_offices)
    {
        if (is_null($linked_offices)) {
            throw new \InvalidArgumentException('non-nullable linked_offices cannot be null');
        }
        $this->container['linked_offices'] = $linked_offices;

        return $this;
    }

    /**
     * Gets linked_relation_groups
     *
     * @return \Brixion\Kolibri\Model\LinkedRelationGroup[]|null
     */
    public function getLinkedRelationGroups()
    {
        return $this->container['linked_relation_groups'];
    }

    /**
     * Sets linked_relation_groups
     *
     * @param \Brixion\Kolibri\Model\LinkedRelationGroup[]|null $linked_relation_groups linked_relation_groups
     *
     * @return self
     */
    public function setLinkedRelationGroups($linked_relation_groups)
    {
        if (is_null($linked_relation_groups)) {
            throw new \InvalidArgumentException('non-nullable linked_relation_groups cannot be null');
        }
        $this->container['linked_relation_groups'] = $linked_relation_groups;

        return $this;
    }

    /**
     * Gets linked_partner
     *
     * @return \Brixion\Kolibri\Model\LinkedPartner|null
     */
    public function getLinkedPartner()
    {
        return $this->container['linked_partner'];
    }

    /**
     * Sets linked_partner
     *
     * @param \Brixion\Kolibri\Model\LinkedPartner|null $linked_partner linked_partner
     *
     * @return self
     */
    public function setLinkedPartner($linked_partner)
    {
        if (is_null($linked_partner)) {
            throw new \InvalidArgumentException('non-nullable linked_partner cannot be null');
        }
        $this->container['linked_partner'] = $linked_partner;

        return $this;
    }

    /**
     * Gets linked_vendor_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedVendorAssignments()
    {
        return $this->container['linked_vendor_assignments'];
    }

    /**
     * Sets linked_vendor_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_vendor_assignments linked_vendor_assignments
     *
     * @return self
     */
    public function setLinkedVendorAssignments($linked_vendor_assignments)
    {
        if (is_null($linked_vendor_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_vendor_assignments cannot be null');
        }
        $this->container['linked_vendor_assignments'] = $linked_vendor_assignments;

        return $this;
    }

    /**
     * Gets linked_applicant_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedApplicantAssignments()
    {
        return $this->container['linked_applicant_assignments'];
    }

    /**
     * Sets linked_applicant_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_applicant_assignments linked_applicant_assignments
     *
     * @return self
     */
    public function setLinkedApplicantAssignments($linked_applicant_assignments)
    {
        if (is_null($linked_applicant_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_applicant_assignments cannot be null');
        }
        $this->container['linked_applicant_assignments'] = $linked_applicant_assignments;

        return $this;
    }

    /**
     * Gets linked_notary_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedNotaryAssignments()
    {
        return $this->container['linked_notary_assignments'];
    }

    /**
     * Sets linked_notary_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_notary_assignments linked_notary_assignments
     *
     * @return self
     */
    public function setLinkedNotaryAssignments($linked_notary_assignments)
    {
        if (is_null($linked_notary_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_notary_assignments cannot be null');
        }
        $this->container['linked_notary_assignments'] = $linked_notary_assignments;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets non_capitalized_locality
     *
     * @return string|null
     */
    public function getNonCapitalizedLocality()
    {
        return $this->container['non_capitalized_locality'];
    }

    /**
     * Sets non_capitalized_locality
     *
     * @param string|null $non_capitalized_locality non_capitalized_locality
     *
     * @return self
     */
    public function setNonCapitalizedLocality($non_capitalized_locality)
    {
        if (is_null($non_capitalized_locality)) {
            throw new \InvalidArgumentException('non-nullable non_capitalized_locality cannot be null');
        }
        $this->container['non_capitalized_locality'] = $non_capitalized_locality;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string|null $mobile_number mobile_number
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }
        $this->container['mobile_number'] = $mobile_number;

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
     * Gets street_name_and_number
     *
     * @return string|null
     */
    public function getStreetNameAndNumber()
    {
        return $this->container['street_name_and_number'];
    }

    /**
     * Sets street_name_and_number
     *
     * @param string|null $street_name_and_number street_name_and_number
     *
     * @return self
     */
    public function setStreetNameAndNumber($street_name_and_number)
    {
        if (is_null($street_name_and_number)) {
            throw new \InvalidArgumentException('non-nullable street_name_and_number cannot be null');
        }
        $this->container['street_name_and_number'] = $street_name_and_number;

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
     * Gets type_of_relation
     *
     * @return \Brixion\Kolibri\Model\RelationType
     */
    public function getTypeOfRelation()
    {
        return $this->container['type_of_relation'];
    }

    /**
     * Sets type_of_relation
     *
     * @param \Brixion\Kolibri\Model\RelationType $type_of_relation type_of_relation
     *
     * @return self
     */
    public function setTypeOfRelation($type_of_relation)
    {
        if (is_null($type_of_relation)) {
            throw new \InvalidArgumentException('non-nullable type_of_relation cannot be null');
        }
        $this->container['type_of_relation'] = $type_of_relation;

        return $this;
    }

    /**
     * Gets upcoming_birthday
     *
     * @return \DateTime|null
     */
    public function getUpcomingBirthday()
    {
        return $this->container['upcoming_birthday'];
    }

    /**
     * Sets upcoming_birthday
     *
     * @param \DateTime|null $upcoming_birthday upcoming_birthday
     *
     * @return self
     */
    public function setUpcomingBirthday($upcoming_birthday)
    {
        if (is_null($upcoming_birthday)) {
            throw new \InvalidArgumentException('non-nullable upcoming_birthday cannot be null');
        }
        $this->container['upcoming_birthday'] = $upcoming_birthday;

        return $this;
    }

    /**
     * Gets employee_role
     *
     * @return \Brixion\Kolibri\Model\EmployeeRole|null
     */
    public function getEmployeeRole()
    {
        return $this->container['employee_role'];
    }

    /**
     * Sets employee_role
     *
     * @param \Brixion\Kolibri\Model\EmployeeRole|null $employee_role employee_role
     *
     * @return self
     */
    public function setEmployeeRole($employee_role)
    {
        if (is_null($employee_role)) {
            throw new \InvalidArgumentException('non-nullable employee_role cannot be null');
        }
        $this->container['employee_role'] = $employee_role;

        return $this;
    }

    /**
     * Gets future_street_name_and_number
     *
     * @return string|null
     */
    public function getFutureStreetNameAndNumber()
    {
        return $this->container['future_street_name_and_number'];
    }

    /**
     * Sets future_street_name_and_number
     *
     * @param string|null $future_street_name_and_number future_street_name_and_number
     *
     * @return self
     */
    public function setFutureStreetNameAndNumber($future_street_name_and_number)
    {
        if (is_null($future_street_name_and_number)) {
            throw new \InvalidArgumentException('non-nullable future_street_name_and_number cannot be null');
        }
        $this->container['future_street_name_and_number'] = $future_street_name_and_number;

        return $this;
    }

    /**
     * Gets future_postal_code
     *
     * @return string|null
     */
    public function getFuturePostalCode()
    {
        return $this->container['future_postal_code'];
    }

    /**
     * Sets future_postal_code
     *
     * @param string|null $future_postal_code future_postal_code
     *
     * @return self
     */
    public function setFuturePostalCode($future_postal_code)
    {
        if (is_null($future_postal_code)) {
            throw new \InvalidArgumentException('non-nullable future_postal_code cannot be null');
        }
        $this->container['future_postal_code'] = $future_postal_code;

        return $this;
    }

    /**
     * Gets future_locality
     *
     * @return string|null
     */
    public function getFutureLocality()
    {
        return $this->container['future_locality'];
    }

    /**
     * Sets future_locality
     *
     * @param string|null $future_locality future_locality
     *
     * @return self
     */
    public function setFutureLocality($future_locality)
    {
        if (is_null($future_locality)) {
            throw new \InvalidArgumentException('non-nullable future_locality cannot be null');
        }
        $this->container['future_locality'] = $future_locality;

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
            throw new \InvalidArgumentException('invalid length for $id when calling RelationSnapShot., must be bigger than or equal to 1.');
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
