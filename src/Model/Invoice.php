<?php

declare(strict_types=1);

/**
 * Invoice - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Invoice.
 * @implements \ArrayAccess<string, mixed>
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'tax_number_broker' => 'string',
        'tax_number_customer' => 'string',
        'currency' => 'string',
        'customer_address' => '\Brixion\Kolibri\Model\Address',
        'customer_name' => 'string',
        'debtor_number_format_pre' => 'string',
        'debtor_number' => 'string',
        'debtor_number_format_post' => 'string',
        'invoice_number_format_pre' => 'string',
        'invoice_number' => 'int',
        'invoice_number_format_post' => 'string',
        'due_date' => '\DateTime',
        'due_date_text' => 'string',
        'financial_administration_export_batch_id' => 'string',
        'financial_administration_id' => 'string',
        'invoice_date' => '\DateTime',
        'display_name' => 'string',
        'invoice_type' => '\Brixion\Kolibri\Model\InvoiceType',
        'kvk_number' => 'string',
        'lines' => '\Brixion\Kolibri\Model\InvoiceLine[]',
        'products_to_pass_on' => '\Brixion\Kolibri\Model\ProductOrder[]',
        'purpose' => 'string',
        'reference' => 'string',
        'remarks' => 'string',
        'status' => '\Brixion\Kolibri\Model\InvoiceStatus',
        'tav_customer' => 'string',
        'total_price_gross' => 'float',
        'total_price_net' => 'float',
        'total_tax' => 'float',
        'is_overdue' => 'bool',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_relation' => '\Brixion\Kolibri\Model\LinkedRelation',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
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
        'tax_number_broker' => null,
        'tax_number_customer' => null,
        'currency' => null,
        'customer_address' => null,
        'customer_name' => null,
        'debtor_number_format_pre' => null,
        'debtor_number' => null,
        'debtor_number_format_post' => null,
        'invoice_number_format_pre' => null,
        'invoice_number' => 'int32',
        'invoice_number_format_post' => null,
        'due_date' => 'date-time',
        'due_date_text' => null,
        'financial_administration_export_batch_id' => 'guid',
        'financial_administration_id' => 'guid',
        'invoice_date' => 'date-time',
        'display_name' => null,
        'invoice_type' => null,
        'kvk_number' => null,
        'lines' => null,
        'products_to_pass_on' => null,
        'purpose' => null,
        'reference' => null,
        'remarks' => null,
        'status' => null,
        'tav_customer' => null,
        'total_price_gross' => 'decimal',
        'total_price_net' => 'decimal',
        'total_tax' => 'decimal',
        'is_overdue' => null,
        'linked_assignment' => null,
        'linked_relation' => null,
        'linked_employee' => null,
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
        'tax_number_broker' => false,
        'tax_number_customer' => false,
        'currency' => false,
        'customer_address' => false,
        'customer_name' => false,
        'debtor_number_format_pre' => false,
        'debtor_number' => false,
        'debtor_number_format_post' => false,
        'invoice_number_format_pre' => false,
        'invoice_number' => false,
        'invoice_number_format_post' => false,
        'due_date' => false,
        'due_date_text' => false,
        'financial_administration_export_batch_id' => false,
        'financial_administration_id' => false,
        'invoice_date' => false,
        'display_name' => false,
        'invoice_type' => false,
        'kvk_number' => false,
        'lines' => false,
        'products_to_pass_on' => false,
        'purpose' => false,
        'reference' => false,
        'remarks' => false,
        'status' => false,
        'tav_customer' => false,
        'total_price_gross' => false,
        'total_price_net' => false,
        'total_tax' => false,
        'is_overdue' => false,
        'linked_assignment' => false,
        'linked_relation' => false,
        'linked_employee' => false,
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
        'tax_number_broker' => 'taxNumberBroker',
        'tax_number_customer' => 'taxNumberCustomer',
        'currency' => 'currency',
        'customer_address' => 'customerAddress',
        'customer_name' => 'customerName',
        'debtor_number_format_pre' => 'debtorNumberFormatPre',
        'debtor_number' => 'debtorNumber',
        'debtor_number_format_post' => 'debtorNumberFormatPost',
        'invoice_number_format_pre' => 'invoiceNumberFormatPre',
        'invoice_number' => 'invoiceNumber',
        'invoice_number_format_post' => 'invoiceNumberFormatPost',
        'due_date' => 'dueDate',
        'due_date_text' => 'dueDateText',
        'financial_administration_export_batch_id' => 'financialAdministrationExportBatchID',
        'financial_administration_id' => 'financialAdministrationID',
        'invoice_date' => 'invoiceDate',
        'display_name' => 'displayName',
        'invoice_type' => 'invoiceType',
        'kvk_number' => 'kvkNumber',
        'lines' => 'lines',
        'products_to_pass_on' => 'productsToPassOn',
        'purpose' => 'purpose',
        'reference' => 'reference',
        'remarks' => 'remarks',
        'status' => 'status',
        'tav_customer' => 'tavCustomer',
        'total_price_gross' => 'totalPriceGross',
        'total_price_net' => 'totalPriceNet',
        'total_tax' => 'totalTax',
        'is_overdue' => 'isOverdue',
        'linked_assignment' => 'linkedAssignment',
        'linked_relation' => 'linkedRelation',
        'linked_employee' => 'linkedEmployee',
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
        'tax_number_broker' => 'setTaxNumberBroker',
        'tax_number_customer' => 'setTaxNumberCustomer',
        'currency' => 'setCurrency',
        'customer_address' => 'setCustomerAddress',
        'customer_name' => 'setCustomerName',
        'debtor_number_format_pre' => 'setDebtorNumberFormatPre',
        'debtor_number' => 'setDebtorNumber',
        'debtor_number_format_post' => 'setDebtorNumberFormatPost',
        'invoice_number_format_pre' => 'setInvoiceNumberFormatPre',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_number_format_post' => 'setInvoiceNumberFormatPost',
        'due_date' => 'setDueDate',
        'due_date_text' => 'setDueDateText',
        'financial_administration_export_batch_id' => 'setFinancialAdministrationExportBatchId',
        'financial_administration_id' => 'setFinancialAdministrationId',
        'invoice_date' => 'setInvoiceDate',
        'display_name' => 'setDisplayName',
        'invoice_type' => 'setInvoiceType',
        'kvk_number' => 'setKvkNumber',
        'lines' => 'setLines',
        'products_to_pass_on' => 'setProductsToPassOn',
        'purpose' => 'setPurpose',
        'reference' => 'setReference',
        'remarks' => 'setRemarks',
        'status' => 'setStatus',
        'tav_customer' => 'setTavCustomer',
        'total_price_gross' => 'setTotalPriceGross',
        'total_price_net' => 'setTotalPriceNet',
        'total_tax' => 'setTotalTax',
        'is_overdue' => 'setIsOverdue',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_relation' => 'setLinkedRelation',
        'linked_employee' => 'setLinkedEmployee',
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
        'tax_number_broker' => 'getTaxNumberBroker',
        'tax_number_customer' => 'getTaxNumberCustomer',
        'currency' => 'getCurrency',
        'customer_address' => 'getCustomerAddress',
        'customer_name' => 'getCustomerName',
        'debtor_number_format_pre' => 'getDebtorNumberFormatPre',
        'debtor_number' => 'getDebtorNumber',
        'debtor_number_format_post' => 'getDebtorNumberFormatPost',
        'invoice_number_format_pre' => 'getInvoiceNumberFormatPre',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_number_format_post' => 'getInvoiceNumberFormatPost',
        'due_date' => 'getDueDate',
        'due_date_text' => 'getDueDateText',
        'financial_administration_export_batch_id' => 'getFinancialAdministrationExportBatchId',
        'financial_administration_id' => 'getFinancialAdministrationId',
        'invoice_date' => 'getInvoiceDate',
        'display_name' => 'getDisplayName',
        'invoice_type' => 'getInvoiceType',
        'kvk_number' => 'getKvkNumber',
        'lines' => 'getLines',
        'products_to_pass_on' => 'getProductsToPassOn',
        'purpose' => 'getPurpose',
        'reference' => 'getReference',
        'remarks' => 'getRemarks',
        'status' => 'getStatus',
        'tav_customer' => 'getTavCustomer',
        'total_price_gross' => 'getTotalPriceGross',
        'total_price_net' => 'getTotalPriceNet',
        'total_tax' => 'getTotalTax',
        'is_overdue' => 'getIsOverdue',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_relation' => 'getLinkedRelation',
        'linked_employee' => 'getLinkedEmployee',
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
        $this->setIfExists('tax_number_broker', $data ?? [], null);
        $this->setIfExists('tax_number_customer', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('customer_address', $data ?? [], null);
        $this->setIfExists('customer_name', $data ?? [], null);
        $this->setIfExists('debtor_number_format_pre', $data ?? [], null);
        $this->setIfExists('debtor_number', $data ?? [], null);
        $this->setIfExists('debtor_number_format_post', $data ?? [], null);
        $this->setIfExists('invoice_number_format_pre', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_number_format_post', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('due_date_text', $data ?? [], null);
        $this->setIfExists('financial_administration_export_batch_id', $data ?? [], null);
        $this->setIfExists('financial_administration_id', $data ?? [], null);
        $this->setIfExists('invoice_date', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('invoice_type', $data ?? [], null);
        $this->setIfExists('kvk_number', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('products_to_pass_on', $data ?? [], null);
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tav_customer', $data ?? [], null);
        $this->setIfExists('total_price_gross', $data ?? [], null);
        $this->setIfExists('total_price_net', $data ?? [], null);
        $this->setIfExists('total_tax', $data ?? [], null);
        $this->setIfExists('is_overdue', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_relation', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
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

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if (!is_null($this->container['due_date_text']) && (mb_strlen($this->container['due_date_text']) > 1024)) {
            $invalidProperties[] = "invalid value for 'due_date_text', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['due_date_text']) && (mb_strlen($this->container['due_date_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'due_date_text', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['invoice_date'] === null) {
            $invalidProperties[] = "'invoice_date' can't be null";
        }
        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['total_price_gross'] === null) {
            $invalidProperties[] = "'total_price_gross' can't be null";
        }
        if ($this->container['total_price_net'] === null) {
            $invalidProperties[] = "'total_price_net' can't be null";
        }
        if ($this->container['total_tax'] === null) {
            $invalidProperties[] = "'total_tax' can't be null";
        }
        if ($this->container['is_overdue'] === null) {
            $invalidProperties[] = "'is_overdue' can't be null";
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
     * Gets tax_number_broker
     *
     * @return string|null
     */
    public function getTaxNumberBroker()
    {
        return $this->container['tax_number_broker'];
    }

    /**
     * Sets tax_number_broker
     *
     * @param string|null $tax_number_broker tax_number_broker
     *
     * @return self
     */
    public function setTaxNumberBroker($tax_number_broker)
    {
        if (is_null($tax_number_broker)) {
            throw new \InvalidArgumentException('non-nullable tax_number_broker cannot be null');
        }
        $this->container['tax_number_broker'] = $tax_number_broker;

        return $this;
    }

    /**
     * Gets tax_number_customer
     *
     * @return string|null
     */
    public function getTaxNumberCustomer()
    {
        return $this->container['tax_number_customer'];
    }

    /**
     * Sets tax_number_customer
     *
     * @param string|null $tax_number_customer tax_number_customer
     *
     * @return self
     */
    public function setTaxNumberCustomer($tax_number_customer)
    {
        if (is_null($tax_number_customer)) {
            throw new \InvalidArgumentException('non-nullable tax_number_customer cannot be null');
        }
        $this->container['tax_number_customer'] = $tax_number_customer;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer_address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getCustomerAddress()
    {
        return $this->container['customer_address'];
    }

    /**
     * Sets customer_address
     *
     * @param \Brixion\Kolibri\Model\Address|null $customer_address customer_address
     *
     * @return self
     */
    public function setCustomerAddress($customer_address)
    {
        if (is_null($customer_address)) {
            throw new \InvalidArgumentException('non-nullable customer_address cannot be null');
        }
        $this->container['customer_address'] = $customer_address;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string|null $customer_name customer_name
     *
     * @return self
     */
    public function setCustomerName($customer_name)
    {
        if (is_null($customer_name)) {
            throw new \InvalidArgumentException('non-nullable customer_name cannot be null');
        }
        $this->container['customer_name'] = $customer_name;

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
        $this->container['debtor_number_format_pre'] = $debtor_number_format_pre;

        return $this;
    }

    /**
     * Gets debtor_number
     *
     * @return string|null
     */
    public function getDebtorNumber()
    {
        return $this->container['debtor_number'];
    }

    /**
     * Sets debtor_number
     *
     * @param string|null $debtor_number debtor_number
     *
     * @return self
     */
    public function setDebtorNumber($debtor_number)
    {
        if (is_null($debtor_number)) {
            throw new \InvalidArgumentException('non-nullable debtor_number cannot be null');
        }
        $this->container['debtor_number'] = $debtor_number;

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
        $this->container['debtor_number_format_post'] = $debtor_number_format_post;

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
        $this->container['invoice_number_format_pre'] = $invoice_number_format_pre;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param int $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

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
        $this->container['invoice_number_format_post'] = $invoice_number_format_post;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets due_date_text
     *
     * @return string|null
     */
    public function getDueDateText()
    {
        return $this->container['due_date_text'];
    }

    /**
     * Sets due_date_text
     *
     * @param string|null $due_date_text due_date_text
     *
     * @return self
     */
    public function setDueDateText($due_date_text)
    {
        if (is_null($due_date_text)) {
            throw new \InvalidArgumentException('non-nullable due_date_text cannot be null');
        }
        if ((mb_strlen($due_date_text) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $due_date_text when calling Invoice., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($due_date_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $due_date_text when calling Invoice., must be bigger than or equal to 0.');
        }

        $this->container['due_date_text'] = $due_date_text;

        return $this;
    }

    /**
     * Gets financial_administration_export_batch_id
     *
     * @return string|null
     */
    public function getFinancialAdministrationExportBatchId()
    {
        return $this->container['financial_administration_export_batch_id'];
    }

    /**
     * Sets financial_administration_export_batch_id
     *
     * @param string|null $financial_administration_export_batch_id financial_administration_export_batch_id
     *
     * @return self
     */
    public function setFinancialAdministrationExportBatchId($financial_administration_export_batch_id)
    {
        if (is_null($financial_administration_export_batch_id)) {
            throw new \InvalidArgumentException('non-nullable financial_administration_export_batch_id cannot be null');
        }
        $this->container['financial_administration_export_batch_id'] = $financial_administration_export_batch_id;

        return $this;
    }

    /**
     * Gets financial_administration_id
     *
     * @return string|null
     */
    public function getFinancialAdministrationId()
    {
        return $this->container['financial_administration_id'];
    }

    /**
     * Sets financial_administration_id
     *
     * @param string|null $financial_administration_id financial_administration_id
     *
     * @return self
     */
    public function setFinancialAdministrationId($financial_administration_id)
    {
        if (is_null($financial_administration_id)) {
            throw new \InvalidArgumentException('non-nullable financial_administration_id cannot be null');
        }
        $this->container['financial_administration_id'] = $financial_administration_id;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        if (is_null($invoice_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_date cannot be null');
        }
        $this->container['invoice_date'] = $invoice_date;

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
     * Gets invoice_type
     *
     * @return \Brixion\Kolibri\Model\InvoiceType
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param \Brixion\Kolibri\Model\InvoiceType $invoice_type invoice_type
     *
     * @return self
     */
    public function setInvoiceType($invoice_type)
    {
        if (is_null($invoice_type)) {
            throw new \InvalidArgumentException('non-nullable invoice_type cannot be null');
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets kvk_number
     *
     * @return string|null
     */
    public function getKvkNumber()
    {
        return $this->container['kvk_number'];
    }

    /**
     * Sets kvk_number
     *
     * @param string|null $kvk_number kvk_number
     *
     * @return self
     */
    public function setKvkNumber($kvk_number)
    {
        if (is_null($kvk_number)) {
            throw new \InvalidArgumentException('non-nullable kvk_number cannot be null');
        }
        $this->container['kvk_number'] = $kvk_number;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Brixion\Kolibri\Model\InvoiceLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Brixion\Kolibri\Model\InvoiceLine[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets products_to_pass_on
     *
     * @return \Brixion\Kolibri\Model\ProductOrder[]|null
     */
    public function getProductsToPassOn()
    {
        return $this->container['products_to_pass_on'];
    }

    /**
     * Sets products_to_pass_on
     *
     * @param \Brixion\Kolibri\Model\ProductOrder[]|null $products_to_pass_on products_to_pass_on
     *
     * @return self
     */
    public function setProductsToPassOn($products_to_pass_on)
    {
        if (is_null($products_to_pass_on)) {
            throw new \InvalidArgumentException('non-nullable products_to_pass_on cannot be null');
        }
        $this->container['products_to_pass_on'] = $products_to_pass_on;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose purpose
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        if (is_null($purpose)) {
            throw new \InvalidArgumentException('non-nullable purpose cannot be null');
        }
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        if (is_null($remarks)) {
            throw new \InvalidArgumentException('non-nullable remarks cannot be null');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Brixion\Kolibri\Model\InvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Brixion\Kolibri\Model\InvoiceStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tav_customer
     *
     * @return string|null
     */
    public function getTavCustomer()
    {
        return $this->container['tav_customer'];
    }

    /**
     * Sets tav_customer
     *
     * @param string|null $tav_customer tav_customer
     *
     * @return self
     */
    public function setTavCustomer($tav_customer)
    {
        if (is_null($tav_customer)) {
            throw new \InvalidArgumentException('non-nullable tav_customer cannot be null');
        }
        $this->container['tav_customer'] = $tav_customer;

        return $this;
    }

    /**
     * Gets total_price_gross
     *
     * @return float
     */
    public function getTotalPriceGross()
    {
        return $this->container['total_price_gross'];
    }

    /**
     * Sets total_price_gross
     *
     * @param float $total_price_gross total_price_gross
     *
     * @return self
     */
    public function setTotalPriceGross($total_price_gross)
    {
        if (is_null($total_price_gross)) {
            throw new \InvalidArgumentException('non-nullable total_price_gross cannot be null');
        }
        $this->container['total_price_gross'] = $total_price_gross;

        return $this;
    }

    /**
     * Gets total_price_net
     *
     * @return float
     */
    public function getTotalPriceNet()
    {
        return $this->container['total_price_net'];
    }

    /**
     * Sets total_price_net
     *
     * @param float $total_price_net total_price_net
     *
     * @return self
     */
    public function setTotalPriceNet($total_price_net)
    {
        if (is_null($total_price_net)) {
            throw new \InvalidArgumentException('non-nullable total_price_net cannot be null');
        }
        $this->container['total_price_net'] = $total_price_net;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float $total_tax total_tax
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        if (is_null($total_tax)) {
            throw new \InvalidArgumentException('non-nullable total_tax cannot be null');
        }
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets is_overdue
     *
     * @return bool
     */
    public function getIsOverdue()
    {
        return $this->container['is_overdue'];
    }

    /**
     * Sets is_overdue
     *
     * @param bool $is_overdue is_overdue
     *
     * @return self
     */
    public function setIsOverdue($is_overdue)
    {
        if (is_null($is_overdue)) {
            throw new \InvalidArgumentException('non-nullable is_overdue cannot be null');
        }
        $this->container['is_overdue'] = $is_overdue;

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
            throw new \InvalidArgumentException('invalid length for $id when calling Invoice., must be bigger than or equal to 1.');
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
