<?php

declare(strict_types=1);

/**
 * BidSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * BidSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class BidSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'BidSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'bid_date_time' => '\DateTime',
        'valid_until' => '\DateTime',
        'linked_bid' => '\Brixion\Kolibri\Model\LinkedBid',
        'linked_bids' => '\Brixion\Kolibri\Model\LinkedBid[]',
        'amount' => 'float',
        'status' => '\Brixion\Kolibri\Model\BidStatus',
        'type' => '\Brixion\Kolibri\Model\BidType',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'accepted_date_time' => '\DateTime',
        'denied_date_time' => '\DateTime',
        'is_parent_bid' => 'bool',
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
        'bid_date_time' => 'date-time',
        'valid_until' => 'date-time',
        'linked_bid' => null,
        'linked_bids' => null,
        'amount' => 'decimal',
        'status' => null,
        'type' => null,
        'linked_relations' => null,
        'linked_assignment' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'linked_employee' => null,
        'accepted_date_time' => 'date-time',
        'denied_date_time' => 'date-time',
        'is_parent_bid' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'bid_date_time' => false,
        'valid_until' => false,
        'linked_bid' => false,
        'linked_bids' => false,
        'amount' => false,
        'status' => false,
        'type' => false,
        'linked_relations' => false,
        'linked_assignment' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'linked_employee' => false,
        'accepted_date_time' => false,
        'denied_date_time' => false,
        'is_parent_bid' => false,
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
        'bid_date_time' => 'bidDateTime',
        'valid_until' => 'validUntil',
        'linked_bid' => 'linkedBid',
        'linked_bids' => 'linkedBids',
        'amount' => 'amount',
        'status' => 'status',
        'type' => 'type',
        'linked_relations' => 'linkedRelations',
        'linked_assignment' => 'linkedAssignment',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_employee' => 'linkedEmployee',
        'accepted_date_time' => 'acceptedDateTime',
        'denied_date_time' => 'deniedDateTime',
        'is_parent_bid' => 'isParentBid',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bid_date_time' => 'setBidDateTime',
        'valid_until' => 'setValidUntil',
        'linked_bid' => 'setLinkedBid',
        'linked_bids' => 'setLinkedBids',
        'amount' => 'setAmount',
        'status' => 'setStatus',
        'type' => 'setType',
        'linked_relations' => 'setLinkedRelations',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_employee' => 'setLinkedEmployee',
        'accepted_date_time' => 'setAcceptedDateTime',
        'denied_date_time' => 'setDeniedDateTime',
        'is_parent_bid' => 'setIsParentBid',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bid_date_time' => 'getBidDateTime',
        'valid_until' => 'getValidUntil',
        'linked_bid' => 'getLinkedBid',
        'linked_bids' => 'getLinkedBids',
        'amount' => 'getAmount',
        'status' => 'getStatus',
        'type' => 'getType',
        'linked_relations' => 'getLinkedRelations',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_employee' => 'getLinkedEmployee',
        'accepted_date_time' => 'getAcceptedDateTime',
        'denied_date_time' => 'getDeniedDateTime',
        'is_parent_bid' => 'getIsParentBid',
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
        $this->setIfExists('bid_date_time', $data ?? [], null);
        $this->setIfExists('valid_until', $data ?? [], null);
        $this->setIfExists('linked_bid', $data ?? [], null);
        $this->setIfExists('linked_bids', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
        $this->setIfExists('accepted_date_time', $data ?? [], null);
        $this->setIfExists('denied_date_time', $data ?? [], null);
        $this->setIfExists('is_parent_bid', $data ?? [], null);
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

        if ($this->container['bid_date_time'] === null) {
            $invalidProperties[] = "'bid_date_time' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['is_parent_bid'] === null) {
            $invalidProperties[] = "'is_parent_bid' can't be null";
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
     * Gets bid_date_time
     *
     * @return \DateTime
     */
    public function getBidDateTime()
    {
        return $this->container['bid_date_time'];
    }

    /**
     * Sets bid_date_time
     *
     * @param \DateTime $bid_date_time bid_date_time
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
     * Gets valid_until
     *
     * @return \DateTime|null
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime|null $valid_until valid_until
     *
     * @return self
     */
    public function setValidUntil($valid_until)
    {
        if (is_null($valid_until)) {
            throw new \InvalidArgumentException('non-nullable valid_until cannot be null');
        }
        $this->container['valid_until'] = $valid_until;

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
     * Gets linked_bids
     *
     * @return \Brixion\Kolibri\Model\LinkedBid[]|null
     */
    public function getLinkedBids()
    {
        return $this->container['linked_bids'];
    }

    /**
     * Sets linked_bids
     *
     * @param \Brixion\Kolibri\Model\LinkedBid[]|null $linked_bids linked_bids
     *
     * @return self
     */
    public function setLinkedBids($linked_bids)
    {
        if (is_null($linked_bids)) {
            throw new \InvalidArgumentException('non-nullable linked_bids cannot be null');
        }
        $this->container['linked_bids'] = $linked_bids;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Brixion\Kolibri\Model\BidStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Brixion\Kolibri\Model\BidStatus $status status
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
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\BidType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\BidType $type type
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
     * Gets is_parent_bid
     *
     * @return bool
     */
    public function getIsParentBid()
    {
        return $this->container['is_parent_bid'];
    }

    /**
     * Sets is_parent_bid
     *
     * @param bool $is_parent_bid is_parent_bid
     *
     * @return self
     */
    public function setIsParentBid($is_parent_bid)
    {
        if (is_null($is_parent_bid)) {
            throw new \InvalidArgumentException('non-nullable is_parent_bid cannot be null');
        }
        $this->container['is_parent_bid'] = $is_parent_bid;

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
            throw new \InvalidArgumentException('invalid length for $id when calling BidSnapShot., must be bigger than or equal to 1.');
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
