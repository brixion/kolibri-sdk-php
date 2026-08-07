<?php

declare(strict_types=1);

/**
 * BaseMergeRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * BaseMergeRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class BaseMergeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'BaseMergeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'culture' => 'string',
        'company_ids' => 'string[]',
        'office_ids' => 'string[]',
        'employee_ids' => 'string[]',
        'tenant_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'purchaser_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'notary_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'lessor_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'vendor_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'website_visitor_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'house_hunter_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'relation_ids' => '\Brixion\Kolibri\Model\MergeRelation[]',
        'object_assignment_ids' => 'string[]',
        'agenda_item_ids' => 'string[]',
        'acquisition_object_assignment_ids' => 'string[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'culture' => null,
        'company_ids' => 'guid',
        'office_ids' => 'guid',
        'employee_ids' => 'guid',
        'tenant_ids' => null,
        'purchaser_ids' => null,
        'notary_ids' => null,
        'lessor_ids' => null,
        'vendor_ids' => null,
        'website_visitor_ids' => null,
        'house_hunter_ids' => null,
        'relation_ids' => null,
        'object_assignment_ids' => 'guid',
        'agenda_item_ids' => 'guid',
        'acquisition_object_assignment_ids' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'culture' => false,
        'company_ids' => false,
        'office_ids' => false,
        'employee_ids' => false,
        'tenant_ids' => false,
        'purchaser_ids' => false,
        'notary_ids' => false,
        'lessor_ids' => false,
        'vendor_ids' => false,
        'website_visitor_ids' => false,
        'house_hunter_ids' => false,
        'relation_ids' => false,
        'object_assignment_ids' => false,
        'agenda_item_ids' => false,
        'acquisition_object_assignment_ids' => false,
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
        'culture' => 'culture',
        'company_ids' => 'companyIds',
        'office_ids' => 'officeIds',
        'employee_ids' => 'employeeIds',
        'tenant_ids' => 'tenantIds',
        'purchaser_ids' => 'purchaserIds',
        'notary_ids' => 'notaryIds',
        'lessor_ids' => 'lessorIds',
        'vendor_ids' => 'vendorIds',
        'website_visitor_ids' => 'websiteVisitorIds',
        'house_hunter_ids' => 'houseHunterIds',
        'relation_ids' => 'relationIds',
        'object_assignment_ids' => 'objectAssignmentIds',
        'agenda_item_ids' => 'agendaItemIds',
        'acquisition_object_assignment_ids' => 'acquisitionObjectAssignmentIds',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'culture' => 'setCulture',
        'company_ids' => 'setCompanyIds',
        'office_ids' => 'setOfficeIds',
        'employee_ids' => 'setEmployeeIds',
        'tenant_ids' => 'setTenantIds',
        'purchaser_ids' => 'setPurchaserIds',
        'notary_ids' => 'setNotaryIds',
        'lessor_ids' => 'setLessorIds',
        'vendor_ids' => 'setVendorIds',
        'website_visitor_ids' => 'setWebsiteVisitorIds',
        'house_hunter_ids' => 'setHouseHunterIds',
        'relation_ids' => 'setRelationIds',
        'object_assignment_ids' => 'setObjectAssignmentIds',
        'agenda_item_ids' => 'setAgendaItemIds',
        'acquisition_object_assignment_ids' => 'setAcquisitionObjectAssignmentIds',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'culture' => 'getCulture',
        'company_ids' => 'getCompanyIds',
        'office_ids' => 'getOfficeIds',
        'employee_ids' => 'getEmployeeIds',
        'tenant_ids' => 'getTenantIds',
        'purchaser_ids' => 'getPurchaserIds',
        'notary_ids' => 'getNotaryIds',
        'lessor_ids' => 'getLessorIds',
        'vendor_ids' => 'getVendorIds',
        'website_visitor_ids' => 'getWebsiteVisitorIds',
        'house_hunter_ids' => 'getHouseHunterIds',
        'relation_ids' => 'getRelationIds',
        'object_assignment_ids' => 'getObjectAssignmentIds',
        'agenda_item_ids' => 'getAgendaItemIds',
        'acquisition_object_assignment_ids' => 'getAcquisitionObjectAssignmentIds',
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
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('company_ids', $data ?? [], null);
        $this->setIfExists('office_ids', $data ?? [], null);
        $this->setIfExists('employee_ids', $data ?? [], null);
        $this->setIfExists('tenant_ids', $data ?? [], null);
        $this->setIfExists('purchaser_ids', $data ?? [], null);
        $this->setIfExists('notary_ids', $data ?? [], null);
        $this->setIfExists('lessor_ids', $data ?? [], null);
        $this->setIfExists('vendor_ids', $data ?? [], null);
        $this->setIfExists('website_visitor_ids', $data ?? [], null);
        $this->setIfExists('house_hunter_ids', $data ?? [], null);
        $this->setIfExists('relation_ids', $data ?? [], null);
        $this->setIfExists('object_assignment_ids', $data ?? [], null);
        $this->setIfExists('agenda_item_ids', $data ?? [], null);
        $this->setIfExists('acquisition_object_assignment_ids', $data ?? [], null);
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

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
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
     * Gets culture
     *
     * @return string|null
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string|null $culture The culture name in the format languagecode2-country/regioncode2.
     *
     * @return self
     */
    public function setCulture($culture)
    {
        if (is_null($culture)) {
            throw new \InvalidArgumentException('non-nullable culture cannot be null');
        }
        if ((mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling BaseMergeRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling BaseMergeRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets company_ids
     *
     * @return string[]|null
     */
    public function getCompanyIds()
    {
        return $this->container['company_ids'];
    }

    /**
     * Sets company_ids
     *
     * @param string[]|null $company_ids company_ids
     *
     * @return self
     */
    public function setCompanyIds($company_ids)
    {
        if (is_null($company_ids)) {
            throw new \InvalidArgumentException('non-nullable company_ids cannot be null');
        }
        $this->container['company_ids'] = $company_ids;

        return $this;
    }

    /**
     * Gets office_ids
     *
     * @return string[]|null
     */
    public function getOfficeIds()
    {
        return $this->container['office_ids'];
    }

    /**
     * Sets office_ids
     *
     * @param string[]|null $office_ids office_ids
     *
     * @return self
     */
    public function setOfficeIds($office_ids)
    {
        if (is_null($office_ids)) {
            throw new \InvalidArgumentException('non-nullable office_ids cannot be null');
        }
        $this->container['office_ids'] = $office_ids;

        return $this;
    }

    /**
     * Gets employee_ids
     *
     * @return string[]|null
     */
    public function getEmployeeIds()
    {
        return $this->container['employee_ids'];
    }

    /**
     * Sets employee_ids
     *
     * @param string[]|null $employee_ids employee_ids
     *
     * @return self
     */
    public function setEmployeeIds($employee_ids)
    {
        if (is_null($employee_ids)) {
            throw new \InvalidArgumentException('non-nullable employee_ids cannot be null');
        }
        $this->container['employee_ids'] = $employee_ids;

        return $this;
    }

    /**
     * Gets tenant_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getTenantIds()
    {
        return $this->container['tenant_ids'];
    }

    /**
     * Sets tenant_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $tenant_ids tenant_ids
     *
     * @return self
     */
    public function setTenantIds($tenant_ids)
    {
        if (is_null($tenant_ids)) {
            throw new \InvalidArgumentException('non-nullable tenant_ids cannot be null');
        }
        $this->container['tenant_ids'] = $tenant_ids;

        return $this;
    }

    /**
     * Gets purchaser_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getPurchaserIds()
    {
        return $this->container['purchaser_ids'];
    }

    /**
     * Sets purchaser_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $purchaser_ids purchaser_ids
     *
     * @return self
     */
    public function setPurchaserIds($purchaser_ids)
    {
        if (is_null($purchaser_ids)) {
            throw new \InvalidArgumentException('non-nullable purchaser_ids cannot be null');
        }
        $this->container['purchaser_ids'] = $purchaser_ids;

        return $this;
    }

    /**
     * Gets notary_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getNotaryIds()
    {
        return $this->container['notary_ids'];
    }

    /**
     * Sets notary_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $notary_ids notary_ids
     *
     * @return self
     */
    public function setNotaryIds($notary_ids)
    {
        if (is_null($notary_ids)) {
            throw new \InvalidArgumentException('non-nullable notary_ids cannot be null');
        }
        $this->container['notary_ids'] = $notary_ids;

        return $this;
    }

    /**
     * Gets lessor_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getLessorIds()
    {
        return $this->container['lessor_ids'];
    }

    /**
     * Sets lessor_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $lessor_ids lessor_ids
     *
     * @return self
     */
    public function setLessorIds($lessor_ids)
    {
        if (is_null($lessor_ids)) {
            throw new \InvalidArgumentException('non-nullable lessor_ids cannot be null');
        }
        $this->container['lessor_ids'] = $lessor_ids;

        return $this;
    }

    /**
     * Gets vendor_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getVendorIds()
    {
        return $this->container['vendor_ids'];
    }

    /**
     * Sets vendor_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $vendor_ids vendor_ids
     *
     * @return self
     */
    public function setVendorIds($vendor_ids)
    {
        if (is_null($vendor_ids)) {
            throw new \InvalidArgumentException('non-nullable vendor_ids cannot be null');
        }
        $this->container['vendor_ids'] = $vendor_ids;

        return $this;
    }

    /**
     * Gets website_visitor_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getWebsiteVisitorIds()
    {
        return $this->container['website_visitor_ids'];
    }

    /**
     * Sets website_visitor_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $website_visitor_ids website_visitor_ids
     *
     * @return self
     */
    public function setWebsiteVisitorIds($website_visitor_ids)
    {
        if (is_null($website_visitor_ids)) {
            throw new \InvalidArgumentException('non-nullable website_visitor_ids cannot be null');
        }
        $this->container['website_visitor_ids'] = $website_visitor_ids;

        return $this;
    }

    /**
     * Gets house_hunter_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getHouseHunterIds()
    {
        return $this->container['house_hunter_ids'];
    }

    /**
     * Sets house_hunter_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $house_hunter_ids house_hunter_ids
     *
     * @return self
     */
    public function setHouseHunterIds($house_hunter_ids)
    {
        if (is_null($house_hunter_ids)) {
            throw new \InvalidArgumentException('non-nullable house_hunter_ids cannot be null');
        }
        $this->container['house_hunter_ids'] = $house_hunter_ids;

        return $this;
    }

    /**
     * Gets relation_ids
     *
     * @return \Brixion\Kolibri\Model\MergeRelation[]|null
     */
    public function getRelationIds()
    {
        return $this->container['relation_ids'];
    }

    /**
     * Sets relation_ids
     *
     * @param \Brixion\Kolibri\Model\MergeRelation[]|null $relation_ids relation_ids
     *
     * @return self
     */
    public function setRelationIds($relation_ids)
    {
        if (is_null($relation_ids)) {
            throw new \InvalidArgumentException('non-nullable relation_ids cannot be null');
        }
        $this->container['relation_ids'] = $relation_ids;

        return $this;
    }

    /**
     * Gets object_assignment_ids
     *
     * @return string[]|null
     */
    public function getObjectAssignmentIds()
    {
        return $this->container['object_assignment_ids'];
    }

    /**
     * Sets object_assignment_ids
     *
     * @param string[]|null $object_assignment_ids object_assignment_ids
     *
     * @return self
     */
    public function setObjectAssignmentIds($object_assignment_ids)
    {
        if (is_null($object_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable object_assignment_ids cannot be null');
        }
        $this->container['object_assignment_ids'] = $object_assignment_ids;

        return $this;
    }

    /**
     * Gets agenda_item_ids
     *
     * @return string[]|null
     */
    public function getAgendaItemIds()
    {
        return $this->container['agenda_item_ids'];
    }

    /**
     * Sets agenda_item_ids
     *
     * @param string[]|null $agenda_item_ids agenda_item_ids
     *
     * @return self
     */
    public function setAgendaItemIds($agenda_item_ids)
    {
        if (is_null($agenda_item_ids)) {
            throw new \InvalidArgumentException('non-nullable agenda_item_ids cannot be null');
        }
        $this->container['agenda_item_ids'] = $agenda_item_ids;

        return $this;
    }

    /**
     * Gets acquisition_object_assignment_ids
     *
     * @return string[]|null
     */
    public function getAcquisitionObjectAssignmentIds()
    {
        return $this->container['acquisition_object_assignment_ids'];
    }

    /**
     * Sets acquisition_object_assignment_ids
     *
     * @param string[]|null $acquisition_object_assignment_ids acquisition_object_assignment_ids
     *
     * @return self
     */
    public function setAcquisitionObjectAssignmentIds($acquisition_object_assignment_ids)
    {
        if (is_null($acquisition_object_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable acquisition_object_assignment_ids cannot be null');
        }
        $this->container['acquisition_object_assignment_ids'] = $acquisition_object_assignment_ids;

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
