<?php

declare(strict_types=1);

/**
 * AcquisitionAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AcquisitionAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class AcquisitionAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AcquisitionAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'commission_gross' => 'float',
        'commission_percent' => 'float',
        'commission_gross_rent' => 'float',
        'commission_percent_rent' => 'float',
        'description' => 'string',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'is_cancelled' => 'bool',
        'linked_acquisition_object_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_appraisers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_clients' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_financial_advisors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'linked_inspectors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_notaries' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_occupants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_offering_agencies' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_office' => '\Brixion\Kolibri\Model\LinkedOffice',
        'linked_people_who_opted' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_photographers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_potentials' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_project_developers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_property_managers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_purchasing_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_search_assignment' => '\Brixion\Kolibri\Model\LinkedSearchAssignment[]',
        'linked_stylists' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_vendors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_tenant_representation_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_rental_agents' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_sales_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_contact_persons' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'mandate_date_time' => '\DateTime',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'title' => 'string',
        'public_reference' => 'string',
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
        'assignment_phase' => null,
        'commission_gross' => 'decimal',
        'commission_percent' => 'decimal',
        'commission_gross_rent' => 'decimal',
        'commission_percent_rent' => 'decimal',
        'description' => null,
        'for_rent' => null,
        'for_sale' => null,
        'is_cancelled' => null,
        'linked_acquisition_object_assignments' => null,
        'linked_applicants' => null,
        'linked_appraisers' => null,
        'linked_clients' => null,
        'linked_employee' => null,
        'linked_financial_advisors' => null,
        'linked_folder_tree' => null,
        'linked_inspectors' => null,
        'linked_notaries' => null,
        'linked_occupants' => null,
        'linked_offering_agencies' => null,
        'linked_office' => null,
        'linked_people_who_opted' => null,
        'linked_photographers' => null,
        'linked_potentials' => null,
        'linked_project_developers' => null,
        'linked_property_managers' => null,
        'linked_purchasing_brokers' => null,
        'linked_search_assignment' => null,
        'linked_stylists' => null,
        'linked_vendors' => null,
        'linked_tenant_representation_brokers' => null,
        'linked_rental_agents' => null,
        'linked_sales_brokers' => null,
        'linked_contact_persons' => null,
        'mandate_date_time' => 'date-time',
        'real_estate_group' => null,
        'title' => null,
        'public_reference' => null,
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
        'assignment_phase' => false,
        'commission_gross' => false,
        'commission_percent' => false,
        'commission_gross_rent' => false,
        'commission_percent_rent' => false,
        'description' => false,
        'for_rent' => false,
        'for_sale' => false,
        'is_cancelled' => false,
        'linked_acquisition_object_assignments' => false,
        'linked_applicants' => false,
        'linked_appraisers' => false,
        'linked_clients' => false,
        'linked_employee' => false,
        'linked_financial_advisors' => false,
        'linked_folder_tree' => false,
        'linked_inspectors' => false,
        'linked_notaries' => false,
        'linked_occupants' => false,
        'linked_offering_agencies' => false,
        'linked_office' => false,
        'linked_people_who_opted' => false,
        'linked_photographers' => false,
        'linked_potentials' => false,
        'linked_project_developers' => false,
        'linked_property_managers' => false,
        'linked_purchasing_brokers' => false,
        'linked_search_assignment' => false,
        'linked_stylists' => false,
        'linked_vendors' => false,
        'linked_tenant_representation_brokers' => false,
        'linked_rental_agents' => false,
        'linked_sales_brokers' => false,
        'linked_contact_persons' => false,
        'mandate_date_time' => false,
        'real_estate_group' => false,
        'title' => false,
        'public_reference' => false,
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
        'assignment_phase' => 'assignmentPhase',
        'commission_gross' => 'commissionGross',
        'commission_percent' => 'commissionPercent',
        'commission_gross_rent' => 'commissionGrossRent',
        'commission_percent_rent' => 'commissionPercentRent',
        'description' => 'description',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'is_cancelled' => 'isCancelled',
        'linked_acquisition_object_assignments' => 'linkedAcquisitionObjectAssignments',
        'linked_applicants' => 'linkedApplicants',
        'linked_appraisers' => 'linkedAppraisers',
        'linked_clients' => 'linkedClients',
        'linked_employee' => 'linkedEmployee',
        'linked_financial_advisors' => 'linkedFinancialAdvisors',
        'linked_folder_tree' => 'linkedFolderTree',
        'linked_inspectors' => 'linkedInspectors',
        'linked_notaries' => 'linkedNotaries',
        'linked_occupants' => 'linkedOccupants',
        'linked_offering_agencies' => 'linkedOfferingAgencies',
        'linked_office' => 'linkedOffice',
        'linked_people_who_opted' => 'linkedPeopleWhoOpted',
        'linked_photographers' => 'linkedPhotographers',
        'linked_potentials' => 'linkedPotentials',
        'linked_project_developers' => 'linkedProjectDevelopers',
        'linked_property_managers' => 'linkedPropertyManagers',
        'linked_purchasing_brokers' => 'linkedPurchasingBrokers',
        'linked_search_assignment' => 'linkedSearchAssignment',
        'linked_stylists' => 'linkedStylists',
        'linked_vendors' => 'linkedVendors',
        'linked_tenant_representation_brokers' => 'linkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'linkedRentalAgents',
        'linked_sales_brokers' => 'linkedSalesBrokers',
        'linked_contact_persons' => 'linkedContactPersons',
        'mandate_date_time' => 'mandateDateTime',
        'real_estate_group' => 'realEstateGroup',
        'title' => 'title',
        'public_reference' => 'publicReference',
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
        'assignment_phase' => 'setAssignmentPhase',
        'commission_gross' => 'setCommissionGross',
        'commission_percent' => 'setCommissionPercent',
        'commission_gross_rent' => 'setCommissionGrossRent',
        'commission_percent_rent' => 'setCommissionPercentRent',
        'description' => 'setDescription',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'is_cancelled' => 'setIsCancelled',
        'linked_acquisition_object_assignments' => 'setLinkedAcquisitionObjectAssignments',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_appraisers' => 'setLinkedAppraisers',
        'linked_clients' => 'setLinkedClients',
        'linked_employee' => 'setLinkedEmployee',
        'linked_financial_advisors' => 'setLinkedFinancialAdvisors',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'linked_inspectors' => 'setLinkedInspectors',
        'linked_notaries' => 'setLinkedNotaries',
        'linked_occupants' => 'setLinkedOccupants',
        'linked_offering_agencies' => 'setLinkedOfferingAgencies',
        'linked_office' => 'setLinkedOffice',
        'linked_people_who_opted' => 'setLinkedPeopleWhoOpted',
        'linked_photographers' => 'setLinkedPhotographers',
        'linked_potentials' => 'setLinkedPotentials',
        'linked_project_developers' => 'setLinkedProjectDevelopers',
        'linked_property_managers' => 'setLinkedPropertyManagers',
        'linked_purchasing_brokers' => 'setLinkedPurchasingBrokers',
        'linked_search_assignment' => 'setLinkedSearchAssignment',
        'linked_stylists' => 'setLinkedStylists',
        'linked_vendors' => 'setLinkedVendors',
        'linked_tenant_representation_brokers' => 'setLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'setLinkedRentalAgents',
        'linked_sales_brokers' => 'setLinkedSalesBrokers',
        'linked_contact_persons' => 'setLinkedContactPersons',
        'mandate_date_time' => 'setMandateDateTime',
        'real_estate_group' => 'setRealEstateGroup',
        'title' => 'setTitle',
        'public_reference' => 'setPublicReference',
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
        'assignment_phase' => 'getAssignmentPhase',
        'commission_gross' => 'getCommissionGross',
        'commission_percent' => 'getCommissionPercent',
        'commission_gross_rent' => 'getCommissionGrossRent',
        'commission_percent_rent' => 'getCommissionPercentRent',
        'description' => 'getDescription',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'is_cancelled' => 'getIsCancelled',
        'linked_acquisition_object_assignments' => 'getLinkedAcquisitionObjectAssignments',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_appraisers' => 'getLinkedAppraisers',
        'linked_clients' => 'getLinkedClients',
        'linked_employee' => 'getLinkedEmployee',
        'linked_financial_advisors' => 'getLinkedFinancialAdvisors',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'linked_inspectors' => 'getLinkedInspectors',
        'linked_notaries' => 'getLinkedNotaries',
        'linked_occupants' => 'getLinkedOccupants',
        'linked_offering_agencies' => 'getLinkedOfferingAgencies',
        'linked_office' => 'getLinkedOffice',
        'linked_people_who_opted' => 'getLinkedPeopleWhoOpted',
        'linked_photographers' => 'getLinkedPhotographers',
        'linked_potentials' => 'getLinkedPotentials',
        'linked_project_developers' => 'getLinkedProjectDevelopers',
        'linked_property_managers' => 'getLinkedPropertyManagers',
        'linked_purchasing_brokers' => 'getLinkedPurchasingBrokers',
        'linked_search_assignment' => 'getLinkedSearchAssignment',
        'linked_stylists' => 'getLinkedStylists',
        'linked_vendors' => 'getLinkedVendors',
        'linked_tenant_representation_brokers' => 'getLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'getLinkedRentalAgents',
        'linked_sales_brokers' => 'getLinkedSalesBrokers',
        'linked_contact_persons' => 'getLinkedContactPersons',
        'mandate_date_time' => 'getMandateDateTime',
        'real_estate_group' => 'getRealEstateGroup',
        'title' => 'getTitle',
        'public_reference' => 'getPublicReference',
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
        $this->setIfExists('assignment_phase', $data ?? [], null);
        $this->setIfExists('commission_gross', $data ?? [], null);
        $this->setIfExists('commission_percent', $data ?? [], null);
        $this->setIfExists('commission_gross_rent', $data ?? [], null);
        $this->setIfExists('commission_percent_rent', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('is_cancelled', $data ?? [], null);
        $this->setIfExists('linked_acquisition_object_assignments', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('linked_appraisers', $data ?? [], null);
        $this->setIfExists('linked_clients', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
        $this->setIfExists('linked_financial_advisors', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('linked_inspectors', $data ?? [], null);
        $this->setIfExists('linked_notaries', $data ?? [], null);
        $this->setIfExists('linked_occupants', $data ?? [], null);
        $this->setIfExists('linked_offering_agencies', $data ?? [], null);
        $this->setIfExists('linked_office', $data ?? [], null);
        $this->setIfExists('linked_people_who_opted', $data ?? [], null);
        $this->setIfExists('linked_photographers', $data ?? [], null);
        $this->setIfExists('linked_potentials', $data ?? [], null);
        $this->setIfExists('linked_project_developers', $data ?? [], null);
        $this->setIfExists('linked_property_managers', $data ?? [], null);
        $this->setIfExists('linked_purchasing_brokers', $data ?? [], null);
        $this->setIfExists('linked_search_assignment', $data ?? [], null);
        $this->setIfExists('linked_stylists', $data ?? [], null);
        $this->setIfExists('linked_vendors', $data ?? [], null);
        $this->setIfExists('linked_tenant_representation_brokers', $data ?? [], null);
        $this->setIfExists('linked_rental_agents', $data ?? [], null);
        $this->setIfExists('linked_sales_brokers', $data ?? [], null);
        $this->setIfExists('linked_contact_persons', $data ?? [], null);
        $this->setIfExists('mandate_date_time', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
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

        if ($this->container['linked_employee'] === null) {
            $invalidProperties[] = "'linked_employee' can't be null";
        }
        if ($this->container['linked_office'] === null) {
            $invalidProperties[] = "'linked_office' can't be null";
        }
        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1000)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1000.";
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
     * Gets assignment_phase
     *
     * @return \Brixion\Kolibri\Model\AssignmentPhase|null
     */
    public function getAssignmentPhase()
    {
        return $this->container['assignment_phase'];
    }

    /**
     * Sets assignment_phase
     *
     * @param \Brixion\Kolibri\Model\AssignmentPhase|null $assignment_phase assignment_phase
     *
     * @return self
     */
    public function setAssignmentPhase($assignment_phase)
    {
        if (is_null($assignment_phase)) {
            throw new \InvalidArgumentException('non-nullable assignment_phase cannot be null');
        }
        $this->container['assignment_phase'] = $assignment_phase;

        return $this;
    }

    /**
     * Gets commission_gross
     *
     * @return float|null
     */
    public function getCommissionGross()
    {
        return $this->container['commission_gross'];
    }

    /**
     * Sets commission_gross
     *
     * @param float|null $commission_gross commission_gross
     *
     * @return self
     */
    public function setCommissionGross($commission_gross)
    {
        if (is_null($commission_gross)) {
            throw new \InvalidArgumentException('non-nullable commission_gross cannot be null');
        }
        $this->container['commission_gross'] = $commission_gross;

        return $this;
    }

    /**
     * Gets commission_percent
     *
     * @return float|null
     */
    public function getCommissionPercent()
    {
        return $this->container['commission_percent'];
    }

    /**
     * Sets commission_percent
     *
     * @param float|null $commission_percent commission_percent
     *
     * @return self
     */
    public function setCommissionPercent($commission_percent)
    {
        if (is_null($commission_percent)) {
            throw new \InvalidArgumentException('non-nullable commission_percent cannot be null');
        }
        $this->container['commission_percent'] = $commission_percent;

        return $this;
    }

    /**
     * Gets commission_gross_rent
     *
     * @return float|null
     */
    public function getCommissionGrossRent()
    {
        return $this->container['commission_gross_rent'];
    }

    /**
     * Sets commission_gross_rent
     *
     * @param float|null $commission_gross_rent commission_gross_rent
     *
     * @return self
     */
    public function setCommissionGrossRent($commission_gross_rent)
    {
        if (is_null($commission_gross_rent)) {
            throw new \InvalidArgumentException('non-nullable commission_gross_rent cannot be null');
        }
        $this->container['commission_gross_rent'] = $commission_gross_rent;

        return $this;
    }

    /**
     * Gets commission_percent_rent
     *
     * @return float|null
     */
    public function getCommissionPercentRent()
    {
        return $this->container['commission_percent_rent'];
    }

    /**
     * Sets commission_percent_rent
     *
     * @param float|null $commission_percent_rent commission_percent_rent
     *
     * @return self
     */
    public function setCommissionPercentRent($commission_percent_rent)
    {
        if (is_null($commission_percent_rent)) {
            throw new \InvalidArgumentException('non-nullable commission_percent_rent cannot be null');
        }
        $this->container['commission_percent_rent'] = $commission_percent_rent;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets for_rent
     *
     * @return bool|null
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool|null $for_rent for_rent
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
     * Gets for_sale
     *
     * @return bool|null
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool|null $for_sale for_sale
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
     * Gets is_cancelled
     *
     * @return bool|null
     */
    public function getIsCancelled()
    {
        return $this->container['is_cancelled'];
    }

    /**
     * Sets is_cancelled
     *
     * @param bool|null $is_cancelled is_cancelled
     *
     * @return self
     */
    public function setIsCancelled($is_cancelled)
    {
        if (is_null($is_cancelled)) {
            throw new \InvalidArgumentException('non-nullable is_cancelled cannot be null');
        }
        $this->container['is_cancelled'] = $is_cancelled;

        return $this;
    }

    /**
     * Gets linked_acquisition_object_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedAcquisitionObjectAssignments()
    {
        return $this->container['linked_acquisition_object_assignments'];
    }

    /**
     * Sets linked_acquisition_object_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_acquisition_object_assignments linked_acquisition_object_assignments
     *
     * @return self
     */
    public function setLinkedAcquisitionObjectAssignments($linked_acquisition_object_assignments)
    {
        if (is_null($linked_acquisition_object_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_acquisition_object_assignments cannot be null');
        }
        $this->container['linked_acquisition_object_assignments'] = $linked_acquisition_object_assignments;

        return $this;
    }

    /**
     * Gets linked_applicants
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedApplicants()
    {
        return $this->container['linked_applicants'];
    }

    /**
     * Sets linked_applicants
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_applicants linked_applicants
     *
     * @return self
     */
    public function setLinkedApplicants($linked_applicants)
    {
        if (is_null($linked_applicants)) {
            throw new \InvalidArgumentException('non-nullable linked_applicants cannot be null');
        }
        $this->container['linked_applicants'] = $linked_applicants;

        return $this;
    }

    /**
     * Gets linked_appraisers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedAppraisers()
    {
        return $this->container['linked_appraisers'];
    }

    /**
     * Sets linked_appraisers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_appraisers linked_appraisers
     *
     * @return self
     */
    public function setLinkedAppraisers($linked_appraisers)
    {
        if (is_null($linked_appraisers)) {
            throw new \InvalidArgumentException('non-nullable linked_appraisers cannot be null');
        }
        $this->container['linked_appraisers'] = $linked_appraisers;

        return $this;
    }

    /**
     * Gets linked_clients
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedClients()
    {
        return $this->container['linked_clients'];
    }

    /**
     * Sets linked_clients
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_clients linked_clients
     *
     * @return self
     */
    public function setLinkedClients($linked_clients)
    {
        if (is_null($linked_clients)) {
            throw new \InvalidArgumentException('non-nullable linked_clients cannot be null');
        }
        $this->container['linked_clients'] = $linked_clients;

        return $this;
    }

    /**
     * Gets linked_employee
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee $linked_employee linked_employee
     *
     * @return self
     */
    public function setLinkedEmployee($linked_employee)
    {
        if (is_null($linked_employee)) {
            throw new \InvalidArgumentException('non-nullable linked_employee cannot be null');
        }
        $this->container['linked_employee'] = $linked_employee;

        return $this;
    }

    /**
     * Gets linked_financial_advisors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedFinancialAdvisors()
    {
        return $this->container['linked_financial_advisors'];
    }

    /**
     * Sets linked_financial_advisors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_financial_advisors linked_financial_advisors
     *
     * @return self
     */
    public function setLinkedFinancialAdvisors($linked_financial_advisors)
    {
        if (is_null($linked_financial_advisors)) {
            throw new \InvalidArgumentException('non-nullable linked_financial_advisors cannot be null');
        }
        $this->container['linked_financial_advisors'] = $linked_financial_advisors;

        return $this;
    }

    /**
     * Gets linked_folder_tree
     *
     * @return \Brixion\Kolibri\Model\LinkedFolderTree|null
     */
    public function getLinkedFolderTree()
    {
        return $this->container['linked_folder_tree'];
    }

    /**
     * Sets linked_folder_tree
     *
     * @param \Brixion\Kolibri\Model\LinkedFolderTree|null $linked_folder_tree linked_folder_tree
     *
     * @return self
     */
    public function setLinkedFolderTree($linked_folder_tree)
    {
        if (is_null($linked_folder_tree)) {
            throw new \InvalidArgumentException('non-nullable linked_folder_tree cannot be null');
        }
        $this->container['linked_folder_tree'] = $linked_folder_tree;

        return $this;
    }

    /**
     * Gets linked_inspectors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedInspectors()
    {
        return $this->container['linked_inspectors'];
    }

    /**
     * Sets linked_inspectors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_inspectors linked_inspectors
     *
     * @return self
     */
    public function setLinkedInspectors($linked_inspectors)
    {
        if (is_null($linked_inspectors)) {
            throw new \InvalidArgumentException('non-nullable linked_inspectors cannot be null');
        }
        $this->container['linked_inspectors'] = $linked_inspectors;

        return $this;
    }

    /**
     * Gets linked_notaries
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedNotaries()
    {
        return $this->container['linked_notaries'];
    }

    /**
     * Sets linked_notaries
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_notaries linked_notaries
     *
     * @return self
     */
    public function setLinkedNotaries($linked_notaries)
    {
        if (is_null($linked_notaries)) {
            throw new \InvalidArgumentException('non-nullable linked_notaries cannot be null');
        }
        $this->container['linked_notaries'] = $linked_notaries;

        return $this;
    }

    /**
     * Gets linked_occupants
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedOccupants()
    {
        return $this->container['linked_occupants'];
    }

    /**
     * Sets linked_occupants
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_occupants linked_occupants
     *
     * @return self
     */
    public function setLinkedOccupants($linked_occupants)
    {
        if (is_null($linked_occupants)) {
            throw new \InvalidArgumentException('non-nullable linked_occupants cannot be null');
        }
        $this->container['linked_occupants'] = $linked_occupants;

        return $this;
    }

    /**
     * Gets linked_offering_agencies
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedOfferingAgencies()
    {
        return $this->container['linked_offering_agencies'];
    }

    /**
     * Sets linked_offering_agencies
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_offering_agencies linked_offering_agencies
     *
     * @return self
     */
    public function setLinkedOfferingAgencies($linked_offering_agencies)
    {
        if (is_null($linked_offering_agencies)) {
            throw new \InvalidArgumentException('non-nullable linked_offering_agencies cannot be null');
        }
        $this->container['linked_offering_agencies'] = $linked_offering_agencies;

        return $this;
    }

    /**
     * Gets linked_office
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice
     */
    public function getLinkedOffice()
    {
        return $this->container['linked_office'];
    }

    /**
     * Sets linked_office
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice $linked_office linked_office
     *
     * @return self
     */
    public function setLinkedOffice($linked_office)
    {
        if (is_null($linked_office)) {
            throw new \InvalidArgumentException('non-nullable linked_office cannot be null');
        }
        $this->container['linked_office'] = $linked_office;

        return $this;
    }

    /**
     * Gets linked_people_who_opted
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPeopleWhoOpted()
    {
        return $this->container['linked_people_who_opted'];
    }

    /**
     * Sets linked_people_who_opted
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_people_who_opted linked_people_who_opted
     *
     * @return self
     */
    public function setLinkedPeopleWhoOpted($linked_people_who_opted)
    {
        if (is_null($linked_people_who_opted)) {
            throw new \InvalidArgumentException('non-nullable linked_people_who_opted cannot be null');
        }
        $this->container['linked_people_who_opted'] = $linked_people_who_opted;

        return $this;
    }

    /**
     * Gets linked_photographers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPhotographers()
    {
        return $this->container['linked_photographers'];
    }

    /**
     * Sets linked_photographers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_photographers linked_photographers
     *
     * @return self
     */
    public function setLinkedPhotographers($linked_photographers)
    {
        if (is_null($linked_photographers)) {
            throw new \InvalidArgumentException('non-nullable linked_photographers cannot be null');
        }
        $this->container['linked_photographers'] = $linked_photographers;

        return $this;
    }

    /**
     * Gets linked_potentials
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPotentials()
    {
        return $this->container['linked_potentials'];
    }

    /**
     * Sets linked_potentials
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_potentials linked_potentials
     *
     * @return self
     */
    public function setLinkedPotentials($linked_potentials)
    {
        if (is_null($linked_potentials)) {
            throw new \InvalidArgumentException('non-nullable linked_potentials cannot be null');
        }
        $this->container['linked_potentials'] = $linked_potentials;

        return $this;
    }

    /**
     * Gets linked_project_developers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedProjectDevelopers()
    {
        return $this->container['linked_project_developers'];
    }

    /**
     * Sets linked_project_developers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_project_developers linked_project_developers
     *
     * @return self
     */
    public function setLinkedProjectDevelopers($linked_project_developers)
    {
        if (is_null($linked_project_developers)) {
            throw new \InvalidArgumentException('non-nullable linked_project_developers cannot be null');
        }
        $this->container['linked_project_developers'] = $linked_project_developers;

        return $this;
    }

    /**
     * Gets linked_property_managers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPropertyManagers()
    {
        return $this->container['linked_property_managers'];
    }

    /**
     * Sets linked_property_managers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_property_managers linked_property_managers
     *
     * @return self
     */
    public function setLinkedPropertyManagers($linked_property_managers)
    {
        if (is_null($linked_property_managers)) {
            throw new \InvalidArgumentException('non-nullable linked_property_managers cannot be null');
        }
        $this->container['linked_property_managers'] = $linked_property_managers;

        return $this;
    }

    /**
     * Gets linked_purchasing_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPurchasingBrokers()
    {
        return $this->container['linked_purchasing_brokers'];
    }

    /**
     * Sets linked_purchasing_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_purchasing_brokers linked_purchasing_brokers
     *
     * @return self
     */
    public function setLinkedPurchasingBrokers($linked_purchasing_brokers)
    {
        if (is_null($linked_purchasing_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_purchasing_brokers cannot be null');
        }
        $this->container['linked_purchasing_brokers'] = $linked_purchasing_brokers;

        return $this;
    }

    /**
     * Gets linked_search_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedSearchAssignment[]|null
     */
    public function getLinkedSearchAssignment()
    {
        return $this->container['linked_search_assignment'];
    }

    /**
     * Sets linked_search_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedSearchAssignment[]|null $linked_search_assignment linked_search_assignment
     *
     * @return self
     */
    public function setLinkedSearchAssignment($linked_search_assignment)
    {
        if (is_null($linked_search_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_search_assignment cannot be null');
        }
        $this->container['linked_search_assignment'] = $linked_search_assignment;

        return $this;
    }

    /**
     * Gets linked_stylists
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedStylists()
    {
        return $this->container['linked_stylists'];
    }

    /**
     * Sets linked_stylists
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_stylists linked_stylists
     *
     * @return self
     */
    public function setLinkedStylists($linked_stylists)
    {
        if (is_null($linked_stylists)) {
            throw new \InvalidArgumentException('non-nullable linked_stylists cannot be null');
        }
        $this->container['linked_stylists'] = $linked_stylists;

        return $this;
    }

    /**
     * Gets linked_vendors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedVendors()
    {
        return $this->container['linked_vendors'];
    }

    /**
     * Sets linked_vendors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_vendors linked_vendors
     *
     * @return self
     */
    public function setLinkedVendors($linked_vendors)
    {
        if (is_null($linked_vendors)) {
            throw new \InvalidArgumentException('non-nullable linked_vendors cannot be null');
        }
        $this->container['linked_vendors'] = $linked_vendors;

        return $this;
    }

    /**
     * Gets linked_tenant_representation_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedTenantRepresentationBrokers()
    {
        return $this->container['linked_tenant_representation_brokers'];
    }

    /**
     * Sets linked_tenant_representation_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_tenant_representation_brokers linked_tenant_representation_brokers
     *
     * @return self
     */
    public function setLinkedTenantRepresentationBrokers($linked_tenant_representation_brokers)
    {
        if (is_null($linked_tenant_representation_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_tenant_representation_brokers cannot be null');
        }
        $this->container['linked_tenant_representation_brokers'] = $linked_tenant_representation_brokers;

        return $this;
    }

    /**
     * Gets linked_rental_agents
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRentalAgents()
    {
        return $this->container['linked_rental_agents'];
    }

    /**
     * Sets linked_rental_agents
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_rental_agents linked_rental_agents
     *
     * @return self
     */
    public function setLinkedRentalAgents($linked_rental_agents)
    {
        if (is_null($linked_rental_agents)) {
            throw new \InvalidArgumentException('non-nullable linked_rental_agents cannot be null');
        }
        $this->container['linked_rental_agents'] = $linked_rental_agents;

        return $this;
    }

    /**
     * Gets linked_sales_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedSalesBrokers()
    {
        return $this->container['linked_sales_brokers'];
    }

    /**
     * Sets linked_sales_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_sales_brokers linked_sales_brokers
     *
     * @return self
     */
    public function setLinkedSalesBrokers($linked_sales_brokers)
    {
        if (is_null($linked_sales_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_sales_brokers cannot be null');
        }
        $this->container['linked_sales_brokers'] = $linked_sales_brokers;

        return $this;
    }

    /**
     * Gets linked_contact_persons
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedContactPersons()
    {
        return $this->container['linked_contact_persons'];
    }

    /**
     * Sets linked_contact_persons
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_contact_persons linked_contact_persons
     *
     * @return self
     */
    public function setLinkedContactPersons($linked_contact_persons)
    {
        if (is_null($linked_contact_persons)) {
            throw new \InvalidArgumentException('non-nullable linked_contact_persons cannot be null');
        }
        $this->container['linked_contact_persons'] = $linked_contact_persons;

        return $this;
    }

    /**
     * Gets mandate_date_time
     *
     * @return \DateTime|null
     */
    public function getMandateDateTime()
    {
        return $this->container['mandate_date_time'];
    }

    /**
     * Sets mandate_date_time
     *
     * @param \DateTime|null $mandate_date_time mandate_date_time
     *
     * @return self
     */
    public function setMandateDateTime($mandate_date_time)
    {
        if (is_null($mandate_date_time)) {
            throw new \InvalidArgumentException('non-nullable mandate_date_time cannot be null');
        }
        $this->container['mandate_date_time'] = $mandate_date_time;

        return $this;
    }

    /**
     * Gets real_estate_group
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup $real_estate_group real_estate_group
     *
     * @return self
     */
    public function setRealEstateGroup($real_estate_group)
    {
        if (is_null($real_estate_group)) {
            throw new \InvalidArgumentException('non-nullable real_estate_group cannot be null');
        }
        $this->container['real_estate_group'] = $real_estate_group;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $title when calling AcquisitionAssignment., must be smaller than or equal to 1000.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets public_reference
     *
     * @return string|null
     */
    public function getPublicReference()
    {
        return $this->container['public_reference'];
    }

    /**
     * Sets public_reference
     *
     * @param string|null $public_reference public_reference
     *
     * @return self
     */
    public function setPublicReference($public_reference)
    {
        if (is_null($public_reference)) {
            throw new \InvalidArgumentException('non-nullable public_reference cannot be null');
        }
        $this->container['public_reference'] = $public_reference;

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
            throw new \InvalidArgumentException('invalid length for $id when calling AcquisitionAssignment., must be bigger than or equal to 1.');
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
