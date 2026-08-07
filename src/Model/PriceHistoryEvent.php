<?php

declare(strict_types=1);

/**
 * PriceHistoryEvent - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PriceHistoryEvent.
 *
 *
 */
class PriceHistoryEvent
{
    /**
     * Possible values of this enum
     */
    public const REGISTERED = 'Registered';

    public const CHANGED = 'Changed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REGISTERED,
            self::CHANGED,
        ];
    }
}
