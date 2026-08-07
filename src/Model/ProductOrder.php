<?php

declare(strict_types=1);

/**
 * ProductOrder - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ProductOrder.
 * @implements \ArrayAccess<string, mixed>
 */
class ProductOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ProductOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'charge_to_customer_budget' => 'bool',
        'date_time' => '\DateTime',
        'description' => 'string',
        'financial_administration_id' => 'string',
        'financial_administration_product_id' => 'int',
        'id' => 'string',
        'linked_invoice' => '\Brixion\Kolibri\Model\LinkedInvoice',
        'unit_price_net' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'charge_to_customer_budget' => null,
        'date_time' => 'date-time',
        'description' => null,
        'financial_administration_id' => 'guid',
        'financial_administration_product_id' => 'int32',
        'id' => 'guid',
        'linked_invoice' => null,
        'unit_price_net' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'charge_to_customer_budget' => false,
        'date_time' => false,
        'description' => false,
        'financial_administration_id' => false,
        'financial_administration_product_id' => false,
        'id' => false,
        'linked_invoice' => false,
        'unit_price_net' => false,
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
        'charge_to_customer_budget' => 'chargeToCustomerBudget',
        'date_time' => 'dateTime',
        'description' => 'description',
        'financial_administration_id' => 'financialAdministrationId',
        'financial_administration_product_id' => 'financialAdministrationProductId',
        'id' => 'id',
        'linked_invoice' => 'linkedInvoice',
        'unit_price_net' => 'unitPriceNet',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_to_customer_budget' => 'setChargeToCustomerBudget',
        'date_time' => 'setDateTime',
        'description' => 'setDescription',
        'financial_administration_id' => 'setFinancialAdministrationId',
        'financial_administration_product_id' => 'setFinancialAdministrationProductId',
        'id' => 'setId',
        'linked_invoice' => 'setLinkedInvoice',
        'unit_price_net' => 'setUnitPriceNet',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_to_customer_budget' => 'getChargeToCustomerBudget',
        'date_time' => 'getDateTime',
        'description' => 'getDescription',
        'financial_administration_id' => 'getFinancialAdministrationId',
        'financial_administration_product_id' => 'getFinancialAdministrationProductId',
        'id' => 'getId',
        'linked_invoice' => 'getLinkedInvoice',
        'unit_price_net' => 'getUnitPriceNet',
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
        $this->setIfExists('charge_to_customer_budget', $data ?? [], null);
        $this->setIfExists('date_time', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('financial_administration_id', $data ?? [], null);
        $this->setIfExists('financial_administration_product_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('linked_invoice', $data ?? [], null);
        $this->setIfExists('unit_price_net', $data ?? [], null);
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

        if ($this->container['charge_to_customer_budget'] === null) {
            $invalidProperties[] = "'charge_to_customer_budget' can't be null";
        }
        if ($this->container['date_time'] === null) {
            $invalidProperties[] = "'date_time' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['unit_price_net'] === null) {
            $invalidProperties[] = "'unit_price_net' can't be null";
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
     * Gets charge_to_customer_budget
     *
     * @return bool
     */
    public function getChargeToCustomerBudget()
    {
        return $this->container['charge_to_customer_budget'];
    }

    /**
     * Sets charge_to_customer_budget
     *
     * @param bool $charge_to_customer_budget charge_to_customer_budget
     *
     * @return self
     */
    public function setChargeToCustomerBudget($charge_to_customer_budget)
    {
        if (is_null($charge_to_customer_budget)) {
            throw new \InvalidArgumentException('non-nullable charge_to_customer_budget cannot be null');
        }
        $this->container['charge_to_customer_budget'] = $charge_to_customer_budget;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time date_time
     *
     * @return self
     */
    public function setDateTime($date_time)
    {
        if (is_null($date_time)) {
            throw new \InvalidArgumentException('non-nullable date_time cannot be null');
        }
        $this->container['date_time'] = $date_time;

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
     * Gets financial_administration_product_id
     *
     * @return int|null
     */
    public function getFinancialAdministrationProductId()
    {
        return $this->container['financial_administration_product_id'];
    }

    /**
     * Sets financial_administration_product_id
     *
     * @param int|null $financial_administration_product_id financial_administration_product_id
     *
     * @return self
     */
    public function setFinancialAdministrationProductId($financial_administration_product_id)
    {
        if (is_null($financial_administration_product_id)) {
            throw new \InvalidArgumentException('non-nullable financial_administration_product_id cannot be null');
        }
        $this->container['financial_administration_product_id'] = $financial_administration_product_id;

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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets linked_invoice
     *
     * @return \Brixion\Kolibri\Model\LinkedInvoice|null
     */
    public function getLinkedInvoice()
    {
        return $this->container['linked_invoice'];
    }

    /**
     * Sets linked_invoice
     *
     * @param \Brixion\Kolibri\Model\LinkedInvoice|null $linked_invoice linked_invoice
     *
     * @return self
     */
    public function setLinkedInvoice($linked_invoice)
    {
        if (is_null($linked_invoice)) {
            throw new \InvalidArgumentException('non-nullable linked_invoice cannot be null');
        }
        $this->container['linked_invoice'] = $linked_invoice;

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
