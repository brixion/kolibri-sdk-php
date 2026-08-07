<?php

declare(strict_types=1);

/**
 * InvoiceLine - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceLine.
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'InvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'amount' => 'float',
        'description' => 'string',
        'export_ledger_account_code_product' => 'string',
        'export_ledger_account_code_tax' => 'string',
        'export_product_code' => 'string',
        'export_tex_code' => 'string',
        'product_id' => 'int',
        'tax_percentage' => 'float',
        'total_price_gross' => 'float',
        'tax_rate_id' => 'int',
        'total_price_net' => 'float',
        'total_tax' => 'float',
        'unit_price_gross' => 'float',
        'unit_price_net' => 'float',
        'unit_tax' => 'float',
        'product_to_pass_on_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'amount' => 'decimal',
        'description' => null,
        'export_ledger_account_code_product' => null,
        'export_ledger_account_code_tax' => null,
        'export_product_code' => null,
        'export_tex_code' => null,
        'product_id' => 'int32',
        'tax_percentage' => 'decimal',
        'total_price_gross' => 'decimal',
        'tax_rate_id' => 'int32',
        'total_price_net' => 'decimal',
        'total_tax' => 'decimal',
        'unit_price_gross' => 'decimal',
        'unit_price_net' => 'decimal',
        'unit_tax' => 'decimal',
        'product_to_pass_on_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'amount' => false,
        'description' => false,
        'export_ledger_account_code_product' => false,
        'export_ledger_account_code_tax' => false,
        'export_product_code' => false,
        'export_tex_code' => false,
        'product_id' => false,
        'tax_percentage' => false,
        'total_price_gross' => false,
        'tax_rate_id' => false,
        'total_price_net' => false,
        'total_tax' => false,
        'unit_price_gross' => false,
        'unit_price_net' => false,
        'unit_tax' => false,
        'product_to_pass_on_id' => false,
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
        'amount' => 'amount',
        'description' => 'description',
        'export_ledger_account_code_product' => 'exportLedgerAccountCodeProduct',
        'export_ledger_account_code_tax' => 'exportLedgerAccountCodeTax',
        'export_product_code' => 'exportProductCode',
        'export_tex_code' => 'exportTexCode',
        'product_id' => 'productID',
        'tax_percentage' => 'taxPercentage',
        'total_price_gross' => 'totalPriceGross',
        'tax_rate_id' => 'taxRateID',
        'total_price_net' => 'totalPriceNet',
        'total_tax' => 'totalTax',
        'unit_price_gross' => 'unitPriceGross',
        'unit_price_net' => 'unitPriceNet',
        'unit_tax' => 'unitTax',
        'product_to_pass_on_id' => 'productToPassOnID',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'export_ledger_account_code_product' => 'setExportLedgerAccountCodeProduct',
        'export_ledger_account_code_tax' => 'setExportLedgerAccountCodeTax',
        'export_product_code' => 'setExportProductCode',
        'export_tex_code' => 'setExportTexCode',
        'product_id' => 'setProductId',
        'tax_percentage' => 'setTaxPercentage',
        'total_price_gross' => 'setTotalPriceGross',
        'tax_rate_id' => 'setTaxRateId',
        'total_price_net' => 'setTotalPriceNet',
        'total_tax' => 'setTotalTax',
        'unit_price_gross' => 'setUnitPriceGross',
        'unit_price_net' => 'setUnitPriceNet',
        'unit_tax' => 'setUnitTax',
        'product_to_pass_on_id' => 'setProductToPassOnId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'export_ledger_account_code_product' => 'getExportLedgerAccountCodeProduct',
        'export_ledger_account_code_tax' => 'getExportLedgerAccountCodeTax',
        'export_product_code' => 'getExportProductCode',
        'export_tex_code' => 'getExportTexCode',
        'product_id' => 'getProductId',
        'tax_percentage' => 'getTaxPercentage',
        'total_price_gross' => 'getTotalPriceGross',
        'tax_rate_id' => 'getTaxRateId',
        'total_price_net' => 'getTotalPriceNet',
        'total_tax' => 'getTotalTax',
        'unit_price_gross' => 'getUnitPriceGross',
        'unit_price_net' => 'getUnitPriceNet',
        'unit_tax' => 'getUnitTax',
        'product_to_pass_on_id' => 'getProductToPassOnId',
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('export_ledger_account_code_product', $data ?? [], null);
        $this->setIfExists('export_ledger_account_code_tax', $data ?? [], null);
        $this->setIfExists('export_product_code', $data ?? [], null);
        $this->setIfExists('export_tex_code', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('tax_percentage', $data ?? [], null);
        $this->setIfExists('total_price_gross', $data ?? [], null);
        $this->setIfExists('tax_rate_id', $data ?? [], null);
        $this->setIfExists('total_price_net', $data ?? [], null);
        $this->setIfExists('total_tax', $data ?? [], null);
        $this->setIfExists('unit_price_gross', $data ?? [], null);
        $this->setIfExists('unit_price_net', $data ?? [], null);
        $this->setIfExists('unit_tax', $data ?? [], null);
        $this->setIfExists('product_to_pass_on_id', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['tax_percentage'] === null) {
            $invalidProperties[] = "'tax_percentage' can't be null";
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
        if ($this->container['unit_price_gross'] === null) {
            $invalidProperties[] = "'unit_price_gross' can't be null";
        }
        if ($this->container['unit_price_net'] === null) {
            $invalidProperties[] = "'unit_price_net' can't be null";
        }
        if ($this->container['unit_tax'] === null) {
            $invalidProperties[] = "'unit_tax' can't be null";
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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets export_ledger_account_code_product
     *
     * @return string|null
     */
    public function getExportLedgerAccountCodeProduct()
    {
        return $this->container['export_ledger_account_code_product'];
    }

    /**
     * Sets export_ledger_account_code_product
     *
     * @param string|null $export_ledger_account_code_product export_ledger_account_code_product
     *
     * @return self
     */
    public function setExportLedgerAccountCodeProduct($export_ledger_account_code_product)
    {
        if (is_null($export_ledger_account_code_product)) {
            throw new \InvalidArgumentException('non-nullable export_ledger_account_code_product cannot be null');
        }
        $this->container['export_ledger_account_code_product'] = $export_ledger_account_code_product;

        return $this;
    }

    /**
     * Gets export_ledger_account_code_tax
     *
     * @return string|null
     */
    public function getExportLedgerAccountCodeTax()
    {
        return $this->container['export_ledger_account_code_tax'];
    }

    /**
     * Sets export_ledger_account_code_tax
     *
     * @param string|null $export_ledger_account_code_tax export_ledger_account_code_tax
     *
     * @return self
     */
    public function setExportLedgerAccountCodeTax($export_ledger_account_code_tax)
    {
        if (is_null($export_ledger_account_code_tax)) {
            throw new \InvalidArgumentException('non-nullable export_ledger_account_code_tax cannot be null');
        }
        $this->container['export_ledger_account_code_tax'] = $export_ledger_account_code_tax;

        return $this;
    }

    /**
     * Gets export_product_code
     *
     * @return string|null
     */
    public function getExportProductCode()
    {
        return $this->container['export_product_code'];
    }

    /**
     * Sets export_product_code
     *
     * @param string|null $export_product_code export_product_code
     *
     * @return self
     */
    public function setExportProductCode($export_product_code)
    {
        if (is_null($export_product_code)) {
            throw new \InvalidArgumentException('non-nullable export_product_code cannot be null');
        }
        $this->container['export_product_code'] = $export_product_code;

        return $this;
    }

    /**
     * Gets export_tex_code
     *
     * @return string|null
     */
    public function getExportTexCode()
    {
        return $this->container['export_tex_code'];
    }

    /**
     * Sets export_tex_code
     *
     * @param string|null $export_tex_code export_tex_code
     *
     * @return self
     */
    public function setExportTexCode($export_tex_code)
    {
        if (is_null($export_tex_code)) {
            throw new \InvalidArgumentException('non-nullable export_tex_code cannot be null');
        }
        $this->container['export_tex_code'] = $export_tex_code;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int|null $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }
        $this->container['product_id'] = $product_id;

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
     * Gets tax_rate_id
     *
     * @return int|null
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     *
     * @param int|null $tax_rate_id tax_rate_id
     *
     * @return self
     */
    public function setTaxRateId($tax_rate_id)
    {
        if (is_null($tax_rate_id)) {
            throw new \InvalidArgumentException('non-nullable tax_rate_id cannot be null');
        }
        $this->container['tax_rate_id'] = $tax_rate_id;

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
     * Gets unit_price_gross
     *
     * @return float
     */
    public function getUnitPriceGross()
    {
        return $this->container['unit_price_gross'];
    }

    /**
     * Sets unit_price_gross
     *
     * @param float $unit_price_gross unit_price_gross
     *
     * @return self
     */
    public function setUnitPriceGross($unit_price_gross)
    {
        if (is_null($unit_price_gross)) {
            throw new \InvalidArgumentException('non-nullable unit_price_gross cannot be null');
        }
        $this->container['unit_price_gross'] = $unit_price_gross;

        return $this;
    }

    /**
     * Gets unit_price_net
     *
     * @return float
     */
    public function getUnitPriceNet()
    {
        return $this->container['unit_price_net'];
    }

    /**
     * Sets unit_price_net
     *
     * @param float $unit_price_net unit_price_net
     *
     * @return self
     */
    public function setUnitPriceNet($unit_price_net)
    {
        if (is_null($unit_price_net)) {
            throw new \InvalidArgumentException('non-nullable unit_price_net cannot be null');
        }
        $this->container['unit_price_net'] = $unit_price_net;

        return $this;
    }

    /**
     * Gets unit_tax
     *
     * @return float
     */
    public function getUnitTax()
    {
        return $this->container['unit_tax'];
    }

    /**
     * Sets unit_tax
     *
     * @param float $unit_tax unit_tax
     *
     * @return self
     */
    public function setUnitTax($unit_tax)
    {
        if (is_null($unit_tax)) {
            throw new \InvalidArgumentException('non-nullable unit_tax cannot be null');
        }
        $this->container['unit_tax'] = $unit_tax;

        return $this;
    }

    /**
     * Gets product_to_pass_on_id
     *
     * @return string|null
     */
    public function getProductToPassOnId()
    {
        return $this->container['product_to_pass_on_id'];
    }

    /**
     * Sets product_to_pass_on_id
     *
     * @param string|null $product_to_pass_on_id product_to_pass_on_id
     *
     * @return self
     */
    public function setProductToPassOnId($product_to_pass_on_id)
    {
        if (is_null($product_to_pass_on_id)) {
            throw new \InvalidArgumentException('non-nullable product_to_pass_on_id cannot be null');
        }
        $this->container['product_to_pass_on_id'] = $product_to_pass_on_id;

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
