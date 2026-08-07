<?php

declare(strict_types=1);

/**
 * UpdateAvailabilitySoldSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;

use \ArrayAccess;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UpdateAvailabilitySoldSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAvailabilitySoldSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'UpdateAvailabilitySoldSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_of_transfer' => '\DateTime',
        'date_reservation' => '\DateTime',
        'date_agreement' => '\DateTime',
        'date_sold' => '\DateTime',
        'end_date_bank_warranty' => '\DateTime',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_notaries' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'transaction_price' => 'float',
        'is_sale_and_lease_back' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'date_of_transfer' => 'date-time',
        'date_reservation' => 'date-time',
        'date_agreement' => 'date-time',
        'date_sold' => 'date-time',
        'end_date_bank_warranty' => 'date-time',
        'linked_applicants' => null,
        'linked_notaries' => null,
        'transaction_price' => 'decimal',
        'is_sale_and_lease_back' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'date_of_transfer' => false,
        'date_reservation' => false,
        'date_agreement' => false,
        'date_sold' => false,
        'end_date_bank_warranty' => false,
        'linked_applicants' => false,
        'linked_notaries' => false,
        'transaction_price' => false,
        'is_sale_and_lease_back' => false
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
        'date_of_transfer' => 'dateOfTransfer',
        'date_reservation' => 'dateReservation',
        'date_agreement' => 'dateAgreement',
        'date_sold' => 'dateSold',
        'end_date_bank_warranty' => 'endDateBankWarranty',
        'linked_applicants' => 'linkedApplicants',
        'linked_notaries' => 'linkedNotaries',
        'transaction_price' => 'transactionPrice',
        'is_sale_and_lease_back' => 'isSaleAndLeaseBack'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_transfer' => 'setDateOfTransfer',
        'date_reservation' => 'setDateReservation',
        'date_agreement' => 'setDateAgreement',
        'date_sold' => 'setDateSold',
        'end_date_bank_warranty' => 'setEndDateBankWarranty',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_notaries' => 'setLinkedNotaries',
        'transaction_price' => 'setTransactionPrice',
        'is_sale_and_lease_back' => 'setIsSaleAndLeaseBack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_transfer' => 'getDateOfTransfer',
        'date_reservation' => 'getDateReservation',
        'date_agreement' => 'getDateAgreement',
        'date_sold' => 'getDateSold',
        'end_date_bank_warranty' => 'getEndDateBankWarranty',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_notaries' => 'getLinkedNotaries',
        'transaction_price' => 'getTransactionPrice',
        'is_sale_and_lease_back' => 'getIsSaleAndLeaseBack'
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
        $this->setIfExists('date_of_transfer', $data ?? [], null);
        $this->setIfExists('date_reservation', $data ?? [], null);
        $this->setIfExists('date_agreement', $data ?? [], null);
        $this->setIfExists('date_sold', $data ?? [], null);
        $this->setIfExists('end_date_bank_warranty', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('linked_notaries', $data ?? [], null);
        $this->setIfExists('transaction_price', $data ?? [], null);
        $this->setIfExists('is_sale_and_lease_back', $data ?? [], null);
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

        if ($this->container['date_sold'] === null) {
            $invalidProperties[] = "'date_sold' can't be null";
        }
        if ($this->container['transaction_price'] === null) {
            $invalidProperties[] = "'transaction_price' can't be null";
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
     * Gets date_of_transfer
     *
     * @return \DateTime|null
     */
    public function getDateOfTransfer()
    {
        return $this->container['date_of_transfer'];
    }

    /**
     * Sets date_of_transfer
     *
     * @param \DateTime|null $date_of_transfer In Dutch: Datum transport.
     *
     * @return self
     */
    public function setDateOfTransfer($date_of_transfer)
    {
        if (is_null($date_of_transfer)) {
            throw new \InvalidArgumentException('non-nullable date_of_transfer cannot be null');
        }
        $this->container['date_of_transfer'] = $date_of_transfer;

        return $this;
    }

    /**
     * Gets date_reservation
     *
     * @return \DateTime|null
     */
    public function getDateReservation()
    {
        return $this->container['date_reservation'];
    }

    /**
     * Sets date_reservation
     *
     * @param \DateTime|null $date_reservation In Dutch: Datum voorbehoud.
     *
     * @return self
     */
    public function setDateReservation($date_reservation)
    {
        if (is_null($date_reservation)) {
            throw new \InvalidArgumentException('non-nullable date_reservation cannot be null');
        }
        $this->container['date_reservation'] = $date_reservation;

        return $this;
    }

    /**
     * Gets date_agreement
     *
     * @return \DateTime|null
     */
    public function getDateAgreement()
    {
        return $this->container['date_agreement'];
    }

    /**
     * Sets date_agreement
     *
     * @param \DateTime|null $date_agreement date_agreement
     *
     * @return self
     */
    public function setDateAgreement($date_agreement)
    {
        if (is_null($date_agreement)) {
            throw new \InvalidArgumentException('non-nullable date_agreement cannot be null');
        }
        $this->container['date_agreement'] = $date_agreement;

        return $this;
    }

    /**
     * Gets date_sold
     *
     * @return \DateTime
     */
    public function getDateSold()
    {
        return $this->container['date_sold'];
    }

    /**
     * Sets date_sold
     *
     * @param \DateTime $date_sold date_sold
     *
     * @return self
     */
    public function setDateSold($date_sold)
    {
        if (is_null($date_sold)) {
            throw new \InvalidArgumentException('non-nullable date_sold cannot be null');
        }
        $this->container['date_sold'] = $date_sold;

        return $this;
    }

    /**
     * Gets end_date_bank_warranty
     *
     * @return \DateTime|null
     */
    public function getEndDateBankWarranty()
    {
        return $this->container['end_date_bank_warranty'];
    }

    /**
     * Sets end_date_bank_warranty
     *
     * @param \DateTime|null $end_date_bank_warranty In Dutch: Einddatum bankgarantie.
     *
     * @return self
     */
    public function setEndDateBankWarranty($end_date_bank_warranty)
    {
        if (is_null($end_date_bank_warranty)) {
            throw new \InvalidArgumentException('non-nullable end_date_bank_warranty cannot be null');
        }
        $this->container['end_date_bank_warranty'] = $end_date_bank_warranty;

        return $this;
    }

    /**
     * Gets linked_applicants
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedApplicants()
    {
        return $this->container['linked_applicants'];
    }

    /**
     * Sets linked_applicants
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_applicants linked_applicants
     *
     * @return self
     */
    public function setLinkedApplicants($linked_applicants)
    {
        if (is_null($linked_applicants)) {
            throw new \InvalidArgumentException('non-nullable linked_applicants cannot be null');
        }
        $this->container['linked_applicants'] = $linked_applicants;

        return $this;
    }

    /**
     * Gets linked_notaries
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedNotaries()
    {
        return $this->container['linked_notaries'];
    }

    /**
     * Sets linked_notaries
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_notaries linked_notaries
     *
     * @return self
     */
    public function setLinkedNotaries($linked_notaries)
    {
        if (is_null($linked_notaries)) {
            throw new \InvalidArgumentException('non-nullable linked_notaries cannot be null');
        }
        $this->container['linked_notaries'] = $linked_notaries;

        return $this;
    }

    /**
     * Gets transaction_price
     *
     * @return float
     */
    public function getTransactionPrice()
    {
        return $this->container['transaction_price'];
    }

    /**
     * Sets transaction_price
     *
     * @param float $transaction_price In Dutch: Datum transport.
     *
     * @return self
     */
    public function setTransactionPrice($transaction_price)
    {
        if (is_null($transaction_price)) {
            throw new \InvalidArgumentException('non-nullable transaction_price cannot be null');
        }
        $this->container['transaction_price'] = $transaction_price;

        return $this;
    }

    /**
     * Gets is_sale_and_lease_back
     *
     * @return bool|null
     */
    public function getIsSaleAndLeaseBack()
    {
        return $this->container['is_sale_and_lease_back'];
    }

    /**
     * Sets is_sale_and_lease_back
     *
     * @param bool|null $is_sale_and_lease_back is_sale_and_lease_back
     *
     * @return self
     */
    public function setIsSaleAndLeaseBack($is_sale_and_lease_back)
    {
        if (is_null($is_sale_and_lease_back)) {
            throw new \InvalidArgumentException('non-nullable is_sale_and_lease_back cannot be null');
        }
        $this->container['is_sale_and_lease_back'] = $is_sale_and_lease_back;

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
            JSON_PRETTY_PRINT
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


