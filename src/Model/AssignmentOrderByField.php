<?php

declare(strict_types=1);

/**
 * AssignmentOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentOrderByField.
 *
 * Order relation search results by the field indicated by AssignmentOrderByField.
 */
class AssignmentOrderByField
{
    /**
     * Possible values of this enum
     */
    public const LOCALITY_STREET_NAME_AND_NUMBER = 'LocalityStreetNameAndNumber';

    public const MODIFICATION_DATE = 'ModificationDate';

    public const CREATION_DATE = 'CreationDate';

    public const CONSTRUCTION_NUMBER = 'ConstructionNumber';

    public const KEY_NUMBER = 'KeyNumber';

    public const ACTIVITY_AND_DATE_TIME_MODIFIED = 'ActivityAndDateTimeModified';

    public const ASSIGNMENT_TYPE = 'AssignmentType';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LOCALITY_STREET_NAME_AND_NUMBER,
            self::MODIFICATION_DATE,
            self::CREATION_DATE,
            self::CONSTRUCTION_NUMBER,
            self::KEY_NUMBER,
            self::ACTIVITY_AND_DATE_TIME_MODIFIED,
            self::ASSIGNMENT_TYPE,
        ];
    }
}
