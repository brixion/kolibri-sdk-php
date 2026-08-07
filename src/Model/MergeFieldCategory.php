<?php

declare(strict_types=1);

/**
 * MergeFieldCategory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MergeFieldCategory.
 *
 *
 */
class MergeFieldCategory
{
    /**
     * Possible values of this enum
     */
    public const CONTACT_PERSON = 'ContactPerson';

    public const OBJECT_ASSIGNMENT = 'ObjectAssignment';

    public const EMPLOYEE = 'Employee';

    public const AGENDA_ITEM = 'AgendaItem';

    public const OFFICE = 'Office';

    public const COMPANY = 'Company';

    public const ACQUISITION_OBJECT_ASSIGNMENT = 'AcquisitionObjectAssignment';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONTACT_PERSON,
            self::OBJECT_ASSIGNMENT,
            self::EMPLOYEE,
            self::AGENDA_ITEM,
            self::OFFICE,
            self::COMPANY,
            self::ACQUISITION_OBJECT_ASSIGNMENT,
        ];
    }
}
