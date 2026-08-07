<?php

declare(strict_types=1);

/**
 * Office - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Office.
 * @implements \ArrayAccess<string, mixed>
 */
class Office implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Office';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'about_me' => '\Brixion\Kolibri\Model\Translation[]',
        'association_info' => '\Brixion\Kolibri\Model\RealEstateAssociationInfo',
        'association_info_alt' => '\Brixion\Kolibri\Model\RealEstateAssociationInfo',
        'description' => 'string',
        'email_addresses' => '\Brixion\Kolibri\Model\EmailAddress[]',
        'is_main_office' => 'bool',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
        'logo' => '\Brixion\Kolibri\Model\PhotoBlob',
        'name' => 'string',
        'phone_numbers' => '\Brixion\Kolibri\Model\PhoneNumber[]',
        'postal_address' => '\Brixion\Kolibri\Model\Address',
        'postal_address_differs_visit_address' => 'bool',
        'social_media' => '\Brixion\Kolibri\Model\SocialMediaTranslation[]',
        'spoken_languages' => '\Brixion\Kolibri\Model\Language[]',
        'visit_address' => '\Brixion\Kolibri\Model\Address',
        'web_address' => 'string',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'letter_avatar' => 'string',
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
        'association_info_alt' => null,
        'description' => null,
        'email_addresses' => null,
        'is_main_office' => null,
        'linked_employees' => null,
        'logo' => null,
        'name' => null,
        'phone_numbers' => null,
        'postal_address' => null,
        'postal_address_differs_visit_address' => null,
        'social_media' => null,
        'spoken_languages' => null,
        'visit_address' => null,
        'web_address' => null,
        'linked_folder_tree' => null,
        'letter_avatar' => null,
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
        'association_info_alt' => false,
        'description' => false,
        'email_addresses' => false,
        'is_main_office' => false,
        'linked_employees' => false,
        'logo' => false,
        'name' => false,
        'phone_numbers' => false,
        'postal_address' => false,
        'postal_address_differs_visit_address' => false,
        'social_media' => false,
        'spoken_languages' => false,
        'visit_address' => false,
        'web_address' => false,
        'linked_folder_tree' => false,
        'letter_avatar' => false,
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
        'association_info_alt' => 'associationInfoAlt',
        'description' => 'description',
        'email_addresses' => 'emailAddresses',
        'is_main_office' => 'isMainOffice',
        'linked_employees' => 'linkedEmployees',
        'logo' => 'logo',
        'name' => 'name',
        'phone_numbers' => 'phoneNumbers',
        'postal_address' => 'postalAddress',
        'postal_address_differs_visit_address' => 'postalAddressDiffersVisitAddress',
        'social_media' => 'socialMedia',
        'spoken_languages' => 'spokenLanguages',
        'visit_address' => 'visitAddress',
        'web_address' => 'webAddress',
        'linked_folder_tree' => 'linkedFolderTree',
        'letter_avatar' => 'letterAvatar',
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
        'association_info_alt' => 'setAssociationInfoAlt',
        'description' => 'setDescription',
        'email_addresses' => 'setEmailAddresses',
        'is_main_office' => 'setIsMainOffice',
        'linked_employees' => 'setLinkedEmployees',
        'logo' => 'setLogo',
        'name' => 'setName',
        'phone_numbers' => 'setPhoneNumbers',
        'postal_address' => 'setPostalAddress',
        'postal_address_differs_visit_address' => 'setPostalAddressDiffersVisitAddress',
        'social_media' => 'setSocialMedia',
        'spoken_languages' => 'setSpokenLanguages',
        'visit_address' => 'setVisitAddress',
        'web_address' => 'setWebAddress',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'letter_avatar' => 'setLetterAvatar',
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
        'association_info_alt' => 'getAssociationInfoAlt',
        'description' => 'getDescription',
        'email_addresses' => 'getEmailAddresses',
        'is_main_office' => 'getIsMainOffice',
        'linked_employees' => 'getLinkedEmployees',
        'logo' => 'getLogo',
        'name' => 'getName',
        'phone_numbers' => 'getPhoneNumbers',
        'postal_address' => 'getPostalAddress',
        'postal_address_differs_visit_address' => 'getPostalAddressDiffersVisitAddress',
        'social_media' => 'getSocialMedia',
        'spoken_languages' => 'getSpokenLanguages',
        'visit_address' => 'getVisitAddress',
        'web_address' => 'getWebAddress',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'letter_avatar' => 'getLetterAvatar',
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
        $this->setIfExists('association_info_alt', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('email_addresses', $data ?? [], null);
        $this->setIfExists('is_main_office', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('postal_address_differs_visit_address', $data ?? [], null);
        $this->setIfExists('social_media', $data ?? [], null);
        $this->setIfExists('spoken_languages', $data ?? [], null);
        $this->setIfExists('visit_address', $data ?? [], null);
        $this->setIfExists('web_address', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('letter_avatar', $data ?? [], null);
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

        if ($this->container['is_main_office'] === null) {
            $invalidProperties[] = "'is_main_office' can't be null";
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
     * Gets association_info_alt
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociationInfo|null
     */
    public function getAssociationInfoAlt()
    {
        return $this->container['association_info_alt'];
    }

    /**
     * Sets association_info_alt
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociationInfo|null $association_info_alt association_info_alt
     *
     * @return self
     */
    public function setAssociationInfoAlt($association_info_alt)
    {
        if (is_null($association_info_alt)) {
            throw new \InvalidArgumentException('non-nullable association_info_alt cannot be null');
        }
        $this->container['association_info_alt'] = $association_info_alt;

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
     * Gets is_main_office
     *
     * @return bool
     */
    public function getIsMainOffice()
    {
        return $this->container['is_main_office'];
    }

    /**
     * Sets is_main_office
     *
     * @param bool $is_main_office is_main_office
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
     * Gets logo
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * Gets visit_address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getVisitAddress()
    {
        return $this->container['visit_address'];
    }

    /**
     * Sets visit_address
     *
     * @param \Brixion\Kolibri\Model\Address|null $visit_address visit_address
     *
     * @return self
     */
    public function setVisitAddress($visit_address)
    {
        if (is_null($visit_address)) {
            throw new \InvalidArgumentException('non-nullable visit_address cannot be null');
        }
        $this->container['visit_address'] = $visit_address;

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
            throw new \InvalidArgumentException('invalid length for $id when calling Office., must be bigger than or equal to 1.');
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
