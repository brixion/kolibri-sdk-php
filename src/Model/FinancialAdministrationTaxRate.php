<?php

declare(strict_types=1);

/**
 * FinancialAdministrationTaxRate - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * FinancialAdministrationTaxRate.
 * @implements \ArrayAccess<string, mixed>
 */
class FinancialAdministrationTaxRate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'FinancialAdministrationTaxRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'description' => 'string',
        'description_short' => 'string',
        'export_ledger_account_code' => 'string',
        'export_tax_code' => 'string',
        'id' => 'int',
        'is_active' => 'bool',
        'tax_percentage' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'description' => null,
        'description_short' => null,
        'export_ledger_account_code' => null,
        'export_tax_code' => null,
        'id' => 'int32',
        'is_active' => null,
        'tax_percentage' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'description' => false,
        'description_short' => false,
        'export_ledger_account_code' => false,
        'export_tax_code' => false,
        'id' => false,
        'is_active' => false,
        'tax_percentage' => false,
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
        'description' => 'description',
        'description_short' => 'descriptionShort',
        'export_ledger_account_code' => 'exportLedgerAccountCode',
        'export_tax_code' => 'exportTaxCode',
        'id' => 'id',
        'is_active' => 'isActive',
        'tax_percentage' => 'taxPercentage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'description_short' => 'setDescriptionShort',
        'export_ledger_account_code' => 'setExportLedgerAccountCode',
        'export_tax_code' => 'setExportTaxCode',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'tax_percentage' => 'setTaxPercentage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'description_short' => 'getDescriptionShort',
        'export_ledger_account_code' => 'getExportLedgerAccountCode',
        'export_tax_code' => 'getExportTaxCode',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'tax_percentage' => 'getTaxPercentage',
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_short', $data ?? [], null);
        $this->setIfExists('export_ledger_account_code', $data ?? [], null);
        $this->setIfExists('export_tax_code', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('tax_percentage', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description_short']) && (mb_strlen($this->container['description_short']) > 10)) {
            $invalidProperties[] = "invalid value for 'description_short', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['description_short']) && (mb_strlen($this->container['description_short']) < 0)) {
            $invalidProperties[] = "invalid value for 'description_short', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['export_ledger_account_code']) && (mb_strlen($this->container['export_ledger_account_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'export_ledger_account_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['export_ledger_account_code']) && (mb_strlen($this->container['export_ledger_account_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'export_ledger_account_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['export_tax_code']) && (mb_strlen($this->container['export_tax_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'export_tax_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['export_tax_code']) && (mb_strlen($this->container['export_tax_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'export_tax_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['tax_percentage'] === null) {
            $invalidProperties[] = "'tax_percentage' can't be null";
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
        if ((mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling FinancialAdministrationTaxRate., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling FinancialAdministrationTaxRate., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_short
     *
     * @return string|null
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     *
     * @param string|null $description_short description_short
     *
     * @return self
     */
    public function setDescriptionShort($description_short)
    {
        if (is_null($description_short)) {
            throw new \InvalidArgumentException('non-nullable description_short cannot be null');
        }
        if ((mb_strlen($description_short) > 10)) {
            throw new \InvalidArgumentException('invalid length for $description_short when calling FinancialAdministrationTaxRate., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($description_short) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description_short when calling FinancialAdministrationTaxRate., must be bigger than or equal to 0.');
        }

        $this->container['description_short'] = $description_short;

        return $this;
    }

    /**
     * Gets export_ledger_account_code
     *
     * @return string|null
     */
    public function getExportLedgerAccountCode()
    {
        return $this->container['export_ledger_account_code'];
    }

    /**
     * Sets export_ledger_account_code
     *
     * @param string|null $export_ledger_account_code export_ledger_account_code
     *
     * @return self
     */
    public function setExportLedgerAccountCode($export_ledger_account_code)
    {
        if (is_null($export_ledger_account_code)) {
            throw new \InvalidArgumentException('non-nullable export_ledger_account_code cannot be null');
        }
        if ((mb_strlen($export_ledger_account_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $export_ledger_account_code when calling FinancialAdministrationTaxRate., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($export_ledger_account_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $export_ledger_account_code when calling FinancialAdministrationTaxRate., must be bigger than or equal to 0.');
        }

        $this->container['export_ledger_account_code'] = $export_ledger_account_code;

        return $this;
    }

    /**
     * Gets export_tax_code
     *
     * @return string|null
     */
    public function getExportTaxCode()
    {
        return $this->container['export_tax_code'];
    }

    /**
     * Sets export_tax_code
     *
     * @param string|null $export_tax_code export_tax_code
     *
     * @return self
     */
    public function setExportTaxCode($export_tax_code)
    {
        if (is_null($export_tax_code)) {
            throw new \InvalidArgumentException('non-nullable export_tax_code cannot be null');
        }
        if ((mb_strlen($export_tax_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $export_tax_code when calling FinancialAdministrationTaxRate., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($export_tax_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $export_tax_code when calling FinancialAdministrationTaxRate., must be bigger than or equal to 0.');
        }

        $this->container['export_tax_code'] = $export_tax_code;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets tax_percentage
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param float $tax_percentage tax_percentage
     *
     * @return self
     */
    public function setTaxPercentage($tax_percentage)
    {
        if (is_null($tax_percentage)) {
            throw new \InvalidArgumentException('non-nullable tax_percentage cannot be null');
        }
        $this->container['tax_percentage'] = $tax_percentage;

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
