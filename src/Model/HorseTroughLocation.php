<?php

declare(strict_types=1);

/**
 * HorseTroughLocation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HorseTroughLocation.
 *
 *
 */
class HorseTroughLocation
{
    /**
     * Possible values of this enum
     */
    public const INDOOR = 'Indoor';

    public const OUTDOOR = 'Outdoor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDOOR,
            self::OUTDOOR,
        ];
    }
}
