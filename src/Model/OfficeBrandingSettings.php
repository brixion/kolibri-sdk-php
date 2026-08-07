<?php

declare(strict_types=1);

/**
 * OfficeBrandingSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * OfficeBrandingSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class OfficeBrandingSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'OfficeBrandingSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'office_id' => 'string',
        'main_color' => 'string',
        'support_color' => 'string',
        'buttons_text_color' => 'string',
        'text_letter_type' => 'string',
        'text_size' => 'int',
        'text_thickness' => 'int',
        'text_color' => 'string',
        'email_sender_name' => 'string',
        'email_reply_to' => 'string',
        'sms_sender_name' => 'string',
        'date_time_deleted' => '\DateTime',
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
        'office_id' => 'guid',
        'main_color' => null,
        'support_color' => null,
        'buttons_text_color' => null,
        'text_letter_type' => null,
        'text_size' => null,
        'text_thickness' => null,
        'text_color' => null,
        'email_sender_name' => null,
        'email_reply_to' => null,
        'sms_sender_name' => null,
        'date_time_deleted' => 'date-time',
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
        'office_id' => false,
        'main_color' => false,
        'support_color' => false,
        'buttons_text_color' => false,
        'text_letter_type' => false,
        'text_size' => false,
        'text_thickness' => false,
        'text_color' => false,
        'email_sender_name' => false,
        'email_reply_to' => false,
        'sms_sender_name' => false,
        'date_time_deleted' => false,
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
        'office_id' => 'officeId',
        'main_color' => 'mainColor',
        'support_color' => 'supportColor',
        'buttons_text_color' => 'buttonsTextColor',
        'text_letter_type' => 'textLetterType',
        'text_size' => 'textSize',
        'text_thickness' => 'textThickness',
        'text_color' => 'textColor',
        'email_sender_name' => 'emailSenderName',
        'email_reply_to' => 'emailReplyTo',
        'sms_sender_name' => 'smsSenderName',
        'date_time_deleted' => 'dateTimeDeleted',
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
        'office_id' => 'setOfficeId',
        'main_color' => 'setMainColor',
        'support_color' => 'setSupportColor',
        'buttons_text_color' => 'setButtonsTextColor',
        'text_letter_type' => 'setTextLetterType',
        'text_size' => 'setTextSize',
        'text_thickness' => 'setTextThickness',
        'text_color' => 'setTextColor',
        'email_sender_name' => 'setEmailSenderName',
        'email_reply_to' => 'setEmailReplyTo',
        'sms_sender_name' => 'setSmsSenderName',
        'date_time_deleted' => 'setDateTimeDeleted',
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
        'office_id' => 'getOfficeId',
        'main_color' => 'getMainColor',
        'support_color' => 'getSupportColor',
        'buttons_text_color' => 'getButtonsTextColor',
        'text_letter_type' => 'getTextLetterType',
        'text_size' => 'getTextSize',
        'text_thickness' => 'getTextThickness',
        'text_color' => 'getTextColor',
        'email_sender_name' => 'getEmailSenderName',
        'email_reply_to' => 'getEmailReplyTo',
        'sms_sender_name' => 'getSmsSenderName',
        'date_time_deleted' => 'getDateTimeDeleted',
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
        $this->setIfExists('office_id', $data ?? [], null);
        $this->setIfExists('main_color', $data ?? [], null);
        $this->setIfExists('support_color', $data ?? [], null);
        $this->setIfExists('buttons_text_color', $data ?? [], null);
        $this->setIfExists('text_letter_type', $data ?? [], null);
        $this->setIfExists('text_size', $data ?? [], null);
        $this->setIfExists('text_thickness', $data ?? [], null);
        $this->setIfExists('text_color', $data ?? [], null);
        $this->setIfExists('email_sender_name', $data ?? [], null);
        $this->setIfExists('email_reply_to', $data ?? [], null);
        $this->setIfExists('sms_sender_name', $data ?? [], null);
        $this->setIfExists('date_time_deleted', $data ?? [], null);
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

        if ($this->container['office_id'] === null) {
            $invalidProperties[] = "'office_id' can't be null";
        }
        if ((mb_strlen($this->container['office_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'office_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['text_size'] === null) {
            $invalidProperties[] = "'text_size' can't be null";
        }
        if ($this->container['text_thickness'] === null) {
            $invalidProperties[] = "'text_thickness' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $office_id when calling OfficeBrandingSettings., must be bigger than or equal to 1.');
        }

        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets main_color
     *
     * @return string|null
     */
    public function getMainColor()
    {
        return $this->container['main_color'];
    }

    /**
     * Sets main_color
     *
     * @param string|null $main_color main_color
     *
     * @return self
     */
    public function setMainColor($main_color)
    {
        if (is_null($main_color)) {
            throw new \InvalidArgumentException('non-nullable main_color cannot be null');
        }
        $this->container['main_color'] = $main_color;

        return $this;
    }

    /**
     * Gets support_color
     *
     * @return string|null
     */
    public function getSupportColor()
    {
        return $this->container['support_color'];
    }

    /**
     * Sets support_color
     *
     * @param string|null $support_color support_color
     *
     * @return self
     */
    public function setSupportColor($support_color)
    {
        if (is_null($support_color)) {
            throw new \InvalidArgumentException('non-nullable support_color cannot be null');
        }
        $this->container['support_color'] = $support_color;

        return $this;
    }

    /**
     * Gets buttons_text_color
     *
     * @return string|null
     */
    public function getButtonsTextColor()
    {
        return $this->container['buttons_text_color'];
    }

    /**
     * Sets buttons_text_color
     *
     * @param string|null $buttons_text_color buttons_text_color
     *
     * @return self
     */
    public function setButtonsTextColor($buttons_text_color)
    {
        if (is_null($buttons_text_color)) {
            throw new \InvalidArgumentException('non-nullable buttons_text_color cannot be null');
        }
        $this->container['buttons_text_color'] = $buttons_text_color;

        return $this;
    }

    /**
     * Gets text_letter_type
     *
     * @return string|null
     */
    public function getTextLetterType()
    {
        return $this->container['text_letter_type'];
    }

    /**
     * Sets text_letter_type
     *
     * @param string|null $text_letter_type text_letter_type
     *
     * @return self
     */
    public function setTextLetterType($text_letter_type)
    {
        if (is_null($text_letter_type)) {
            throw new \InvalidArgumentException('non-nullable text_letter_type cannot be null');
        }
        $this->container['text_letter_type'] = $text_letter_type;

        return $this;
    }

    /**
     * Gets text_size
     *
     * @return int
     */
    public function getTextSize()
    {
        return $this->container['text_size'];
    }

    /**
     * Sets text_size
     *
     * @param int $text_size text_size
     *
     * @return self
     */
    public function setTextSize($text_size)
    {
        if (is_null($text_size)) {
            throw new \InvalidArgumentException('non-nullable text_size cannot be null');
        }
        $this->container['text_size'] = $text_size;

        return $this;
    }

    /**
     * Gets text_thickness
     *
     * @return int
     */
    public function getTextThickness()
    {
        return $this->container['text_thickness'];
    }

    /**
     * Sets text_thickness
     *
     * @param int $text_thickness text_thickness
     *
     * @return self
     */
    public function setTextThickness($text_thickness)
    {
        if (is_null($text_thickness)) {
            throw new \InvalidArgumentException('non-nullable text_thickness cannot be null');
        }
        $this->container['text_thickness'] = $text_thickness;

        return $this;
    }

    /**
     * Gets text_color
     *
     * @return string|null
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     *
     * @param string|null $text_color text_color
     *
     * @return self
     */
    public function setTextColor($text_color)
    {
        if (is_null($text_color)) {
            throw new \InvalidArgumentException('non-nullable text_color cannot be null');
        }
        $this->container['text_color'] = $text_color;

        return $this;
    }

    /**
     * Gets email_sender_name
     *
     * @return string|null
     */
    public function getEmailSenderName()
    {
        return $this->container['email_sender_name'];
    }

    /**
     * Sets email_sender_name
     *
     * @param string|null $email_sender_name email_sender_name
     *
     * @return self
     */
    public function setEmailSenderName($email_sender_name)
    {
        if (is_null($email_sender_name)) {
            throw new \InvalidArgumentException('non-nullable email_sender_name cannot be null');
        }
        $this->container['email_sender_name'] = $email_sender_name;

        return $this;
    }

    /**
     * Gets email_reply_to
     *
     * @return string|null
     */
    public function getEmailReplyTo()
    {
        return $this->container['email_reply_to'];
    }

    /**
     * Sets email_reply_to
     *
     * @param string|null $email_reply_to email_reply_to
     *
     * @return self
     */
    public function setEmailReplyTo($email_reply_to)
    {
        if (is_null($email_reply_to)) {
            throw new \InvalidArgumentException('non-nullable email_reply_to cannot be null');
        }
        $this->container['email_reply_to'] = $email_reply_to;

        return $this;
    }

    /**
     * Gets sms_sender_name
     *
     * @return string|null
     */
    public function getSmsSenderName()
    {
        return $this->container['sms_sender_name'];
    }

    /**
     * Sets sms_sender_name
     *
     * @param string|null $sms_sender_name sms_sender_name
     *
     * @return self
     */
    public function setSmsSenderName($sms_sender_name)
    {
        if (is_null($sms_sender_name)) {
            throw new \InvalidArgumentException('non-nullable sms_sender_name cannot be null');
        }
        $this->container['sms_sender_name'] = $sms_sender_name;

        return $this;
    }

    /**
     * Gets date_time_deleted
     *
     * @return \DateTime|null
     */
    public function getDateTimeDeleted()
    {
        return $this->container['date_time_deleted'];
    }

    /**
     * Sets date_time_deleted
     *
     * @param \DateTime|null $date_time_deleted date_time_deleted
     *
     * @return self
     */
    public function setDateTimeDeleted($date_time_deleted)
    {
        if (is_null($date_time_deleted)) {
            throw new \InvalidArgumentException('non-nullable date_time_deleted cannot be null');
        }
        $this->container['date_time_deleted'] = $date_time_deleted;

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
            throw new \InvalidArgumentException('invalid length for $id when calling OfficeBrandingSettings., must be bigger than or equal to 1.');
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
