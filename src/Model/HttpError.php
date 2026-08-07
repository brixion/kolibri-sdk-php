<?php

declare(strict_types=1);

/**
 * HttpError - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * HttpError.
 *
 * Defines a serializable container for storing error information. This information is stored  as key/value pairs. The dictionary keys to look up standard error information are available on the HttpErrorKeys type.
 * @implements \ArrayAccess<string, mixed>
 */
class HttpError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'HttpError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'message' => 'string',
        'model_state' => '\Brixion\Kolibri\Model\HttpError',
        'message_detail' => 'string',
        'exception_message' => 'string',
        'exception_type' => 'string',
        'stack_trace' => 'string',
        'inner_exception' => '\Brixion\Kolibri\Model\HttpError',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'message' => null,
        'model_state' => null,
        'message_detail' => null,
        'exception_message' => null,
        'exception_type' => null,
        'stack_trace' => null,
        'inner_exception' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'message' => false,
        'model_state' => false,
        'message_detail' => false,
        'exception_message' => false,
        'exception_type' => false,
        'stack_trace' => false,
        'inner_exception' => false,
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
        'message' => 'message',
        'model_state' => 'modelState',
        'message_detail' => 'messageDetail',
        'exception_message' => 'exceptionMessage',
        'exception_type' => 'exceptionType',
        'stack_trace' => 'stackTrace',
        'inner_exception' => 'innerException',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'model_state' => 'setModelState',
        'message_detail' => 'setMessageDetail',
        'exception_message' => 'setExceptionMessage',
        'exception_type' => 'setExceptionType',
        'stack_trace' => 'setStackTrace',
        'inner_exception' => 'setInnerException',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'model_state' => 'getModelState',
        'message_detail' => 'getMessageDetail',
        'exception_message' => 'getExceptionMessage',
        'exception_type' => 'getExceptionType',
        'stack_trace' => 'getStackTrace',
        'inner_exception' => 'getInnerException',
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
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('model_state', $data ?? [], null);
        $this->setIfExists('message_detail', $data ?? [], null);
        $this->setIfExists('exception_message', $data ?? [], null);
        $this->setIfExists('exception_type', $data ?? [], null);
        $this->setIfExists('stack_trace', $data ?? [], null);
        $this->setIfExists('inner_exception', $data ?? [], null);
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
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Gets or sets the high-level, user-visible message explaining the cause of the error. Information carried in this field should be considered public in that it will go over the wire regardless of the IncludeErrorDetailPolicy. As a result care should be taken not to disclose sensitive information about the server or the application.
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
     * Gets model_state
     *
     * @return \Brixion\Kolibri\Model\HttpError|null
     */
    public function getModelState()
    {
        return $this->container['model_state'];
    }

    /**
     * Sets model_state
     *
     * @param \Brixion\Kolibri\Model\HttpError|null $model_state Gets the ModelState containing information about the errors that occurred during model binding.
     *
     * @return self
     */
    public function setModelState($model_state)
    {
        if (is_null($model_state)) {
            throw new \InvalidArgumentException('non-nullable model_state cannot be null');
        }
        $this->container['model_state'] = $model_state;

        return $this;
    }

    /**
     * Gets message_detail
     *
     * @return string|null
     */
    public function getMessageDetail()
    {
        return $this->container['message_detail'];
    }

    /**
     * Sets message_detail
     *
     * @param string|null $message_detail Gets or sets a detailed description of the error intended for the developer to understand exactly what failed.
     *
     * @return self
     */
    public function setMessageDetail($message_detail)
    {
        if (is_null($message_detail)) {
            throw new \InvalidArgumentException('non-nullable message_detail cannot be null');
        }
        $this->container['message_detail'] = $message_detail;

        return $this;
    }

    /**
     * Gets exception_message
     *
     * @return string|null
     */
    public function getExceptionMessage()
    {
        return $this->container['exception_message'];
    }

    /**
     * Sets exception_message
     *
     * @param string|null $exception_message Gets or sets the message of the Exception if available.
     *
     * @return self
     */
    public function setExceptionMessage($exception_message)
    {
        if (is_null($exception_message)) {
            throw new \InvalidArgumentException('non-nullable exception_message cannot be null');
        }
        $this->container['exception_message'] = $exception_message;

        return $this;
    }

    /**
     * Gets exception_type
     *
     * @return string|null
     */
    public function getExceptionType()
    {
        return $this->container['exception_type'];
    }

    /**
     * Sets exception_type
     *
     * @param string|null $exception_type Gets or sets the type of the Exception if available.
     *
     * @return self
     */
    public function setExceptionType($exception_type)
    {
        if (is_null($exception_type)) {
            throw new \InvalidArgumentException('non-nullable exception_type cannot be null');
        }
        $this->container['exception_type'] = $exception_type;

        return $this;
    }

    /**
     * Gets stack_trace
     *
     * @return string|null
     */
    public function getStackTrace()
    {
        return $this->container['stack_trace'];
    }

    /**
     * Sets stack_trace
     *
     * @param string|null $stack_trace Gets or sets the stack trace information associated with this instance if available.
     *
     * @return self
     */
    public function setStackTrace($stack_trace)
    {
        if (is_null($stack_trace)) {
            throw new \InvalidArgumentException('non-nullable stack_trace cannot be null');
        }
        $this->container['stack_trace'] = $stack_trace;

        return $this;
    }

    /**
     * Gets inner_exception
     *
     * @return \Brixion\Kolibri\Model\HttpError|null
     */
    public function getInnerException()
    {
        return $this->container['inner_exception'];
    }

    /**
     * Sets inner_exception
     *
     * @param \Brixion\Kolibri\Model\HttpError|null $inner_exception Gets the inner Exception associated with this instance if available.
     *
     * @return self
     */
    public function setInnerException($inner_exception)
    {
        if (is_null($inner_exception)) {
            throw new \InvalidArgumentException('non-nullable inner_exception cannot be null');
        }
        $this->container['inner_exception'] = $inner_exception;

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
