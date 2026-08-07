<?php

declare(strict_types=1);

/**
 * BuildingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BuildingType.
 *
 *
 */
class BuildingType
{
    /**
     * Possible values of this enum
     */
    public const EXISTING = 'Existing';

    public const _NEW = 'New';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXISTING,
            self::_NEW,
        ];
    }
}
