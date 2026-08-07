<?php

declare(strict_types=1);

/**
 * DefaultFolderTreeCategory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DefaultFolderTreeCategory.
 *
 *
 */
class DefaultFolderTreeCategory
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const REAL_ESTATE_AGENCY = 'RealEstateAgency';

    public const OFFICE = 'Office';

    public const EMPLOYEE = 'Employee';

    public const CONCTACT_PERSONS = 'ConctactPersons';

    public const CONTACT_COMPANIES = 'ContactCompanies';

    public const OBJECT_ASSIGNMENT_RESIDENTIAL_FOR_SALE = 'ObjectAssignmentResidentialForSale';

    public const OBJECT_ASSIGNMENT_RESIDENTIAL_FOR_RENT = 'ObjectAssignmentResidentialForRent';

    public const OBJECT_ASSIGNMENT_COMMERCIAL_FOR_SALE = 'ObjectAssignmentCommercialForSale';

    public const OBJECT_ASSIGNMENT_COMMERCIAL_FOR_RENT = 'ObjectAssignmentCommercialForRent';

    public const OBJECT_ASSIGNMENT_AGRICULTURAL_FOR_SALE = 'ObjectAssignmentAgriculturalForSale';

    public const OBJECT_ASSIGNMENT_AGRICULTURAL_FOR_RENT = 'ObjectAssignmentAgriculturalForRent';

    public const OBJECT_TYPE_ASSIGNMENT_RESIDENTIAL = 'ObjectTypeAssignmentResidential';

    public const OBJECT_TYPE_ASSIGNMENT_COMMERCIAL = 'ObjectTypeAssignmentCommercial';

    public const OBJECT_TYPE_ASSIGNMENT_AGRICULTURAL = 'ObjectTypeAssignmentAgricultural';

    public const PROJECT_ASSIGNMENT_RESIDENTIAL = 'ProjectAssignmentResidential';

    public const PROJECT_ASSIGNMENT_COMMERCIAL = 'ProjectAssignmentCommercial';

    public const PROJECT_ASSIGNMENT_AGRICULTURAL = 'ProjectAssignmentAgricultural';

    public const ACQUISITION_ASSIGNMENT_FOR_SALE = 'AcquisitionAssignmentForSale';

    public const ACQUISITION_ASSIGNMENT_FOR_RENT = 'AcquisitionAssignmentForRent';

    public const ACQUISITION_OBJECT_ASSIGNMENT_FOR_SALE = 'AcquisitionObjectAssignmentForSale';

    public const ACQUISITION_OBJECT_ASSIGNMENT_FOR_RENT = 'AcquisitionObjectAssignmentForRent';

    public const GENERIC_ASSIGNMENT = 'GenericAssignment';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::REAL_ESTATE_AGENCY,
            self::OFFICE,
            self::EMPLOYEE,
            self::CONCTACT_PERSONS,
            self::CONTACT_COMPANIES,
            self::OBJECT_ASSIGNMENT_RESIDENTIAL_FOR_SALE,
            self::OBJECT_ASSIGNMENT_RESIDENTIAL_FOR_RENT,
            self::OBJECT_ASSIGNMENT_COMMERCIAL_FOR_SALE,
            self::OBJECT_ASSIGNMENT_COMMERCIAL_FOR_RENT,
            self::OBJECT_ASSIGNMENT_AGRICULTURAL_FOR_SALE,
            self::OBJECT_ASSIGNMENT_AGRICULTURAL_FOR_RENT,
            self::OBJECT_TYPE_ASSIGNMENT_RESIDENTIAL,
            self::OBJECT_TYPE_ASSIGNMENT_COMMERCIAL,
            self::OBJECT_TYPE_ASSIGNMENT_AGRICULTURAL,
            self::PROJECT_ASSIGNMENT_RESIDENTIAL,
            self::PROJECT_ASSIGNMENT_COMMERCIAL,
            self::PROJECT_ASSIGNMENT_AGRICULTURAL,
            self::ACQUISITION_ASSIGNMENT_FOR_SALE,
            self::ACQUISITION_ASSIGNMENT_FOR_RENT,
            self::ACQUISITION_OBJECT_ASSIGNMENT_FOR_SALE,
            self::ACQUISITION_OBJECT_ASSIGNMENT_FOR_RENT,
            self::GENERIC_ASSIGNMENT,
        ];
    }
}
