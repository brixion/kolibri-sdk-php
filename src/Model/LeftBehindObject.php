<?php

declare(strict_types=1);

/**
 * LeftBehindObject - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * LeftBehindObject.
 * @implements \ArrayAccess<string, mixed>
 */
class LeftBehindObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'LeftBehindObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'transaction_price' => 'float',
        'rental_price' => 'float',
        'type_of_habitation' => '\Brixion\Kolibri\Model\TypeOfHabitation',
        'house_sort' => '\Brixion\Kolibri\Model\HouseSort',
        'house_type' => '\Brixion\Kolibri\Model\HouseType',
        'house_characteristic' => '\Brixion\Kolibri\Model\HouseCharacteristic',
        'apartment_sort' => '\Brixion\Kolibri\Model\ApartmentSort',
        'apartment_characteristic' => '\Brixion\Kolibri\Model\ApartmentCharacteristic',
        'house_number' => 'int',
        'house_number_post_fix' => 'string',
        'postal_code' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'transaction_price' => 'decimal',
        'rental_price' => 'decimal',
        'type_of_habitation' => null,
        'house_sort' => null,
        'house_type' => null,
        'house_characteristic' => null,
        'apartment_sort' => null,
        'apartment_characteristic' => null,
        'house_number' => 'int32',
        'house_number_post_fix' => null,
        'postal_code' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'transaction_price' => false,
        'rental_price' => false,
        'type_of_habitation' => false,
        'house_sort' => false,
        'house_type' => false,
        'house_characteristic' => false,
        'apartment_sort' => false,
        'apartment_characteristic' => false,
        'house_number' => false,
        'house_number_post_fix' => false,
        'postal_code' => false,
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
        'transaction_price' => 'transactionPrice',
        'rental_price' => 'rentalPrice',
        'type_of_habitation' => 'typeOfHabitation',
        'house_sort' => 'houseSort',
        'house_type' => 'houseType',
        'house_characteristic' => 'houseCharacteristic',
        'apartment_sort' => 'apartmentSort',
        'apartment_characteristic' => 'apartmentCharacteristic',
        'house_number' => 'houseNumber',
        'house_number_post_fix' => 'houseNumberPostFix',
        'postal_code' => 'postalCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_price' => 'setTransactionPrice',
        'rental_price' => 'setRentalPrice',
        'type_of_habitation' => 'setTypeOfHabitation',
        'house_sort' => 'setHouseSort',
        'house_type' => 'setHouseType',
        'house_characteristic' => 'setHouseCharacteristic',
        'apartment_sort' => 'setApartmentSort',
        'apartment_characteristic' => 'setApartmentCharacteristic',
        'house_number' => 'setHouseNumber',
        'house_number_post_fix' => 'setHouseNumberPostFix',
        'postal_code' => 'setPostalCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_price' => 'getTransactionPrice',
        'rental_price' => 'getRentalPrice',
        'type_of_habitation' => 'getTypeOfHabitation',
        'house_sort' => 'getHouseSort',
        'house_type' => 'getHouseType',
        'house_characteristic' => 'getHouseCharacteristic',
        'apartment_sort' => 'getApartmentSort',
        'apartment_characteristic' => 'getApartmentCharacteristic',
        'house_number' => 'getHouseNumber',
        'house_number_post_fix' => 'getHouseNumberPostFix',
        'postal_code' => 'getPostalCode',
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
        $this->setIfExists('transaction_price', $data ?? [], null);
        $this->setIfExists('rental_price', $data ?? [], null);
        $this->setIfExists('type_of_habitation', $data ?? [], null);
        $this->setIfExists('house_sort', $data ?? [], null);
        $this->setIfExists('house_type', $data ?? [], null);
        $this->setIfExists('house_characteristic', $data ?? [], null);
        $this->setIfExists('apartment_sort', $data ?? [], null);
        $this->setIfExists('apartment_characteristic', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_post_fix', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
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

        if (!is_null($this->container['house_number_post_fix']) && (mb_strlen($this->container['house_number_post_fix']) > 50)) {
            $invalidProperties[] = "invalid value for 'house_number_post_fix', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 50.";
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
     * Gets transaction_price
     *
     * @return float|null
     */
    public function getTransactionPrice()
    {
        return $this->container['transaction_price'];
    }

    /**
     * Sets transaction_price
     *
     * @param float|null $transaction_price transaction_price
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
     * Gets rental_price
     *
     * @return float|null
     */
    public function getRentalPrice()
    {
        return $this->container['rental_price'];
    }

    /**
     * Sets rental_price
     *
     * @param float|null $rental_price rental_price
     *
     * @return self
     */
    public function setRentalPrice($rental_price)
    {
        if (is_null($rental_price)) {
            throw new \InvalidArgumentException('non-nullable rental_price cannot be null');
        }
        $this->container['rental_price'] = $rental_price;

        return $this;
    }

    /**
     * Gets type_of_habitation
     *
     * @return \Brixion\Kolibri\Model\TypeOfHabitation|null
     */
    public function getTypeOfHabitation()
    {
        return $this->container['type_of_habitation'];
    }

    /**
     * Sets type_of_habitation
     *
     * @param \Brixion\Kolibri\Model\TypeOfHabitation|null $type_of_habitation type_of_habitation
     *
     * @return self
     */
    public function setTypeOfHabitation($type_of_habitation)
    {
        if (is_null($type_of_habitation)) {
            throw new \InvalidArgumentException('non-nullable type_of_habitation cannot be null');
        }
        $this->container['type_of_habitation'] = $type_of_habitation;

        return $this;
    }

    /**
     * Gets house_sort
     *
     * @return \Brixion\Kolibri\Model\HouseSort|null
     */
    public function getHouseSort()
    {
        return $this->container['house_sort'];
    }

    /**
     * Sets house_sort
     *
     * @param \Brixion\Kolibri\Model\HouseSort|null $house_sort house_sort
     *
     * @return self
     */
    public function setHouseSort($house_sort)
    {
        if (is_null($house_sort)) {
            throw new \InvalidArgumentException('non-nullable house_sort cannot be null');
        }
        $this->container['house_sort'] = $house_sort;

        return $this;
    }

    /**
     * Gets house_type
     *
     * @return \Brixion\Kolibri\Model\HouseType|null
     */
    public function getHouseType()
    {
        return $this->container['house_type'];
    }

    /**
     * Sets house_type
     *
     * @param \Brixion\Kolibri\Model\HouseType|null $house_type house_type
     *
     * @return self
     */
    public function setHouseType($house_type)
    {
        if (is_null($house_type)) {
            throw new \InvalidArgumentException('non-nullable house_type cannot be null');
        }
        $this->container['house_type'] = $house_type;

        return $this;
    }

    /**
     * Gets house_characteristic
     *
     * @return \Brixion\Kolibri\Model\HouseCharacteristic|null
     */
    public function getHouseCharacteristic()
    {
        return $this->container['house_characteristic'];
    }

    /**
     * Sets house_characteristic
     *
     * @param \Brixion\Kolibri\Model\HouseCharacteristic|null $house_characteristic house_characteristic
     *
     * @return self
     */
    public function setHouseCharacteristic($house_characteristic)
    {
        if (is_null($house_characteristic)) {
            throw new \InvalidArgumentException('non-nullable house_characteristic cannot be null');
        }
        $this->container['house_characteristic'] = $house_characteristic;

        return $this;
    }

    /**
     * Gets apartment_sort
     *
     * @return \Brixion\Kolibri\Model\ApartmentSort|null
     */
    public function getApartmentSort()
    {
        return $this->container['apartment_sort'];
    }

    /**
     * Sets apartment_sort
     *
     * @param \Brixion\Kolibri\Model\ApartmentSort|null $apartment_sort apartment_sort
     *
     * @return self
     */
    public function setApartmentSort($apartment_sort)
    {
        if (is_null($apartment_sort)) {
            throw new \InvalidArgumentException('non-nullable apartment_sort cannot be null');
        }
        $this->container['apartment_sort'] = $apartment_sort;

        return $this;
    }

    /**
     * Gets apartment_characteristic
     *
     * @return \Brixion\Kolibri\Model\ApartmentCharacteristic|null
     */
    public function getApartmentCharacteristic()
    {
        return $this->container['apartment_characteristic'];
    }

    /**
     * Sets apartment_characteristic
     *
     * @param \Brixion\Kolibri\Model\ApartmentCharacteristic|null $apartment_characteristic apartment_characteristic
     *
     * @return self
     */
    public function setApartmentCharacteristic($apartment_characteristic)
    {
        if (is_null($apartment_characteristic)) {
            throw new \InvalidArgumentException('non-nullable apartment_characteristic cannot be null');
        }
        $this->container['apartment_characteristic'] = $apartment_characteristic;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int|null $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            throw new \InvalidArgumentException('non-nullable house_number cannot be null');
        }
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_post_fix
     *
     * @return string|null
     */
    public function getHouseNumberPostFix()
    {
        return $this->container['house_number_post_fix'];
    }

    /**
     * Sets house_number_post_fix
     *
     * @param string|null $house_number_post_fix house_number_post_fix
     *
     * @return self
     */
    public function setHouseNumberPostFix($house_number_post_fix)
    {
        if (is_null($house_number_post_fix)) {
            throw new \InvalidArgumentException('non-nullable house_number_post_fix cannot be null');
        }
        if ((mb_strlen($house_number_post_fix) > 50)) {
            throw new \InvalidArgumentException('invalid length for $house_number_post_fix when calling LeftBehindObject., must be smaller than or equal to 50.');
        }

        $this->container['house_number_post_fix'] = $house_number_post_fix;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling LeftBehindObject., must be smaller than or equal to 50.');
        }

        $this->container['postal_code'] = $postal_code;

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
