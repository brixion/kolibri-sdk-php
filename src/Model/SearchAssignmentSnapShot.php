<?php

declare(strict_types=1);

/**
 * SearchAssignmentSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class SearchAssignmentSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'SearchAssignmentSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_active' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'real_estate_agency_id' => 'string',
        'date_assignment' => '\DateTime',
        'match_mail_period' => '\Brixion\Kolibri\Model\MatchMailPeriod',
        'offer_type' => '\Brixion\Kolibri\Model\OfferType',
        'name' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'alv_ove_type' => '\Brixion\Kolibri\Model\TypeAlv[]',
        'bog_ove_type' => '\Brixion\Kolibri\Model\TypeBOG[]',
        'part_ove_type' => '\Brixion\Kolibri\Model\TypePART[]',
        'min_price' => 'float',
        'max_price' => 'float',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_paid' => 'bool',
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
        'is_active' => null,
        'linked_created_by' => null,
        'linked_employee' => null,
        'linked_modified_by' => null,
        'linked_relations' => null,
        'real_estate_agency_id' => 'guid',
        'date_assignment' => 'date-time',
        'match_mail_period' => null,
        'offer_type' => null,
        'name' => null,
        'real_estate_group' => null,
        'alv_ove_type' => null,
        'bog_ove_type' => null,
        'part_ove_type' => null,
        'min_price' => 'decimal',
        'max_price' => 'decimal',
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_paid' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_active' => false,
        'linked_created_by' => false,
        'linked_employee' => false,
        'linked_modified_by' => false,
        'linked_relations' => false,
        'real_estate_agency_id' => false,
        'date_assignment' => false,
        'match_mail_period' => false,
        'offer_type' => false,
        'name' => false,
        'real_estate_group' => false,
        'alv_ove_type' => false,
        'bog_ove_type' => false,
        'part_ove_type' => false,
        'min_price' => false,
        'max_price' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_paid' => false,
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
        'is_active' => 'isActive',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_employee' => 'linkedEmployee',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_relations' => 'linkedRelations',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'date_assignment' => 'dateAssignment',
        'match_mail_period' => 'matchMailPeriod',
        'offer_type' => 'offerType',
        'name' => 'name',
        'real_estate_group' => 'realEstateGroup',
        'alv_ove_type' => 'alvOveType',
        'bog_ove_type' => 'bogOveType',
        'part_ove_type' => 'partOveType',
        'min_price' => 'minPrice',
        'max_price' => 'maxPrice',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_paid' => 'isPaid',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_active' => 'setIsActive',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_employee' => 'setLinkedEmployee',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_relations' => 'setLinkedRelations',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'date_assignment' => 'setDateAssignment',
        'match_mail_period' => 'setMatchMailPeriod',
        'offer_type' => 'setOfferType',
        'name' => 'setName',
        'real_estate_group' => 'setRealEstateGroup',
        'alv_ove_type' => 'setAlvOveType',
        'bog_ove_type' => 'setBogOveType',
        'part_ove_type' => 'setPartOveType',
        'min_price' => 'setMinPrice',
        'max_price' => 'setMaxPrice',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_paid' => 'setIsPaid',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_active' => 'getIsActive',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_employee' => 'getLinkedEmployee',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_relations' => 'getLinkedRelations',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'date_assignment' => 'getDateAssignment',
        'match_mail_period' => 'getMatchMailPeriod',
        'offer_type' => 'getOfferType',
        'name' => 'getName',
        'real_estate_group' => 'getRealEstateGroup',
        'alv_ove_type' => 'getAlvOveType',
        'bog_ove_type' => 'getBogOveType',
        'part_ove_type' => 'getPartOveType',
        'min_price' => 'getMinPrice',
        'max_price' => 'getMaxPrice',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_paid' => 'getIsPaid',
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
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('date_assignment', $data ?? [], null);
        $this->setIfExists('match_mail_period', $data ?? [], null);
        $this->setIfExists('offer_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('alv_ove_type', $data ?? [], null);
        $this->setIfExists('bog_ove_type', $data ?? [], null);
        $this->setIfExists('part_ove_type', $data ?? [], null);
        $this->setIfExists('min_price', $data ?? [], null);
        $this->setIfExists('max_price', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], null);
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

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
        }
        if ($this->container['match_mail_period'] === null) {
            $invalidProperties[] = "'match_mail_period' can't be null";
        }
        if ($this->container['offer_type'] === null) {
            $invalidProperties[] = "'offer_type' can't be null";
        }
        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['is_paid'] === null) {
            $invalidProperties[] = "'is_paid' can't be null";
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
     * Gets linked_employee
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_employee linked_employee
     *
     * @return self
     */
    public function setLinkedEmployee($linked_employee)
    {
        if (is_null($linked_employee)) {
            throw new \InvalidArgumentException('non-nullable linked_employee cannot be null');
        }
        $this->container['linked_employee'] = $linked_employee;

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
     * Gets linked_relations
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_relations linked_relations
     *
     * @return self
     */
    public function setLinkedRelations($linked_relations)
    {
        if (is_null($linked_relations)) {
            throw new \InvalidArgumentException('non-nullable linked_relations cannot be null');
        }
        $this->container['linked_relations'] = $linked_relations;

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
     * Gets date_assignment
     *
     * @return \DateTime|null
     */
    public function getDateAssignment()
    {
        return $this->container['date_assignment'];
    }

    /**
     * Sets date_assignment
     *
     * @param \DateTime|null $date_assignment date_assignment
     *
     * @return self
     */
    public function setDateAssignment($date_assignment)
    {
        if (is_null($date_assignment)) {
            throw new \InvalidArgumentException('non-nullable date_assignment cannot be null');
        }
        $this->container['date_assignment'] = $date_assignment;

        return $this;
    }

    /**
     * Gets match_mail_period
     *
     * @return \Brixion\Kolibri\Model\MatchMailPeriod
     */
    public function getMatchMailPeriod()
    {
        return $this->container['match_mail_period'];
    }

    /**
     * Sets match_mail_period
     *
     * @param \Brixion\Kolibri\Model\MatchMailPeriod $match_mail_period match_mail_period
     *
     * @return self
     */
    public function setMatchMailPeriod($match_mail_period)
    {
        if (is_null($match_mail_period)) {
            throw new \InvalidArgumentException('non-nullable match_mail_period cannot be null');
        }
        $this->container['match_mail_period'] = $match_mail_period;

        return $this;
    }

    /**
     * Gets offer_type
     *
     * @return \Brixion\Kolibri\Model\OfferType
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \Brixion\Kolibri\Model\OfferType $offer_type offer_type
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        if (is_null($offer_type)) {
            throw new \InvalidArgumentException('non-nullable offer_type cannot be null');
        }
        $this->container['offer_type'] = $offer_type;

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
     * Gets real_estate_group
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup $real_estate_group real_estate_group
     *
     * @return self
     */
    public function setRealEstateGroup($real_estate_group)
    {
        if (is_null($real_estate_group)) {
            throw new \InvalidArgumentException('non-nullable real_estate_group cannot be null');
        }
        $this->container['real_estate_group'] = $real_estate_group;

        return $this;
    }

    /**
     * Gets alv_ove_type
     *
     * @return \Brixion\Kolibri\Model\TypeAlv[]|null
     */
    public function getAlvOveType()
    {
        return $this->container['alv_ove_type'];
    }

    /**
     * Sets alv_ove_type
     *
     * @param \Brixion\Kolibri\Model\TypeAlv[]|null $alv_ove_type alv_ove_type
     *
     * @return self
     */
    public function setAlvOveType($alv_ove_type)
    {
        if (is_null($alv_ove_type)) {
            throw new \InvalidArgumentException('non-nullable alv_ove_type cannot be null');
        }
        $this->container['alv_ove_type'] = $alv_ove_type;

        return $this;
    }

    /**
     * Gets bog_ove_type
     *
     * @return \Brixion\Kolibri\Model\TypeBOG[]|null
     */
    public function getBogOveType()
    {
        return $this->container['bog_ove_type'];
    }

    /**
     * Sets bog_ove_type
     *
     * @param \Brixion\Kolibri\Model\TypeBOG[]|null $bog_ove_type bog_ove_type
     *
     * @return self
     */
    public function setBogOveType($bog_ove_type)
    {
        if (is_null($bog_ove_type)) {
            throw new \InvalidArgumentException('non-nullable bog_ove_type cannot be null');
        }
        $this->container['bog_ove_type'] = $bog_ove_type;

        return $this;
    }

    /**
     * Gets part_ove_type
     *
     * @return \Brixion\Kolibri\Model\TypePART[]|null
     */
    public function getPartOveType()
    {
        return $this->container['part_ove_type'];
    }

    /**
     * Sets part_ove_type
     *
     * @param \Brixion\Kolibri\Model\TypePART[]|null $part_ove_type part_ove_type
     *
     * @return self
     */
    public function setPartOveType($part_ove_type)
    {
        if (is_null($part_ove_type)) {
            throw new \InvalidArgumentException('non-nullable part_ove_type cannot be null');
        }
        $this->container['part_ove_type'] = $part_ove_type;

        return $this;
    }

    /**
     * Gets min_price
     *
     * @return float|null
     */
    public function getMinPrice()
    {
        return $this->container['min_price'];
    }

    /**
     * Sets min_price
     *
     * @param float|null $min_price min_price
     *
     * @return self
     */
    public function setMinPrice($min_price)
    {
        if (is_null($min_price)) {
            throw new \InvalidArgumentException('non-nullable min_price cannot be null');
        }
        $this->container['min_price'] = $min_price;

        return $this;
    }

    /**
     * Gets max_price
     *
     * @return float|null
     */
    public function getMaxPrice()
    {
        return $this->container['max_price'];
    }

    /**
     * Sets max_price
     *
     * @param float|null $max_price max_price
     *
     * @return self
     */
    public function setMaxPrice($max_price)
    {
        if (is_null($max_price)) {
            throw new \InvalidArgumentException('non-nullable max_price cannot be null');
        }
        $this->container['max_price'] = $max_price;

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
     * Gets is_paid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool $is_paid is_paid
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

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
            throw new \InvalidArgumentException('invalid length for $id when calling SearchAssignmentSnapShot., must be bigger than or equal to 1.');
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
