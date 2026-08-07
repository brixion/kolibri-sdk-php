<?php

declare(strict_types=1);

/**
 * LeaseholdOwnerType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LeaseholdOwnerType.
 *
 *
 */
class LeaseholdOwnerType
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const MUNICIPALITY = 'Municipality';

    public const _PRIVATE = 'Private';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::MUNICIPALITY,
            self::_PRIVATE,
        ];
    }
}
