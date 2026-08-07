<?php

declare(strict_types=1);

/**
 * TimelineEvent - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineEvent.
 * @implements \ArrayAccess<string, mixed>
 */
class TimelineEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TimelineEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'access_denied_for_current_user' => 'bool',
        'action_sub_type' => '\Brixion\Kolibri\Model\TimelineActionSubType',
        'action_type' => '\Brixion\Kolibri\Model\TimelineActionType',
        'all_day_event' => 'bool',
        'category_id' => 'string',
        'completed_percentage' => 'float',
        'currency' => 'string',
        'date' => '\DateTime',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'end_date' => '\DateTime',
        'invoice_number' => 'string',
        'invoice_status' => '\Brixion\Kolibri\Model\InvoiceStatus',
        'invoice_total_amount' => 'float',
        'is_active' => 'bool',
        'is_canceled' => 'bool',
        'is_completed' => 'bool',
        'is_confirmed' => 'bool',
        'is_private' => 'bool',
        'is_recurring' => 'bool',
        'linked_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_messages' => '\Brixion\Kolibri\Model\LinkedMessage[]',
        'old_price' => 'float',
        'price' => 'float',
        'priority' => '\Brixion\Kolibri\Model\Priority',
        'subject' => 'string',
        'task_status' => '\Brixion\Kolibri\Model\TaskStatus',
        'withdraw_reason' => '\Brixion\Kolibri\Model\WithdrawReason',
        'bid_date_time' => '\DateTime',
        'bid_valid_until' => '\DateTime',
        'denied_date_time' => '\DateTime',
        'accepted_date_time' => '\DateTime',
        'bid_status' => '\Brixion\Kolibri\Model\BidStatus',
        'linked_bid' => '\Brixion\Kolibri\Model\LinkedBid',
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
        'access_denied_for_current_user' => null,
        'action_sub_type' => null,
        'action_type' => null,
        'all_day_event' => null,
        'category_id' => 'guid',
        'completed_percentage' => 'double',
        'currency' => null,
        'date' => 'date-time',
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'end_date' => 'date-time',
        'invoice_number' => null,
        'invoice_status' => null,
        'invoice_total_amount' => 'decimal',
        'is_active' => null,
        'is_canceled' => null,
        'is_completed' => null,
        'is_confirmed' => null,
        'is_private' => null,
        'is_recurring' => null,
        'linked_assignments' => null,
        'linked_created_by' => null,
        'linked_employees' => null,
        'linked_modified_by' => null,
        'linked_relations' => null,
        'linked_messages' => null,
        'old_price' => 'decimal',
        'price' => 'decimal',
        'priority' => null,
        'subject' => null,
        'task_status' => null,
        'withdraw_reason' => null,
        'bid_date_time' => 'date-time',
        'bid_valid_until' => 'date-time',
        'denied_date_time' => 'date-time',
        'accepted_date_time' => 'date-time',
        'bid_status' => null,
        'linked_bid' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'access_denied_for_current_user' => false,
        'action_sub_type' => false,
        'action_type' => false,
        'all_day_event' => false,
        'category_id' => false,
        'completed_percentage' => false,
        'currency' => false,
        'date' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'end_date' => false,
        'invoice_number' => false,
        'invoice_status' => false,
        'invoice_total_amount' => false,
        'is_active' => false,
        'is_canceled' => false,
        'is_completed' => false,
        'is_confirmed' => false,
        'is_private' => false,
        'is_recurring' => false,
        'linked_assignments' => false,
        'linked_created_by' => false,
        'linked_employees' => false,
        'linked_modified_by' => false,
        'linked_relations' => false,
        'linked_messages' => false,
        'old_price' => false,
        'price' => false,
        'priority' => false,
        'subject' => false,
        'task_status' => false,
        'withdraw_reason' => false,
        'bid_date_time' => false,
        'bid_valid_until' => false,
        'denied_date_time' => false,
        'accepted_date_time' => false,
        'bid_status' => false,
        'linked_bid' => false,
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
        'access_denied_for_current_user' => 'accessDeniedForCurrentUser',
        'action_sub_type' => 'actionSubType',
        'action_type' => 'actionType',
        'all_day_event' => 'allDayEvent',
        'category_id' => 'categoryId',
        'completed_percentage' => 'completedPercentage',
        'currency' => 'currency',
        'date' => 'date',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'end_date' => 'endDate',
        'invoice_number' => 'invoiceNumber',
        'invoice_status' => 'invoiceStatus',
        'invoice_total_amount' => 'invoiceTotalAmount',
        'is_active' => 'isActive',
        'is_canceled' => 'isCanceled',
        'is_completed' => 'isCompleted',
        'is_confirmed' => 'isConfirmed',
        'is_private' => 'isPrivate',
        'is_recurring' => 'isRecurring',
        'linked_assignments' => 'linkedAssignments',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_employees' => 'linkedEmployees',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_relations' => 'linkedRelations',
        'linked_messages' => 'linkedMessages',
        'old_price' => 'oldPrice',
        'price' => 'price',
        'priority' => 'priority',
        'subject' => 'subject',
        'task_status' => 'taskStatus',
        'withdraw_reason' => 'withdrawReason',
        'bid_date_time' => 'bidDateTime',
        'bid_valid_until' => 'bidValidUntil',
        'denied_date_time' => 'deniedDateTime',
        'accepted_date_time' => 'acceptedDateTime',
        'bid_status' => 'bidStatus',
        'linked_bid' => 'linkedBid',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_denied_for_current_user' => 'setAccessDeniedForCurrentUser',
        'action_sub_type' => 'setActionSubType',
        'action_type' => 'setActionType',
        'all_day_event' => 'setAllDayEvent',
        'category_id' => 'setCategoryId',
        'completed_percentage' => 'setCompletedPercentage',
        'currency' => 'setCurrency',
        'date' => 'setDate',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'end_date' => 'setEndDate',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_status' => 'setInvoiceStatus',
        'invoice_total_amount' => 'setInvoiceTotalAmount',
        'is_active' => 'setIsActive',
        'is_canceled' => 'setIsCanceled',
        'is_completed' => 'setIsCompleted',
        'is_confirmed' => 'setIsConfirmed',
        'is_private' => 'setIsPrivate',
        'is_recurring' => 'setIsRecurring',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_employees' => 'setLinkedEmployees',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_relations' => 'setLinkedRelations',
        'linked_messages' => 'setLinkedMessages',
        'old_price' => 'setOldPrice',
        'price' => 'setPrice',
        'priority' => 'setPriority',
        'subject' => 'setSubject',
        'task_status' => 'setTaskStatus',
        'withdraw_reason' => 'setWithdrawReason',
        'bid_date_time' => 'setBidDateTime',
        'bid_valid_until' => 'setBidValidUntil',
        'denied_date_time' => 'setDeniedDateTime',
        'accepted_date_time' => 'setAcceptedDateTime',
        'bid_status' => 'setBidStatus',
        'linked_bid' => 'setLinkedBid',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_denied_for_current_user' => 'getAccessDeniedForCurrentUser',
        'action_sub_type' => 'getActionSubType',
        'action_type' => 'getActionType',
        'all_day_event' => 'getAllDayEvent',
        'category_id' => 'getCategoryId',
        'completed_percentage' => 'getCompletedPercentage',
        'currency' => 'getCurrency',
        'date' => 'getDate',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'end_date' => 'getEndDate',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_status' => 'getInvoiceStatus',
        'invoice_total_amount' => 'getInvoiceTotalAmount',
        'is_active' => 'getIsActive',
        'is_canceled' => 'getIsCanceled',
        'is_completed' => 'getIsCompleted',
        'is_confirmed' => 'getIsConfirmed',
        'is_private' => 'getIsPrivate',
        'is_recurring' => 'getIsRecurring',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_employees' => 'getLinkedEmployees',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_relations' => 'getLinkedRelations',
        'linked_messages' => 'getLinkedMessages',
        'old_price' => 'getOldPrice',
        'price' => 'getPrice',
        'priority' => 'getPriority',
        'subject' => 'getSubject',
        'task_status' => 'getTaskStatus',
        'withdraw_reason' => 'getWithdrawReason',
        'bid_date_time' => 'getBidDateTime',
        'bid_valid_until' => 'getBidValidUntil',
        'denied_date_time' => 'getDeniedDateTime',
        'accepted_date_time' => 'getAcceptedDateTime',
        'bid_status' => 'getBidStatus',
        'linked_bid' => 'getLinkedBid',
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
        $this->setIfExists('access_denied_for_current_user', $data ?? [], null);
        $this->setIfExists('action_sub_type', $data ?? [], null);
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('all_day_event', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('completed_percentage', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_status', $data ?? [], null);
        $this->setIfExists('invoice_total_amount', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_canceled', $data ?? [], null);
        $this->setIfExists('is_completed', $data ?? [], null);
        $this->setIfExists('is_confirmed', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('is_recurring', $data ?? [], null);
        $this->setIfExists('linked_assignments', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('linked_messages', $data ?? [], null);
        $this->setIfExists('old_price', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('task_status', $data ?? [], null);
        $this->setIfExists('withdraw_reason', $data ?? [], null);
        $this->setIfExists('bid_date_time', $data ?? [], null);
        $this->setIfExists('bid_valid_until', $data ?? [], null);
        $this->setIfExists('denied_date_time', $data ?? [], null);
        $this->setIfExists('accepted_date_time', $data ?? [], null);
        $this->setIfExists('bid_status', $data ?? [], null);
        $this->setIfExists('linked_bid', $data ?? [], null);
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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
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
        if ($this->container['is_private'] === null) {
            $invalidProperties[] = "'is_private' can't be null";
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
     * Gets access_denied_for_current_user
     *
     * @return bool|null
     */
    public function getAccessDeniedForCurrentUser()
    {
        return $this->container['access_denied_for_current_user'];
    }

    /**
     * Sets access_denied_for_current_user
     *
     * @param bool|null $access_denied_for_current_user access_denied_for_current_user
     *
     * @return self
     */
    public function setAccessDeniedForCurrentUser($access_denied_for_current_user)
    {
        if (is_null($access_denied_for_current_user)) {
            throw new \InvalidArgumentException('non-nullable access_denied_for_current_user cannot be null');
        }
        $this->container['access_denied_for_current_user'] = $access_denied_for_current_user;

        return $this;
    }

    /**
     * Gets action_sub_type
     *
     * @return \Brixion\Kolibri\Model\TimelineActionSubType|null
     */
    public function getActionSubType()
    {
        return $this->container['action_sub_type'];
    }

    /**
     * Sets action_sub_type
     *
     * @param \Brixion\Kolibri\Model\TimelineActionSubType|null $action_sub_type action_sub_type
     *
     * @return self
     */
    public function setActionSubType($action_sub_type)
    {
        if (is_null($action_sub_type)) {
            throw new \InvalidArgumentException('non-nullable action_sub_type cannot be null');
        }
        $this->container['action_sub_type'] = $action_sub_type;

        return $this;
    }

    /**
     * Gets action_type
     *
     * @return \Brixion\Kolibri\Model\TimelineActionType
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \Brixion\Kolibri\Model\TimelineActionType $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets all_day_event
     *
     * @return bool|null
     */
    public function getAllDayEvent()
    {
        return $this->container['all_day_event'];
    }

    /**
     * Sets all_day_event
     *
     * @param bool|null $all_day_event all_day_event
     *
     * @return self
     */
    public function setAllDayEvent($all_day_event)
    {
        if (is_null($all_day_event)) {
            throw new \InvalidArgumentException('non-nullable all_day_event cannot be null');
        }
        $this->container['all_day_event'] = $all_day_event;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id category_id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets completed_percentage
     *
     * @return float|null
     */
    public function getCompletedPercentage()
    {
        return $this->container['completed_percentage'];
    }

    /**
     * Sets completed_percentage
     *
     * @param float|null $completed_percentage completed_percentage
     *
     * @return self
     */
    public function setCompletedPercentage($completed_percentage)
    {
        if (is_null($completed_percentage)) {
            throw new \InvalidArgumentException('non-nullable completed_percentage cannot be null');
        }
        $this->container['completed_percentage'] = $completed_percentage;

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
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
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
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
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
     * Gets invoice_status
     *
     * @return \Brixion\Kolibri\Model\InvoiceStatus|null
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param \Brixion\Kolibri\Model\InvoiceStatus|null $invoice_status invoice_status
     *
     * @return self
     */
    public function setInvoiceStatus($invoice_status)
    {
        if (is_null($invoice_status)) {
            throw new \InvalidArgumentException('non-nullable invoice_status cannot be null');
        }
        $this->container['invoice_status'] = $invoice_status;

        return $this;
    }

    /**
     * Gets invoice_total_amount
     *
     * @return float|null
     */
    public function getInvoiceTotalAmount()
    {
        return $this->container['invoice_total_amount'];
    }

    /**
     * Sets invoice_total_amount
     *
     * @param float|null $invoice_total_amount invoice_total_amount
     *
     * @return self
     */
    public function setInvoiceTotalAmount($invoice_total_amount)
    {
        if (is_null($invoice_total_amount)) {
            throw new \InvalidArgumentException('non-nullable invoice_total_amount cannot be null');
        }
        $this->container['invoice_total_amount'] = $invoice_total_amount;

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
     * Gets is_canceled
     *
     * @return bool|null
     */
    public function getIsCanceled()
    {
        return $this->container['is_canceled'];
    }

    /**
     * Sets is_canceled
     *
     * @param bool|null $is_canceled is_canceled
     *
     * @return self
     */
    public function setIsCanceled($is_canceled)
    {
        if (is_null($is_canceled)) {
            throw new \InvalidArgumentException('non-nullable is_canceled cannot be null');
        }
        $this->container['is_canceled'] = $is_canceled;

        return $this;
    }

    /**
     * Gets is_completed
     *
     * @return bool|null
     */
    public function getIsCompleted()
    {
        return $this->container['is_completed'];
    }

    /**
     * Sets is_completed
     *
     * @param bool|null $is_completed is_completed
     *
     * @return self
     */
    public function setIsCompleted($is_completed)
    {
        if (is_null($is_completed)) {
            throw new \InvalidArgumentException('non-nullable is_completed cannot be null');
        }
        $this->container['is_completed'] = $is_completed;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return bool|null
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool|null $is_confirmed is_confirmed
     *
     * @return self
     */
    public function setIsConfirmed($is_confirmed)
    {
        if (is_null($is_confirmed)) {
            throw new \InvalidArgumentException('non-nullable is_confirmed cannot be null');
        }
        $this->container['is_confirmed'] = $is_confirmed;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool $is_private is_private
     *
     * @return self
     */
    public function setIsPrivate($is_private)
    {
        if (is_null($is_private)) {
            throw new \InvalidArgumentException('non-nullable is_private cannot be null');
        }
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets is_recurring
     *
     * @return bool|null
     */
    public function getIsRecurring()
    {
        return $this->container['is_recurring'];
    }

    /**
     * Sets is_recurring
     *
     * @param bool|null $is_recurring is_recurring
     *
     * @return self
     */
    public function setIsRecurring($is_recurring)
    {
        if (is_null($is_recurring)) {
            throw new \InvalidArgumentException('non-nullable is_recurring cannot be null');
        }
        $this->container['is_recurring'] = $is_recurring;

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
     * Gets linked_messages
     *
     * @return \Brixion\Kolibri\Model\LinkedMessage[]|null
     */
    public function getLinkedMessages()
    {
        return $this->container['linked_messages'];
    }

    /**
     * Sets linked_messages
     *
     * @param \Brixion\Kolibri\Model\LinkedMessage[]|null $linked_messages linked_messages
     *
     * @return self
     */
    public function setLinkedMessages($linked_messages)
    {
        if (is_null($linked_messages)) {
            throw new \InvalidArgumentException('non-nullable linked_messages cannot be null');
        }
        $this->container['linked_messages'] = $linked_messages;

        return $this;
    }

    /**
     * Gets old_price
     *
     * @return float|null
     */
    public function getOldPrice()
    {
        return $this->container['old_price'];
    }

    /**
     * Sets old_price
     *
     * @param float|null $old_price old_price
     *
     * @return self
     */
    public function setOldPrice($old_price)
    {
        if (is_null($old_price)) {
            throw new \InvalidArgumentException('non-nullable old_price cannot be null');
        }
        $this->container['old_price'] = $old_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Brixion\Kolibri\Model\Priority|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Brixion\Kolibri\Model\Priority|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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
     * Gets task_status
     *
     * @return \Brixion\Kolibri\Model\TaskStatus|null
     */
    public function getTaskStatus()
    {
        return $this->container['task_status'];
    }

    /**
     * Sets task_status
     *
     * @param \Brixion\Kolibri\Model\TaskStatus|null $task_status task_status
     *
     * @return self
     */
    public function setTaskStatus($task_status)
    {
        if (is_null($task_status)) {
            throw new \InvalidArgumentException('non-nullable task_status cannot be null');
        }
        $this->container['task_status'] = $task_status;

        return $this;
    }

    /**
     * Gets withdraw_reason
     *
     * @return \Brixion\Kolibri\Model\WithdrawReason|null
     */
    public function getWithdrawReason()
    {
        return $this->container['withdraw_reason'];
    }

    /**
     * Sets withdraw_reason
     *
     * @param \Brixion\Kolibri\Model\WithdrawReason|null $withdraw_reason withdraw_reason
     *
     * @return self
     */
    public function setWithdrawReason($withdraw_reason)
    {
        if (is_null($withdraw_reason)) {
            throw new \InvalidArgumentException('non-nullable withdraw_reason cannot be null');
        }
        $this->container['withdraw_reason'] = $withdraw_reason;

        return $this;
    }

    /**
     * Gets bid_date_time
     *
     * @return \DateTime|null
     */
    public function getBidDateTime()
    {
        return $this->container['bid_date_time'];
    }

    /**
     * Sets bid_date_time
     *
     * @param \DateTime|null $bid_date_time bid_date_time
     *
     * @return self
     */
    public function setBidDateTime($bid_date_time)
    {
        if (is_null($bid_date_time)) {
            throw new \InvalidArgumentException('non-nullable bid_date_time cannot be null');
        }
        $this->container['bid_date_time'] = $bid_date_time;

        return $this;
    }

    /**
     * Gets bid_valid_until
     *
     * @return \DateTime|null
     */
    public function getBidValidUntil()
    {
        return $this->container['bid_valid_until'];
    }

    /**
     * Sets bid_valid_until
     *
     * @param \DateTime|null $bid_valid_until bid_valid_until
     *
     * @return self
     */
    public function setBidValidUntil($bid_valid_until)
    {
        if (is_null($bid_valid_until)) {
            throw new \InvalidArgumentException('non-nullable bid_valid_until cannot be null');
        }
        $this->container['bid_valid_until'] = $bid_valid_until;

        return $this;
    }

    /**
     * Gets denied_date_time
     *
     * @return \DateTime|null
     */
    public function getDeniedDateTime()
    {
        return $this->container['denied_date_time'];
    }

    /**
     * Sets denied_date_time
     *
     * @param \DateTime|null $denied_date_time denied_date_time
     *
     * @return self
     */
    public function setDeniedDateTime($denied_date_time)
    {
        if (is_null($denied_date_time)) {
            throw new \InvalidArgumentException('non-nullable denied_date_time cannot be null');
        }
        $this->container['denied_date_time'] = $denied_date_time;

        return $this;
    }

    /**
     * Gets accepted_date_time
     *
     * @return \DateTime|null
     */
    public function getAcceptedDateTime()
    {
        return $this->container['accepted_date_time'];
    }

    /**
     * Sets accepted_date_time
     *
     * @param \DateTime|null $accepted_date_time accepted_date_time
     *
     * @return self
     */
    public function setAcceptedDateTime($accepted_date_time)
    {
        if (is_null($accepted_date_time)) {
            throw new \InvalidArgumentException('non-nullable accepted_date_time cannot be null');
        }
        $this->container['accepted_date_time'] = $accepted_date_time;

        return $this;
    }

    /**
     * Gets bid_status
     *
     * @return \Brixion\Kolibri\Model\BidStatus|null
     */
    public function getBidStatus()
    {
        return $this->container['bid_status'];
    }

    /**
     * Sets bid_status
     *
     * @param \Brixion\Kolibri\Model\BidStatus|null $bid_status bid_status
     *
     * @return self
     */
    public function setBidStatus($bid_status)
    {
        if (is_null($bid_status)) {
            throw new \InvalidArgumentException('non-nullable bid_status cannot be null');
        }
        $this->container['bid_status'] = $bid_status;

        return $this;
    }

    /**
     * Gets linked_bid
     *
     * @return \Brixion\Kolibri\Model\LinkedBid|null
     */
    public function getLinkedBid()
    {
        return $this->container['linked_bid'];
    }

    /**
     * Sets linked_bid
     *
     * @param \Brixion\Kolibri\Model\LinkedBid|null $linked_bid linked_bid
     *
     * @return self
     */
    public function setLinkedBid($linked_bid)
    {
        if (is_null($linked_bid)) {
            throw new \InvalidArgumentException('non-nullable linked_bid cannot be null');
        }
        $this->container['linked_bid'] = $linked_bid;

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
            throw new \InvalidArgumentException('invalid length for $id when calling TimelineEvent., must be bigger than or equal to 1.');
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
