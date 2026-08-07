<?php

declare(strict_types=1);

/**
 * OpenHouseRecurrence - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * OpenHouseRecurrence.
 *
 *
 */
class OpenHouseRecurrence
{
    /**
     * Possible values of this enum
     */
    public const DATE = 'Date';

    public const WEEKLY = 'Weekly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE,
            self::WEEKLY,
        ];
    }
}
