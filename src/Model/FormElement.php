<?php

declare(strict_types=1);

/**
 * FormElement - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * FormElement.
 * @implements \ArrayAccess<string, mixed>
 */
class FormElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'FormElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'name' => 'string',
        'pre_text' => 'string',
        'post_text' => 'string',
        'type' => '\Brixion\Kolibri\Model\FormElementType',
        'text_info' => '\Brixion\Kolibri\Model\FormElementTextInfo',
        'integer_info' => '\Brixion\Kolibri\Model\FormElementIntegerInfo',
        'decimal_info' => '\Brixion\Kolibri\Model\FormElementDecimalInfo',
        'date_info' => '\Brixion\Kolibri\Model\FormElementDateInfo',
        'drop_down_info' => '\Brixion\Kolibri\Model\FormElementDropDownInfo',
        'heading_info' => '\Brixion\Kolibri\Model\FormElementHeadingInfo',
        'form_elements' => '\Brixion\Kolibri\Model\FormElement[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'name' => null,
        'pre_text' => null,
        'post_text' => null,
        'type' => null,
        'text_info' => null,
        'integer_info' => null,
        'decimal_info' => null,
        'date_info' => null,
        'drop_down_info' => null,
        'heading_info' => null,
        'form_elements' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'name' => false,
        'pre_text' => false,
        'post_text' => false,
        'type' => false,
        'text_info' => false,
        'integer_info' => false,
        'decimal_info' => false,
        'date_info' => false,
        'drop_down_info' => false,
        'heading_info' => false,
        'form_elements' => false,
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
        'name' => 'name',
        'pre_text' => 'preText',
        'post_text' => 'postText',
        'type' => 'type',
        'text_info' => 'textInfo',
        'integer_info' => 'integerInfo',
        'decimal_info' => 'decimalInfo',
        'date_info' => 'dateInfo',
        'drop_down_info' => 'dropDownInfo',
        'heading_info' => 'headingInfo',
        'form_elements' => 'formElements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'pre_text' => 'setPreText',
        'post_text' => 'setPostText',
        'type' => 'setType',
        'text_info' => 'setTextInfo',
        'integer_info' => 'setIntegerInfo',
        'decimal_info' => 'setDecimalInfo',
        'date_info' => 'setDateInfo',
        'drop_down_info' => 'setDropDownInfo',
        'heading_info' => 'setHeadingInfo',
        'form_elements' => 'setFormElements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'pre_text' => 'getPreText',
        'post_text' => 'getPostText',
        'type' => 'getType',
        'text_info' => 'getTextInfo',
        'integer_info' => 'getIntegerInfo',
        'decimal_info' => 'getDecimalInfo',
        'date_info' => 'getDateInfo',
        'drop_down_info' => 'getDropDownInfo',
        'heading_info' => 'getHeadingInfo',
        'form_elements' => 'getFormElements',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('pre_text', $data ?? [], null);
        $this->setIfExists('post_text', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('text_info', $data ?? [], null);
        $this->setIfExists('integer_info', $data ?? [], null);
        $this->setIfExists('decimal_info', $data ?? [], null);
        $this->setIfExists('date_info', $data ?? [], null);
        $this->setIfExists('drop_down_info', $data ?? [], null);
        $this->setIfExists('heading_info', $data ?? [], null);
        $this->setIfExists('form_elements', $data ?? [], null);
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
     * Gets pre_text
     *
     * @return string|null
     */
    public function getPreText()
    {
        return $this->container['pre_text'];
    }

    /**
     * Sets pre_text
     *
     * @param string|null $pre_text pre_text
     *
     * @return self
     */
    public function setPreText($pre_text)
    {
        if (is_null($pre_text)) {
            throw new \InvalidArgumentException('non-nullable pre_text cannot be null');
        }
        $this->container['pre_text'] = $pre_text;

        return $this;
    }

    /**
     * Gets post_text
     *
     * @return string|null
     */
    public function getPostText()
    {
        return $this->container['post_text'];
    }

    /**
     * Sets post_text
     *
     * @param string|null $post_text post_text
     *
     * @return self
     */
    public function setPostText($post_text)
    {
        if (is_null($post_text)) {
            throw new \InvalidArgumentException('non-nullable post_text cannot be null');
        }
        $this->container['post_text'] = $post_text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\FormElementType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\FormElementType $type type
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
     * Gets text_info
     *
     * @return \Brixion\Kolibri\Model\FormElementTextInfo|null
     */
    public function getTextInfo()
    {
        return $this->container['text_info'];
    }

    /**
     * Sets text_info
     *
     * @param \Brixion\Kolibri\Model\FormElementTextInfo|null $text_info text_info
     *
     * @return self
     */
    public function setTextInfo($text_info)
    {
        if (is_null($text_info)) {
            throw new \InvalidArgumentException('non-nullable text_info cannot be null');
        }
        $this->container['text_info'] = $text_info;

        return $this;
    }

    /**
     * Gets integer_info
     *
     * @return \Brixion\Kolibri\Model\FormElementIntegerInfo|null
     */
    public function getIntegerInfo()
    {
        return $this->container['integer_info'];
    }

    /**
     * Sets integer_info
     *
     * @param \Brixion\Kolibri\Model\FormElementIntegerInfo|null $integer_info integer_info
     *
     * @return self
     */
    public function setIntegerInfo($integer_info)
    {
        if (is_null($integer_info)) {
            throw new \InvalidArgumentException('non-nullable integer_info cannot be null');
        }
        $this->container['integer_info'] = $integer_info;

        return $this;
    }

    /**
     * Gets decimal_info
     *
     * @return \Brixion\Kolibri\Model\FormElementDecimalInfo|null
     */
    public function getDecimalInfo()
    {
        return $this->container['decimal_info'];
    }

    /**
     * Sets decimal_info
     *
     * @param \Brixion\Kolibri\Model\FormElementDecimalInfo|null $decimal_info decimal_info
     *
     * @return self
     */
    public function setDecimalInfo($decimal_info)
    {
        if (is_null($decimal_info)) {
            throw new \InvalidArgumentException('non-nullable decimal_info cannot be null');
        }
        $this->container['decimal_info'] = $decimal_info;

        return $this;
    }

    /**
     * Gets date_info
     *
     * @return \Brixion\Kolibri\Model\FormElementDateInfo|null
     */
    public function getDateInfo()
    {
        return $this->container['date_info'];
    }

    /**
     * Sets date_info
     *
     * @param \Brixion\Kolibri\Model\FormElementDateInfo|null $date_info date_info
     *
     * @return self
     */
    public function setDateInfo($date_info)
    {
        if (is_null($date_info)) {
            throw new \InvalidArgumentException('non-nullable date_info cannot be null');
        }
        $this->container['date_info'] = $date_info;

        return $this;
    }

    /**
     * Gets drop_down_info
     *
     * @return \Brixion\Kolibri\Model\FormElementDropDownInfo|null
     */
    public function getDropDownInfo()
    {
        return $this->container['drop_down_info'];
    }

    /**
     * Sets drop_down_info
     *
     * @param \Brixion\Kolibri\Model\FormElementDropDownInfo|null $drop_down_info drop_down_info
     *
     * @return self
     */
    public function setDropDownInfo($drop_down_info)
    {
        if (is_null($drop_down_info)) {
            throw new \InvalidArgumentException('non-nullable drop_down_info cannot be null');
        }
        $this->container['drop_down_info'] = $drop_down_info;

        return $this;
    }

    /**
     * Gets heading_info
     *
     * @return \Brixion\Kolibri\Model\FormElementHeadingInfo|null
     */
    public function getHeadingInfo()
    {
        return $this->container['heading_info'];
    }

    /**
     * Sets heading_info
     *
     * @param \Brixion\Kolibri\Model\FormElementHeadingInfo|null $heading_info heading_info
     *
     * @return self
     */
    public function setHeadingInfo($heading_info)
    {
        if (is_null($heading_info)) {
            throw new \InvalidArgumentException('non-nullable heading_info cannot be null');
        }
        $this->container['heading_info'] = $heading_info;

        return $this;
    }

    /**
     * Gets form_elements
     *
     * @return \Brixion\Kolibri\Model\FormElement[]|null
     */
    public function getFormElements()
    {
        return $this->container['form_elements'];
    }

    /**
     * Sets form_elements
     *
     * @param \Brixion\Kolibri\Model\FormElement[]|null $form_elements form_elements
     *
     * @return self
     */
    public function setFormElements($form_elements)
    {
        if (is_null($form_elements)) {
            throw new \InvalidArgumentException('non-nullable form_elements cannot be null');
        }
        $this->container['form_elements'] = $form_elements;

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
