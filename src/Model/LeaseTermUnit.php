<?php

declare(strict_types=1);

/**
 * LeaseTermUnit - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LeaseTermUnit.
 *
 *
 */
class LeaseTermUnit
{
    /**
     * Possible values of this enum
     */
    public const DAY = 'Day';

    public const WEEK = 'Week';

    public const MONTH = 'Month';

    public const QUARTER = 'Quarter';

    public const YEAR = 'Year';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAY,
            self::WEEK,
            self::MONTH,
            self::QUARTER,
            self::YEAR,
        ];
    }
}
