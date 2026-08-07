<?php

declare(strict_types=1);

/**
 * MessageDefineNewRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MessageDefineNewRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class MessageDefineNewRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MessageDefineNewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'message_type' => '\Brixion\Kolibri\Model\MessageType',
        'recipient_venum_company_id' => 'string',
        'linked_assignment_id' => 'string',
        'linked_relation_id' => 'string',
        'linked_media_contract_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'message_type' => null,
        'recipient_venum_company_id' => 'guid',
        'linked_assignment_id' => 'guid',
        'linked_relation_id' => 'guid',
        'linked_media_contract_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'message_type' => false,
        'recipient_venum_company_id' => false,
        'linked_assignment_id' => false,
        'linked_relation_id' => false,
        'linked_media_contract_id' => false,
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
        'message_type' => 'messageType',
        'recipient_venum_company_id' => 'recipientVenumCompanyId',
        'linked_assignment_id' => 'linkedAssignmentId',
        'linked_relation_id' => 'linkedRelationId',
        'linked_media_contract_id' => 'linkedMediaContractId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_type' => 'setMessageType',
        'recipient_venum_company_id' => 'setRecipientVenumCompanyId',
        'linked_assignment_id' => 'setLinkedAssignmentId',
        'linked_relation_id' => 'setLinkedRelationId',
        'linked_media_contract_id' => 'setLinkedMediaContractId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_type' => 'getMessageType',
        'recipient_venum_company_id' => 'getRecipientVenumCompanyId',
        'linked_assignment_id' => 'getLinkedAssignmentId',
        'linked_relation_id' => 'getLinkedRelationId',
        'linked_media_contract_id' => 'getLinkedMediaContractId',
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
        $this->setIfExists('message_type', $data ?? [], null);
        $this->setIfExists('recipient_venum_company_id', $data ?? [], null);
        $this->setIfExists('linked_assignment_id', $data ?? [], null);
        $this->setIfExists('linked_relation_id', $data ?? [], null);
        $this->setIfExists('linked_media_contract_id', $data ?? [], null);
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

        if ($this->container['message_type'] === null) {
            $invalidProperties[] = "'message_type' can't be null";
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
     * Gets message_type
     *
     * @return \Brixion\Kolibri\Model\MessageType
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \Brixion\Kolibri\Model\MessageType $message_type message_type
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        if (is_null($message_type)) {
            throw new \InvalidArgumentException('non-nullable message_type cannot be null');
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets recipient_venum_company_id
     *
     * @return string|null
     */
    public function getRecipientVenumCompanyId()
    {
        return $this->container['recipient_venum_company_id'];
    }

    /**
     * Sets recipient_venum_company_id
     *
     * @param string|null $recipient_venum_company_id recipient_venum_company_id
     *
     * @return self
     */
    public function setRecipientVenumCompanyId($recipient_venum_company_id)
    {
        if (is_null($recipient_venum_company_id)) {
            throw new \InvalidArgumentException('non-nullable recipient_venum_company_id cannot be null');
        }
        $this->container['recipient_venum_company_id'] = $recipient_venum_company_id;

        return $this;
    }

    /**
     * Gets linked_assignment_id
     *
     * @return string|null
     */
    public function getLinkedAssignmentId()
    {
        return $this->container['linked_assignment_id'];
    }

    /**
     * Sets linked_assignment_id
     *
     * @param string|null $linked_assignment_id linked_assignment_id
     *
     * @return self
     */
    public function setLinkedAssignmentId($linked_assignment_id)
    {
        if (is_null($linked_assignment_id)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment_id cannot be null');
        }
        $this->container['linked_assignment_id'] = $linked_assignment_id;

        return $this;
    }

    /**
     * Gets linked_relation_id
     *
     * @return string|null
     */
    public function getLinkedRelationId()
    {
        return $this->container['linked_relation_id'];
    }

    /**
     * Sets linked_relation_id
     *
     * @param string|null $linked_relation_id linked_relation_id
     *
     * @return self
     */
    public function setLinkedRelationId($linked_relation_id)
    {
        if (is_null($linked_relation_id)) {
            throw new \InvalidArgumentException('non-nullable linked_relation_id cannot be null');
        }
        $this->container['linked_relation_id'] = $linked_relation_id;

        return $this;
    }

    /**
     * Gets linked_media_contract_id
     *
     * @return string|null
     */
    public function getLinkedMediaContractId()
    {
        return $this->container['linked_media_contract_id'];
    }

    /**
     * Sets linked_media_contract_id
     *
     * @param string|null $linked_media_contract_id linked_media_contract_id
     *
     * @return self
     */
    public function setLinkedMediaContractId($linked_media_contract_id)
    {
        if (is_null($linked_media_contract_id)) {
            throw new \InvalidArgumentException('non-nullable linked_media_contract_id cannot be null');
        }
        $this->container['linked_media_contract_id'] = $linked_media_contract_id;

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
