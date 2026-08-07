<?php

declare(strict_types=1);

/**
 * LeaseholdPeriod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LeaseholdPeriod.
 *
 *
 */
class LeaseholdPeriod
{
    /**
     * Possible values of this enum
     */
    public const MONTH = 'Month';

    public const QUARTER = 'Quarter';

    public const HALF_YEAR = 'HalfYear';

    public const YEAR = 'Year';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONTH,
            self::QUARTER,
            self::HALF_YEAR,
            self::YEAR,
        ];
    }
}
