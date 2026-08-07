<?php

declare(strict_types=1);

/**
 * DocumentTemplate - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentTemplate.
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'DocumentTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'document_template_type' => '\Brixion\Kolibri\Model\DocumentTemplateType',
        'form' => '\Brixion\Kolibri\Model\Form',
        'name' => 'string',
        'needs_applicants' => 'bool',
        'needs_cadastre' => 'bool',
        'needs_list_of_goods' => 'bool',
        'needs_notary' => 'bool',
        'needs_object_assignment' => 'bool',
        'requires_object_assignment' => 'bool',
        'needs_property_managers' => 'bool',
        'needs_signatures' => 'bool',
        'needs_vendors' => 'bool',
        'supported_real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'support_for_rent' => 'bool',
        'support_for_sale' => 'bool',
        'applicant_type' => '\Brixion\Kolibri\Model\ApplicantType',
        'vendor_type' => '\Brixion\Kolibri\Model\VendorType',
        'version_timestamp' => '\DateTime',
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
        'document_template_type' => null,
        'form' => null,
        'name' => null,
        'needs_applicants' => null,
        'needs_cadastre' => null,
        'needs_list_of_goods' => null,
        'needs_notary' => null,
        'needs_object_assignment' => null,
        'requires_object_assignment' => null,
        'needs_property_managers' => null,
        'needs_signatures' => null,
        'needs_vendors' => null,
        'supported_real_estate_groups' => null,
        'support_for_rent' => null,
        'support_for_sale' => null,
        'applicant_type' => null,
        'vendor_type' => null,
        'version_timestamp' => 'date-time',
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
        'document_template_type' => false,
        'form' => false,
        'name' => false,
        'needs_applicants' => false,
        'needs_cadastre' => false,
        'needs_list_of_goods' => false,
        'needs_notary' => false,
        'needs_object_assignment' => false,
        'requires_object_assignment' => false,
        'needs_property_managers' => false,
        'needs_signatures' => false,
        'needs_vendors' => false,
        'supported_real_estate_groups' => false,
        'support_for_rent' => false,
        'support_for_sale' => false,
        'applicant_type' => false,
        'vendor_type' => false,
        'version_timestamp' => false,
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
        'document_template_type' => 'documentTemplateType',
        'form' => 'form',
        'name' => 'name',
        'needs_applicants' => 'needsApplicants',
        'needs_cadastre' => 'needsCadastre',
        'needs_list_of_goods' => 'needsListOfGoods',
        'needs_notary' => 'needsNotary',
        'needs_object_assignment' => 'needsObjectAssignment',
        'requires_object_assignment' => 'requiresObjectAssignment',
        'needs_property_managers' => 'needsPropertyManagers',
        'needs_signatures' => 'needsSignatures',
        'needs_vendors' => 'needsVendors',
        'supported_real_estate_groups' => 'supportedRealEstateGroups',
        'support_for_rent' => 'supportForRent',
        'support_for_sale' => 'supportForSale',
        'applicant_type' => 'applicantType',
        'vendor_type' => 'vendorType',
        'version_timestamp' => 'versionTimestamp',
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
        'document_template_type' => 'setDocumentTemplateType',
        'form' => 'setForm',
        'name' => 'setName',
        'needs_applicants' => 'setNeedsApplicants',
        'needs_cadastre' => 'setNeedsCadastre',
        'needs_list_of_goods' => 'setNeedsListOfGoods',
        'needs_notary' => 'setNeedsNotary',
        'needs_object_assignment' => 'setNeedsObjectAssignment',
        'requires_object_assignment' => 'setRequiresObjectAssignment',
        'needs_property_managers' => 'setNeedsPropertyManagers',
        'needs_signatures' => 'setNeedsSignatures',
        'needs_vendors' => 'setNeedsVendors',
        'supported_real_estate_groups' => 'setSupportedRealEstateGroups',
        'support_for_rent' => 'setSupportForRent',
        'support_for_sale' => 'setSupportForSale',
        'applicant_type' => 'setApplicantType',
        'vendor_type' => 'setVendorType',
        'version_timestamp' => 'setVersionTimestamp',
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
        'document_template_type' => 'getDocumentTemplateType',
        'form' => 'getForm',
        'name' => 'getName',
        'needs_applicants' => 'getNeedsApplicants',
        'needs_cadastre' => 'getNeedsCadastre',
        'needs_list_of_goods' => 'getNeedsListOfGoods',
        'needs_notary' => 'getNeedsNotary',
        'needs_object_assignment' => 'getNeedsObjectAssignment',
        'requires_object_assignment' => 'getRequiresObjectAssignment',
        'needs_property_managers' => 'getNeedsPropertyManagers',
        'needs_signatures' => 'getNeedsSignatures',
        'needs_vendors' => 'getNeedsVendors',
        'supported_real_estate_groups' => 'getSupportedRealEstateGroups',
        'support_for_rent' => 'getSupportForRent',
        'support_for_sale' => 'getSupportForSale',
        'applicant_type' => 'getApplicantType',
        'vendor_type' => 'getVendorType',
        'version_timestamp' => 'getVersionTimestamp',
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
        $this->setIfExists('document_template_type', $data ?? [], null);
        $this->setIfExists('form', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('needs_applicants', $data ?? [], null);
        $this->setIfExists('needs_cadastre', $data ?? [], null);
        $this->setIfExists('needs_list_of_goods', $data ?? [], null);
        $this->setIfExists('needs_notary', $data ?? [], null);
        $this->setIfExists('needs_object_assignment', $data ?? [], null);
        $this->setIfExists('requires_object_assignment', $data ?? [], null);
        $this->setIfExists('needs_property_managers', $data ?? [], null);
        $this->setIfExists('needs_signatures', $data ?? [], null);
        $this->setIfExists('needs_vendors', $data ?? [], null);
        $this->setIfExists('supported_real_estate_groups', $data ?? [], null);
        $this->setIfExists('support_for_rent', $data ?? [], null);
        $this->setIfExists('support_for_sale', $data ?? [], null);
        $this->setIfExists('applicant_type', $data ?? [], null);
        $this->setIfExists('vendor_type', $data ?? [], null);
        $this->setIfExists('version_timestamp', $data ?? [], null);
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

        if ($this->container['document_template_type'] === null) {
            $invalidProperties[] = "'document_template_type' can't be null";
        }
        if ($this->container['needs_applicants'] === null) {
            $invalidProperties[] = "'needs_applicants' can't be null";
        }
        if ($this->container['needs_cadastre'] === null) {
            $invalidProperties[] = "'needs_cadastre' can't be null";
        }
        if ($this->container['needs_list_of_goods'] === null) {
            $invalidProperties[] = "'needs_list_of_goods' can't be null";
        }
        if ($this->container['needs_notary'] === null) {
            $invalidProperties[] = "'needs_notary' can't be null";
        }
        if ($this->container['needs_object_assignment'] === null) {
            $invalidProperties[] = "'needs_object_assignment' can't be null";
        }
        if ($this->container['requires_object_assignment'] === null) {
            $invalidProperties[] = "'requires_object_assignment' can't be null";
        }
        if ($this->container['needs_property_managers'] === null) {
            $invalidProperties[] = "'needs_property_managers' can't be null";
        }
        if ($this->container['needs_signatures'] === null) {
            $invalidProperties[] = "'needs_signatures' can't be null";
        }
        if ($this->container['needs_vendors'] === null) {
            $invalidProperties[] = "'needs_vendors' can't be null";
        }
        if ($this->container['support_for_rent'] === null) {
            $invalidProperties[] = "'support_for_rent' can't be null";
        }
        if ($this->container['support_for_sale'] === null) {
            $invalidProperties[] = "'support_for_sale' can't be null";
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
     * Gets document_template_type
     *
     * @return \Brixion\Kolibri\Model\DocumentTemplateType
     */
    public function getDocumentTemplateType()
    {
        return $this->container['document_template_type'];
    }

    /**
     * Sets document_template_type
     *
     * @param \Brixion\Kolibri\Model\DocumentTemplateType $document_template_type document_template_type
     *
     * @return self
     */
    public function setDocumentTemplateType($document_template_type)
    {
        if (is_null($document_template_type)) {
            throw new \InvalidArgumentException('non-nullable document_template_type cannot be null');
        }
        $this->container['document_template_type'] = $document_template_type;

        return $this;
    }

    /**
     * Gets form
     *
     * @return \Brixion\Kolibri\Model\Form|null
     */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
     * Sets form
     *
     * @param \Brixion\Kolibri\Model\Form|null $form form
     *
     * @return self
     */
    public function setForm($form)
    {
        if (is_null($form)) {
            throw new \InvalidArgumentException('non-nullable form cannot be null');
        }
        $this->container['form'] = $form;

        return $this;
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
     * Gets needs_applicants
     *
     * @return bool
     */
    public function getNeedsApplicants()
    {
        return $this->container['needs_applicants'];
    }

    /**
     * Sets needs_applicants
     *
     * @param bool $needs_applicants needs_applicants
     *
     * @return self
     */
    public function setNeedsApplicants($needs_applicants)
    {
        if (is_null($needs_applicants)) {
            throw new \InvalidArgumentException('non-nullable needs_applicants cannot be null');
        }
        $this->container['needs_applicants'] = $needs_applicants;

        return $this;
    }

    /**
     * Gets needs_cadastre
     *
     * @return bool
     */
    public function getNeedsCadastre()
    {
        return $this->container['needs_cadastre'];
    }

    /**
     * Sets needs_cadastre
     *
     * @param bool $needs_cadastre needs_cadastre
     *
     * @return self
     */
    public function setNeedsCadastre($needs_cadastre)
    {
        if (is_null($needs_cadastre)) {
            throw new \InvalidArgumentException('non-nullable needs_cadastre cannot be null');
        }
        $this->container['needs_cadastre'] = $needs_cadastre;

        return $this;
    }

    /**
     * Gets needs_list_of_goods
     *
     * @return bool
     */
    public function getNeedsListOfGoods()
    {
        return $this->container['needs_list_of_goods'];
    }

    /**
     * Sets needs_list_of_goods
     *
     * @param bool $needs_list_of_goods needs_list_of_goods
     *
     * @return self
     */
    public function setNeedsListOfGoods($needs_list_of_goods)
    {
        if (is_null($needs_list_of_goods)) {
            throw new \InvalidArgumentException('non-nullable needs_list_of_goods cannot be null');
        }
        $this->container['needs_list_of_goods'] = $needs_list_of_goods;

        return $this;
    }

    /**
     * Gets needs_notary
     *
     * @return bool
     */
    public function getNeedsNotary()
    {
        return $this->container['needs_notary'];
    }

    /**
     * Sets needs_notary
     *
     * @param bool $needs_notary needs_notary
     *
     * @return self
     */
    public function setNeedsNotary($needs_notary)
    {
        if (is_null($needs_notary)) {
            throw new \InvalidArgumentException('non-nullable needs_notary cannot be null');
        }
        $this->container['needs_notary'] = $needs_notary;

        return $this;
    }

    /**
     * Gets needs_object_assignment
     *
     * @return bool
     */
    public function getNeedsObjectAssignment()
    {
        return $this->container['needs_object_assignment'];
    }

    /**
     * Sets needs_object_assignment
     *
     * @param bool $needs_object_assignment needs_object_assignment
     *
     * @return self
     */
    public function setNeedsObjectAssignment($needs_object_assignment)
    {
        if (is_null($needs_object_assignment)) {
            throw new \InvalidArgumentException('non-nullable needs_object_assignment cannot be null');
        }
        $this->container['needs_object_assignment'] = $needs_object_assignment;

        return $this;
    }

    /**
     * Gets requires_object_assignment
     *
     * @return bool
     */
    public function getRequiresObjectAssignment()
    {
        return $this->container['requires_object_assignment'];
    }

    /**
     * Sets requires_object_assignment
     *
     * @param bool $requires_object_assignment requires_object_assignment
     *
     * @return self
     */
    public function setRequiresObjectAssignment($requires_object_assignment)
    {
        if (is_null($requires_object_assignment)) {
            throw new \InvalidArgumentException('non-nullable requires_object_assignment cannot be null');
        }
        $this->container['requires_object_assignment'] = $requires_object_assignment;

        return $this;
    }

    /**
     * Gets needs_property_managers
     *
     * @return bool
     */
    public function getNeedsPropertyManagers()
    {
        return $this->container['needs_property_managers'];
    }

    /**
     * Sets needs_property_managers
     *
     * @param bool $needs_property_managers needs_property_managers
     *
     * @return self
     */
    public function setNeedsPropertyManagers($needs_property_managers)
    {
        if (is_null($needs_property_managers)) {
            throw new \InvalidArgumentException('non-nullable needs_property_managers cannot be null');
        }
        $this->container['needs_property_managers'] = $needs_property_managers;

        return $this;
    }

    /**
     * Gets needs_signatures
     *
     * @return bool
     */
    public function getNeedsSignatures()
    {
        return $this->container['needs_signatures'];
    }

    /**
     * Sets needs_signatures
     *
     * @param bool $needs_signatures needs_signatures
     *
     * @return self
     */
    public function setNeedsSignatures($needs_signatures)
    {
        if (is_null($needs_signatures)) {
            throw new \InvalidArgumentException('non-nullable needs_signatures cannot be null');
        }
        $this->container['needs_signatures'] = $needs_signatures;

        return $this;
    }

    /**
     * Gets needs_vendors
     *
     * @return bool
     */
    public function getNeedsVendors()
    {
        return $this->container['needs_vendors'];
    }

    /**
     * Sets needs_vendors
     *
     * @param bool $needs_vendors needs_vendors
     *
     * @return self
     */
    public function setNeedsVendors($needs_vendors)
    {
        if (is_null($needs_vendors)) {
            throw new \InvalidArgumentException('non-nullable needs_vendors cannot be null');
        }
        $this->container['needs_vendors'] = $needs_vendors;

        return $this;
    }

    /**
     * Gets supported_real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup[]|null
     */
    public function getSupportedRealEstateGroups()
    {
        return $this->container['supported_real_estate_groups'];
    }

    /**
     * Sets supported_real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup[]|null $supported_real_estate_groups supported_real_estate_groups
     *
     * @return self
     */
    public function setSupportedRealEstateGroups($supported_real_estate_groups)
    {
        if (is_null($supported_real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable supported_real_estate_groups cannot be null');
        }
        $this->container['supported_real_estate_groups'] = $supported_real_estate_groups;

        return $this;
    }

    /**
     * Gets support_for_rent
     *
     * @return bool
     */
    public function getSupportForRent()
    {
        return $this->container['support_for_rent'];
    }

    /**
     * Sets support_for_rent
     *
     * @param bool $support_for_rent support_for_rent
     *
     * @return self
     */
    public function setSupportForRent($support_for_rent)
    {
        if (is_null($support_for_rent)) {
            throw new \InvalidArgumentException('non-nullable support_for_rent cannot be null');
        }
        $this->container['support_for_rent'] = $support_for_rent;

        return $this;
    }

    /**
     * Gets support_for_sale
     *
     * @return bool
     */
    public function getSupportForSale()
    {
        return $this->container['support_for_sale'];
    }

    /**
     * Sets support_for_sale
     *
     * @param bool $support_for_sale support_for_sale
     *
     * @return self
     */
    public function setSupportForSale($support_for_sale)
    {
        if (is_null($support_for_sale)) {
            throw new \InvalidArgumentException('non-nullable support_for_sale cannot be null');
        }
        $this->container['support_for_sale'] = $support_for_sale;

        return $this;
    }

    /**
     * Gets applicant_type
     *
     * @return \Brixion\Kolibri\Model\ApplicantType|null
     */
    public function getApplicantType()
    {
        return $this->container['applicant_type'];
    }

    /**
     * Sets applicant_type
     *
     * @param \Brixion\Kolibri\Model\ApplicantType|null $applicant_type applicant_type
     *
     * @return self
     */
    public function setApplicantType($applicant_type)
    {
        if (is_null($applicant_type)) {
            throw new \InvalidArgumentException('non-nullable applicant_type cannot be null');
        }
        $this->container['applicant_type'] = $applicant_type;

        return $this;
    }

    /**
     * Gets vendor_type
     *
     * @return \Brixion\Kolibri\Model\VendorType|null
     */
    public function getVendorType()
    {
        return $this->container['vendor_type'];
    }

    /**
     * Sets vendor_type
     *
     * @param \Brixion\Kolibri\Model\VendorType|null $vendor_type vendor_type
     *
     * @return self
     */
    public function setVendorType($vendor_type)
    {
        if (is_null($vendor_type)) {
            throw new \InvalidArgumentException('non-nullable vendor_type cannot be null');
        }
        $this->container['vendor_type'] = $vendor_type;

        return $this;
    }

    /**
     * Gets version_timestamp
     *
     * @return \DateTime|null
     */
    public function getVersionTimestamp()
    {
        return $this->container['version_timestamp'];
    }

    /**
     * Sets version_timestamp
     *
     * @param \DateTime|null $version_timestamp version_timestamp
     *
     * @return self
     */
    public function setVersionTimestamp($version_timestamp)
    {
        if (is_null($version_timestamp)) {
            throw new \InvalidArgumentException('non-nullable version_timestamp cannot be null');
        }
        $this->container['version_timestamp'] = $version_timestamp;

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
            throw new \InvalidArgumentException('invalid length for $id when calling DocumentTemplate., must be bigger than or equal to 1.');
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
