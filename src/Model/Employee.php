<?php

declare(strict_types=1);

/**
 * Employee - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Employee.
 * @implements \ArrayAccess<string, mixed>
 */
class Employee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'about_me' => '\Brixion\Kolibri\Model\Translation[]',
        'association_info' => '\Brixion\Kolibri\Model\RealEstateAssociationInfo',
        'certification' => '\Brixion\Kolibri\Model\CertificationDetails',
        'letter_avatar' => 'string',
        'linked_offices' => '\Brixion\Kolibri\Model\LinkedOffice[]',
        'roles' => '\Brixion\Kolibri\Model\EmployeeRole[]',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'account_id' => 'string',
        'user_name' => 'string',
        'account_is_active' => 'bool',
        'address' => '\Brixion\Kolibri\Model\Address',
        'address_line' => 'string',
        'bank_account' => '\Brixion\Kolibri\Model\BankAccount',
        'city_of_birth' => 'string',
        'civil_state' => '\Brixion\Kolibri\Model\CivilState',
        'country_iso2_of_birth' => 'string',
        'date_of_birth' => '\DateTime',
        'display_name' => 'string',
        'email_addresses' => '\Brixion\Kolibri\Model\EmailAddress[]',
        'first_name' => 'string',
        'gender' => '\Brixion\Kolibri\Model\Gender',
        'identification_card' => '\Brixion\Kolibri\Model\IdentificationCard',
        'last_name' => 'string',
        'middle_name' => 'string',
        'name_letters' => 'string',
        'nickname' => 'string',
        'passport_photo_blob' => '\Brixion\Kolibri\Model\PhotoBlob',
        'phone_numbers' => '\Brixion\Kolibri\Model\PhoneNumber[]',
        'postal_address' => '\Brixion\Kolibri\Model\Address',
        'postal_address_differs_visit_address' => 'bool',
        'salutation' => 'string',
        'social_media' => '\Brixion\Kolibri\Model\SocialMediaTranslation[]',
        'social_security_number' => 'string',
        'spoken_languages' => '\Brixion\Kolibri\Model\Language[]',
        'title' => 'string',
        'use_formal_appelation' => 'bool',
        'web_address' => 'string',
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
        'about_me' => null,
        'association_info' => null,
        'certification' => null,
        'letter_avatar' => null,
        'linked_offices' => null,
        'roles' => null,
        'linked_folder_tree' => null,
        'account_id' => 'guid',
        'user_name' => null,
        'account_is_active' => null,
        'address' => null,
        'address_line' => null,
        'bank_account' => null,
        'city_of_birth' => null,
        'civil_state' => null,
        'country_iso2_of_birth' => null,
        'date_of_birth' => 'date-time',
        'display_name' => null,
        'email_addresses' => null,
        'first_name' => null,
        'gender' => null,
        'identification_card' => null,
        'last_name' => null,
        'middle_name' => null,
        'name_letters' => null,
        'nickname' => null,
        'passport_photo_blob' => null,
        'phone_numbers' => null,
        'postal_address' => null,
        'postal_address_differs_visit_address' => null,
        'salutation' => null,
        'social_media' => null,
        'social_security_number' => null,
        'spoken_languages' => null,
        'title' => null,
        'use_formal_appelation' => null,
        'web_address' => null,
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
        'about_me' => false,
        'association_info' => false,
        'certification' => false,
        'letter_avatar' => false,
        'linked_offices' => false,
        'roles' => false,
        'linked_folder_tree' => false,
        'account_id' => false,
        'user_name' => false,
        'account_is_active' => false,
        'address' => false,
        'address_line' => false,
        'bank_account' => false,
        'city_of_birth' => false,
        'civil_state' => false,
        'country_iso2_of_birth' => false,
        'date_of_birth' => false,
        'display_name' => false,
        'email_addresses' => false,
        'first_name' => false,
        'gender' => false,
        'identification_card' => false,
        'last_name' => false,
        'middle_name' => false,
        'name_letters' => false,
        'nickname' => false,
        'passport_photo_blob' => false,
        'phone_numbers' => false,
        'postal_address' => false,
        'postal_address_differs_visit_address' => false,
        'salutation' => false,
        'social_media' => false,
        'social_security_number' => false,
        'spoken_languages' => false,
        'title' => false,
        'use_formal_appelation' => false,
        'web_address' => false,
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
        'about_me' => 'aboutMe',
        'association_info' => 'associationInfo',
        'certification' => 'certification',
        'letter_avatar' => 'letterAvatar',
        'linked_offices' => 'linkedOffices',
        'roles' => 'roles',
        'linked_folder_tree' => 'linkedFolderTree',
        'account_id' => 'accountId',
        'user_name' => 'userName',
        'account_is_active' => 'accountIsActive',
        'address' => 'address',
        'address_line' => 'addressLine',
        'bank_account' => 'bankAccount',
        'city_of_birth' => 'cityOfBirth',
        'civil_state' => 'civilState',
        'country_iso2_of_birth' => 'countryIso2OfBirth',
        'date_of_birth' => 'dateOfBirth',
        'display_name' => 'displayName',
        'email_addresses' => 'emailAddresses',
        'first_name' => 'firstName',
        'gender' => 'gender',
        'identification_card' => 'identificationCard',
        'last_name' => 'lastName',
        'middle_name' => 'middleName',
        'name_letters' => 'nameLetters',
        'nickname' => 'nickname',
        'passport_photo_blob' => 'passportPhotoBlob',
        'phone_numbers' => 'phoneNumbers',
        'postal_address' => 'postalAddress',
        'postal_address_differs_visit_address' => 'postalAddressDiffersVisitAddress',
        'salutation' => 'salutation',
        'social_media' => 'socialMedia',
        'social_security_number' => 'socialSecurityNumber',
        'spoken_languages' => 'spokenLanguages',
        'title' => 'title',
        'use_formal_appelation' => 'useFormalAppelation',
        'web_address' => 'webAddress',
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
        'about_me' => 'setAboutMe',
        'association_info' => 'setAssociationInfo',
        'certification' => 'setCertification',
        'letter_avatar' => 'setLetterAvatar',
        'linked_offices' => 'setLinkedOffices',
        'roles' => 'setRoles',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'account_id' => 'setAccountId',
        'user_name' => 'setUserName',
        'account_is_active' => 'setAccountIsActive',
        'address' => 'setAddress',
        'address_line' => 'setAddressLine',
        'bank_account' => 'setBankAccount',
        'city_of_birth' => 'setCityOfBirth',
        'civil_state' => 'setCivilState',
        'country_iso2_of_birth' => 'setCountryIso2OfBirth',
        'date_of_birth' => 'setDateOfBirth',
        'display_name' => 'setDisplayName',
        'email_addresses' => 'setEmailAddresses',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'identification_card' => 'setIdentificationCard',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'name_letters' => 'setNameLetters',
        'nickname' => 'setNickname',
        'passport_photo_blob' => 'setPassportPhotoBlob',
        'phone_numbers' => 'setPhoneNumbers',
        'postal_address' => 'setPostalAddress',
        'postal_address_differs_visit_address' => 'setPostalAddressDiffersVisitAddress',
        'salutation' => 'setSalutation',
        'social_media' => 'setSocialMedia',
        'social_security_number' => 'setSocialSecurityNumber',
        'spoken_languages' => 'setSpokenLanguages',
        'title' => 'setTitle',
        'use_formal_appelation' => 'setUseFormalAppelation',
        'web_address' => 'setWebAddress',
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
        'about_me' => 'getAboutMe',
        'association_info' => 'getAssociationInfo',
        'certification' => 'getCertification',
        'letter_avatar' => 'getLetterAvatar',
        'linked_offices' => 'getLinkedOffices',
        'roles' => 'getRoles',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'account_id' => 'getAccountId',
        'user_name' => 'getUserName',
        'account_is_active' => 'getAccountIsActive',
        'address' => 'getAddress',
        'address_line' => 'getAddressLine',
        'bank_account' => 'getBankAccount',
        'city_of_birth' => 'getCityOfBirth',
        'civil_state' => 'getCivilState',
        'country_iso2_of_birth' => 'getCountryIso2OfBirth',
        'date_of_birth' => 'getDateOfBirth',
        'display_name' => 'getDisplayName',
        'email_addresses' => 'getEmailAddresses',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'identification_card' => 'getIdentificationCard',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'name_letters' => 'getNameLetters',
        'nickname' => 'getNickname',
        'passport_photo_blob' => 'getPassportPhotoBlob',
        'phone_numbers' => 'getPhoneNumbers',
        'postal_address' => 'getPostalAddress',
        'postal_address_differs_visit_address' => 'getPostalAddressDiffersVisitAddress',
        'salutation' => 'getSalutation',
        'social_media' => 'getSocialMedia',
        'social_security_number' => 'getSocialSecurityNumber',
        'spoken_languages' => 'getSpokenLanguages',
        'title' => 'getTitle',
        'use_formal_appelation' => 'getUseFormalAppelation',
        'web_address' => 'getWebAddress',
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
        $this->setIfExists('about_me', $data ?? [], null);
        $this->setIfExists('association_info', $data ?? [], null);
        $this->setIfExists('certification', $data ?? [], null);
        $this->setIfExists('letter_avatar', $data ?? [], null);
        $this->setIfExists('linked_offices', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('account_is_active', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('address_line', $data ?? [], null);
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('city_of_birth', $data ?? [], null);
        $this->setIfExists('civil_state', $data ?? [], null);
        $this->setIfExists('country_iso2_of_birth', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('email_addresses', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('identification_card', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('name_letters', $data ?? [], null);
        $this->setIfExists('nickname', $data ?? [], null);
        $this->setIfExists('passport_photo_blob', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('postal_address_differs_visit_address', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('social_media', $data ?? [], null);
        $this->setIfExists('social_security_number', $data ?? [], null);
        $this->setIfExists('spoken_languages', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('use_formal_appelation', $data ?? [], null);
        $this->setIfExists('web_address', $data ?? [], null);
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

        if ($this->container['civil_state'] === null) {
            $invalidProperties[] = "'civil_state' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        if ($this->container['postal_address_differs_visit_address'] === null) {
            $invalidProperties[] = "'postal_address_differs_visit_address' can't be null";
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
     * Gets about_me
     *
     * @return \Brixion\Kolibri\Model\Translation[]|null
     */
    public function getAboutMe()
    {
        return $this->container['about_me'];
    }

    /**
     * Sets about_me
     *
     * @param \Brixion\Kolibri\Model\Translation[]|null $about_me about_me
     *
     * @return self
     */
    public function setAboutMe($about_me)
    {
        if (is_null($about_me)) {
            throw new \InvalidArgumentException('non-nullable about_me cannot be null');
        }
        $this->container['about_me'] = $about_me;

        return $this;
    }

    /**
     * Gets association_info
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociationInfo|null
     */
    public function getAssociationInfo()
    {
        return $this->container['association_info'];
    }

    /**
     * Sets association_info
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociationInfo|null $association_info association_info
     *
     * @return self
     */
    public function setAssociationInfo($association_info)
    {
        if (is_null($association_info)) {
            throw new \InvalidArgumentException('non-nullable association_info cannot be null');
        }
        $this->container['association_info'] = $association_info;

        return $this;
    }

    /**
     * Gets certification
     *
     * @return \Brixion\Kolibri\Model\CertificationDetails|null
     */
    public function getCertification()
    {
        return $this->container['certification'];
    }

    /**
     * Sets certification
     *
     * @param \Brixion\Kolibri\Model\CertificationDetails|null $certification certification
     *
     * @return self
     */
    public function setCertification($certification)
    {
        if (is_null($certification)) {
            throw new \InvalidArgumentException('non-nullable certification cannot be null');
        }
        $this->container['certification'] = $certification;

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
     * Gets roles
     *
     * @return \Brixion\Kolibri\Model\EmployeeRole[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Brixion\Kolibri\Model\EmployeeRole[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets linked_folder_tree
     *
     * @return \Brixion\Kolibri\Model\LinkedFolderTree|null
     */
    public function getLinkedFolderTree()
    {
        return $this->container['linked_folder_tree'];
    }

    /**
     * Sets linked_folder_tree
     *
     * @param \Brixion\Kolibri\Model\LinkedFolderTree|null $linked_folder_tree linked_folder_tree
     *
     * @return self
     */
    public function setLinkedFolderTree($linked_folder_tree)
    {
        if (is_null($linked_folder_tree)) {
            throw new \InvalidArgumentException('non-nullable linked_folder_tree cannot be null');
        }
        $this->container['linked_folder_tree'] = $linked_folder_tree;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets account_is_active
     *
     * @return bool|null
     */
    public function getAccountIsActive()
    {
        return $this->container['account_is_active'];
    }

    /**
     * Sets account_is_active
     *
     * @param bool|null $account_is_active account_is_active
     *
     * @return self
     */
    public function setAccountIsActive($account_is_active)
    {
        if (is_null($account_is_active)) {
            throw new \InvalidArgumentException('non-nullable account_is_active cannot be null');
        }
        $this->container['account_is_active'] = $account_is_active;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Brixion\Kolibri\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets address_line
     *
     * @return string|null
     */
    public function getAddressLine()
    {
        return $this->container['address_line'];
    }

    /**
     * Sets address_line
     *
     * @param string|null $address_line address_line
     *
     * @return self
     */
    public function setAddressLine($address_line)
    {
        if (is_null($address_line)) {
            throw new \InvalidArgumentException('non-nullable address_line cannot be null');
        }
        $this->container['address_line'] = $address_line;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return \Brixion\Kolibri\Model\BankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Brixion\Kolibri\Model\BankAccount|null $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            throw new \InvalidArgumentException('non-nullable bank_account cannot be null');
        }
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets city_of_birth
     *
     * @return string|null
     */
    public function getCityOfBirth()
    {
        return $this->container['city_of_birth'];
    }

    /**
     * Sets city_of_birth
     *
     * @param string|null $city_of_birth city_of_birth
     *
     * @return self
     */
    public function setCityOfBirth($city_of_birth)
    {
        if (is_null($city_of_birth)) {
            throw new \InvalidArgumentException('non-nullable city_of_birth cannot be null');
        }
        $this->container['city_of_birth'] = $city_of_birth;

        return $this;
    }

    /**
     * Gets civil_state
     *
     * @return \Brixion\Kolibri\Model\CivilState
     */
    public function getCivilState()
    {
        return $this->container['civil_state'];
    }

    /**
     * Sets civil_state
     *
     * @param \Brixion\Kolibri\Model\CivilState $civil_state civil_state
     *
     * @return self
     */
    public function setCivilState($civil_state)
    {
        if (is_null($civil_state)) {
            throw new \InvalidArgumentException('non-nullable civil_state cannot be null');
        }
        $this->container['civil_state'] = $civil_state;

        return $this;
    }

    /**
     * Gets country_iso2_of_birth
     *
     * @return string|null
     */
    public function getCountryIso2OfBirth()
    {
        return $this->container['country_iso2_of_birth'];
    }

    /**
     * Sets country_iso2_of_birth
     *
     * @param string|null $country_iso2_of_birth country_iso2_of_birth
     *
     * @return self
     */
    public function setCountryIso2OfBirth($country_iso2_of_birth)
    {
        if (is_null($country_iso2_of_birth)) {
            throw new \InvalidArgumentException('non-nullable country_iso2_of_birth cannot be null');
        }
        $this->container['country_iso2_of_birth'] = $country_iso2_of_birth;

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
     * Gets email_addresses
     *
     * @return \Brixion\Kolibri\Model\EmailAddress[]|null
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param \Brixion\Kolibri\Model\EmailAddress[]|null $email_addresses email_addresses
     *
     * @return self
     */
    public function setEmailAddresses($email_addresses)
    {
        if (is_null($email_addresses)) {
            throw new \InvalidArgumentException('non-nullable email_addresses cannot be null');
        }
        $this->container['email_addresses'] = $email_addresses;

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
     * @return \Brixion\Kolibri\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Brixion\Kolibri\Model\Gender $gender gender
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
     * Gets identification_card
     *
     * @return \Brixion\Kolibri\Model\IdentificationCard|null
     */
    public function getIdentificationCard()
    {
        return $this->container['identification_card'];
    }

    /**
     * Sets identification_card
     *
     * @param \Brixion\Kolibri\Model\IdentificationCard|null $identification_card identification_card
     *
     * @return self
     */
    public function setIdentificationCard($identification_card)
    {
        if (is_null($identification_card)) {
            throw new \InvalidArgumentException('non-nullable identification_card cannot be null');
        }
        $this->container['identification_card'] = $identification_card;

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
     * Gets name_letters
     *
     * @return string|null
     */
    public function getNameLetters()
    {
        return $this->container['name_letters'];
    }

    /**
     * Sets name_letters
     *
     * @param string|null $name_letters name_letters
     *
     * @return self
     */
    public function setNameLetters($name_letters)
    {
        if (is_null($name_letters)) {
            throw new \InvalidArgumentException('non-nullable name_letters cannot be null');
        }
        $this->container['name_letters'] = $name_letters;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname nickname
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        if (is_null($nickname)) {
            throw new \InvalidArgumentException('non-nullable nickname cannot be null');
        }
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets passport_photo_blob
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob|null
     */
    public function getPassportPhotoBlob()
    {
        return $this->container['passport_photo_blob'];
    }

    /**
     * Sets passport_photo_blob
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob|null $passport_photo_blob passport_photo_blob
     *
     * @return self
     */
    public function setPassportPhotoBlob($passport_photo_blob)
    {
        if (is_null($passport_photo_blob)) {
            throw new \InvalidArgumentException('non-nullable passport_photo_blob cannot be null');
        }
        $this->container['passport_photo_blob'] = $passport_photo_blob;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Brixion\Kolibri\Model\PhoneNumber[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Brixion\Kolibri\Model\PhoneNumber[]|null $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Brixion\Kolibri\Model\Address|null $postal_address postal_address
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        if (is_null($postal_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address cannot be null');
        }
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets postal_address_differs_visit_address
     *
     * @return bool
     */
    public function getPostalAddressDiffersVisitAddress()
    {
        return $this->container['postal_address_differs_visit_address'];
    }

    /**
     * Sets postal_address_differs_visit_address
     *
     * @param bool $postal_address_differs_visit_address postal_address_differs_visit_address
     *
     * @return self
     */
    public function setPostalAddressDiffersVisitAddress($postal_address_differs_visit_address)
    {
        if (is_null($postal_address_differs_visit_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address_differs_visit_address cannot be null');
        }
        $this->container['postal_address_differs_visit_address'] = $postal_address_differs_visit_address;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets social_media
     *
     * @return \Brixion\Kolibri\Model\SocialMediaTranslation[]|null
     */
    public function getSocialMedia()
    {
        return $this->container['social_media'];
    }

    /**
     * Sets social_media
     *
     * @param \Brixion\Kolibri\Model\SocialMediaTranslation[]|null $social_media social_media
     *
     * @return self
     */
    public function setSocialMedia($social_media)
    {
        if (is_null($social_media)) {
            throw new \InvalidArgumentException('non-nullable social_media cannot be null');
        }
        $this->container['social_media'] = $social_media;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string|null $social_security_number social_security_number
     *
     * @return self
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        if (is_null($social_security_number)) {
            throw new \InvalidArgumentException('non-nullable social_security_number cannot be null');
        }
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }

    /**
     * Gets spoken_languages
     *
     * @return \Brixion\Kolibri\Model\Language[]|null
     */
    public function getSpokenLanguages()
    {
        return $this->container['spoken_languages'];
    }

    /**
     * Sets spoken_languages
     *
     * @param \Brixion\Kolibri\Model\Language[]|null $spoken_languages spoken_languages
     *
     * @return self
     */
    public function setSpokenLanguages($spoken_languages)
    {
        if (is_null($spoken_languages)) {
            throw new \InvalidArgumentException('non-nullable spoken_languages cannot be null');
        }
        $this->container['spoken_languages'] = $spoken_languages;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets use_formal_appelation
     *
     * @return bool|null
     */
    public function getUseFormalAppelation()
    {
        return $this->container['use_formal_appelation'];
    }

    /**
     * Sets use_formal_appelation
     *
     * @param bool|null $use_formal_appelation use_formal_appelation
     *
     * @return self
     */
    public function setUseFormalAppelation($use_formal_appelation)
    {
        if (is_null($use_formal_appelation)) {
            throw new \InvalidArgumentException('non-nullable use_formal_appelation cannot be null');
        }
        $this->container['use_formal_appelation'] = $use_formal_appelation;

        return $this;
    }

    /**
     * Gets web_address
     *
     * @return string|null
     */
    public function getWebAddress()
    {
        return $this->container['web_address'];
    }

    /**
     * Sets web_address
     *
     * @param string|null $web_address web_address
     *
     * @return self
     */
    public function setWebAddress($web_address)
    {
        if (is_null($web_address)) {
            throw new \InvalidArgumentException('non-nullable web_address cannot be null');
        }
        $this->container['web_address'] = $web_address;

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
            throw new \InvalidArgumentException('invalid length for $id when calling Employee., must be bigger than or equal to 1.');
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
