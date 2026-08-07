<?php

declare(strict_types=1);

/**
 * Cadastre - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Cadastre.
 * @implements \ArrayAccess<string, mixed>
 */
class Cadastre implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Cadastre';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'address' => '\Brixion\Kolibri\Model\Address',
        'apartment_rights' => '\Brixion\Kolibri\Model\CadastralApartmentRights',
        'cadastral_details' => '\Brixion\Kolibri\Model\CadastralDetails',
        'cadastral_id' => 'string',
        'has_note_or_drag' => 'bool',
        'is_more_real_estate_present' => 'bool',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'map' => '\Brixion\Kolibri\Model\CadastralBlob',
        'message' => '\Brixion\Kolibri\Model\CadastralBlob',
        'notarial_description' => 'string',
        'ownership_details' => '\Brixion\Kolibri\Model\OwnershipDetails',
        'retrieved_on' => '\DateTime',
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
        'address' => null,
        'apartment_rights' => null,
        'cadastral_details' => null,
        'cadastral_id' => null,
        'has_note_or_drag' => null,
        'is_more_real_estate_present' => null,
        'linked_assignment' => null,
        'map' => null,
        'message' => null,
        'notarial_description' => null,
        'ownership_details' => null,
        'retrieved_on' => 'date-time',
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
        'address' => false,
        'apartment_rights' => false,
        'cadastral_details' => false,
        'cadastral_id' => false,
        'has_note_or_drag' => false,
        'is_more_real_estate_present' => false,
        'linked_assignment' => false,
        'map' => false,
        'message' => false,
        'notarial_description' => false,
        'ownership_details' => false,
        'retrieved_on' => false,
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
        'address' => 'address',
        'apartment_rights' => 'apartmentRights',
        'cadastral_details' => 'cadastralDetails',
        'cadastral_id' => 'cadastralId',
        'has_note_or_drag' => 'hasNoteOrDrag',
        'is_more_real_estate_present' => 'isMoreRealEstatePresent',
        'linked_assignment' => 'linkedAssignment',
        'map' => 'map',
        'message' => 'message',
        'notarial_description' => 'notarialDescription',
        'ownership_details' => 'ownershipDetails',
        'retrieved_on' => 'retrievedOn',
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
        'address' => 'setAddress',
        'apartment_rights' => 'setApartmentRights',
        'cadastral_details' => 'setCadastralDetails',
        'cadastral_id' => 'setCadastralId',
        'has_note_or_drag' => 'setHasNoteOrDrag',
        'is_more_real_estate_present' => 'setIsMoreRealEstatePresent',
        'linked_assignment' => 'setLinkedAssignment',
        'map' => 'setMap',
        'message' => 'setMessage',
        'notarial_description' => 'setNotarialDescription',
        'ownership_details' => 'setOwnershipDetails',
        'retrieved_on' => 'setRetrievedOn',
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
        'address' => 'getAddress',
        'apartment_rights' => 'getApartmentRights',
        'cadastral_details' => 'getCadastralDetails',
        'cadastral_id' => 'getCadastralId',
        'has_note_or_drag' => 'getHasNoteOrDrag',
        'is_more_real_estate_present' => 'getIsMoreRealEstatePresent',
        'linked_assignment' => 'getLinkedAssignment',
        'map' => 'getMap',
        'message' => 'getMessage',
        'notarial_description' => 'getNotarialDescription',
        'ownership_details' => 'getOwnershipDetails',
        'retrieved_on' => 'getRetrievedOn',
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('apartment_rights', $data ?? [], null);
        $this->setIfExists('cadastral_details', $data ?? [], null);
        $this->setIfExists('cadastral_id', $data ?? [], null);
        $this->setIfExists('has_note_or_drag', $data ?? [], null);
        $this->setIfExists('is_more_real_estate_present', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('map', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('notarial_description', $data ?? [], null);
        $this->setIfExists('ownership_details', $data ?? [], null);
        $this->setIfExists('retrieved_on', $data ?? [], null);
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

        if ($this->container['has_note_or_drag'] === null) {
            $invalidProperties[] = "'has_note_or_drag' can't be null";
        }
        if ($this->container['is_more_real_estate_present'] === null) {
            $invalidProperties[] = "'is_more_real_estate_present' can't be null";
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
     * Gets address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Brixion\Kolibri\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets apartment_rights
     *
     * @return \Brixion\Kolibri\Model\CadastralApartmentRights|null
     */
    public function getApartmentRights()
    {
        return $this->container['apartment_rights'];
    }

    /**
     * Sets apartment_rights
     *
     * @param \Brixion\Kolibri\Model\CadastralApartmentRights|null $apartment_rights apartment_rights
     *
     * @return self
     */
    public function setApartmentRights($apartment_rights)
    {
        if (is_null($apartment_rights)) {
            throw new \InvalidArgumentException('non-nullable apartment_rights cannot be null');
        }
        $this->container['apartment_rights'] = $apartment_rights;

        return $this;
    }

    /**
     * Gets cadastral_details
     *
     * @return \Brixion\Kolibri\Model\CadastralDetails|null
     */
    public function getCadastralDetails()
    {
        return $this->container['cadastral_details'];
    }

    /**
     * Sets cadastral_details
     *
     * @param \Brixion\Kolibri\Model\CadastralDetails|null $cadastral_details cadastral_details
     *
     * @return self
     */
    public function setCadastralDetails($cadastral_details)
    {
        if (is_null($cadastral_details)) {
            throw new \InvalidArgumentException('non-nullable cadastral_details cannot be null');
        }
        $this->container['cadastral_details'] = $cadastral_details;

        return $this;
    }

    /**
     * Gets cadastral_id
     *
     * @return string|null
     */
    public function getCadastralId()
    {
        return $this->container['cadastral_id'];
    }

    /**
     * Sets cadastral_id
     *
     * @param string|null $cadastral_id cadastral_id
     *
     * @return self
     */
    public function setCadastralId($cadastral_id)
    {
        if (is_null($cadastral_id)) {
            throw new \InvalidArgumentException('non-nullable cadastral_id cannot be null');
        }
        $this->container['cadastral_id'] = $cadastral_id;

        return $this;
    }

    /**
     * Gets has_note_or_drag
     *
     * @return bool
     */
    public function getHasNoteOrDrag()
    {
        return $this->container['has_note_or_drag'];
    }

    /**
     * Sets has_note_or_drag
     *
     * @param bool $has_note_or_drag In Dutch: heeft een aantekening of een belemmering.
     *
     * @return self
     */
    public function setHasNoteOrDrag($has_note_or_drag)
    {
        if (is_null($has_note_or_drag)) {
            throw new \InvalidArgumentException('non-nullable has_note_or_drag cannot be null');
        }
        $this->container['has_note_or_drag'] = $has_note_or_drag;

        return $this;
    }

    /**
     * Gets is_more_real_estate_present
     *
     * @return bool
     */
    public function getIsMoreRealEstatePresent()
    {
        return $this->container['is_more_real_estate_present'];
    }

    /**
     * Sets is_more_real_estate_present
     *
     * @param bool $is_more_real_estate_present In Dutch: er is meer onroerendgoed aanwezig.
     *
     * @return self
     */
    public function setIsMoreRealEstatePresent($is_more_real_estate_present)
    {
        if (is_null($is_more_real_estate_present)) {
            throw new \InvalidArgumentException('non-nullable is_more_real_estate_present cannot be null');
        }
        $this->container['is_more_real_estate_present'] = $is_more_real_estate_present;

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
     * Gets map
     *
     * @return \Brixion\Kolibri\Model\CadastralBlob|null
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param \Brixion\Kolibri\Model\CadastralBlob|null $map map
     *
     * @return self
     */
    public function setMap($map)
    {
        if (is_null($map)) {
            throw new \InvalidArgumentException('non-nullable map cannot be null');
        }
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \Brixion\Kolibri\Model\CadastralBlob|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \Brixion\Kolibri\Model\CadastralBlob|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notarial_description
     *
     * @return string|null
     */
    public function getNotarialDescription()
    {
        return $this->container['notarial_description'];
    }

    /**
     * Sets notarial_description
     *
     * @param string|null $notarial_description notarial_description
     *
     * @return self
     */
    public function setNotarialDescription($notarial_description)
    {
        if (is_null($notarial_description)) {
            throw new \InvalidArgumentException('non-nullable notarial_description cannot be null');
        }
        $this->container['notarial_description'] = $notarial_description;

        return $this;
    }

    /**
     * Gets ownership_details
     *
     * @return \Brixion\Kolibri\Model\OwnershipDetails|null
     */
    public function getOwnershipDetails()
    {
        return $this->container['ownership_details'];
    }

    /**
     * Sets ownership_details
     *
     * @param \Brixion\Kolibri\Model\OwnershipDetails|null $ownership_details ownership_details
     *
     * @return self
     */
    public function setOwnershipDetails($ownership_details)
    {
        if (is_null($ownership_details)) {
            throw new \InvalidArgumentException('non-nullable ownership_details cannot be null');
        }
        $this->container['ownership_details'] = $ownership_details;

        return $this;
    }

    /**
     * Gets retrieved_on
     *
     * @return \DateTime|null
     */
    public function getRetrievedOn()
    {
        return $this->container['retrieved_on'];
    }

    /**
     * Sets retrieved_on
     *
     * @param \DateTime|null $retrieved_on retrieved_on
     *
     * @return self
     */
    public function setRetrievedOn($retrieved_on)
    {
        if (is_null($retrieved_on)) {
            throw new \InvalidArgumentException('non-nullable retrieved_on cannot be null');
        }
        $this->container['retrieved_on'] = $retrieved_on;

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
            throw new \InvalidArgumentException('invalid length for $id when calling Cadastre., must be bigger than or equal to 1.');
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
