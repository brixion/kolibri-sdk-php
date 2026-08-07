<?php

declare(strict_types=1);

/**
 * Priority - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Priority.
 *
 *
 */
class Priority
{
    /**
     * Possible values of this enum
     */
    public const LOW = 'Low';

    public const MEDIUM = 'Medium';

    public const HIGH = 'High';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LOW,
            self::MEDIUM,
            self::HIGH,
        ];
    }
}
