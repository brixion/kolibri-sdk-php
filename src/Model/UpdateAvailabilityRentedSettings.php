<?php

declare(strict_types=1);

/**
 * UpdateAvailabilityRentedSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;

use \ArrayAccess;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UpdateAvailabilityRentedSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAvailabilityRentedSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'UpdateAvailabilityRentedSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_rented_from' => '\DateTime',
        'date_rented_until' => '\DateTime',
        'date_reservation' => '\DateTime',
        'date_sign_deed' => '\DateTime',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'transaction_price' => 'float',
        'is_vacancy_law' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'date_rented_from' => 'date-time',
        'date_rented_until' => 'date-time',
        'date_reservation' => 'date-time',
        'date_sign_deed' => 'date-time',
        'linked_applicants' => null,
        'transaction_price' => 'decimal',
        'is_vacancy_law' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'date_rented_from' => false,
        'date_rented_until' => false,
        'date_reservation' => false,
        'date_sign_deed' => false,
        'linked_applicants' => false,
        'transaction_price' => false,
        'is_vacancy_law' => false
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
        'date_rented_from' => 'dateRentedFrom',
        'date_rented_until' => 'dateRentedUntil',
        'date_reservation' => 'dateReservation',
        'date_sign_deed' => 'dateSignDeed',
        'linked_applicants' => 'linkedApplicants',
        'transaction_price' => 'transactionPrice',
        'is_vacancy_law' => 'isVacancyLaw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_rented_from' => 'setDateRentedFrom',
        'date_rented_until' => 'setDateRentedUntil',
        'date_reservation' => 'setDateReservation',
        'date_sign_deed' => 'setDateSignDeed',
        'linked_applicants' => 'setLinkedApplicants',
        'transaction_price' => 'setTransactionPrice',
        'is_vacancy_law' => 'setIsVacancyLaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_rented_from' => 'getDateRentedFrom',
        'date_rented_until' => 'getDateRentedUntil',
        'date_reservation' => 'getDateReservation',
        'date_sign_deed' => 'getDateSignDeed',
        'linked_applicants' => 'getLinkedApplicants',
        'transaction_price' => 'getTransactionPrice',
        'is_vacancy_law' => 'getIsVacancyLaw'
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
        $this->setIfExists('date_rented_from', $data ?? [], null);
        $this->setIfExists('date_rented_until', $data ?? [], null);
        $this->setIfExists('date_reservation', $data ?? [], null);
        $this->setIfExists('date_sign_deed', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('transaction_price', $data ?? [], null);
        $this->setIfExists('is_vacancy_law', $data ?? [], null);
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

        if ($this->container['date_rented_from'] === null) {
            $invalidProperties[] = "'date_rented_from' can't be null";
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
     * Gets date_rented_from
     *
     * @return \DateTime
     */
    public function getDateRentedFrom()
    {
        return $this->container['date_rented_from'];
    }

    /**
     * Sets date_rented_from
     *
     * @param \DateTime $date_rented_from date_rented_from
     *
     * @return self
     */
    public function setDateRentedFrom($date_rented_from)
    {
        if (is_null($date_rented_from)) {
            throw new \InvalidArgumentException('non-nullable date_rented_from cannot be null');
        }
        $this->container['date_rented_from'] = $date_rented_from;

        return $this;
    }

    /**
     * Gets date_rented_until
     *
     * @return \DateTime|null
     */
    public function getDateRentedUntil()
    {
        return $this->container['date_rented_until'];
    }

    /**
     * Sets date_rented_until
     *
     * @param \DateTime|null $date_rented_until date_rented_until
     *
     * @return self
     */
    public function setDateRentedUntil($date_rented_until)
    {
        if (is_null($date_rented_until)) {
            throw new \InvalidArgumentException('non-nullable date_rented_until cannot be null');
        }
        $this->container['date_rented_until'] = $date_rented_until;

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
     * @param \DateTime|null $date_reservation date_reservation
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
     * Gets date_sign_deed
     *
     * @return \DateTime|null
     */
    public function getDateSignDeed()
    {
        return $this->container['date_sign_deed'];
    }

    /**
     * Sets date_sign_deed
     *
     * @param \DateTime|null $date_sign_deed date_sign_deed
     *
     * @return self
     */
    public function setDateSignDeed($date_sign_deed)
    {
        if (is_null($date_sign_deed)) {
            throw new \InvalidArgumentException('non-nullable date_sign_deed cannot be null');
        }
        $this->container['date_sign_deed'] = $date_sign_deed;

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
     * @param float $transaction_price transaction_price
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
     * Gets is_vacancy_law
     *
     * @return bool|null
     */
    public function getIsVacancyLaw()
    {
        return $this->container['is_vacancy_law'];
    }

    /**
     * Sets is_vacancy_law
     *
     * @param bool|null $is_vacancy_law is_vacancy_law
     *
     * @return self
     */
    public function setIsVacancyLaw($is_vacancy_law)
    {
        if (is_null($is_vacancy_law)) {
            throw new \InvalidArgumentException('non-nullable is_vacancy_law cannot be null');
        }
        $this->container['is_vacancy_law'] = $is_vacancy_law;

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


