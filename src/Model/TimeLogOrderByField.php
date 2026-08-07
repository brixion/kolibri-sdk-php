<?php

declare(strict_types=1);

/**
 * TimeLogOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TimeLogOrderByField.
 *
 * Order timeLog search results by the field indicated by TimeLogOrderByField.
 */
class TimeLogOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DEFAULT_ORDER = 'DefaultOrder';

    public const START_DATE = 'StartDate';

    public const END_DATE = 'EndDate';

    public const DURATION = 'Duration';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFAULT_ORDER,
            self::START_DATE,
            self::END_DATE,
            self::DURATION,
        ];
    }
}
