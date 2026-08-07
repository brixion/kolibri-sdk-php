<?php

declare(strict_types=1);

/**
 * Drainage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Drainage.
 *
 *
 */
class Drainage
{
    /**
     * Possible values of this enum
     */
    public const DOWNSPOUT_AFVOER = 'DownspoutAfvoer';

    public const FRANSE_DRAIN = 'FranseDrain';

    public const HELLING_TYPE = 'HellingType';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOWNSPOUT_AFVOER,
            self::FRANSE_DRAIN,
            self::HELLING_TYPE,
        ];
    }
}
