<?php

declare(strict_types=1);

/**
 * RealEstateAgency - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * RealEstateAgency.
 * @implements \ArrayAccess<string, mixed>
 */
class RealEstateAgency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'RealEstateAgency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'bank_account' => '\Brixion\Kolibri\Model\BankAccount',
        'description' => 'string',
        'legal_registration' => '\Brixion\Kolibri\Model\LegalRegistration',
        'association_info' => '\Brixion\Kolibri\Model\AssociationInfo',
        'logo' => '\Brixion\Kolibri\Model\PhotoBlob',
        'name' => 'string',
        'tax_number' => 'string',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'has_yellow_card' => 'bool',
        'has_red_card' => 'bool',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'is_new' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
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
        'bank_account' => null,
        'description' => null,
        'legal_registration' => null,
        'association_info' => null,
        'logo' => null,
        'name' => null,
        'tax_number' => null,
        'linked_folder_tree' => null,
        'has_yellow_card' => null,
        'has_red_card' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'is_new' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'bank_account' => false,
        'description' => false,
        'legal_registration' => false,
        'association_info' => false,
        'logo' => false,
        'name' => false,
        'tax_number' => false,
        'linked_folder_tree' => false,
        'has_yellow_card' => false,
        'has_red_card' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_active' => false,
        'is_new' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
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
        'bank_account' => 'bankAccount',
        'description' => 'description',
        'legal_registration' => 'legalRegistration',
        'association_info' => 'associationInfo',
        'logo' => 'logo',
        'name' => 'name',
        'tax_number' => 'taxNumber',
        'linked_folder_tree' => 'linkedFolderTree',
        'has_yellow_card' => 'hasYellowCard',
        'has_red_card' => 'hasRedCard',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_active' => 'isActive',
        'is_new' => 'isNew',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account' => 'setBankAccount',
        'description' => 'setDescription',
        'legal_registration' => 'setLegalRegistration',
        'association_info' => 'setAssociationInfo',
        'logo' => 'setLogo',
        'name' => 'setName',
        'tax_number' => 'setTaxNumber',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'has_yellow_card' => 'setHasYellowCard',
        'has_red_card' => 'setHasRedCard',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'is_new' => 'setIsNew',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account' => 'getBankAccount',
        'description' => 'getDescription',
        'legal_registration' => 'getLegalRegistration',
        'association_info' => 'getAssociationInfo',
        'logo' => 'getLogo',
        'name' => 'getName',
        'tax_number' => 'getTaxNumber',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'has_yellow_card' => 'getHasYellowCard',
        'has_red_card' => 'getHasRedCard',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'is_new' => 'getIsNew',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
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
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('legal_registration', $data ?? [], null);
        $this->setIfExists('association_info', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('tax_number', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('has_yellow_card', $data ?? [], null);
        $this->setIfExists('has_red_card', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
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

        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalidProperties[] = "'is_new' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
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
     * Gets bank_account
     *
     * @return \Brixion\Kolibri\Model\BankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Brixion\Kolibri\Model\BankAccount|null $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            throw new \InvalidArgumentException('non-nullable bank_account cannot be null');
        }
        $this->container['bank_account'] = $bank_account;

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
     * Gets legal_registration
     *
     * @return \Brixion\Kolibri\Model\LegalRegistration|null
     */
    public function getLegalRegistration()
    {
        return $this->container['legal_registration'];
    }

    /**
     * Sets legal_registration
     *
     * @param \Brixion\Kolibri\Model\LegalRegistration|null $legal_registration legal_registration
     *
     * @return self
     */
    public function setLegalRegistration($legal_registration)
    {
        if (is_null($legal_registration)) {
            throw new \InvalidArgumentException('non-nullable legal_registration cannot be null');
        }
        $this->container['legal_registration'] = $legal_registration;

        return $this;
    }

    /**
     * Gets association_info
     *
     * @return \Brixion\Kolibri\Model\AssociationInfo|null
     */
    public function getAssociationInfo()
    {
        return $this->container['association_info'];
    }

    /**
     * Sets association_info
     *
     * @param \Brixion\Kolibri\Model\AssociationInfo|null $association_info association_info
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
     * Gets logo
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tax_number
     *
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param string|null $tax_number tax_number
     *
     * @return self
     */
    public function setTaxNumber($tax_number)
    {
        if (is_null($tax_number)) {
            throw new \InvalidArgumentException('non-nullable tax_number cannot be null');
        }
        $this->container['tax_number'] = $tax_number;

        return $this;
    }

    /**
     * Gets linked_folder_tree
     *
     * @return \Brixion\Kolibri\Model\LinkedFolderTree|null
     */
    public function getLinkedFolderTree()
    {
        return $this->container['linked_folder_tree'];
    }

    /**
     * Sets linked_folder_tree
     *
     * @param \Brixion\Kolibri\Model\LinkedFolderTree|null $linked_folder_tree linked_folder_tree
     *
     * @return self
     */
    public function setLinkedFolderTree($linked_folder_tree)
    {
        if (is_null($linked_folder_tree)) {
            throw new \InvalidArgumentException('non-nullable linked_folder_tree cannot be null');
        }
        $this->container['linked_folder_tree'] = $linked_folder_tree;

        return $this;
    }

    /**
     * Gets has_yellow_card
     *
     * @return bool|null
     */
    public function getHasYellowCard()
    {
        return $this->container['has_yellow_card'];
    }

    /**
     * Sets has_yellow_card
     *
     * @param bool|null $has_yellow_card has_yellow_card
     *
     * @return self
     */
    public function setHasYellowCard($has_yellow_card)
    {
        if (is_null($has_yellow_card)) {
            throw new \InvalidArgumentException('non-nullable has_yellow_card cannot be null');
        }
        $this->container['has_yellow_card'] = $has_yellow_card;

        return $this;
    }

    /**
     * Gets has_red_card
     *
     * @return bool|null
     */
    public function getHasRedCard()
    {
        return $this->container['has_red_card'];
    }

    /**
     * Sets has_red_card
     *
     * @param bool|null $has_red_card has_red_card
     *
     * @return self
     */
    public function setHasRedCard($has_red_card)
    {
        if (is_null($has_red_card)) {
            throw new \InvalidArgumentException('non-nullable has_red_card cannot be null');
        }
        $this->container['has_red_card'] = $has_red_card;

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
     * Gets is_new
     *
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool $is_new is_new
     *
     * @return self
     */
    public function setIsNew($is_new)
    {
        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets linked_created_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedCreatedBy()
    {
        return $this->container['linked_created_by'];
    }

    /**
     * Sets linked_created_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_created_by linked_created_by
     *
     * @return self
     */
    public function setLinkedCreatedBy($linked_created_by)
    {
        if (is_null($linked_created_by)) {
            throw new \InvalidArgumentException('non-nullable linked_created_by cannot be null');
        }
        $this->container['linked_created_by'] = $linked_created_by;

        return $this;
    }

    /**
     * Gets linked_modified_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedModifiedBy()
    {
        return $this->container['linked_modified_by'];
    }

    /**
     * Sets linked_modified_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_modified_by linked_modified_by
     *
     * @return self
     */
    public function setLinkedModifiedBy($linked_modified_by)
    {
        if (is_null($linked_modified_by)) {
            throw new \InvalidArgumentException('non-nullable linked_modified_by cannot be null');
        }
        $this->container['linked_modified_by'] = $linked_modified_by;

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
            throw new \InvalidArgumentException('invalid length for $id when calling RealEstateAgency., must be bigger than or equal to 1.');
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
