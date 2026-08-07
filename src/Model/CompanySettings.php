<?php

declare(strict_types=1);

/**
 * CompanySettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CompanySettings.
 * @implements \ArrayAccess<string, mixed>
 */
class CompanySettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CompanySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'default_language' => '\Brixion\Kolibri\Model\Language',
        'enabled_assignment_types' => '\Brixion\Kolibri\Model\AssignmentType[]',
        'enabled_languages' => '\Brixion\Kolibri\Model\Language[]',
        'enabled_real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'exchange_enabled' => 'bool',
        'has_backoffice_company' => 'bool',
        'is_backoffice_company' => 'bool',
        'show_hide_on_funda_option' => 'bool',
        'housenet_enabled' => 'bool',
        'housenet_content_token_root_ids' => 'string',
        'housenet_sso_token' => 'string',
        'housenet_sso_username' => 'string',
        'reminder_notification_settings' => '\Brixion\Kolibri\Model\ReminderNotificationSetting[]',
        'match_mail_settings' => '\Brixion\Kolibri\Model\MatchMailSettings',
        'object_reference_settings' => '\Brixion\Kolibri\Model\ObjectReferenceSettings',
        'acquisition_reference_settings' => '\Brixion\Kolibri\Model\AcquisitionReferenceSettings',
        'generic_reference_settings' => '\Brixion\Kolibri\Model\GenericReferenceSettings',
        'custom_company_settings' => 'string',
        'enable_hide_house_number_for_object_assignments_option' => 'bool',
        'hide_house_number_for_object_assignments_by_default' => 'bool',
        'enable_hide_address_for_object_assignments_option' => 'bool',
        'hide_address_for_object_assignments_by_default' => 'bool',
        'enable_hide_price_for_object_assignments_option' => 'bool',
        'hide_price_for_object_assignments_by_default' => 'bool',
        'group_id' => 'string',
        'group_name' => 'string',
        'is_demo' => 'bool',
        'document_settings' => '\Brixion\Kolibri\Model\DocumentSettings',
        'sms_from_field_short_company_name' => 'string',
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
        'default_language' => null,
        'enabled_assignment_types' => null,
        'enabled_languages' => null,
        'enabled_real_estate_groups' => null,
        'exchange_enabled' => null,
        'has_backoffice_company' => null,
        'is_backoffice_company' => null,
        'show_hide_on_funda_option' => null,
        'housenet_enabled' => null,
        'housenet_content_token_root_ids' => null,
        'housenet_sso_token' => null,
        'housenet_sso_username' => null,
        'reminder_notification_settings' => null,
        'match_mail_settings' => null,
        'object_reference_settings' => null,
        'acquisition_reference_settings' => null,
        'generic_reference_settings' => null,
        'custom_company_settings' => null,
        'enable_hide_house_number_for_object_assignments_option' => null,
        'hide_house_number_for_object_assignments_by_default' => null,
        'enable_hide_address_for_object_assignments_option' => null,
        'hide_address_for_object_assignments_by_default' => null,
        'enable_hide_price_for_object_assignments_option' => null,
        'hide_price_for_object_assignments_by_default' => null,
        'group_id' => 'guid',
        'group_name' => null,
        'is_demo' => null,
        'document_settings' => null,
        'sms_from_field_short_company_name' => null,
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
        'default_language' => false,
        'enabled_assignment_types' => false,
        'enabled_languages' => false,
        'enabled_real_estate_groups' => false,
        'exchange_enabled' => false,
        'has_backoffice_company' => false,
        'is_backoffice_company' => false,
        'show_hide_on_funda_option' => false,
        'housenet_enabled' => false,
        'housenet_content_token_root_ids' => false,
        'housenet_sso_token' => false,
        'housenet_sso_username' => false,
        'reminder_notification_settings' => false,
        'match_mail_settings' => false,
        'object_reference_settings' => false,
        'acquisition_reference_settings' => false,
        'generic_reference_settings' => false,
        'custom_company_settings' => false,
        'enable_hide_house_number_for_object_assignments_option' => false,
        'hide_house_number_for_object_assignments_by_default' => false,
        'enable_hide_address_for_object_assignments_option' => false,
        'hide_address_for_object_assignments_by_default' => false,
        'enable_hide_price_for_object_assignments_option' => false,
        'hide_price_for_object_assignments_by_default' => false,
        'group_id' => false,
        'group_name' => false,
        'is_demo' => false,
        'document_settings' => false,
        'sms_from_field_short_company_name' => false,
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
        'default_language' => 'defaultLanguage',
        'enabled_assignment_types' => 'enabledAssignmentTypes',
        'enabled_languages' => 'enabledLanguages',
        'enabled_real_estate_groups' => 'enabledRealEstateGroups',
        'exchange_enabled' => 'exchangeEnabled',
        'has_backoffice_company' => 'hasBackofficeCompany',
        'is_backoffice_company' => 'isBackofficeCompany',
        'show_hide_on_funda_option' => 'showHideOnFundaOption',
        'housenet_enabled' => 'housenetEnabled',
        'housenet_content_token_root_ids' => 'housenetContentTokenRootIds',
        'housenet_sso_token' => 'housenetSsoToken',
        'housenet_sso_username' => 'housenetSsoUsername',
        'reminder_notification_settings' => 'reminderNotificationSettings',
        'match_mail_settings' => 'matchMailSettings',
        'object_reference_settings' => 'objectReferenceSettings',
        'acquisition_reference_settings' => 'acquisitionReferenceSettings',
        'generic_reference_settings' => 'genericReferenceSettings',
        'custom_company_settings' => 'customCompanySettings',
        'enable_hide_house_number_for_object_assignments_option' => 'enableHideHouseNumberForObjectAssignmentsOption',
        'hide_house_number_for_object_assignments_by_default' => 'hideHouseNumberForObjectAssignmentsByDefault',
        'enable_hide_address_for_object_assignments_option' => 'enableHideAddressForObjectAssignmentsOption',
        'hide_address_for_object_assignments_by_default' => 'hideAddressForObjectAssignmentsByDefault',
        'enable_hide_price_for_object_assignments_option' => 'enableHidePriceForObjectAssignmentsOption',
        'hide_price_for_object_assignments_by_default' => 'hidePriceForObjectAssignmentsByDefault',
        'group_id' => 'groupId',
        'group_name' => 'groupName',
        'is_demo' => 'isDemo',
        'document_settings' => 'documentSettings',
        'sms_from_field_short_company_name' => 'smsFromFieldShortCompanyName',
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
        'default_language' => 'setDefaultLanguage',
        'enabled_assignment_types' => 'setEnabledAssignmentTypes',
        'enabled_languages' => 'setEnabledLanguages',
        'enabled_real_estate_groups' => 'setEnabledRealEstateGroups',
        'exchange_enabled' => 'setExchangeEnabled',
        'has_backoffice_company' => 'setHasBackofficeCompany',
        'is_backoffice_company' => 'setIsBackofficeCompany',
        'show_hide_on_funda_option' => 'setShowHideOnFundaOption',
        'housenet_enabled' => 'setHousenetEnabled',
        'housenet_content_token_root_ids' => 'setHousenetContentTokenRootIds',
        'housenet_sso_token' => 'setHousenetSsoToken',
        'housenet_sso_username' => 'setHousenetSsoUsername',
        'reminder_notification_settings' => 'setReminderNotificationSettings',
        'match_mail_settings' => 'setMatchMailSettings',
        'object_reference_settings' => 'setObjectReferenceSettings',
        'acquisition_reference_settings' => 'setAcquisitionReferenceSettings',
        'generic_reference_settings' => 'setGenericReferenceSettings',
        'custom_company_settings' => 'setCustomCompanySettings',
        'enable_hide_house_number_for_object_assignments_option' => 'setEnableHideHouseNumberForObjectAssignmentsOption',
        'hide_house_number_for_object_assignments_by_default' => 'setHideHouseNumberForObjectAssignmentsByDefault',
        'enable_hide_address_for_object_assignments_option' => 'setEnableHideAddressForObjectAssignmentsOption',
        'hide_address_for_object_assignments_by_default' => 'setHideAddressForObjectAssignmentsByDefault',
        'enable_hide_price_for_object_assignments_option' => 'setEnableHidePriceForObjectAssignmentsOption',
        'hide_price_for_object_assignments_by_default' => 'setHidePriceForObjectAssignmentsByDefault',
        'group_id' => 'setGroupId',
        'group_name' => 'setGroupName',
        'is_demo' => 'setIsDemo',
        'document_settings' => 'setDocumentSettings',
        'sms_from_field_short_company_name' => 'setSmsFromFieldShortCompanyName',
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
        'default_language' => 'getDefaultLanguage',
        'enabled_assignment_types' => 'getEnabledAssignmentTypes',
        'enabled_languages' => 'getEnabledLanguages',
        'enabled_real_estate_groups' => 'getEnabledRealEstateGroups',
        'exchange_enabled' => 'getExchangeEnabled',
        'has_backoffice_company' => 'getHasBackofficeCompany',
        'is_backoffice_company' => 'getIsBackofficeCompany',
        'show_hide_on_funda_option' => 'getShowHideOnFundaOption',
        'housenet_enabled' => 'getHousenetEnabled',
        'housenet_content_token_root_ids' => 'getHousenetContentTokenRootIds',
        'housenet_sso_token' => 'getHousenetSsoToken',
        'housenet_sso_username' => 'getHousenetSsoUsername',
        'reminder_notification_settings' => 'getReminderNotificationSettings',
        'match_mail_settings' => 'getMatchMailSettings',
        'object_reference_settings' => 'getObjectReferenceSettings',
        'acquisition_reference_settings' => 'getAcquisitionReferenceSettings',
        'generic_reference_settings' => 'getGenericReferenceSettings',
        'custom_company_settings' => 'getCustomCompanySettings',
        'enable_hide_house_number_for_object_assignments_option' => 'getEnableHideHouseNumberForObjectAssignmentsOption',
        'hide_house_number_for_object_assignments_by_default' => 'getHideHouseNumberForObjectAssignmentsByDefault',
        'enable_hide_address_for_object_assignments_option' => 'getEnableHideAddressForObjectAssignmentsOption',
        'hide_address_for_object_assignments_by_default' => 'getHideAddressForObjectAssignmentsByDefault',
        'enable_hide_price_for_object_assignments_option' => 'getEnableHidePriceForObjectAssignmentsOption',
        'hide_price_for_object_assignments_by_default' => 'getHidePriceForObjectAssignmentsByDefault',
        'group_id' => 'getGroupId',
        'group_name' => 'getGroupName',
        'is_demo' => 'getIsDemo',
        'document_settings' => 'getDocumentSettings',
        'sms_from_field_short_company_name' => 'getSmsFromFieldShortCompanyName',
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
        $this->setIfExists('default_language', $data ?? [], null);
        $this->setIfExists('enabled_assignment_types', $data ?? [], null);
        $this->setIfExists('enabled_languages', $data ?? [], null);
        $this->setIfExists('enabled_real_estate_groups', $data ?? [], null);
        $this->setIfExists('exchange_enabled', $data ?? [], null);
        $this->setIfExists('has_backoffice_company', $data ?? [], null);
        $this->setIfExists('is_backoffice_company', $data ?? [], null);
        $this->setIfExists('show_hide_on_funda_option', $data ?? [], null);
        $this->setIfExists('housenet_enabled', $data ?? [], null);
        $this->setIfExists('housenet_content_token_root_ids', $data ?? [], null);
        $this->setIfExists('housenet_sso_token', $data ?? [], null);
        $this->setIfExists('housenet_sso_username', $data ?? [], null);
        $this->setIfExists('reminder_notification_settings', $data ?? [], null);
        $this->setIfExists('match_mail_settings', $data ?? [], null);
        $this->setIfExists('object_reference_settings', $data ?? [], null);
        $this->setIfExists('acquisition_reference_settings', $data ?? [], null);
        $this->setIfExists('generic_reference_settings', $data ?? [], null);
        $this->setIfExists('custom_company_settings', $data ?? [], null);
        $this->setIfExists('enable_hide_house_number_for_object_assignments_option', $data ?? [], null);
        $this->setIfExists('hide_house_number_for_object_assignments_by_default', $data ?? [], null);
        $this->setIfExists('enable_hide_address_for_object_assignments_option', $data ?? [], null);
        $this->setIfExists('hide_address_for_object_assignments_by_default', $data ?? [], null);
        $this->setIfExists('enable_hide_price_for_object_assignments_option', $data ?? [], null);
        $this->setIfExists('hide_price_for_object_assignments_by_default', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('group_name', $data ?? [], null);
        $this->setIfExists('is_demo', $data ?? [], null);
        $this->setIfExists('document_settings', $data ?? [], null);
        $this->setIfExists('sms_from_field_short_company_name', $data ?? [], null);
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

        if ($this->container['default_language'] === null) {
            $invalidProperties[] = "'default_language' can't be null";
        }
        if ($this->container['is_demo'] === null) {
            $invalidProperties[] = "'is_demo' can't be null";
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
     * Gets default_language
     *
     * @return \Brixion\Kolibri\Model\Language
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param \Brixion\Kolibri\Model\Language $default_language default_language
     *
     * @return self
     */
    public function setDefaultLanguage($default_language)
    {
        if (is_null($default_language)) {
            throw new \InvalidArgumentException('non-nullable default_language cannot be null');
        }
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets enabled_assignment_types
     *
     * @return \Brixion\Kolibri\Model\AssignmentType[]|null
     */
    public function getEnabledAssignmentTypes()
    {
        return $this->container['enabled_assignment_types'];
    }

    /**
     * Sets enabled_assignment_types
     *
     * @param \Brixion\Kolibri\Model\AssignmentType[]|null $enabled_assignment_types enabled_assignment_types
     *
     * @return self
     */
    public function setEnabledAssignmentTypes($enabled_assignment_types)
    {
        if (is_null($enabled_assignment_types)) {
            throw new \InvalidArgumentException('non-nullable enabled_assignment_types cannot be null');
        }
        $this->container['enabled_assignment_types'] = $enabled_assignment_types;

        return $this;
    }

    /**
     * Gets enabled_languages
     *
     * @return \Brixion\Kolibri\Model\Language[]|null
     */
    public function getEnabledLanguages()
    {
        return $this->container['enabled_languages'];
    }

    /**
     * Sets enabled_languages
     *
     * @param \Brixion\Kolibri\Model\Language[]|null $enabled_languages enabled_languages
     *
     * @return self
     */
    public function setEnabledLanguages($enabled_languages)
    {
        if (is_null($enabled_languages)) {
            throw new \InvalidArgumentException('non-nullable enabled_languages cannot be null');
        }
        $this->container['enabled_languages'] = $enabled_languages;

        return $this;
    }

    /**
     * Gets enabled_real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup[]|null
     */
    public function getEnabledRealEstateGroups()
    {
        return $this->container['enabled_real_estate_groups'];
    }

    /**
     * Sets enabled_real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup[]|null $enabled_real_estate_groups enabled_real_estate_groups
     *
     * @return self
     */
    public function setEnabledRealEstateGroups($enabled_real_estate_groups)
    {
        if (is_null($enabled_real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable enabled_real_estate_groups cannot be null');
        }
        $this->container['enabled_real_estate_groups'] = $enabled_real_estate_groups;

        return $this;
    }

    /**
     * Gets exchange_enabled
     *
     * @return bool|null
     */
    public function getExchangeEnabled()
    {
        return $this->container['exchange_enabled'];
    }

    /**
     * Sets exchange_enabled
     *
     * @param bool|null $exchange_enabled Venum Exchange enabled?
     *
     * @return self
     */
    public function setExchangeEnabled($exchange_enabled)
    {
        if (is_null($exchange_enabled)) {
            throw new \InvalidArgumentException('non-nullable exchange_enabled cannot be null');
        }
        $this->container['exchange_enabled'] = $exchange_enabled;

        return $this;
    }

    /**
     * Gets has_backoffice_company
     *
     * @return bool|null
     */
    public function getHasBackofficeCompany()
    {
        return $this->container['has_backoffice_company'];
    }

    /**
     * Sets has_backoffice_company
     *
     * @param bool|null $has_backoffice_company has_backoffice_company
     *
     * @return self
     */
    public function setHasBackofficeCompany($has_backoffice_company)
    {
        if (is_null($has_backoffice_company)) {
            throw new \InvalidArgumentException('non-nullable has_backoffice_company cannot be null');
        }
        $this->container['has_backoffice_company'] = $has_backoffice_company;

        return $this;
    }

    /**
     * Gets is_backoffice_company
     *
     * @return bool|null
     */
    public function getIsBackofficeCompany()
    {
        return $this->container['is_backoffice_company'];
    }

    /**
     * Sets is_backoffice_company
     *
     * @param bool|null $is_backoffice_company is_backoffice_company
     *
     * @return self
     */
    public function setIsBackofficeCompany($is_backoffice_company)
    {
        if (is_null($is_backoffice_company)) {
            throw new \InvalidArgumentException('non-nullable is_backoffice_company cannot be null');
        }
        $this->container['is_backoffice_company'] = $is_backoffice_company;

        return $this;
    }

    /**
     * Gets show_hide_on_funda_option
     *
     * @return bool|null
     */
    public function getShowHideOnFundaOption()
    {
        return $this->container['show_hide_on_funda_option'];
    }

    /**
     * Sets show_hide_on_funda_option
     *
     * @param bool|null $show_hide_on_funda_option show_hide_on_funda_option
     *
     * @return self
     */
    public function setShowHideOnFundaOption($show_hide_on_funda_option)
    {
        if (is_null($show_hide_on_funda_option)) {
            throw new \InvalidArgumentException('non-nullable show_hide_on_funda_option cannot be null');
        }
        $this->container['show_hide_on_funda_option'] = $show_hide_on_funda_option;

        return $this;
    }

    /**
     * Gets housenet_enabled
     *
     * @return bool|null
     */
    public function getHousenetEnabled()
    {
        return $this->container['housenet_enabled'];
    }

    /**
     * Sets housenet_enabled
     *
     * @param bool|null $housenet_enabled Housenet enabled?
     *
     * @return self
     */
    public function setHousenetEnabled($housenet_enabled)
    {
        if (is_null($housenet_enabled)) {
            throw new \InvalidArgumentException('non-nullable housenet_enabled cannot be null');
        }
        $this->container['housenet_enabled'] = $housenet_enabled;

        return $this;
    }

    /**
     * Gets housenet_content_token_root_ids
     *
     * @return string|null
     */
    public function getHousenetContentTokenRootIds()
    {
        return $this->container['housenet_content_token_root_ids'];
    }

    /**
     * Sets housenet_content_token_root_ids
     *
     * @param string|null $housenet_content_token_root_ids housenet_content_token_root_ids
     *
     * @return self
     */
    public function setHousenetContentTokenRootIds($housenet_content_token_root_ids)
    {
        if (is_null($housenet_content_token_root_ids)) {
            throw new \InvalidArgumentException('non-nullable housenet_content_token_root_ids cannot be null');
        }
        $this->container['housenet_content_token_root_ids'] = $housenet_content_token_root_ids;

        return $this;
    }

    /**
     * Gets housenet_sso_token
     *
     * @return string|null
     */
    public function getHousenetSsoToken()
    {
        return $this->container['housenet_sso_token'];
    }

    /**
     * Sets housenet_sso_token
     *
     * @param string|null $housenet_sso_token housenet_sso_token
     *
     * @return self
     */
    public function setHousenetSsoToken($housenet_sso_token)
    {
        if (is_null($housenet_sso_token)) {
            throw new \InvalidArgumentException('non-nullable housenet_sso_token cannot be null');
        }
        $this->container['housenet_sso_token'] = $housenet_sso_token;

        return $this;
    }

    /**
     * Gets housenet_sso_username
     *
     * @return string|null
     */
    public function getHousenetSsoUsername()
    {
        return $this->container['housenet_sso_username'];
    }

    /**
     * Sets housenet_sso_username
     *
     * @param string|null $housenet_sso_username housenet_sso_username
     *
     * @return self
     */
    public function setHousenetSsoUsername($housenet_sso_username)
    {
        if (is_null($housenet_sso_username)) {
            throw new \InvalidArgumentException('non-nullable housenet_sso_username cannot be null');
        }
        $this->container['housenet_sso_username'] = $housenet_sso_username;

        return $this;
    }

    /**
     * Gets reminder_notification_settings
     *
     * @return \Brixion\Kolibri\Model\ReminderNotificationSetting[]|null
     */
    public function getReminderNotificationSettings()
    {
        return $this->container['reminder_notification_settings'];
    }

    /**
     * Sets reminder_notification_settings
     *
     * @param \Brixion\Kolibri\Model\ReminderNotificationSetting[]|null $reminder_notification_settings reminder_notification_settings
     *
     * @return self
     */
    public function setReminderNotificationSettings($reminder_notification_settings)
    {
        if (is_null($reminder_notification_settings)) {
            throw new \InvalidArgumentException('non-nullable reminder_notification_settings cannot be null');
        }
        $this->container['reminder_notification_settings'] = $reminder_notification_settings;

        return $this;
    }

    /**
     * Gets match_mail_settings
     *
     * @return \Brixion\Kolibri\Model\MatchMailSettings|null
     */
    public function getMatchMailSettings()
    {
        return $this->container['match_mail_settings'];
    }

    /**
     * Sets match_mail_settings
     *
     * @param \Brixion\Kolibri\Model\MatchMailSettings|null $match_mail_settings match_mail_settings
     *
     * @return self
     */
    public function setMatchMailSettings($match_mail_settings)
    {
        if (is_null($match_mail_settings)) {
            throw new \InvalidArgumentException('non-nullable match_mail_settings cannot be null');
        }
        $this->container['match_mail_settings'] = $match_mail_settings;

        return $this;
    }

    /**
     * Gets object_reference_settings
     *
     * @return \Brixion\Kolibri\Model\ObjectReferenceSettings|null
     */
    public function getObjectReferenceSettings()
    {
        return $this->container['object_reference_settings'];
    }

    /**
     * Sets object_reference_settings
     *
     * @param \Brixion\Kolibri\Model\ObjectReferenceSettings|null $object_reference_settings object_reference_settings
     *
     * @return self
     */
    public function setObjectReferenceSettings($object_reference_settings)
    {
        if (is_null($object_reference_settings)) {
            throw new \InvalidArgumentException('non-nullable object_reference_settings cannot be null');
        }
        $this->container['object_reference_settings'] = $object_reference_settings;

        return $this;
    }

    /**
     * Gets acquisition_reference_settings
     *
     * @return \Brixion\Kolibri\Model\AcquisitionReferenceSettings|null
     */
    public function getAcquisitionReferenceSettings()
    {
        return $this->container['acquisition_reference_settings'];
    }

    /**
     * Sets acquisition_reference_settings
     *
     * @param \Brixion\Kolibri\Model\AcquisitionReferenceSettings|null $acquisition_reference_settings acquisition_reference_settings
     *
     * @return self
     */
    public function setAcquisitionReferenceSettings($acquisition_reference_settings)
    {
        if (is_null($acquisition_reference_settings)) {
            throw new \InvalidArgumentException('non-nullable acquisition_reference_settings cannot be null');
        }
        $this->container['acquisition_reference_settings'] = $acquisition_reference_settings;

        return $this;
    }

    /**
     * Gets generic_reference_settings
     *
     * @return \Brixion\Kolibri\Model\GenericReferenceSettings|null
     */
    public function getGenericReferenceSettings()
    {
        return $this->container['generic_reference_settings'];
    }

    /**
     * Sets generic_reference_settings
     *
     * @param \Brixion\Kolibri\Model\GenericReferenceSettings|null $generic_reference_settings generic_reference_settings
     *
     * @return self
     */
    public function setGenericReferenceSettings($generic_reference_settings)
    {
        if (is_null($generic_reference_settings)) {
            throw new \InvalidArgumentException('non-nullable generic_reference_settings cannot be null');
        }
        $this->container['generic_reference_settings'] = $generic_reference_settings;

        return $this;
    }

    /**
     * Gets custom_company_settings
     *
     * @return string|null
     */
    public function getCustomCompanySettings()
    {
        return $this->container['custom_company_settings'];
    }

    /**
     * Sets custom_company_settings
     *
     * @param string|null $custom_company_settings custom_company_settings
     *
     * @return self
     */
    public function setCustomCompanySettings($custom_company_settings)
    {
        if (is_null($custom_company_settings)) {
            throw new \InvalidArgumentException('non-nullable custom_company_settings cannot be null');
        }
        $this->container['custom_company_settings'] = $custom_company_settings;

        return $this;
    }

    /**
     * Gets enable_hide_house_number_for_object_assignments_option
     *
     * @return bool|null
     */
    public function getEnableHideHouseNumberForObjectAssignmentsOption()
    {
        return $this->container['enable_hide_house_number_for_object_assignments_option'];
    }

    /**
     * Sets enable_hide_house_number_for_object_assignments_option
     *
     * @param bool|null $enable_hide_house_number_for_object_assignments_option enable_hide_house_number_for_object_assignments_option
     *
     * @return self
     */
    public function setEnableHideHouseNumberForObjectAssignmentsOption($enable_hide_house_number_for_object_assignments_option)
    {
        if (is_null($enable_hide_house_number_for_object_assignments_option)) {
            throw new \InvalidArgumentException('non-nullable enable_hide_house_number_for_object_assignments_option cannot be null');
        }
        $this->container['enable_hide_house_number_for_object_assignments_option'] = $enable_hide_house_number_for_object_assignments_option;

        return $this;
    }

    /**
     * Gets hide_house_number_for_object_assignments_by_default
     *
     * @return bool|null
     */
    public function getHideHouseNumberForObjectAssignmentsByDefault()
    {
        return $this->container['hide_house_number_for_object_assignments_by_default'];
    }

    /**
     * Sets hide_house_number_for_object_assignments_by_default
     *
     * @param bool|null $hide_house_number_for_object_assignments_by_default hide_house_number_for_object_assignments_by_default
     *
     * @return self
     */
    public function setHideHouseNumberForObjectAssignmentsByDefault($hide_house_number_for_object_assignments_by_default)
    {
        if (is_null($hide_house_number_for_object_assignments_by_default)) {
            throw new \InvalidArgumentException('non-nullable hide_house_number_for_object_assignments_by_default cannot be null');
        }
        $this->container['hide_house_number_for_object_assignments_by_default'] = $hide_house_number_for_object_assignments_by_default;

        return $this;
    }

    /**
     * Gets enable_hide_address_for_object_assignments_option
     *
     * @return bool|null
     */
    public function getEnableHideAddressForObjectAssignmentsOption()
    {
        return $this->container['enable_hide_address_for_object_assignments_option'];
    }

    /**
     * Sets enable_hide_address_for_object_assignments_option
     *
     * @param bool|null $enable_hide_address_for_object_assignments_option enable_hide_address_for_object_assignments_option
     *
     * @return self
     */
    public function setEnableHideAddressForObjectAssignmentsOption($enable_hide_address_for_object_assignments_option)
    {
        if (is_null($enable_hide_address_for_object_assignments_option)) {
            throw new \InvalidArgumentException('non-nullable enable_hide_address_for_object_assignments_option cannot be null');
        }
        $this->container['enable_hide_address_for_object_assignments_option'] = $enable_hide_address_for_object_assignments_option;

        return $this;
    }

    /**
     * Gets hide_address_for_object_assignments_by_default
     *
     * @return bool|null
     */
    public function getHideAddressForObjectAssignmentsByDefault()
    {
        return $this->container['hide_address_for_object_assignments_by_default'];
    }

    /**
     * Sets hide_address_for_object_assignments_by_default
     *
     * @param bool|null $hide_address_for_object_assignments_by_default hide_address_for_object_assignments_by_default
     *
     * @return self
     */
    public function setHideAddressForObjectAssignmentsByDefault($hide_address_for_object_assignments_by_default)
    {
        if (is_null($hide_address_for_object_assignments_by_default)) {
            throw new \InvalidArgumentException('non-nullable hide_address_for_object_assignments_by_default cannot be null');
        }
        $this->container['hide_address_for_object_assignments_by_default'] = $hide_address_for_object_assignments_by_default;

        return $this;
    }

    /**
     * Gets enable_hide_price_for_object_assignments_option
     *
     * @return bool|null
     */
    public function getEnableHidePriceForObjectAssignmentsOption()
    {
        return $this->container['enable_hide_price_for_object_assignments_option'];
    }

    /**
     * Sets enable_hide_price_for_object_assignments_option
     *
     * @param bool|null $enable_hide_price_for_object_assignments_option enable_hide_price_for_object_assignments_option
     *
     * @return self
     */
    public function setEnableHidePriceForObjectAssignmentsOption($enable_hide_price_for_object_assignments_option)
    {
        if (is_null($enable_hide_price_for_object_assignments_option)) {
            throw new \InvalidArgumentException('non-nullable enable_hide_price_for_object_assignments_option cannot be null');
        }
        $this->container['enable_hide_price_for_object_assignments_option'] = $enable_hide_price_for_object_assignments_option;

        return $this;
    }

    /**
     * Gets hide_price_for_object_assignments_by_default
     *
     * @return bool|null
     */
    public function getHidePriceForObjectAssignmentsByDefault()
    {
        return $this->container['hide_price_for_object_assignments_by_default'];
    }

    /**
     * Sets hide_price_for_object_assignments_by_default
     *
     * @param bool|null $hide_price_for_object_assignments_by_default hide_price_for_object_assignments_by_default
     *
     * @return self
     */
    public function setHidePriceForObjectAssignmentsByDefault($hide_price_for_object_assignments_by_default)
    {
        if (is_null($hide_price_for_object_assignments_by_default)) {
            throw new \InvalidArgumentException('non-nullable hide_price_for_object_assignments_by_default cannot be null');
        }
        $this->container['hide_price_for_object_assignments_by_default'] = $hide_price_for_object_assignments_by_default;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        if (is_null($group_id)) {
            throw new \InvalidArgumentException('non-nullable group_id cannot be null');
        }
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name group_name
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        if (is_null($group_name)) {
            throw new \InvalidArgumentException('non-nullable group_name cannot be null');
        }
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets is_demo
     *
     * @return bool
     */
    public function getIsDemo()
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     *
     * @param bool $is_demo is_demo
     *
     * @return self
     */
    public function setIsDemo($is_demo)
    {
        if (is_null($is_demo)) {
            throw new \InvalidArgumentException('non-nullable is_demo cannot be null');
        }
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Gets document_settings
     *
     * @return \Brixion\Kolibri\Model\DocumentSettings|null
     */
    public function getDocumentSettings()
    {
        return $this->container['document_settings'];
    }

    /**
     * Sets document_settings
     *
     * @param \Brixion\Kolibri\Model\DocumentSettings|null $document_settings document_settings
     *
     * @return self
     */
    public function setDocumentSettings($document_settings)
    {
        if (is_null($document_settings)) {
            throw new \InvalidArgumentException('non-nullable document_settings cannot be null');
        }
        $this->container['document_settings'] = $document_settings;

        return $this;
    }

    /**
     * Gets sms_from_field_short_company_name
     *
     * @return string|null
     */
    public function getSmsFromFieldShortCompanyName()
    {
        return $this->container['sms_from_field_short_company_name'];
    }

    /**
     * Sets sms_from_field_short_company_name
     *
     * @param string|null $sms_from_field_short_company_name sms_from_field_short_company_name
     *
     * @return self
     */
    public function setSmsFromFieldShortCompanyName($sms_from_field_short_company_name)
    {
        if (is_null($sms_from_field_short_company_name)) {
            throw new \InvalidArgumentException('non-nullable sms_from_field_short_company_name cannot be null');
        }
        $this->container['sms_from_field_short_company_name'] = $sms_from_field_short_company_name;

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
            throw new \InvalidArgumentException('invalid length for $id when calling CompanySettings., must be bigger than or equal to 1.');
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
