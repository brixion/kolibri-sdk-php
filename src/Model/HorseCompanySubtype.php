<?php

declare(strict_types=1);

/**
 * HorseCompanySubtype - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HorseCompanySubtype.
 *
 *
 */
class HorseCompanySubtype
{
    /**
     * Possible values of this enum
     */
    public const RIDING_SCHOOL = 'RidingSchool';

    public const PENSION = 'Pension';

    public const TRAINING_FARM = 'TrainingFarm';

    public const OTHER = 'Other';

    public const STUD_FARM = 'StudFarm';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RIDING_SCHOOL,
            self::PENSION,
            self::TRAINING_FARM,
            self::OTHER,
            self::STUD_FARM,
        ];
    }
}
