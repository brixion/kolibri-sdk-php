<?php

declare(strict_types=1);

/**
 * AssignmentType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentType.
 *
 *
 */
class AssignmentType
{
    /**
     * Possible values of this enum
     */
    public const OBJECT = 'Object';

    public const OBJECT_TYPE = 'ObjectType';

    public const PROJECT = 'Project';

    public const ACQUISITION = 'Acquisition';

    public const ACQUISITION_OBJECT = 'AcquisitionObject';

    public const GENERIC = 'Generic';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OBJECT,
            self::OBJECT_TYPE,
            self::PROJECT,
            self::ACQUISITION,
            self::ACQUISITION_OBJECT,
            self::GENERIC,
        ];
    }
}
