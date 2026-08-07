<?php

declare(strict_types=1);

/**
 * LinkedRelation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * LinkedRelation.
 * @implements \ArrayAccess<string, mixed>
 */
class LinkedRelation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'LinkedRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'association' => '\Brixion\Kolibri\Model\RealEstateAssociation',
        'avatar_url' => 'string',
        'date_of_birth' => '\DateTime',
        'display_name' => 'string',
        'email' => 'string',
        'gender' => '\Brixion\Kolibri\Model\Gender',
        'linked_partner' => '\Brixion\Kolibri\Model\LinkedPartner',
        'letter_avatar' => 'string',
        'locality' => 'string',
        'membership_number' => 'string',
        'phone' => 'string',
        'phone_mobile' => 'string',
        'phone_work' => 'string',
        'postal_code' => 'string',
        'street_name_and_number' => 'string',
        'together_with_partner' => 'bool',
        'type_of_relation' => '\Brixion\Kolibri\Model\RelationType',
        'is_active' => 'bool',
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
        'association' => null,
        'avatar_url' => null,
        'date_of_birth' => 'date-time',
        'display_name' => null,
        'email' => null,
        'gender' => null,
        'linked_partner' => null,
        'letter_avatar' => null,
        'locality' => null,
        'membership_number' => null,
        'phone' => null,
        'phone_mobile' => null,
        'phone_work' => null,
        'postal_code' => null,
        'street_name_and_number' => null,
        'together_with_partner' => null,
        'type_of_relation' => null,
        'is_active' => null,
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
        'association' => false,
        'avatar_url' => false,
        'date_of_birth' => false,
        'display_name' => false,
        'email' => false,
        'gender' => false,
        'linked_partner' => false,
        'letter_avatar' => false,
        'locality' => false,
        'membership_number' => false,
        'phone' => false,
        'phone_mobile' => false,
        'phone_work' => false,
        'postal_code' => false,
        'street_name_and_number' => false,
        'together_with_partner' => false,
        'type_of_relation' => false,
        'is_active' => false,
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
        'association' => 'association',
        'avatar_url' => 'avatarUrl',
        'date_of_birth' => 'dateOfBirth',
        'display_name' => 'displayName',
        'email' => 'email',
        'gender' => 'gender',
        'linked_partner' => 'linkedPartner',
        'letter_avatar' => 'letterAvatar',
        'locality' => 'locality',
        'membership_number' => 'membershipNumber',
        'phone' => 'phone',
        'phone_mobile' => 'phoneMobile',
        'phone_work' => 'phoneWork',
        'postal_code' => 'postalCode',
        'street_name_and_number' => 'streetNameAndNumber',
        'together_with_partner' => 'togetherWithPartner',
        'type_of_relation' => 'typeOfRelation',
        'is_active' => 'isActive',
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
        'association' => 'setAssociation',
        'avatar_url' => 'setAvatarUrl',
        'date_of_birth' => 'setDateOfBirth',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'linked_partner' => 'setLinkedPartner',
        'letter_avatar' => 'setLetterAvatar',
        'locality' => 'setLocality',
        'membership_number' => 'setMembershipNumber',
        'phone' => 'setPhone',
        'phone_mobile' => 'setPhoneMobile',
        'phone_work' => 'setPhoneWork',
        'postal_code' => 'setPostalCode',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'together_with_partner' => 'setTogetherWithPartner',
        'type_of_relation' => 'setTypeOfRelation',
        'is_active' => 'setIsActive',
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
        'association' => 'getAssociation',
        'avatar_url' => 'getAvatarUrl',
        'date_of_birth' => 'getDateOfBirth',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'linked_partner' => 'getLinkedPartner',
        'letter_avatar' => 'getLetterAvatar',
        'locality' => 'getLocality',
        'membership_number' => 'getMembershipNumber',
        'phone' => 'getPhone',
        'phone_mobile' => 'getPhoneMobile',
        'phone_work' => 'getPhoneWork',
        'postal_code' => 'getPostalCode',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'together_with_partner' => 'getTogetherWithPartner',
        'type_of_relation' => 'getTypeOfRelation',
        'is_active' => 'getIsActive',
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
        $this->setIfExists('association', $data ?? [], null);
        $this->setIfExists('avatar_url', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('linked_partner', $data ?? [], null);
        $this->setIfExists('letter_avatar', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('membership_number', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('phone_mobile', $data ?? [], null);
        $this->setIfExists('phone_work', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('street_name_and_number', $data ?? [], null);
        $this->setIfExists('together_with_partner', $data ?? [], null);
        $this->setIfExists('type_of_relation', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
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
     * Gets association
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociation|null
     */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
     * Sets association
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociation|null $association association
     *
     * @return self
     */
    public function setAssociation($association)
    {
        if (is_null($association)) {
            throw new \InvalidArgumentException('non-nullable association cannot be null');
        }
        $this->container['association'] = $association;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url avatar_url
     *
     * @return self
     */
    public function setAvatarUrl($avatar_url)
    {
        if (is_null($avatar_url)) {
            throw new \InvalidArgumentException('non-nullable avatar_url cannot be null');
        }
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Brixion\Kolibri\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Brixion\Kolibri\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets linked_partner
     *
     * @return \Brixion\Kolibri\Model\LinkedPartner|null
     */
    public function getLinkedPartner()
    {
        return $this->container['linked_partner'];
    }

    /**
     * Sets linked_partner
     *
     * @param \Brixion\Kolibri\Model\LinkedPartner|null $linked_partner linked_partner
     *
     * @return self
     */
    public function setLinkedPartner($linked_partner)
    {
        if (is_null($linked_partner)) {
            throw new \InvalidArgumentException('non-nullable linked_partner cannot be null');
        }
        $this->container['linked_partner'] = $linked_partner;

        return $this;
    }

    /**
     * Gets letter_avatar
     *
     * @return string|null
     */
    public function getLetterAvatar()
    {
        return $this->container['letter_avatar'];
    }

    /**
     * Sets letter_avatar
     *
     * @param string|null $letter_avatar letter_avatar
     *
     * @return self
     */
    public function setLetterAvatar($letter_avatar)
    {
        if (is_null($letter_avatar)) {
            throw new \InvalidArgumentException('non-nullable letter_avatar cannot be null');
        }
        $this->container['letter_avatar'] = $letter_avatar;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets membership_number
     *
     * @return string|null
     */
    public function getMembershipNumber()
    {
        return $this->container['membership_number'];
    }

    /**
     * Sets membership_number
     *
     * @param string|null $membership_number membership_number
     *
     * @return self
     */
    public function setMembershipNumber($membership_number)
    {
        if (is_null($membership_number)) {
            throw new \InvalidArgumentException('non-nullable membership_number cannot be null');
        }
        $this->container['membership_number'] = $membership_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phone_mobile
     *
     * @return string|null
     */
    public function getPhoneMobile()
    {
        return $this->container['phone_mobile'];
    }

    /**
     * Sets phone_mobile
     *
     * @param string|null $phone_mobile phone_mobile
     *
     * @return self
     */
    public function setPhoneMobile($phone_mobile)
    {
        if (is_null($phone_mobile)) {
            throw new \InvalidArgumentException('non-nullable phone_mobile cannot be null');
        }
        $this->container['phone_mobile'] = $phone_mobile;

        return $this;
    }

    /**
     * Gets phone_work
     *
     * @return string|null
     */
    public function getPhoneWork()
    {
        return $this->container['phone_work'];
    }

    /**
     * Sets phone_work
     *
     * @param string|null $phone_work phone_work
     *
     * @return self
     */
    public function setPhoneWork($phone_work)
    {
        if (is_null($phone_work)) {
            throw new \InvalidArgumentException('non-nullable phone_work cannot be null');
        }
        $this->container['phone_work'] = $phone_work;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets street_name_and_number
     *
     * @return string|null
     */
    public function getStreetNameAndNumber()
    {
        return $this->container['street_name_and_number'];
    }

    /**
     * Sets street_name_and_number
     *
     * @param string|null $street_name_and_number street_name_and_number
     *
     * @return self
     */
    public function setStreetNameAndNumber($street_name_and_number)
    {
        if (is_null($street_name_and_number)) {
            throw new \InvalidArgumentException('non-nullable street_name_and_number cannot be null');
        }
        $this->container['street_name_and_number'] = $street_name_and_number;

        return $this;
    }

    /**
     * Gets together_with_partner
     *
     * @return bool|null
     */
    public function getTogetherWithPartner()
    {
        return $this->container['together_with_partner'];
    }

    /**
     * Sets together_with_partner
     *
     * @param bool|null $together_with_partner together_with_partner
     *
     * @return self
     */
    public function setTogetherWithPartner($together_with_partner)
    {
        if (is_null($together_with_partner)) {
            throw new \InvalidArgumentException('non-nullable together_with_partner cannot be null');
        }
        $this->container['together_with_partner'] = $together_with_partner;

        return $this;
    }

    /**
     * Gets type_of_relation
     *
     * @return \Brixion\Kolibri\Model\RelationType|null
     */
    public function getTypeOfRelation()
    {
        return $this->container['type_of_relation'];
    }

    /**
     * Sets type_of_relation
     *
     * @param \Brixion\Kolibri\Model\RelationType|null $type_of_relation type_of_relation
     *
     * @return self
     */
    public function setTypeOfRelation($type_of_relation)
    {
        if (is_null($type_of_relation)) {
            throw new \InvalidArgumentException('non-nullable type_of_relation cannot be null');
        }
        $this->container['type_of_relation'] = $type_of_relation;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
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
     * Gets date_time_created
     *
     * @return \DateTime|null
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime|null $date_time_created date_time_created
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
            throw new \InvalidArgumentException('invalid length for $id when calling LinkedRelation., must be bigger than or equal to 1.');
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
