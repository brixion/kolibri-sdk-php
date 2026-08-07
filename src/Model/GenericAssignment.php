<?php

declare(strict_types=1);

/**
 * GenericAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * GenericAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class GenericAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'GenericAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'generic_assignment_status' => '\Brixion\Kolibri\Model\GenericAssignmentStatus',
        'generic_assignment_category_id' => 'string',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
        'title' => 'string',
        'description' => 'string',
        'public_reference' => 'string',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
        'linked_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_office' => '\Brixion\Kolibri\Model\LinkedOffice',
        'linked_relations' => '\Brixion\Kolibri\Model\AssignmentLinkedRelation[]',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'photos' => '\Brixion\Kolibri\Model\PhotoBlob[]',
        'is_private' => 'bool',
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
        'generic_assignment_status' => null,
        'generic_assignment_category_id' => 'guid',
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
        'title' => null,
        'description' => null,
        'public_reference' => null,
        'linked_employees' => null,
        'linked_assignments' => null,
        'linked_office' => null,
        'linked_relations' => null,
        'linked_folder_tree' => null,
        'photos' => null,
        'is_private' => null,
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
        'generic_assignment_status' => false,
        'generic_assignment_category_id' => false,
        'start_date_time' => false,
        'end_date_time' => false,
        'title' => false,
        'description' => false,
        'public_reference' => false,
        'linked_employees' => false,
        'linked_assignments' => false,
        'linked_office' => false,
        'linked_relations' => false,
        'linked_folder_tree' => false,
        'photos' => false,
        'is_private' => false,
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
        'generic_assignment_status' => 'genericAssignmentStatus',
        'generic_assignment_category_id' => 'genericAssignmentCategoryId',
        'start_date_time' => 'startDateTime',
        'end_date_time' => 'endDateTime',
        'title' => 'title',
        'description' => 'description',
        'public_reference' => 'publicReference',
        'linked_employees' => 'linkedEmployees',
        'linked_assignments' => 'linkedAssignments',
        'linked_office' => 'linkedOffice',
        'linked_relations' => 'linkedRelations',
        'linked_folder_tree' => 'linkedFolderTree',
        'photos' => 'photos',
        'is_private' => 'isPrivate',
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
        'generic_assignment_status' => 'setGenericAssignmentStatus',
        'generic_assignment_category_id' => 'setGenericAssignmentCategoryId',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'public_reference' => 'setPublicReference',
        'linked_employees' => 'setLinkedEmployees',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_office' => 'setLinkedOffice',
        'linked_relations' => 'setLinkedRelations',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'photos' => 'setPhotos',
        'is_private' => 'setIsPrivate',
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
        'generic_assignment_status' => 'getGenericAssignmentStatus',
        'generic_assignment_category_id' => 'getGenericAssignmentCategoryId',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'public_reference' => 'getPublicReference',
        'linked_employees' => 'getLinkedEmployees',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_office' => 'getLinkedOffice',
        'linked_relations' => 'getLinkedRelations',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'photos' => 'getPhotos',
        'is_private' => 'getIsPrivate',
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
        $this->setIfExists('generic_assignment_status', $data ?? [], null);
        $this->setIfExists('generic_assignment_category_id', $data ?? [], null);
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('end_date_time', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
        $this->setIfExists('linked_assignments', $data ?? [], null);
        $this->setIfExists('linked_office', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('photos', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
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

        if ($this->container['generic_assignment_status'] === null) {
            $invalidProperties[] = "'generic_assignment_status' can't be null";
        }
        if ($this->container['generic_assignment_category_id'] === null) {
            $invalidProperties[] = "'generic_assignment_category_id' can't be null";
        }
        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1000)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100000.";
        }

        if ($this->container['linked_employees'] === null) {
            $invalidProperties[] = "'linked_employees' can't be null";
        }
        if ($this->container['linked_office'] === null) {
            $invalidProperties[] = "'linked_office' can't be null";
        }
        if ($this->container['is_private'] === null) {
            $invalidProperties[] = "'is_private' can't be null";
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
     * Gets generic_assignment_status
     *
     * @return \Brixion\Kolibri\Model\GenericAssignmentStatus
     */
    public function getGenericAssignmentStatus()
    {
        return $this->container['generic_assignment_status'];
    }

    /**
     * Sets generic_assignment_status
     *
     * @param \Brixion\Kolibri\Model\GenericAssignmentStatus $generic_assignment_status generic_assignment_status
     *
     * @return self
     */
    public function setGenericAssignmentStatus($generic_assignment_status)
    {
        if (is_null($generic_assignment_status)) {
            throw new \InvalidArgumentException('non-nullable generic_assignment_status cannot be null');
        }
        $this->container['generic_assignment_status'] = $generic_assignment_status;

        return $this;
    }

    /**
     * Gets generic_assignment_category_id
     *
     * @return string
     */
    public function getGenericAssignmentCategoryId()
    {
        return $this->container['generic_assignment_category_id'];
    }

    /**
     * Sets generic_assignment_category_id
     *
     * @param string $generic_assignment_category_id generic_assignment_category_id
     *
     * @return self
     */
    public function setGenericAssignmentCategoryId($generic_assignment_category_id)
    {
        if (is_null($generic_assignment_category_id)) {
            throw new \InvalidArgumentException('non-nullable generic_assignment_category_id cannot be null');
        }
        $this->container['generic_assignment_category_id'] = $generic_assignment_category_id;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime|null $start_date_time start_date_time
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        if (is_null($start_date_time)) {
            throw new \InvalidArgumentException('non-nullable start_date_time cannot be null');
        }
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime|null $end_date_time end_date_time
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        if (is_null($end_date_time)) {
            throw new \InvalidArgumentException('non-nullable end_date_time cannot be null');
        }
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $title when calling GenericAssignment., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling GenericAssignment., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
        if ((mb_strlen($description) > 100000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling GenericAssignment., must be smaller than or equal to 100000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets public_reference
     *
     * @return string|null
     */
    public function getPublicReference()
    {
        return $this->container['public_reference'];
    }

    /**
     * Sets public_reference
     *
     * @param string|null $public_reference public_reference
     *
     * @return self
     */
    public function setPublicReference($public_reference)
    {
        if (is_null($public_reference)) {
            throw new \InvalidArgumentException('non-nullable public_reference cannot be null');
        }
        $this->container['public_reference'] = $public_reference;

        return $this;
    }

    /**
     * Gets linked_employees
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee[]
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee[] $linked_employees linked_employees
     *
     * @return self
     */
    public function setLinkedEmployees($linked_employees)
    {
        if (is_null($linked_employees)) {
            throw new \InvalidArgumentException('non-nullable linked_employees cannot be null');
        }
        $this->container['linked_employees'] = $linked_employees;

        return $this;
    }

    /**
     * Gets linked_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedAssignments()
    {
        return $this->container['linked_assignments'];
    }

    /**
     * Sets linked_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_assignments linked_assignments
     *
     * @return self
     */
    public function setLinkedAssignments($linked_assignments)
    {
        if (is_null($linked_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_assignments cannot be null');
        }
        $this->container['linked_assignments'] = $linked_assignments;

        return $this;
    }

    /**
     * Gets linked_office
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice
     */
    public function getLinkedOffice()
    {
        return $this->container['linked_office'];
    }

    /**
     * Sets linked_office
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice $linked_office linked_office
     *
     * @return self
     */
    public function setLinkedOffice($linked_office)
    {
        if (is_null($linked_office)) {
            throw new \InvalidArgumentException('non-nullable linked_office cannot be null');
        }
        $this->container['linked_office'] = $linked_office;

        return $this;
    }

    /**
     * Gets linked_relations
     *
     * @return \Brixion\Kolibri\Model\AssignmentLinkedRelation[]|null
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Brixion\Kolibri\Model\AssignmentLinkedRelation[]|null $linked_relations linked_relations
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
     * Gets photos
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob[]|null
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob[]|null $photos photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        if (is_null($photos)) {
            throw new \InvalidArgumentException('non-nullable photos cannot be null');
        }
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool $is_private is_private
     *
     * @return self
     */
    public function setIsPrivate($is_private)
    {
        if (is_null($is_private)) {
            throw new \InvalidArgumentException('non-nullable is_private cannot be null');
        }
        $this->container['is_private'] = $is_private;

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
            throw new \InvalidArgumentException('invalid length for $id when calling GenericAssignment., must be bigger than or equal to 1.');
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
