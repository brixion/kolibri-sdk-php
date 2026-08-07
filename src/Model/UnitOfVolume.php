<?php

declare(strict_types=1);

/**
 * UnitOfVolume - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UnitOfVolume.
 *
 * 
 */
class UnitOfVolume
{
    /**
     * Possible values of this enum
     */
    public const CUBIC_METER = 'CubicMeter';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUBIC_METER
        ];
    }
}


