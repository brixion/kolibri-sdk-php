<?php

declare(strict_types=1);

/**
 * TransactionMetaData - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;

use \ArrayAccess;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TransactionMetaData.
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionMetaData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TransactionMetaData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'moving_reasons' => '\Brixion\Kolibri\Model\MovingReason[]',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'is_resident' => 'bool',
        'number_of_household_members' => 'int',
        'buyer_type' => '\Brixion\Kolibri\Model\BuyerType',
        'household_composition' => '\Brixion\Kolibri\Model\HouseholdComposition',
        'age_main_money_maker' => '\Brixion\Kolibri\Model\AgeRange',
        'age_oldest_child' => '\Brixion\Kolibri\Model\ChildAgeRange',
        'family_income' => '\Brixion\Kolibri\Model\FamilyIncome',
        'alv_continuation' => '\Brixion\Kolibri\Model\AlvContinuation',
        'alv_agricultural_function' => '\Brixion\Kolibri\Model\AlvAgriculturalFunction',
        'alv_non_agricultural_function' => '\Brixion\Kolibri\Model\AlvNonAgriculturalFunction',
        'other_alv_function_description' => 'string',
        'left_behind_object' => '\Brixion\Kolibri\Model\LeftBehindObject',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'is_new' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'moving_reasons' => null,
        'linked_assignment' => null,
        'is_resident' => null,
        'number_of_household_members' => 'int32',
        'buyer_type' => null,
        'household_composition' => null,
        'age_main_money_maker' => null,
        'age_oldest_child' => null,
        'family_income' => null,
        'alv_continuation' => null,
        'alv_agricultural_function' => null,
        'alv_non_agricultural_function' => null,
        'other_alv_function_description' => null,
        'left_behind_object' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'is_new' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'id' => 'guid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'moving_reasons' => false,
        'linked_assignment' => false,
        'is_resident' => false,
        'number_of_household_members' => false,
        'buyer_type' => false,
        'household_composition' => false,
        'age_main_money_maker' => false,
        'age_oldest_child' => false,
        'family_income' => false,
        'alv_continuation' => false,
        'alv_agricultural_function' => false,
        'alv_non_agricultural_function' => false,
        'other_alv_function_description' => false,
        'left_behind_object' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_active' => false,
        'is_new' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
        'id' => false
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
        'moving_reasons' => 'movingReasons',
        'linked_assignment' => 'linkedAssignment',
        'is_resident' => 'isResident',
        'number_of_household_members' => 'numberOfHouseholdMembers',
        'buyer_type' => 'buyerType',
        'household_composition' => 'householdComposition',
        'age_main_money_maker' => 'ageMainMoneyMaker',
        'age_oldest_child' => 'ageOldestChild',
        'family_income' => 'familyIncome',
        'alv_continuation' => 'alvContinuation',
        'alv_agricultural_function' => 'alvAgriculturalFunction',
        'alv_non_agricultural_function' => 'alvNonAgriculturalFunction',
        'other_alv_function_description' => 'otherAlvFunctionDescription',
        'left_behind_object' => 'leftBehindObject',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_active' => 'isActive',
        'is_new' => 'isNew',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'moving_reasons' => 'setMovingReasons',
        'linked_assignment' => 'setLinkedAssignment',
        'is_resident' => 'setIsResident',
        'number_of_household_members' => 'setNumberOfHouseholdMembers',
        'buyer_type' => 'setBuyerType',
        'household_composition' => 'setHouseholdComposition',
        'age_main_money_maker' => 'setAgeMainMoneyMaker',
        'age_oldest_child' => 'setAgeOldestChild',
        'family_income' => 'setFamilyIncome',
        'alv_continuation' => 'setAlvContinuation',
        'alv_agricultural_function' => 'setAlvAgriculturalFunction',
        'alv_non_agricultural_function' => 'setAlvNonAgriculturalFunction',
        'other_alv_function_description' => 'setOtherAlvFunctionDescription',
        'left_behind_object' => 'setLeftBehindObject',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'is_new' => 'setIsNew',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'moving_reasons' => 'getMovingReasons',
        'linked_assignment' => 'getLinkedAssignment',
        'is_resident' => 'getIsResident',
        'number_of_household_members' => 'getNumberOfHouseholdMembers',
        'buyer_type' => 'getBuyerType',
        'household_composition' => 'getHouseholdComposition',
        'age_main_money_maker' => 'getAgeMainMoneyMaker',
        'age_oldest_child' => 'getAgeOldestChild',
        'family_income' => 'getFamilyIncome',
        'alv_continuation' => 'getAlvContinuation',
        'alv_agricultural_function' => 'getAlvAgriculturalFunction',
        'alv_non_agricultural_function' => 'getAlvNonAgriculturalFunction',
        'other_alv_function_description' => 'getOtherAlvFunctionDescription',
        'left_behind_object' => 'getLeftBehindObject',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'is_new' => 'getIsNew',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'id' => 'getId'
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
        $this->setIfExists('moving_reasons', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('is_resident', $data ?? [], null);
        $this->setIfExists('number_of_household_members', $data ?? [], null);
        $this->setIfExists('buyer_type', $data ?? [], null);
        $this->setIfExists('household_composition', $data ?? [], null);
        $this->setIfExists('age_main_money_maker', $data ?? [], null);
        $this->setIfExists('age_oldest_child', $data ?? [], null);
        $this->setIfExists('family_income', $data ?? [], null);
        $this->setIfExists('alv_continuation', $data ?? [], null);
        $this->setIfExists('alv_agricultural_function', $data ?? [], null);
        $this->setIfExists('alv_non_agricultural_function', $data ?? [], null);
        $this->setIfExists('other_alv_function_description', $data ?? [], null);
        $this->setIfExists('left_behind_object', $data ?? [], null);
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

        if ($this->container['is_resident'] === null) {
            $invalidProperties[] = "'is_resident' can't be null";
        }
        if ($this->container['number_of_household_members'] === null) {
            $invalidProperties[] = "'number_of_household_members' can't be null";
        }
        if ($this->container['buyer_type'] === null) {
            $invalidProperties[] = "'buyer_type' can't be null";
        }
        if ($this->container['household_composition'] === null) {
            $invalidProperties[] = "'household_composition' can't be null";
        }
        if ($this->container['age_main_money_maker'] === null) {
            $invalidProperties[] = "'age_main_money_maker' can't be null";
        }
        if ($this->container['age_oldest_child'] === null) {
            $invalidProperties[] = "'age_oldest_child' can't be null";
        }
        if ($this->container['family_income'] === null) {
            $invalidProperties[] = "'family_income' can't be null";
        }
        if (!is_null($this->container['other_alv_function_description']) && (mb_strlen($this->container['other_alv_function_description']) > 200)) {
            $invalidProperties[] = "invalid value for 'other_alv_function_description', the character length must be smaller than or equal to 200.";
        }

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
     * Gets moving_reasons
     *
     * @return \Brixion\Kolibri\Model\MovingReason[]|null
     */
    public function getMovingReasons()
    {
        return $this->container['moving_reasons'];
    }

    /**
     * Sets moving_reasons
     *
     * @param \Brixion\Kolibri\Model\MovingReason[]|null $moving_reasons moving_reasons
     *
     * @return self
     */
    public function setMovingReasons($moving_reasons)
    {
        if (is_null($moving_reasons)) {
            throw new \InvalidArgumentException('non-nullable moving_reasons cannot be null');
        }
        $this->container['moving_reasons'] = $moving_reasons;

        return $this;
    }

    /**
     * Gets linked_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_assignment linked_assignment
     *
     * @return self
     */
    public function setLinkedAssignment($linked_assignment)
    {
        if (is_null($linked_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment cannot be null');
        }
        $this->container['linked_assignment'] = $linked_assignment;

        return $this;
    }

    /**
     * Gets is_resident
     *
     * @return bool
     */
    public function getIsResident()
    {
        return $this->container['is_resident'];
    }

    /**
     * Sets is_resident
     *
     * @param bool $is_resident is_resident
     *
     * @return self
     */
    public function setIsResident($is_resident)
    {
        if (is_null($is_resident)) {
            throw new \InvalidArgumentException('non-nullable is_resident cannot be null');
        }
        $this->container['is_resident'] = $is_resident;

        return $this;
    }

    /**
     * Gets number_of_household_members
     *
     * @return int
     */
    public function getNumberOfHouseholdMembers()
    {
        return $this->container['number_of_household_members'];
    }

    /**
     * Sets number_of_household_members
     *
     * @param int $number_of_household_members number_of_household_members
     *
     * @return self
     */
    public function setNumberOfHouseholdMembers($number_of_household_members)
    {
        if (is_null($number_of_household_members)) {
            throw new \InvalidArgumentException('non-nullable number_of_household_members cannot be null');
        }
        $this->container['number_of_household_members'] = $number_of_household_members;

        return $this;
    }

    /**
     * Gets buyer_type
     *
     * @return \Brixion\Kolibri\Model\BuyerType
     */
    public function getBuyerType()
    {
        return $this->container['buyer_type'];
    }

    /**
     * Sets buyer_type
     *
     * @param \Brixion\Kolibri\Model\BuyerType $buyer_type buyer_type
     *
     * @return self
     */
    public function setBuyerType($buyer_type)
    {
        if (is_null($buyer_type)) {
            throw new \InvalidArgumentException('non-nullable buyer_type cannot be null');
        }
        $this->container['buyer_type'] = $buyer_type;

        return $this;
    }

    /**
     * Gets household_composition
     *
     * @return \Brixion\Kolibri\Model\HouseholdComposition
     */
    public function getHouseholdComposition()
    {
        return $this->container['household_composition'];
    }

    /**
     * Sets household_composition
     *
     * @param \Brixion\Kolibri\Model\HouseholdComposition $household_composition household_composition
     *
     * @return self
     */
    public function setHouseholdComposition($household_composition)
    {
        if (is_null($household_composition)) {
            throw new \InvalidArgumentException('non-nullable household_composition cannot be null');
        }
        $this->container['household_composition'] = $household_composition;

        return $this;
    }

    /**
     * Gets age_main_money_maker
     *
     * @return \Brixion\Kolibri\Model\AgeRange
     */
    public function getAgeMainMoneyMaker()
    {
        return $this->container['age_main_money_maker'];
    }

    /**
     * Sets age_main_money_maker
     *
     * @param \Brixion\Kolibri\Model\AgeRange $age_main_money_maker age_main_money_maker
     *
     * @return self
     */
    public function setAgeMainMoneyMaker($age_main_money_maker)
    {
        if (is_null($age_main_money_maker)) {
            throw new \InvalidArgumentException('non-nullable age_main_money_maker cannot be null');
        }
        $this->container['age_main_money_maker'] = $age_main_money_maker;

        return $this;
    }

    /**
     * Gets age_oldest_child
     *
     * @return \Brixion\Kolibri\Model\ChildAgeRange
     */
    public function getAgeOldestChild()
    {
        return $this->container['age_oldest_child'];
    }

    /**
     * Sets age_oldest_child
     *
     * @param \Brixion\Kolibri\Model\ChildAgeRange $age_oldest_child age_oldest_child
     *
     * @return self
     */
    public function setAgeOldestChild($age_oldest_child)
    {
        if (is_null($age_oldest_child)) {
            throw new \InvalidArgumentException('non-nullable age_oldest_child cannot be null');
        }
        $this->container['age_oldest_child'] = $age_oldest_child;

        return $this;
    }

    /**
     * Gets family_income
     *
     * @return \Brixion\Kolibri\Model\FamilyIncome
     */
    public function getFamilyIncome()
    {
        return $this->container['family_income'];
    }

    /**
     * Sets family_income
     *
     * @param \Brixion\Kolibri\Model\FamilyIncome $family_income family_income
     *
     * @return self
     */
    public function setFamilyIncome($family_income)
    {
        if (is_null($family_income)) {
            throw new \InvalidArgumentException('non-nullable family_income cannot be null');
        }
        $this->container['family_income'] = $family_income;

        return $this;
    }

    /**
     * Gets alv_continuation
     *
     * @return \Brixion\Kolibri\Model\AlvContinuation|null
     */
    public function getAlvContinuation()
    {
        return $this->container['alv_continuation'];
    }

    /**
     * Sets alv_continuation
     *
     * @param \Brixion\Kolibri\Model\AlvContinuation|null $alv_continuation alv_continuation
     *
     * @return self
     */
    public function setAlvContinuation($alv_continuation)
    {
        if (is_null($alv_continuation)) {
            throw new \InvalidArgumentException('non-nullable alv_continuation cannot be null');
        }
        $this->container['alv_continuation'] = $alv_continuation;

        return $this;
    }

    /**
     * Gets alv_agricultural_function
     *
     * @return \Brixion\Kolibri\Model\AlvAgriculturalFunction|null
     */
    public function getAlvAgriculturalFunction()
    {
        return $this->container['alv_agricultural_function'];
    }

    /**
     * Sets alv_agricultural_function
     *
     * @param \Brixion\Kolibri\Model\AlvAgriculturalFunction|null $alv_agricultural_function alv_agricultural_function
     *
     * @return self
     */
    public function setAlvAgriculturalFunction($alv_agricultural_function)
    {
        if (is_null($alv_agricultural_function)) {
            throw new \InvalidArgumentException('non-nullable alv_agricultural_function cannot be null');
        }
        $this->container['alv_agricultural_function'] = $alv_agricultural_function;

        return $this;
    }

    /**
     * Gets alv_non_agricultural_function
     *
     * @return \Brixion\Kolibri\Model\AlvNonAgriculturalFunction|null
     */
    public function getAlvNonAgriculturalFunction()
    {
        return $this->container['alv_non_agricultural_function'];
    }

    /**
     * Sets alv_non_agricultural_function
     *
     * @param \Brixion\Kolibri\Model\AlvNonAgriculturalFunction|null $alv_non_agricultural_function alv_non_agricultural_function
     *
     * @return self
     */
    public function setAlvNonAgriculturalFunction($alv_non_agricultural_function)
    {
        if (is_null($alv_non_agricultural_function)) {
            throw new \InvalidArgumentException('non-nullable alv_non_agricultural_function cannot be null');
        }
        $this->container['alv_non_agricultural_function'] = $alv_non_agricultural_function;

        return $this;
    }

    /**
     * Gets other_alv_function_description
     *
     * @return string|null
     */
    public function getOtherAlvFunctionDescription()
    {
        return $this->container['other_alv_function_description'];
    }

    /**
     * Sets other_alv_function_description
     *
     * @param string|null $other_alv_function_description other_alv_function_description
     *
     * @return self
     */
    public function setOtherAlvFunctionDescription($other_alv_function_description)
    {
        if (is_null($other_alv_function_description)) {
            throw new \InvalidArgumentException('non-nullable other_alv_function_description cannot be null');
        }
        if ((mb_strlen($other_alv_function_description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $other_alv_function_description when calling TransactionMetaData., must be smaller than or equal to 200.');
        }

        $this->container['other_alv_function_description'] = $other_alv_function_description;

        return $this;
    }

    /**
     * Gets left_behind_object
     *
     * @return \Brixion\Kolibri\Model\LeftBehindObject|null
     */
    public function getLeftBehindObject()
    {
        return $this->container['left_behind_object'];
    }

    /**
     * Sets left_behind_object
     *
     * @param \Brixion\Kolibri\Model\LeftBehindObject|null $left_behind_object left_behind_object
     *
     * @return self
     */
    public function setLeftBehindObject($left_behind_object)
    {
        if (is_null($left_behind_object)) {
            throw new \InvalidArgumentException('non-nullable left_behind_object cannot be null');
        }
        $this->container['left_behind_object'] = $left_behind_object;

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
            throw new \InvalidArgumentException('invalid length for $id when calling TransactionMetaData., must be bigger than or equal to 1.');
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
            JSON_PRETTY_PRINT
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


