<?php

declare(strict_types=1);

/**
 * TimelineOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineOrderByField.
 *
 *
 */
class TimelineOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DATE = 'Date';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE,
        ];
    }
}
