<?php

declare(strict_types=1);

/**
 * DocumentTemplatesSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentTemplatesSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentTemplatesSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'DocumentTemplatesSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'order' => '\Brixion\Kolibri\Model\SortOrder',
        'skip' => 'int',
        'take' => 'int',
        'term' => 'string',
        'term_fields' => '\Brixion\Kolibri\Model\DocumentTemplateTermField[]',
        'order_by' => '\Brixion\Kolibri\Model\DocumentTemplateOrderByField',
        'template_id' => 'string',
        'filter_by_real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'filter_by_document_template_types' => '\Brixion\Kolibri\Model\DocumentTemplateType[]',
        'for_sale' => 'bool',
        'for_rent' => 'bool',
        'is_active' => '\Brixion\Kolibri\Model\ActiveFilter',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'order' => null,
        'skip' => 'int32',
        'take' => 'int32',
        'term' => null,
        'term_fields' => null,
        'order_by' => null,
        'template_id' => 'guid',
        'filter_by_real_estate_groups' => null,
        'filter_by_document_template_types' => null,
        'for_sale' => null,
        'for_rent' => null,
        'is_active' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'order' => false,
        'skip' => false,
        'take' => false,
        'term' => false,
        'term_fields' => false,
        'order_by' => false,
        'template_id' => false,
        'filter_by_real_estate_groups' => false,
        'filter_by_document_template_types' => false,
        'for_sale' => false,
        'for_rent' => false,
        'is_active' => false,
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
        'order' => 'order',
        'skip' => 'skip',
        'take' => 'take',
        'term' => 'term',
        'term_fields' => 'termFields',
        'order_by' => 'orderBy',
        'template_id' => 'templateId',
        'filter_by_real_estate_groups' => 'filterByRealEstateGroups',
        'filter_by_document_template_types' => 'filterByDocumentTemplateTypes',
        'for_sale' => 'forSale',
        'for_rent' => 'forRent',
        'is_active' => 'isActive',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'skip' => 'setSkip',
        'take' => 'setTake',
        'term' => 'setTerm',
        'term_fields' => 'setTermFields',
        'order_by' => 'setOrderBy',
        'template_id' => 'setTemplateId',
        'filter_by_real_estate_groups' => 'setFilterByRealEstateGroups',
        'filter_by_document_template_types' => 'setFilterByDocumentTemplateTypes',
        'for_sale' => 'setForSale',
        'for_rent' => 'setForRent',
        'is_active' => 'setIsActive',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'skip' => 'getSkip',
        'take' => 'getTake',
        'term' => 'getTerm',
        'term_fields' => 'getTermFields',
        'order_by' => 'getOrderBy',
        'template_id' => 'getTemplateId',
        'filter_by_real_estate_groups' => 'getFilterByRealEstateGroups',
        'filter_by_document_template_types' => 'getFilterByDocumentTemplateTypes',
        'for_sale' => 'getForSale',
        'for_rent' => 'getForRent',
        'is_active' => 'getIsActive',
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
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('take', $data ?? [], null);
        $this->setIfExists('term', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('filter_by_real_estate_groups', $data ?? [], null);
        $this->setIfExists('filter_by_document_template_types', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
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

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['skip'] === null) {
            $invalidProperties[] = "'skip' can't be null";
        }
        if (($this->container['skip'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'skip', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['skip'] < 0)) {
            $invalidProperties[] = "invalid value for 'skip', must be bigger than or equal to 0.";
        }

        if ($this->container['take'] === null) {
            $invalidProperties[] = "'take' can't be null";
        }
        if (($this->container['take'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'take', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['take'] < 0)) {
            $invalidProperties[] = "invalid value for 'take', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) > 50)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) < 0)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['order_by'] === null) {
            $invalidProperties[] = "'order_by' can't be null";
        }
        if ($this->container['for_sale'] === null) {
            $invalidProperties[] = "'for_sale' can't be null";
        }
        if ($this->container['for_rent'] === null) {
            $invalidProperties[] = "'for_rent' can't be null";
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
     * Gets order
     *
     * @return \Brixion\Kolibri\Model\SortOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Brixion\Kolibri\Model\SortOrder $order Order search results ascending or descending.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip Number of results to skip.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }

        if (($skip > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling DocumentTemplatesSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling DocumentTemplatesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets take
     *
     * @return int
     */
    public function getTake()
    {
        return $this->container['take'];
    }

    /**
     * Sets take
     *
     * @param int $take Number of results to return.
     *
     * @return self
     */
    public function setTake($take)
    {
        if (is_null($take)) {
            throw new \InvalidArgumentException('non-nullable take cannot be null');
        }

        if (($take > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $take when calling DocumentTemplatesSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling DocumentTemplatesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['take'] = $take;

        return $this;
    }

    /**
     * Gets term
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param string|null $term Search by given text term in the fields indicated by TermFields
     *
     * @return self
     */
    public function setTerm($term)
    {
        if (is_null($term)) {
            throw new \InvalidArgumentException('non-nullable term cannot be null');
        }
        if ((mb_strlen($term) > 50)) {
            throw new \InvalidArgumentException('invalid length for $term when calling DocumentTemplatesSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling DocumentTemplatesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['term'] = $term;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\DocumentTemplateTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\DocumentTemplateTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
     *
     * @return self
     */
    public function setTermFields($term_fields)
    {
        if (is_null($term_fields)) {
            throw new \InvalidArgumentException('non-nullable term_fields cannot be null');
        }
        $this->container['term_fields'] = $term_fields;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\DocumentTemplateOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\DocumentTemplateOrderByField $order_by Order the results by the indicated Document Template field.
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id template_id
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets filter_by_real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup[]|null
     */
    public function getFilterByRealEstateGroups()
    {
        return $this->container['filter_by_real_estate_groups'];
    }

    /**
     * Sets filter_by_real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...).
     *
     * @return self
     */
    public function setFilterByRealEstateGroups($filter_by_real_estate_groups)
    {
        if (is_null($filter_by_real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable filter_by_real_estate_groups cannot be null');
        }
        $this->container['filter_by_real_estate_groups'] = $filter_by_real_estate_groups;

        return $this;
    }

    /**
     * Gets filter_by_document_template_types
     *
     * @return \Brixion\Kolibri\Model\DocumentTemplateType[]|null
     */
    public function getFilterByDocumentTemplateTypes()
    {
        return $this->container['filter_by_document_template_types'];
    }

    /**
     * Sets filter_by_document_template_types
     *
     * @param \Brixion\Kolibri\Model\DocumentTemplateType[]|null $filter_by_document_template_types filter_by_document_template_types
     *
     * @return self
     */
    public function setFilterByDocumentTemplateTypes($filter_by_document_template_types)
    {
        if (is_null($filter_by_document_template_types)) {
            throw new \InvalidArgumentException('non-nullable filter_by_document_template_types cannot be null');
        }
        $this->container['filter_by_document_template_types'] = $filter_by_document_template_types;

        return $this;
    }

    /**
     * Gets for_sale
     *
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool $for_sale for_sale
     *
     * @return self
     */
    public function setForSale($for_sale)
    {
        if (is_null($for_sale)) {
            throw new \InvalidArgumentException('non-nullable for_sale cannot be null');
        }
        $this->container['for_sale'] = $for_sale;

        return $this;
    }

    /**
     * Gets for_rent
     *
     * @return bool
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool $for_rent for_rent
     *
     * @return self
     */
    public function setForRent($for_rent)
    {
        if (is_null($for_rent)) {
            throw new \InvalidArgumentException('non-nullable for_rent cannot be null');
        }
        $this->container['for_rent'] = $for_rent;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return \Brixion\Kolibri\Model\ActiveFilter|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param \Brixion\Kolibri\Model\ActiveFilter|null $is_active is_active
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
