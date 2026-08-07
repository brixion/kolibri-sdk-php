<?php

declare(strict_types=1);

/**
 * CadastralDetails - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CadastralDetails.
 * @implements \ArrayAccess<string, mixed>
 */
class CadastralDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CadastralDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'cadastral_lot_size' => '\Brixion\Kolibri\Model\CadastralLotSize',
        'index_number' => 'string',
        'indication_estimated_size' => 'bool',
        'letter' => 'string',
        'municipal_code' => 'string',
        'municipality' => 'string',
        'parcel' => 'string',
        'reference_number' => 'string',
        'section' => 'string',
        'share' => 'string',
        'surface' => 'int',
        'surface_by_division' => 'int',
        'x_coordinate' => 'string',
        'y_coordinate' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'cadastral_lot_size' => null,
        'index_number' => null,
        'indication_estimated_size' => null,
        'letter' => null,
        'municipal_code' => null,
        'municipality' => null,
        'parcel' => null,
        'reference_number' => null,
        'section' => null,
        'share' => null,
        'surface' => 'int64',
        'surface_by_division' => 'int64',
        'x_coordinate' => null,
        'y_coordinate' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'cadastral_lot_size' => false,
        'index_number' => false,
        'indication_estimated_size' => false,
        'letter' => false,
        'municipal_code' => false,
        'municipality' => false,
        'parcel' => false,
        'reference_number' => false,
        'section' => false,
        'share' => false,
        'surface' => false,
        'surface_by_division' => false,
        'x_coordinate' => false,
        'y_coordinate' => false,
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
        'cadastral_lot_size' => 'cadastralLotSize',
        'index_number' => 'indexNumber',
        'indication_estimated_size' => 'indicationEstimatedSize',
        'letter' => 'letter',
        'municipal_code' => 'municipalCode',
        'municipality' => 'municipality',
        'parcel' => 'parcel',
        'reference_number' => 'referenceNumber',
        'section' => 'section',
        'share' => 'share',
        'surface' => 'surface',
        'surface_by_division' => 'surfaceByDivision',
        'x_coordinate' => 'xCoordinate',
        'y_coordinate' => 'yCoordinate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cadastral_lot_size' => 'setCadastralLotSize',
        'index_number' => 'setIndexNumber',
        'indication_estimated_size' => 'setIndicationEstimatedSize',
        'letter' => 'setLetter',
        'municipal_code' => 'setMunicipalCode',
        'municipality' => 'setMunicipality',
        'parcel' => 'setParcel',
        'reference_number' => 'setReferenceNumber',
        'section' => 'setSection',
        'share' => 'setShare',
        'surface' => 'setSurface',
        'surface_by_division' => 'setSurfaceByDivision',
        'x_coordinate' => 'setXCoordinate',
        'y_coordinate' => 'setYCoordinate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cadastral_lot_size' => 'getCadastralLotSize',
        'index_number' => 'getIndexNumber',
        'indication_estimated_size' => 'getIndicationEstimatedSize',
        'letter' => 'getLetter',
        'municipal_code' => 'getMunicipalCode',
        'municipality' => 'getMunicipality',
        'parcel' => 'getParcel',
        'reference_number' => 'getReferenceNumber',
        'section' => 'getSection',
        'share' => 'getShare',
        'surface' => 'getSurface',
        'surface_by_division' => 'getSurfaceByDivision',
        'x_coordinate' => 'getXCoordinate',
        'y_coordinate' => 'getYCoordinate',
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
        $this->setIfExists('cadastral_lot_size', $data ?? [], null);
        $this->setIfExists('index_number', $data ?? [], null);
        $this->setIfExists('indication_estimated_size', $data ?? [], null);
        $this->setIfExists('letter', $data ?? [], null);
        $this->setIfExists('municipal_code', $data ?? [], null);
        $this->setIfExists('municipality', $data ?? [], null);
        $this->setIfExists('parcel', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('section', $data ?? [], null);
        $this->setIfExists('share', $data ?? [], null);
        $this->setIfExists('surface', $data ?? [], null);
        $this->setIfExists('surface_by_division', $data ?? [], null);
        $this->setIfExists('x_coordinate', $data ?? [], null);
        $this->setIfExists('y_coordinate', $data ?? [], null);
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
     * Gets cadastral_lot_size
     *
     * @return \Brixion\Kolibri\Model\CadastralLotSize|null
     */
    public function getCadastralLotSize()
    {
        return $this->container['cadastral_lot_size'];
    }

    /**
     * Sets cadastral_lot_size
     *
     * @param \Brixion\Kolibri\Model\CadastralLotSize|null $cadastral_lot_size cadastral_lot_size
     *
     * @return self
     */
    public function setCadastralLotSize($cadastral_lot_size)
    {
        if (is_null($cadastral_lot_size)) {
            throw new \InvalidArgumentException('non-nullable cadastral_lot_size cannot be null');
        }
        $this->container['cadastral_lot_size'] = $cadastral_lot_size;

        return $this;
    }

    /**
     * Gets index_number
     *
     * @return string|null
     */
    public function getIndexNumber()
    {
        return $this->container['index_number'];
    }

    /**
     * Sets index_number
     *
     * @param string|null $index_number index_number
     *
     * @return self
     */
    public function setIndexNumber($index_number)
    {
        if (is_null($index_number)) {
            throw new \InvalidArgumentException('non-nullable index_number cannot be null');
        }
        $this->container['index_number'] = $index_number;

        return $this;
    }

    /**
     * Gets indication_estimated_size
     *
     * @return bool|null
     */
    public function getIndicationEstimatedSize()
    {
        return $this->container['indication_estimated_size'];
    }

    /**
     * Sets indication_estimated_size
     *
     * @param bool|null $indication_estimated_size indication_estimated_size
     *
     * @return self
     */
    public function setIndicationEstimatedSize($indication_estimated_size)
    {
        if (is_null($indication_estimated_size)) {
            throw new \InvalidArgumentException('non-nullable indication_estimated_size cannot be null');
        }
        $this->container['indication_estimated_size'] = $indication_estimated_size;

        return $this;
    }

    /**
     * Gets letter
     *
     * @return string|null
     */
    public function getLetter()
    {
        return $this->container['letter'];
    }

    /**
     * Sets letter
     *
     * @param string|null $letter letter
     *
     * @return self
     */
    public function setLetter($letter)
    {
        if (is_null($letter)) {
            throw new \InvalidArgumentException('non-nullable letter cannot be null');
        }
        $this->container['letter'] = $letter;

        return $this;
    }

    /**
     * Gets municipal_code
     *
     * @return string|null
     */
    public function getMunicipalCode()
    {
        return $this->container['municipal_code'];
    }

    /**
     * Sets municipal_code
     *
     * @param string|null $municipal_code municipal_code
     *
     * @return self
     */
    public function setMunicipalCode($municipal_code)
    {
        if (is_null($municipal_code)) {
            throw new \InvalidArgumentException('non-nullable municipal_code cannot be null');
        }
        $this->container['municipal_code'] = $municipal_code;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param string|null $municipality municipality
     *
     * @return self
     */
    public function setMunicipality($municipality)
    {
        if (is_null($municipality)) {
            throw new \InvalidArgumentException('non-nullable municipality cannot be null');
        }
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets parcel
     *
     * @return string|null
     */
    public function getParcel()
    {
        return $this->container['parcel'];
    }

    /**
     * Sets parcel
     *
     * @param string|null $parcel parcel
     *
     * @return self
     */
    public function setParcel($parcel)
    {
        if (is_null($parcel)) {
            throw new \InvalidArgumentException('non-nullable parcel cannot be null');
        }
        $this->container['parcel'] = $parcel;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number reference_number
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets section
     *
     * @return string|null
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     *
     * @param string|null $section section
     *
     * @return self
     */
    public function setSection($section)
    {
        if (is_null($section)) {
            throw new \InvalidArgumentException('non-nullable section cannot be null');
        }
        $this->container['section'] = $section;

        return $this;
    }

    /**
     * Gets share
     *
     * @return string|null
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param string|null $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        if (is_null($share)) {
            throw new \InvalidArgumentException('non-nullable share cannot be null');
        }
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets surface
     *
     * @return int|null
     */
    public function getSurface()
    {
        return $this->container['surface'];
    }

    /**
     * Sets surface
     *
     * @param int|null $surface surface
     *
     * @return self
     */
    public function setSurface($surface)
    {
        if (is_null($surface)) {
            throw new \InvalidArgumentException('non-nullable surface cannot be null');
        }
        $this->container['surface'] = $surface;

        return $this;
    }

    /**
     * Gets surface_by_division
     *
     * @return int|null
     */
    public function getSurfaceByDivision()
    {
        return $this->container['surface_by_division'];
    }

    /**
     * Sets surface_by_division
     *
     * @param int|null $surface_by_division surface_by_division
     *
     * @return self
     */
    public function setSurfaceByDivision($surface_by_division)
    {
        if (is_null($surface_by_division)) {
            throw new \InvalidArgumentException('non-nullable surface_by_division cannot be null');
        }
        $this->container['surface_by_division'] = $surface_by_division;

        return $this;
    }

    /**
     * Gets x_coordinate
     *
     * @return string|null
     */
    public function getXCoordinate()
    {
        return $this->container['x_coordinate'];
    }

    /**
     * Sets x_coordinate
     *
     * @param string|null $x_coordinate x_coordinate
     *
     * @return self
     */
    public function setXCoordinate($x_coordinate)
    {
        if (is_null($x_coordinate)) {
            throw new \InvalidArgumentException('non-nullable x_coordinate cannot be null');
        }
        $this->container['x_coordinate'] = $x_coordinate;

        return $this;
    }

    /**
     * Gets y_coordinate
     *
     * @return string|null
     */
    public function getYCoordinate()
    {
        return $this->container['y_coordinate'];
    }

    /**
     * Sets y_coordinate
     *
     * @param string|null $y_coordinate y_coordinate
     *
     * @return self
     */
    public function setYCoordinate($y_coordinate)
    {
        if (is_null($y_coordinate)) {
            throw new \InvalidArgumentException('non-nullable y_coordinate cannot be null');
        }
        $this->container['y_coordinate'] = $y_coordinate;

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
