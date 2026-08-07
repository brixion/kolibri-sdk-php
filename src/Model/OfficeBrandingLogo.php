<?php

declare(strict_types=1);

/**
 * OfficeBrandingLogo - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * OfficeBrandingLogo.
 * @implements \ArrayAccess<string, mixed>
 */
class OfficeBrandingLogo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'OfficeBrandingLogo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'branding_settings_id' => 'string',
        'office_id' => 'string',
        'logo_type' => '\Brixion\Kolibri\Model\LogoType',
        'logo_url' => 'string',
        'is_kolibri_default' => 'bool',
        'is_document_default' => 'bool',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
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
        'branding_settings_id' => 'guid',
        'office_id' => 'guid',
        'logo_type' => null,
        'logo_url' => null,
        'is_kolibri_default' => null,
        'is_document_default' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'branding_settings_id' => false,
        'office_id' => false,
        'logo_type' => false,
        'logo_url' => false,
        'is_kolibri_default' => false,
        'is_document_default' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
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
        'branding_settings_id' => 'brandingSettingsId',
        'office_id' => 'officeId',
        'logo_type' => 'logoType',
        'logo_url' => 'logoUrl',
        'is_kolibri_default' => 'isKolibriDefault',
        'is_document_default' => 'isDocumentDefault',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branding_settings_id' => 'setBrandingSettingsId',
        'office_id' => 'setOfficeId',
        'logo_type' => 'setLogoType',
        'logo_url' => 'setLogoUrl',
        'is_kolibri_default' => 'setIsKolibriDefault',
        'is_document_default' => 'setIsDocumentDefault',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branding_settings_id' => 'getBrandingSettingsId',
        'office_id' => 'getOfficeId',
        'logo_type' => 'getLogoType',
        'logo_url' => 'getLogoUrl',
        'is_kolibri_default' => 'getIsKolibriDefault',
        'is_document_default' => 'getIsDocumentDefault',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
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
        $this->setIfExists('branding_settings_id', $data ?? [], null);
        $this->setIfExists('office_id', $data ?? [], null);
        $this->setIfExists('logo_type', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('is_kolibri_default', $data ?? [], null);
        $this->setIfExists('is_document_default', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
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

        if ($this->container['branding_settings_id'] === null) {
            $invalidProperties[] = "'branding_settings_id' can't be null";
        }
        if ((mb_strlen($this->container['branding_settings_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'branding_settings_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['office_id'] === null) {
            $invalidProperties[] = "'office_id' can't be null";
        }
        if ((mb_strlen($this->container['office_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'office_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['logo_type'] === null) {
            $invalidProperties[] = "'logo_type' can't be null";
        }
        if ($this->container['is_kolibri_default'] === null) {
            $invalidProperties[] = "'is_kolibri_default' can't be null";
        }
        if ($this->container['is_document_default'] === null) {
            $invalidProperties[] = "'is_document_default' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
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
     * Gets branding_settings_id
     *
     * @return string
     */
    public function getBrandingSettingsId()
    {
        return $this->container['branding_settings_id'];
    }

    /**
     * Sets branding_settings_id
     *
     * @param string $branding_settings_id branding_settings_id
     *
     * @return self
     */
    public function setBrandingSettingsId($branding_settings_id)
    {
        if (is_null($branding_settings_id)) {
            throw new \InvalidArgumentException('non-nullable branding_settings_id cannot be null');
        }

        if ((mb_strlen($branding_settings_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $branding_settings_id when calling OfficeBrandingLogo., must be bigger than or equal to 1.');
        }

        $this->container['branding_settings_id'] = $branding_settings_id;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return string
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param string $office_id office_id
     *
     * @return self
     */
    public function setOfficeId($office_id)
    {
        if (is_null($office_id)) {
            throw new \InvalidArgumentException('non-nullable office_id cannot be null');
        }

        if ((mb_strlen($office_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $office_id when calling OfficeBrandingLogo., must be bigger than or equal to 1.');
        }

        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets logo_type
     *
     * @return \Brixion\Kolibri\Model\LogoType
     */
    public function getLogoType()
    {
        return $this->container['logo_type'];
    }

    /**
     * Sets logo_type
     *
     * @param \Brixion\Kolibri\Model\LogoType $logo_type logo_type
     *
     * @return self
     */
    public function setLogoType($logo_type)
    {
        if (is_null($logo_type)) {
            throw new \InvalidArgumentException('non-nullable logo_type cannot be null');
        }
        $this->container['logo_type'] = $logo_type;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        if (is_null($logo_url)) {
            throw new \InvalidArgumentException('non-nullable logo_url cannot be null');
        }
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets is_kolibri_default
     *
     * @return bool
     */
    public function getIsKolibriDefault()
    {
        return $this->container['is_kolibri_default'];
    }

    /**
     * Sets is_kolibri_default
     *
     * @param bool $is_kolibri_default is_kolibri_default
     *
     * @return self
     */
    public function setIsKolibriDefault($is_kolibri_default)
    {
        if (is_null($is_kolibri_default)) {
            throw new \InvalidArgumentException('non-nullable is_kolibri_default cannot be null');
        }
        $this->container['is_kolibri_default'] = $is_kolibri_default;

        return $this;
    }

    /**
     * Gets is_document_default
     *
     * @return bool
     */
    public function getIsDocumentDefault()
    {
        return $this->container['is_document_default'];
    }

    /**
     * Sets is_document_default
     *
     * @param bool $is_document_default is_document_default
     *
     * @return self
     */
    public function setIsDocumentDefault($is_document_default)
    {
        if (is_null($is_document_default)) {
            throw new \InvalidArgumentException('non-nullable is_document_default cannot be null');
        }
        $this->container['is_document_default'] = $is_document_default;

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
     * @return \DateTime|null
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime|null $date_time_modified date_time_modified
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
            throw new \InvalidArgumentException('invalid length for $id when calling OfficeBrandingLogo., must be bigger than or equal to 1.');
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
