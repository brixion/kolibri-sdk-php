<?php

declare(strict_types=1);

/**
 * FolderTreeFileEntity - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * FolderTreeFileEntity.
 * @implements \ArrayAccess<string, mixed>
 */
class FolderTreeFileEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'FolderTreeFileEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'id' => 'string',
        'type' => '\Brixion\Kolibri\Model\FolderTreeFileType',
        'linked_dossier_item' => '\Brixion\Kolibri\Model\DossierItemSnapShot',
        'linked_document_session' => '\Brixion\Kolibri\Model\DocumentSessionSnapShot',
        'linked_invoice' => '\Brixion\Kolibri\Model\InvoiceSnapShot',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'id' => 'guid',
        'type' => null,
        'linked_dossier_item' => null,
        'linked_document_session' => null,
        'linked_invoice' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'id' => false,
        'type' => false,
        'linked_dossier_item' => false,
        'linked_document_session' => false,
        'linked_invoice' => false,
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
        'id' => 'id',
        'type' => 'type',
        'linked_dossier_item' => 'linkedDossierItem',
        'linked_document_session' => 'linkedDocumentSession',
        'linked_invoice' => 'linkedInvoice',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'linked_dossier_item' => 'setLinkedDossierItem',
        'linked_document_session' => 'setLinkedDocumentSession',
        'linked_invoice' => 'setLinkedInvoice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'linked_dossier_item' => 'getLinkedDossierItem',
        'linked_document_session' => 'getLinkedDocumentSession',
        'linked_invoice' => 'getLinkedInvoice',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('linked_dossier_item', $data ?? [], null);
        $this->setIfExists('linked_document_session', $data ?? [], null);
        $this->setIfExists('linked_invoice', $data ?? [], null);
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\FolderTreeFileType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\FolderTreeFileType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets linked_dossier_item
     *
     * @return \Brixion\Kolibri\Model\DossierItemSnapShot|null
     */
    public function getLinkedDossierItem()
    {
        return $this->container['linked_dossier_item'];
    }

    /**
     * Sets linked_dossier_item
     *
     * @param \Brixion\Kolibri\Model\DossierItemSnapShot|null $linked_dossier_item linked_dossier_item
     *
     * @return self
     */
    public function setLinkedDossierItem($linked_dossier_item)
    {
        if (is_null($linked_dossier_item)) {
            throw new \InvalidArgumentException('non-nullable linked_dossier_item cannot be null');
        }
        $this->container['linked_dossier_item'] = $linked_dossier_item;

        return $this;
    }

    /**
     * Gets linked_document_session
     *
     * @return \Brixion\Kolibri\Model\DocumentSessionSnapShot|null
     */
    public function getLinkedDocumentSession()
    {
        return $this->container['linked_document_session'];
    }

    /**
     * Sets linked_document_session
     *
     * @param \Brixion\Kolibri\Model\DocumentSessionSnapShot|null $linked_document_session linked_document_session
     *
     * @return self
     */
    public function setLinkedDocumentSession($linked_document_session)
    {
        if (is_null($linked_document_session)) {
            throw new \InvalidArgumentException('non-nullable linked_document_session cannot be null');
        }
        $this->container['linked_document_session'] = $linked_document_session;

        return $this;
    }

    /**
     * Gets linked_invoice
     *
     * @return \Brixion\Kolibri\Model\InvoiceSnapShot|null
     */
    public function getLinkedInvoice()
    {
        return $this->container['linked_invoice'];
    }

    /**
     * Sets linked_invoice
     *
     * @param \Brixion\Kolibri\Model\InvoiceSnapShot|null $linked_invoice linked_invoice
     *
     * @return self
     */
    public function setLinkedInvoice($linked_invoice)
    {
        if (is_null($linked_invoice)) {
            throw new \InvalidArgumentException('non-nullable linked_invoice cannot be null');
        }
        $this->container['linked_invoice'] = $linked_invoice;

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
