<?php

declare(strict_types=1);

/**
 * FinancialAdministration - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * FinancialAdministration.
 * @implements \ArrayAccess<string, mixed>
 */
class FinancialAdministration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'FinancialAdministration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'back_ground_image_first_page' => '\Brixion\Kolibri\Model\ImageBlob',
        'back_ground_image_following_pages' => '\Brixion\Kolibri\Model\ImageBlob',
        'debtor_number_format_post' => 'string',
        'debtor_number_format_pre' => 'string',
        'export_code' => 'string',
        'export_journal_code' => 'string',
        'groups' => '\Brixion\Kolibri\Model\FinancialAdministrationGroup[]',
        'invoice_number_format_post' => 'string',
        'invoice_number_format_pre' => 'string',
        'default_business_invoice_template' => 'string',
        'default_consumer_invoice_template' => 'string',
        'is_linked_to_software_administration' => 'bool',
        'linked_expiration' => '\DateTime',
        'link_to_software_administration' => '\Brixion\Kolibri\Model\SoftwareAdministration',
        'name' => 'string',
        'next_debtor_number' => 'string',
        'next_invoice_number' => 'string',
        'products' => '\Brixion\Kolibri\Model\FinancialAdministrationProduct[]',
        'tax_rates' => '\Brixion\Kolibri\Model\FinancialAdministrationTaxRate[]',
        'use_back_ground_images_by_default' => 'bool',
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
        'back_ground_image_first_page' => null,
        'back_ground_image_following_pages' => null,
        'debtor_number_format_post' => null,
        'debtor_number_format_pre' => null,
        'export_code' => null,
        'export_journal_code' => null,
        'groups' => null,
        'invoice_number_format_post' => null,
        'invoice_number_format_pre' => null,
        'default_business_invoice_template' => null,
        'default_consumer_invoice_template' => null,
        'is_linked_to_software_administration' => null,
        'linked_expiration' => 'date-time',
        'link_to_software_administration' => null,
        'name' => null,
        'next_debtor_number' => null,
        'next_invoice_number' => null,
        'products' => null,
        'tax_rates' => null,
        'use_back_ground_images_by_default' => null,
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
        'back_ground_image_first_page' => false,
        'back_ground_image_following_pages' => false,
        'debtor_number_format_post' => false,
        'debtor_number_format_pre' => false,
        'export_code' => false,
        'export_journal_code' => false,
        'groups' => false,
        'invoice_number_format_post' => false,
        'invoice_number_format_pre' => false,
        'default_business_invoice_template' => false,
        'default_consumer_invoice_template' => false,
        'is_linked_to_software_administration' => false,
        'linked_expiration' => false,
        'link_to_software_administration' => false,
        'name' => false,
        'next_debtor_number' => false,
        'next_invoice_number' => false,
        'products' => false,
        'tax_rates' => false,
        'use_back_ground_images_by_default' => false,
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
        'back_ground_image_first_page' => 'backGroundImageFirstPage',
        'back_ground_image_following_pages' => 'backGroundImageFollowingPages',
        'debtor_number_format_post' => 'debtorNumberFormatPost',
        'debtor_number_format_pre' => 'debtorNumberFormatPre',
        'export_code' => 'exportCode',
        'export_journal_code' => 'exportJournalCode',
        'groups' => 'groups',
        'invoice_number_format_post' => 'invoiceNumberFormatPost',
        'invoice_number_format_pre' => 'invoiceNumberFormatPre',
        'default_business_invoice_template' => 'defaultBusinessInvoiceTemplate',
        'default_consumer_invoice_template' => 'defaultConsumerInvoiceTemplate',
        'is_linked_to_software_administration' => 'isLinkedToSoftwareAdministration',
        'linked_expiration' => 'linkedExpiration',
        'link_to_software_administration' => 'linkToSoftwareAdministration',
        'name' => 'name',
        'next_debtor_number' => 'nextDebtorNumber',
        'next_invoice_number' => 'nextInvoiceNumber',
        'products' => 'products',
        'tax_rates' => 'taxRates',
        'use_back_ground_images_by_default' => 'useBackGroundImagesByDefault',
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
        'back_ground_image_first_page' => 'setBackGroundImageFirstPage',
        'back_ground_image_following_pages' => 'setBackGroundImageFollowingPages',
        'debtor_number_format_post' => 'setDebtorNumberFormatPost',
        'debtor_number_format_pre' => 'setDebtorNumberFormatPre',
        'export_code' => 'setExportCode',
        'export_journal_code' => 'setExportJournalCode',
        'groups' => 'setGroups',
        'invoice_number_format_post' => 'setInvoiceNumberFormatPost',
        'invoice_number_format_pre' => 'setInvoiceNumberFormatPre',
        'default_business_invoice_template' => 'setDefaultBusinessInvoiceTemplate',
        'default_consumer_invoice_template' => 'setDefaultConsumerInvoiceTemplate',
        'is_linked_to_software_administration' => 'setIsLinkedToSoftwareAdministration',
        'linked_expiration' => 'setLinkedExpiration',
        'link_to_software_administration' => 'setLinkToSoftwareAdministration',
        'name' => 'setName',
        'next_debtor_number' => 'setNextDebtorNumber',
        'next_invoice_number' => 'setNextInvoiceNumber',
        'products' => 'setProducts',
        'tax_rates' => 'setTaxRates',
        'use_back_ground_images_by_default' => 'setUseBackGroundImagesByDefault',
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
        'back_ground_image_first_page' => 'getBackGroundImageFirstPage',
        'back_ground_image_following_pages' => 'getBackGroundImageFollowingPages',
        'debtor_number_format_post' => 'getDebtorNumberFormatPost',
        'debtor_number_format_pre' => 'getDebtorNumberFormatPre',
        'export_code' => 'getExportCode',
        'export_journal_code' => 'getExportJournalCode',
        'groups' => 'getGroups',
        'invoice_number_format_post' => 'getInvoiceNumberFormatPost',
        'invoice_number_format_pre' => 'getInvoiceNumberFormatPre',
        'default_business_invoice_template' => 'getDefaultBusinessInvoiceTemplate',
        'default_consumer_invoice_template' => 'getDefaultConsumerInvoiceTemplate',
        'is_linked_to_software_administration' => 'getIsLinkedToSoftwareAdministration',
        'linked_expiration' => 'getLinkedExpiration',
        'link_to_software_administration' => 'getLinkToSoftwareAdministration',
        'name' => 'getName',
        'next_debtor_number' => 'getNextDebtorNumber',
        'next_invoice_number' => 'getNextInvoiceNumber',
        'products' => 'getProducts',
        'tax_rates' => 'getTaxRates',
        'use_back_ground_images_by_default' => 'getUseBackGroundImagesByDefault',
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
        $this->setIfExists('back_ground_image_first_page', $data ?? [], null);
        $this->setIfExists('back_ground_image_following_pages', $data ?? [], null);
        $this->setIfExists('debtor_number_format_post', $data ?? [], null);
        $this->setIfExists('debtor_number_format_pre', $data ?? [], null);
        $this->setIfExists('export_code', $data ?? [], null);
        $this->setIfExists('export_journal_code', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('invoice_number_format_post', $data ?? [], null);
        $this->setIfExists('invoice_number_format_pre', $data ?? [], null);
        $this->setIfExists('default_business_invoice_template', $data ?? [], null);
        $this->setIfExists('default_consumer_invoice_template', $data ?? [], null);
        $this->setIfExists('is_linked_to_software_administration', $data ?? [], null);
        $this->setIfExists('linked_expiration', $data ?? [], null);
        $this->setIfExists('link_to_software_administration', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('next_debtor_number', $data ?? [], null);
        $this->setIfExists('next_invoice_number', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('tax_rates', $data ?? [], null);
        $this->setIfExists('use_back_ground_images_by_default', $data ?? [], null);
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

        if (!is_null($this->container['debtor_number_format_post']) && (mb_strlen($this->container['debtor_number_format_post']) > 10)) {
            $invalidProperties[] = "invalid value for 'debtor_number_format_post', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['debtor_number_format_post']) && (mb_strlen($this->container['debtor_number_format_post']) < 0)) {
            $invalidProperties[] = "invalid value for 'debtor_number_format_post', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['debtor_number_format_pre']) && (mb_strlen($this->container['debtor_number_format_pre']) > 10)) {
            $invalidProperties[] = "invalid value for 'debtor_number_format_pre', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['debtor_number_format_pre']) && (mb_strlen($this->container['debtor_number_format_pre']) < 0)) {
            $invalidProperties[] = "invalid value for 'debtor_number_format_pre', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['export_code']) && (mb_strlen($this->container['export_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'export_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['export_code']) && (mb_strlen($this->container['export_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'export_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['export_journal_code']) && (mb_strlen($this->container['export_journal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'export_journal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['export_journal_code']) && (mb_strlen($this->container['export_journal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'export_journal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['invoice_number_format_post']) && (mb_strlen($this->container['invoice_number_format_post']) > 10)) {
            $invalidProperties[] = "invalid value for 'invoice_number_format_post', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['invoice_number_format_post']) && (mb_strlen($this->container['invoice_number_format_post']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_number_format_post', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['invoice_number_format_pre']) && (mb_strlen($this->container['invoice_number_format_pre']) > 10)) {
            $invalidProperties[] = "invalid value for 'invoice_number_format_pre', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['invoice_number_format_pre']) && (mb_strlen($this->container['invoice_number_format_pre']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_number_format_pre', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['default_business_invoice_template']) && (mb_strlen($this->container['default_business_invoice_template']) > 100)) {
            $invalidProperties[] = "invalid value for 'default_business_invoice_template', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['default_business_invoice_template']) && (mb_strlen($this->container['default_business_invoice_template']) < 0)) {
            $invalidProperties[] = "invalid value for 'default_business_invoice_template', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['default_consumer_invoice_template']) && (mb_strlen($this->container['default_consumer_invoice_template']) > 100)) {
            $invalidProperties[] = "invalid value for 'default_consumer_invoice_template', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['default_consumer_invoice_template']) && (mb_strlen($this->container['default_consumer_invoice_template']) < 0)) {
            $invalidProperties[] = "invalid value for 'default_consumer_invoice_template', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['is_linked_to_software_administration'] === null) {
            $invalidProperties[] = "'is_linked_to_software_administration' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next_debtor_number']) && (mb_strlen($this->container['next_debtor_number']) > 15)) {
            $invalidProperties[] = "invalid value for 'next_debtor_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['next_debtor_number']) && (mb_strlen($this->container['next_debtor_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'next_debtor_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next_invoice_number']) && (mb_strlen($this->container['next_invoice_number']) > 15)) {
            $invalidProperties[] = "invalid value for 'next_invoice_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['next_invoice_number']) && (mb_strlen($this->container['next_invoice_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'next_invoice_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['use_back_ground_images_by_default'] === null) {
            $invalidProperties[] = "'use_back_ground_images_by_default' can't be null";
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
     * Gets back_ground_image_first_page
     *
     * @return \Brixion\Kolibri\Model\ImageBlob|null
     */
    public function getBackGroundImageFirstPage()
    {
        return $this->container['back_ground_image_first_page'];
    }

    /**
     * Sets back_ground_image_first_page
     *
     * @param \Brixion\Kolibri\Model\ImageBlob|null $back_ground_image_first_page back_ground_image_first_page
     *
     * @return self
     */
    public function setBackGroundImageFirstPage($back_ground_image_first_page)
    {
        if (is_null($back_ground_image_first_page)) {
            throw new \InvalidArgumentException('non-nullable back_ground_image_first_page cannot be null');
        }
        $this->container['back_ground_image_first_page'] = $back_ground_image_first_page;

        return $this;
    }

    /**
     * Gets back_ground_image_following_pages
     *
     * @return \Brixion\Kolibri\Model\ImageBlob|null
     */
    public function getBackGroundImageFollowingPages()
    {
        return $this->container['back_ground_image_following_pages'];
    }

    /**
     * Sets back_ground_image_following_pages
     *
     * @param \Brixion\Kolibri\Model\ImageBlob|null $back_ground_image_following_pages back_ground_image_following_pages
     *
     * @return self
     */
    public function setBackGroundImageFollowingPages($back_ground_image_following_pages)
    {
        if (is_null($back_ground_image_following_pages)) {
            throw new \InvalidArgumentException('non-nullable back_ground_image_following_pages cannot be null');
        }
        $this->container['back_ground_image_following_pages'] = $back_ground_image_following_pages;

        return $this;
    }

    /**
     * Gets debtor_number_format_post
     *
     * @return string|null
     */
    public function getDebtorNumberFormatPost()
    {
        return $this->container['debtor_number_format_post'];
    }

    /**
     * Sets debtor_number_format_post
     *
     * @param string|null $debtor_number_format_post debtor_number_format_post
     *
     * @return self
     */
    public function setDebtorNumberFormatPost($debtor_number_format_post)
    {
        if (is_null($debtor_number_format_post)) {
            throw new \InvalidArgumentException('non-nullable debtor_number_format_post cannot be null');
        }
        if ((mb_strlen($debtor_number_format_post) > 10)) {
            throw new \InvalidArgumentException('invalid length for $debtor_number_format_post when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($debtor_number_format_post) < 0)) {
            throw new \InvalidArgumentException('invalid length for $debtor_number_format_post when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['debtor_number_format_post'] = $debtor_number_format_post;

        return $this;
    }

    /**
     * Gets debtor_number_format_pre
     *
     * @return string|null
     */
    public function getDebtorNumberFormatPre()
    {
        return $this->container['debtor_number_format_pre'];
    }

    /**
     * Sets debtor_number_format_pre
     *
     * @param string|null $debtor_number_format_pre debtor_number_format_pre
     *
     * @return self
     */
    public function setDebtorNumberFormatPre($debtor_number_format_pre)
    {
        if (is_null($debtor_number_format_pre)) {
            throw new \InvalidArgumentException('non-nullable debtor_number_format_pre cannot be null');
        }
        if ((mb_strlen($debtor_number_format_pre) > 10)) {
            throw new \InvalidArgumentException('invalid length for $debtor_number_format_pre when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($debtor_number_format_pre) < 0)) {
            throw new \InvalidArgumentException('invalid length for $debtor_number_format_pre when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['debtor_number_format_pre'] = $debtor_number_format_pre;

        return $this;
    }

    /**
     * Gets export_code
     *
     * @return string|null
     */
    public function getExportCode()
    {
        return $this->container['export_code'];
    }

    /**
     * Sets export_code
     *
     * @param string|null $export_code export_code
     *
     * @return self
     */
    public function setExportCode($export_code)
    {
        if (is_null($export_code)) {
            throw new \InvalidArgumentException('non-nullable export_code cannot be null');
        }
        if ((mb_strlen($export_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $export_code when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($export_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $export_code when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['export_code'] = $export_code;

        return $this;
    }

    /**
     * Gets export_journal_code
     *
     * @return string|null
     */
    public function getExportJournalCode()
    {
        return $this->container['export_journal_code'];
    }

    /**
     * Sets export_journal_code
     *
     * @param string|null $export_journal_code export_journal_code
     *
     * @return self
     */
    public function setExportJournalCode($export_journal_code)
    {
        if (is_null($export_journal_code)) {
            throw new \InvalidArgumentException('non-nullable export_journal_code cannot be null');
        }
        if ((mb_strlen($export_journal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $export_journal_code when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($export_journal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $export_journal_code when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['export_journal_code'] = $export_journal_code;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Brixion\Kolibri\Model\FinancialAdministrationGroup[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Brixion\Kolibri\Model\FinancialAdministrationGroup[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets invoice_number_format_post
     *
     * @return string|null
     */
    public function getInvoiceNumberFormatPost()
    {
        return $this->container['invoice_number_format_post'];
    }

    /**
     * Sets invoice_number_format_post
     *
     * @param string|null $invoice_number_format_post invoice_number_format_post
     *
     * @return self
     */
    public function setInvoiceNumberFormatPost($invoice_number_format_post)
    {
        if (is_null($invoice_number_format_post)) {
            throw new \InvalidArgumentException('non-nullable invoice_number_format_post cannot be null');
        }
        if ((mb_strlen($invoice_number_format_post) > 10)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number_format_post when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($invoice_number_format_post) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number_format_post when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['invoice_number_format_post'] = $invoice_number_format_post;

        return $this;
    }

    /**
     * Gets invoice_number_format_pre
     *
     * @return string|null
     */
    public function getInvoiceNumberFormatPre()
    {
        return $this->container['invoice_number_format_pre'];
    }

    /**
     * Sets invoice_number_format_pre
     *
     * @param string|null $invoice_number_format_pre invoice_number_format_pre
     *
     * @return self
     */
    public function setInvoiceNumberFormatPre($invoice_number_format_pre)
    {
        if (is_null($invoice_number_format_pre)) {
            throw new \InvalidArgumentException('non-nullable invoice_number_format_pre cannot be null');
        }
        if ((mb_strlen($invoice_number_format_pre) > 10)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number_format_pre when calling FinancialAdministration., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($invoice_number_format_pre) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number_format_pre when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['invoice_number_format_pre'] = $invoice_number_format_pre;

        return $this;
    }

    /**
     * Gets default_business_invoice_template
     *
     * @return string|null
     */
    public function getDefaultBusinessInvoiceTemplate()
    {
        return $this->container['default_business_invoice_template'];
    }

    /**
     * Sets default_business_invoice_template
     *
     * @param string|null $default_business_invoice_template default_business_invoice_template
     *
     * @return self
     */
    public function setDefaultBusinessInvoiceTemplate($default_business_invoice_template)
    {
        if (is_null($default_business_invoice_template)) {
            throw new \InvalidArgumentException('non-nullable default_business_invoice_template cannot be null');
        }
        if ((mb_strlen($default_business_invoice_template) > 100)) {
            throw new \InvalidArgumentException('invalid length for $default_business_invoice_template when calling FinancialAdministration., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($default_business_invoice_template) < 0)) {
            throw new \InvalidArgumentException('invalid length for $default_business_invoice_template when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['default_business_invoice_template'] = $default_business_invoice_template;

        return $this;
    }

    /**
     * Gets default_consumer_invoice_template
     *
     * @return string|null
     */
    public function getDefaultConsumerInvoiceTemplate()
    {
        return $this->container['default_consumer_invoice_template'];
    }

    /**
     * Sets default_consumer_invoice_template
     *
     * @param string|null $default_consumer_invoice_template default_consumer_invoice_template
     *
     * @return self
     */
    public function setDefaultConsumerInvoiceTemplate($default_consumer_invoice_template)
    {
        if (is_null($default_consumer_invoice_template)) {
            throw new \InvalidArgumentException('non-nullable default_consumer_invoice_template cannot be null');
        }
        if ((mb_strlen($default_consumer_invoice_template) > 100)) {
            throw new \InvalidArgumentException('invalid length for $default_consumer_invoice_template when calling FinancialAdministration., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($default_consumer_invoice_template) < 0)) {
            throw new \InvalidArgumentException('invalid length for $default_consumer_invoice_template when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['default_consumer_invoice_template'] = $default_consumer_invoice_template;

        return $this;
    }

    /**
     * Gets is_linked_to_software_administration
     *
     * @return bool
     */
    public function getIsLinkedToSoftwareAdministration()
    {
        return $this->container['is_linked_to_software_administration'];
    }

    /**
     * Sets is_linked_to_software_administration
     *
     * @param bool $is_linked_to_software_administration is_linked_to_software_administration
     *
     * @return self
     */
    public function setIsLinkedToSoftwareAdministration($is_linked_to_software_administration)
    {
        if (is_null($is_linked_to_software_administration)) {
            throw new \InvalidArgumentException('non-nullable is_linked_to_software_administration cannot be null');
        }
        $this->container['is_linked_to_software_administration'] = $is_linked_to_software_administration;

        return $this;
    }

    /**
     * Gets linked_expiration
     *
     * @return \DateTime|null
     */
    public function getLinkedExpiration()
    {
        return $this->container['linked_expiration'];
    }

    /**
     * Sets linked_expiration
     *
     * @param \DateTime|null $linked_expiration linked_expiration
     *
     * @return self
     */
    public function setLinkedExpiration($linked_expiration)
    {
        if (is_null($linked_expiration)) {
            throw new \InvalidArgumentException('non-nullable linked_expiration cannot be null');
        }
        $this->container['linked_expiration'] = $linked_expiration;

        return $this;
    }

    /**
     * Gets link_to_software_administration
     *
     * @return \Brixion\Kolibri\Model\SoftwareAdministration|null
     */
    public function getLinkToSoftwareAdministration()
    {
        return $this->container['link_to_software_administration'];
    }

    /**
     * Sets link_to_software_administration
     *
     * @param \Brixion\Kolibri\Model\SoftwareAdministration|null $link_to_software_administration link_to_software_administration
     *
     * @return self
     */
    public function setLinkToSoftwareAdministration($link_to_software_administration)
    {
        if (is_null($link_to_software_administration)) {
            throw new \InvalidArgumentException('non-nullable link_to_software_administration cannot be null');
        }
        $this->container['link_to_software_administration'] = $link_to_software_administration;

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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FinancialAdministration., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets next_debtor_number
     *
     * @return string|null
     */
    public function getNextDebtorNumber()
    {
        return $this->container['next_debtor_number'];
    }

    /**
     * Sets next_debtor_number
     *
     * @param string|null $next_debtor_number next_debtor_number
     *
     * @return self
     */
    public function setNextDebtorNumber($next_debtor_number)
    {
        if (is_null($next_debtor_number)) {
            throw new \InvalidArgumentException('non-nullable next_debtor_number cannot be null');
        }
        if ((mb_strlen($next_debtor_number) > 15)) {
            throw new \InvalidArgumentException('invalid length for $next_debtor_number when calling FinancialAdministration., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($next_debtor_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $next_debtor_number when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['next_debtor_number'] = $next_debtor_number;

        return $this;
    }

    /**
     * Gets next_invoice_number
     *
     * @return string|null
     */
    public function getNextInvoiceNumber()
    {
        return $this->container['next_invoice_number'];
    }

    /**
     * Sets next_invoice_number
     *
     * @param string|null $next_invoice_number next_invoice_number
     *
     * @return self
     */
    public function setNextInvoiceNumber($next_invoice_number)
    {
        if (is_null($next_invoice_number)) {
            throw new \InvalidArgumentException('non-nullable next_invoice_number cannot be null');
        }
        if ((mb_strlen($next_invoice_number) > 15)) {
            throw new \InvalidArgumentException('invalid length for $next_invoice_number when calling FinancialAdministration., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($next_invoice_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $next_invoice_number when calling FinancialAdministration., must be bigger than or equal to 0.');
        }

        $this->container['next_invoice_number'] = $next_invoice_number;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Brixion\Kolibri\Model\FinancialAdministrationProduct[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Brixion\Kolibri\Model\FinancialAdministrationProduct[]|null $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets tax_rates
     *
     * @return \Brixion\Kolibri\Model\FinancialAdministrationTaxRate[]|null
     */
    public function getTaxRates()
    {
        return $this->container['tax_rates'];
    }

    /**
     * Sets tax_rates
     *
     * @param \Brixion\Kolibri\Model\FinancialAdministrationTaxRate[]|null $tax_rates tax_rates
     *
     * @return self
     */
    public function setTaxRates($tax_rates)
    {
        if (is_null($tax_rates)) {
            throw new \InvalidArgumentException('non-nullable tax_rates cannot be null');
        }
        $this->container['tax_rates'] = $tax_rates;

        return $this;
    }

    /**
     * Gets use_back_ground_images_by_default
     *
     * @return bool
     */
    public function getUseBackGroundImagesByDefault()
    {
        return $this->container['use_back_ground_images_by_default'];
    }

    /**
     * Sets use_back_ground_images_by_default
     *
     * @param bool $use_back_ground_images_by_default use_back_ground_images_by_default
     *
     * @return self
     */
    public function setUseBackGroundImagesByDefault($use_back_ground_images_by_default)
    {
        if (is_null($use_back_ground_images_by_default)) {
            throw new \InvalidArgumentException('non-nullable use_back_ground_images_by_default cannot be null');
        }
        $this->container['use_back_ground_images_by_default'] = $use_back_ground_images_by_default;

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
            throw new \InvalidArgumentException('invalid length for $id when calling FinancialAdministration., must be bigger than or equal to 1.');
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
