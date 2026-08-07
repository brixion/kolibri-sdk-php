<?php

declare(strict_types=1);

/**
 * ProjectAssignmentsUpdateAvailabilityRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ProjectAssignmentsUpdateAvailabilityRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectAssignmentsUpdateAvailabilityRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ProjectAssignmentsUpdateAvailabilityRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'available_settings' => '\Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityAvailableSettings',
        'hide_on_funda_until' => '\DateTime',
        'id' => 'string',
        'update_availability_action' => '\Brixion\Kolibri\Model\UpdateAvailabilityAction',
        'rented_settings' => '\Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityRentedSettings',
        'sold_settings' => '\Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilitySoldSettings',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'available_settings' => null,
        'hide_on_funda_until' => 'date-time',
        'id' => 'guid',
        'update_availability_action' => null,
        'rented_settings' => null,
        'sold_settings' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'available_settings' => false,
        'hide_on_funda_until' => false,
        'id' => false,
        'update_availability_action' => false,
        'rented_settings' => false,
        'sold_settings' => false,
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
        'available_settings' => 'availableSettings',
        'hide_on_funda_until' => 'hideOnFundaUntil',
        'id' => 'id',
        'update_availability_action' => 'updateAvailabilityAction',
        'rented_settings' => 'rentedSettings',
        'sold_settings' => 'soldSettings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_settings' => 'setAvailableSettings',
        'hide_on_funda_until' => 'setHideOnFundaUntil',
        'id' => 'setId',
        'update_availability_action' => 'setUpdateAvailabilityAction',
        'rented_settings' => 'setRentedSettings',
        'sold_settings' => 'setSoldSettings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_settings' => 'getAvailableSettings',
        'hide_on_funda_until' => 'getHideOnFundaUntil',
        'id' => 'getId',
        'update_availability_action' => 'getUpdateAvailabilityAction',
        'rented_settings' => 'getRentedSettings',
        'sold_settings' => 'getSoldSettings',
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
        $this->setIfExists('available_settings', $data ?? [], null);
        $this->setIfExists('hide_on_funda_until', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('update_availability_action', $data ?? [], null);
        $this->setIfExists('rented_settings', $data ?? [], null);
        $this->setIfExists('sold_settings', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['update_availability_action'] === null) {
            $invalidProperties[] = "'update_availability_action' can't be null";
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
     * Gets available_settings
     *
     * @return \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityAvailableSettings|null
     */
    public function getAvailableSettings()
    {
        return $this->container['available_settings'];
    }

    /**
     * Sets available_settings
     *
     * @param \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityAvailableSettings|null $available_settings AvailableSettings is required when UpdateAvailabilityAction = ToAvailable.
     *
     * @return self
     */
    public function setAvailableSettings($available_settings)
    {
        if (is_null($available_settings)) {
            throw new \InvalidArgumentException('non-nullable available_settings cannot be null');
        }
        $this->container['available_settings'] = $available_settings;

        return $this;
    }

    /**
     * Gets hide_on_funda_until
     *
     * @return \DateTime|null
     */
    public function getHideOnFundaUntil()
    {
        return $this->container['hide_on_funda_until'];
    }

    /**
     * Sets hide_on_funda_until
     *
     * @param \DateTime|null $hide_on_funda_until Publish this assignment to Tiara, but hide it for Funda for a while.
     *
     * @return self
     */
    public function setHideOnFundaUntil($hide_on_funda_until)
    {
        if (is_null($hide_on_funda_until)) {
            throw new \InvalidArgumentException('non-nullable hide_on_funda_until cannot be null');
        }
        $this->container['hide_on_funda_until'] = $hide_on_funda_until;

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
            throw new \InvalidArgumentException('invalid length for $id when calling ProjectAssignmentsUpdateAvailabilityRequest., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets update_availability_action
     *
     * @return \Brixion\Kolibri\Model\UpdateAvailabilityAction
     */
    public function getUpdateAvailabilityAction()
    {
        return $this->container['update_availability_action'];
    }

    /**
     * Sets update_availability_action
     *
     * @param \Brixion\Kolibri\Model\UpdateAvailabilityAction $update_availability_action update_availability_action
     *
     * @return self
     */
    public function setUpdateAvailabilityAction($update_availability_action)
    {
        if (is_null($update_availability_action)) {
            throw new \InvalidArgumentException('non-nullable update_availability_action cannot be null');
        }
        $this->container['update_availability_action'] = $update_availability_action;

        return $this;
    }

    /**
     * Gets rented_settings
     *
     * @return \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityRentedSettings|null
     */
    public function getRentedSettings()
    {
        return $this->container['rented_settings'];
    }

    /**
     * Sets rented_settings
     *
     * @param \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilityRentedSettings|null $rented_settings RentedSettings is required when UpdateAvailabilityAction = ToRented
     *
     * @return self
     */
    public function setRentedSettings($rented_settings)
    {
        if (is_null($rented_settings)) {
            throw new \InvalidArgumentException('non-nullable rented_settings cannot be null');
        }
        $this->container['rented_settings'] = $rented_settings;

        return $this;
    }

    /**
     * Gets sold_settings
     *
     * @return \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilitySoldSettings|null
     */
    public function getSoldSettings()
    {
        return $this->container['sold_settings'];
    }

    /**
     * Sets sold_settings
     *
     * @param \Brixion\Kolibri\Model\ProjectAssignmentsUpdateAvailabilitySoldSettings|null $sold_settings SoldSettings is required when UpdateAvailabilityAction = ToSold
     *
     * @return self
     */
    public function setSoldSettings($sold_settings)
    {
        if (is_null($sold_settings)) {
            throw new \InvalidArgumentException('non-nullable sold_settings cannot be null');
        }
        $this->container['sold_settings'] = $sold_settings;

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
