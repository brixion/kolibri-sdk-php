<?php

declare(strict_types=1);

/**
 * ContactLinkSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ContactLinkSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class ContactLinkSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ContactLinkSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_partner_link' => 'bool',
        'link_description' => 'string',
        'link_type' => 'string',
        'source_relation' => '\Brixion\Kolibri\Model\LinkedRelation',
        'target_relation' => '\Brixion\Kolibri\Model\LinkedRelation',
        'real_estate_agency_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'is_partner_link' => null,
        'link_description' => null,
        'link_type' => null,
        'source_relation' => null,
        'target_relation' => null,
        'real_estate_agency_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_partner_link' => false,
        'link_description' => false,
        'link_type' => false,
        'source_relation' => false,
        'target_relation' => false,
        'real_estate_agency_id' => false,
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
        'is_partner_link' => 'isPartnerLink',
        'link_description' => 'linkDescription',
        'link_type' => 'linkType',
        'source_relation' => 'sourceRelation',
        'target_relation' => 'targetRelation',
        'real_estate_agency_id' => 'realEstateAgencyId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_partner_link' => 'setIsPartnerLink',
        'link_description' => 'setLinkDescription',
        'link_type' => 'setLinkType',
        'source_relation' => 'setSourceRelation',
        'target_relation' => 'setTargetRelation',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_partner_link' => 'getIsPartnerLink',
        'link_description' => 'getLinkDescription',
        'link_type' => 'getLinkType',
        'source_relation' => 'getSourceRelation',
        'target_relation' => 'getTargetRelation',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
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
        $this->setIfExists('is_partner_link', $data ?? [], null);
        $this->setIfExists('link_description', $data ?? [], null);
        $this->setIfExists('link_type', $data ?? [], null);
        $this->setIfExists('source_relation', $data ?? [], null);
        $this->setIfExists('target_relation', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
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

        if ($this->container['is_partner_link'] === null) {
            $invalidProperties[] = "'is_partner_link' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
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
     * Gets is_partner_link
     *
     * @return bool
     */
    public function getIsPartnerLink()
    {
        return $this->container['is_partner_link'];
    }

    /**
     * Sets is_partner_link
     *
     * @param bool $is_partner_link is_partner_link
     *
     * @return self
     */
    public function setIsPartnerLink($is_partner_link)
    {
        if (is_null($is_partner_link)) {
            throw new \InvalidArgumentException('non-nullable is_partner_link cannot be null');
        }
        $this->container['is_partner_link'] = $is_partner_link;

        return $this;
    }

    /**
     * Gets link_description
     *
     * @return string|null
     */
    public function getLinkDescription()
    {
        return $this->container['link_description'];
    }

    /**
     * Sets link_description
     *
     * @param string|null $link_description link_description
     *
     * @return self
     */
    public function setLinkDescription($link_description)
    {
        if (is_null($link_description)) {
            throw new \InvalidArgumentException('non-nullable link_description cannot be null');
        }
        $this->container['link_description'] = $link_description;

        return $this;
    }

    /**
     * Gets link_type
     *
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type
     *
     * @param string|null $link_type link_type
     *
     * @return self
     */
    public function setLinkType($link_type)
    {
        if (is_null($link_type)) {
            throw new \InvalidArgumentException('non-nullable link_type cannot be null');
        }
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /**
     * Gets source_relation
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation|null
     */
    public function getSourceRelation()
    {
        return $this->container['source_relation'];
    }

    /**
     * Sets source_relation
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation|null $source_relation source_relation
     *
     * @return self
     */
    public function setSourceRelation($source_relation)
    {
        if (is_null($source_relation)) {
            throw new \InvalidArgumentException('non-nullable source_relation cannot be null');
        }
        $this->container['source_relation'] = $source_relation;

        return $this;
    }

    /**
     * Gets target_relation
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation|null
     */
    public function getTargetRelation()
    {
        return $this->container['target_relation'];
    }

    /**
     * Sets target_relation
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation|null $target_relation target_relation
     *
     * @return self
     */
    public function setTargetRelation($target_relation)
    {
        if (is_null($target_relation)) {
            throw new \InvalidArgumentException('non-nullable target_relation cannot be null');
        }
        $this->container['target_relation'] = $target_relation;

        return $this;
    }

    /**
     * Gets real_estate_agency_id
     *
     * @return string
     */
    public function getRealEstateAgencyId()
    {
        return $this->container['real_estate_agency_id'];
    }

    /**
     * Sets real_estate_agency_id
     *
     * @param string $real_estate_agency_id real_estate_agency_id
     *
     * @return self
     */
    public function setRealEstateAgencyId($real_estate_agency_id)
    {
        if (is_null($real_estate_agency_id)) {
            throw new \InvalidArgumentException('non-nullable real_estate_agency_id cannot be null');
        }
        $this->container['real_estate_agency_id'] = $real_estate_agency_id;

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
