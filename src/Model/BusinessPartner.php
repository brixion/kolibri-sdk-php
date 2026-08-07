<?php

declare(strict_types=1);

/**
 * BusinessPartner - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * BusinessPartner.
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessPartner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'BusinessPartner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'association_info' => '\Brixion\Kolibri\Model\RealEstateAssociationInfo',
        'association_info_alt' => '\Brixion\Kolibri\Model\RealEstateAssociationInfo',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'display_name' => 'string',
        'email_address' => 'string',
        'id' => 'string',
        'phone_number' => 'string',
        'postal_address' => '\Brixion\Kolibri\Model\Address',
        'visit_address' => '\Brixion\Kolibri\Model\Address',
        'web_address' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'association_info' => null,
        'association_info_alt' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'display_name' => null,
        'email_address' => null,
        'id' => 'guid',
        'phone_number' => null,
        'postal_address' => null,
        'visit_address' => null,
        'web_address' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'association_info' => false,
        'association_info_alt' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'display_name' => false,
        'email_address' => false,
        'id' => false,
        'phone_number' => false,
        'postal_address' => false,
        'visit_address' => false,
        'web_address' => false,
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
        'association_info' => 'associationInfo',
        'association_info_alt' => 'associationInfoAlt',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'display_name' => 'displayName',
        'email_address' => 'emailAddress',
        'id' => 'id',
        'phone_number' => 'phoneNumber',
        'postal_address' => 'postalAddress',
        'visit_address' => 'visitAddress',
        'web_address' => 'webAddress',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'association_info' => 'setAssociationInfo',
        'association_info_alt' => 'setAssociationInfoAlt',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'display_name' => 'setDisplayName',
        'email_address' => 'setEmailAddress',
        'id' => 'setId',
        'phone_number' => 'setPhoneNumber',
        'postal_address' => 'setPostalAddress',
        'visit_address' => 'setVisitAddress',
        'web_address' => 'setWebAddress',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'association_info' => 'getAssociationInfo',
        'association_info_alt' => 'getAssociationInfoAlt',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'display_name' => 'getDisplayName',
        'email_address' => 'getEmailAddress',
        'id' => 'getId',
        'phone_number' => 'getPhoneNumber',
        'postal_address' => 'getPostalAddress',
        'visit_address' => 'getVisitAddress',
        'web_address' => 'getWebAddress',
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
        $this->setIfExists('association_info', $data ?? [], null);
        $this->setIfExists('association_info_alt', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('visit_address', $data ?? [], null);
        $this->setIfExists('web_address', $data ?? [], null);
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

        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
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
     * Gets association_info
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociationInfo|null
     */
    public function getAssociationInfo()
    {
        return $this->container['association_info'];
    }

    /**
     * Sets association_info
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociationInfo|null $association_info association_info
     *
     * @return self
     */
    public function setAssociationInfo($association_info)
    {
        if (is_null($association_info)) {
            throw new \InvalidArgumentException('non-nullable association_info cannot be null');
        }
        $this->container['association_info'] = $association_info;

        return $this;
    }

    /**
     * Gets association_info_alt
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociationInfo|null
     */
    public function getAssociationInfoAlt()
    {
        return $this->container['association_info_alt'];
    }

    /**
     * Sets association_info_alt
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociationInfo|null $association_info_alt association_info_alt
     *
     * @return self
     */
    public function setAssociationInfoAlt($association_info_alt)
    {
        if (is_null($association_info_alt)) {
            throw new \InvalidArgumentException('non-nullable association_info_alt cannot be null');
        }
        $this->container['association_info_alt'] = $association_info_alt;

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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

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
            throw new \InvalidArgumentException('invalid length for $id when calling BusinessPartner., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Brixion\Kolibri\Model\Address|null $postal_address postal_address
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        if (is_null($postal_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address cannot be null');
        }
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets visit_address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getVisitAddress()
    {
        return $this->container['visit_address'];
    }

    /**
     * Sets visit_address
     *
     * @param \Brixion\Kolibri\Model\Address|null $visit_address visit_address
     *
     * @return self
     */
    public function setVisitAddress($visit_address)
    {
        if (is_null($visit_address)) {
            throw new \InvalidArgumentException('non-nullable visit_address cannot be null');
        }
        $this->container['visit_address'] = $visit_address;

        return $this;
    }

    /**
     * Gets web_address
     *
     * @return string|null
     */
    public function getWebAddress()
    {
        return $this->container['web_address'];
    }

    /**
     * Sets web_address
     *
     * @param string|null $web_address web_address
     *
     * @return self
     */
    public function setWebAddress($web_address)
    {
        if (is_null($web_address)) {
            throw new \InvalidArgumentException('non-nullable web_address cannot be null');
        }
        $this->container['web_address'] = $web_address;

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
