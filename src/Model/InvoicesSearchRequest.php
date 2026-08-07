<?php

declare(strict_types=1);

/**
 * InvoicesSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoicesSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class InvoicesSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'InvoicesSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'invoice_id' => 'string',
        'skip_system_invoices_are_missing_check' => 'bool',
        'status_filter' => '\Brixion\Kolibri\Model\InvoiceStatus[]',
        'order_by' => '\Brixion\Kolibri\Model\InvoiceOrderByField',
        'term_fields' => '\Brixion\Kolibri\Model\InvoiceTermField[]',
        'parent_id' => 'string',
        'culture' => 'string',
        'overdue_from' => '\DateTime',
        'overdue_until' => '\DateTime',
        'invoice_date_from' => '\DateTime',
        'invoice_date_until' => '\DateTime',
        'filter_by_active' => '\Brixion\Kolibri\Model\ActiveFilter',
        'order' => '\Brixion\Kolibri\Model\SortOrder',
        'skip' => 'int',
        'take' => 'int',
        'term' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'invoice_id' => 'guid',
        'skip_system_invoices_are_missing_check' => null,
        'status_filter' => null,
        'order_by' => null,
        'term_fields' => null,
        'parent_id' => 'guid',
        'culture' => null,
        'overdue_from' => 'date-time',
        'overdue_until' => 'date-time',
        'invoice_date_from' => 'date-time',
        'invoice_date_until' => 'date-time',
        'filter_by_active' => null,
        'order' => null,
        'skip' => 'int32',
        'take' => 'int32',
        'term' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'invoice_id' => false,
        'skip_system_invoices_are_missing_check' => false,
        'status_filter' => false,
        'order_by' => false,
        'term_fields' => false,
        'parent_id' => false,
        'culture' => false,
        'overdue_from' => false,
        'overdue_until' => false,
        'invoice_date_from' => false,
        'invoice_date_until' => false,
        'filter_by_active' => false,
        'order' => false,
        'skip' => false,
        'take' => false,
        'term' => false,
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
        'invoice_id' => 'invoiceId',
        'skip_system_invoices_are_missing_check' => 'skipSystemInvoicesAreMissingCheck',
        'status_filter' => 'statusFilter',
        'order_by' => 'orderBy',
        'term_fields' => 'termFields',
        'parent_id' => 'parentId',
        'culture' => 'culture',
        'overdue_from' => 'overdueFrom',
        'overdue_until' => 'overdueUntil',
        'invoice_date_from' => 'invoiceDateFrom',
        'invoice_date_until' => 'invoiceDateUntil',
        'filter_by_active' => 'filterByActive',
        'order' => 'order',
        'skip' => 'skip',
        'take' => 'take',
        'term' => 'term',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'skip_system_invoices_are_missing_check' => 'setSkipSystemInvoicesAreMissingCheck',
        'status_filter' => 'setStatusFilter',
        'order_by' => 'setOrderBy',
        'term_fields' => 'setTermFields',
        'parent_id' => 'setParentId',
        'culture' => 'setCulture',
        'overdue_from' => 'setOverdueFrom',
        'overdue_until' => 'setOverdueUntil',
        'invoice_date_from' => 'setInvoiceDateFrom',
        'invoice_date_until' => 'setInvoiceDateUntil',
        'filter_by_active' => 'setFilterByActive',
        'order' => 'setOrder',
        'skip' => 'setSkip',
        'take' => 'setTake',
        'term' => 'setTerm',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'skip_system_invoices_are_missing_check' => 'getSkipSystemInvoicesAreMissingCheck',
        'status_filter' => 'getStatusFilter',
        'order_by' => 'getOrderBy',
        'term_fields' => 'getTermFields',
        'parent_id' => 'getParentId',
        'culture' => 'getCulture',
        'overdue_from' => 'getOverdueFrom',
        'overdue_until' => 'getOverdueUntil',
        'invoice_date_from' => 'getInvoiceDateFrom',
        'invoice_date_until' => 'getInvoiceDateUntil',
        'filter_by_active' => 'getFilterByActive',
        'order' => 'getOrder',
        'skip' => 'getSkip',
        'take' => 'getTake',
        'term' => 'getTerm',
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
        $this->setIfExists('invoice_id', $data ?? [], null);
        $this->setIfExists('skip_system_invoices_are_missing_check', $data ?? [], null);
        $this->setIfExists('status_filter', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('overdue_from', $data ?? [], null);
        $this->setIfExists('overdue_until', $data ?? [], null);
        $this->setIfExists('invoice_date_from', $data ?? [], null);
        $this->setIfExists('invoice_date_until', $data ?? [], null);
        $this->setIfExists('filter_by_active', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('take', $data ?? [], null);
        $this->setIfExists('term', $data ?? [], null);
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

        if ($this->container['skip_system_invoices_are_missing_check'] === null) {
            $invalidProperties[] = "'skip_system_invoices_are_missing_check' can't be null";
        }
        if ($this->container['order_by'] === null) {
            $invalidProperties[] = "'order_by' can't be null";
        }
        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['filter_by_active'] === null) {
            $invalidProperties[] = "'filter_by_active' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['skip'] === null) {
            $invalidProperties[] = "'skip' can't be null";
        }
        if (($this->container['skip'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'skip', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['skip'] < 0)) {
            $invalidProperties[] = "invalid value for 'skip', must be bigger than or equal to 0.";
        }

        if ($this->container['take'] === null) {
            $invalidProperties[] = "'take' can't be null";
        }
        if (($this->container['take'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'take', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['take'] < 0)) {
            $invalidProperties[] = "invalid value for 'take', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) > 50)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) < 0)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be bigger than or equal to 0.";
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
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id Search by a specific invoice Id. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setInvoiceId($invoice_id)
    {
        if (is_null($invoice_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_id cannot be null');
        }
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets skip_system_invoices_are_missing_check
     *
     * @return bool
     */
    public function getSkipSystemInvoicesAreMissingCheck()
    {
        return $this->container['skip_system_invoices_are_missing_check'];
    }

    /**
     * Sets skip_system_invoices_are_missing_check
     *
     * @param bool $skip_system_invoices_are_missing_check Search by a specific invoice Id. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setSkipSystemInvoicesAreMissingCheck($skip_system_invoices_are_missing_check)
    {
        if (is_null($skip_system_invoices_are_missing_check)) {
            throw new \InvalidArgumentException('non-nullable skip_system_invoices_are_missing_check cannot be null');
        }
        $this->container['skip_system_invoices_are_missing_check'] = $skip_system_invoices_are_missing_check;

        return $this;
    }

    /**
     * Gets status_filter
     *
     * @return \Brixion\Kolibri\Model\InvoiceStatus[]|null
     */
    public function getStatusFilter()
    {
        return $this->container['status_filter'];
    }

    /**
     * Sets status_filter
     *
     * @param \Brixion\Kolibri\Model\InvoiceStatus[]|null $status_filter Only return invoices with given status.
     *
     * @return self
     */
    public function setStatusFilter($status_filter)
    {
        if (is_null($status_filter)) {
            throw new \InvalidArgumentException('non-nullable status_filter cannot be null');
        }
        $this->container['status_filter'] = $status_filter;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\InvoiceOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\InvoiceOrderByField $order_by Order the results by the indicated invoice field.
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\InvoiceTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\InvoiceTermField[]|null $term_fields term_fields
     *
     * @return self
     */
    public function setTermFields($term_fields)
    {
        if (is_null($term_fields)) {
            throw new \InvalidArgumentException('non-nullable term_fields cannot be null');
        }
        $this->container['term_fields'] = $term_fields;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id Specify a parent ID to search invoices based on either an Assignment id or a Relation id.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string|null
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string|null $culture The culture name in the format languagecode2-contry/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\")
     *
     * @return self
     */
    public function setCulture($culture)
    {
        if (is_null($culture)) {
            throw new \InvalidArgumentException('non-nullable culture cannot be null');
        }
        if ((mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling InvoicesSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling InvoicesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets overdue_from
     *
     * @return \DateTime|null
     */
    public function getOverdueFrom()
    {
        return $this->container['overdue_from'];
    }

    /**
     * Sets overdue_from
     *
     * @param \DateTime|null $overdue_from overdue_from
     *
     * @return self
     */
    public function setOverdueFrom($overdue_from)
    {
        if (is_null($overdue_from)) {
            throw new \InvalidArgumentException('non-nullable overdue_from cannot be null');
        }
        $this->container['overdue_from'] = $overdue_from;

        return $this;
    }

    /**
     * Gets overdue_until
     *
     * @return \DateTime|null
     */
    public function getOverdueUntil()
    {
        return $this->container['overdue_until'];
    }

    /**
     * Sets overdue_until
     *
     * @param \DateTime|null $overdue_until overdue_until
     *
     * @return self
     */
    public function setOverdueUntil($overdue_until)
    {
        if (is_null($overdue_until)) {
            throw new \InvalidArgumentException('non-nullable overdue_until cannot be null');
        }
        $this->container['overdue_until'] = $overdue_until;

        return $this;
    }

    /**
     * Gets invoice_date_from
     *
     * @return \DateTime|null
     */
    public function getInvoiceDateFrom()
    {
        return $this->container['invoice_date_from'];
    }

    /**
     * Sets invoice_date_from
     *
     * @param \DateTime|null $invoice_date_from invoice_date_from
     *
     * @return self
     */
    public function setInvoiceDateFrom($invoice_date_from)
    {
        if (is_null($invoice_date_from)) {
            throw new \InvalidArgumentException('non-nullable invoice_date_from cannot be null');
        }
        $this->container['invoice_date_from'] = $invoice_date_from;

        return $this;
    }

    /**
     * Gets invoice_date_until
     *
     * @return \DateTime|null
     */
    public function getInvoiceDateUntil()
    {
        return $this->container['invoice_date_until'];
    }

    /**
     * Sets invoice_date_until
     *
     * @param \DateTime|null $invoice_date_until invoice_date_until
     *
     * @return self
     */
    public function setInvoiceDateUntil($invoice_date_until)
    {
        if (is_null($invoice_date_until)) {
            throw new \InvalidArgumentException('non-nullable invoice_date_until cannot be null');
        }
        $this->container['invoice_date_until'] = $invoice_date_until;

        return $this;
    }

    /**
     * Gets filter_by_active
     *
     * @return \Brixion\Kolibri\Model\ActiveFilter
     */
    public function getFilterByActive()
    {
        return $this->container['filter_by_active'];
    }

    /**
     * Sets filter_by_active
     *
     * @param \Brixion\Kolibri\Model\ActiveFilter $filter_by_active Show archived or active items. Default: 'ActiveOnly': show active items.
     *
     * @return self
     */
    public function setFilterByActive($filter_by_active)
    {
        if (is_null($filter_by_active)) {
            throw new \InvalidArgumentException('non-nullable filter_by_active cannot be null');
        }
        $this->container['filter_by_active'] = $filter_by_active;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Brixion\Kolibri\Model\SortOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Brixion\Kolibri\Model\SortOrder $order Order search results ascending or descending.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip Number of results to skip.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }

        if (($skip > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling InvoicesSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling InvoicesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets take
     *
     * @return int
     */
    public function getTake()
    {
        return $this->container['take'];
    }

    /**
     * Sets take
     *
     * @param int $take Number of results to return. If a value higher than 100 is provided, it is set to 100.
     *
     * @return self
     */
    public function setTake($take)
    {
        if (is_null($take)) {
            throw new \InvalidArgumentException('non-nullable take cannot be null');
        }

        if (($take > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $take when calling InvoicesSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling InvoicesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['take'] = $take;

        return $this;
    }

    /**
     * Gets term
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param string|null $term Search by given text term in the fields indicated by TermFields
     *
     * @return self
     */
    public function setTerm($term)
    {
        if (is_null($term)) {
            throw new \InvalidArgumentException('non-nullable term cannot be null');
        }
        if ((mb_strlen($term) > 50)) {
            throw new \InvalidArgumentException('invalid length for $term when calling InvoicesSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling InvoicesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['term'] = $term;

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
