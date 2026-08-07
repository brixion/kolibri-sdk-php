<?php

declare(strict_types=1);

/**
 * AvailableFilter - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AvailableFilter.
 *
 *
 */
class AvailableFilter
{
    /**
     * Possible values of this enum
     */
    public const AVAILABLE = 'Available';

    public const IN_USE = 'InUse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::IN_USE,
        ];
    }
}
