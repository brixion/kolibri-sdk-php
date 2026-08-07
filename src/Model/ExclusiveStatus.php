<?php

declare(strict_types=1);

/**
 * ExclusiveStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ExclusiveStatus.
 *
 *
 */
class ExclusiveStatus
{
    /**
     * Possible values of this enum
     */
    public const EXCLUSIVE = 'Exclusive';

    public const NON_EXCLUSIVE = 'NonExclusive';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXCLUSIVE,
            self::NON_EXCLUSIVE,
        ];
    }
}
