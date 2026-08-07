<?php

declare(strict_types=1);

/**
 * UnitSize - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UnitSize.
 *
 * 
 */
class UnitSize
{
    /**
     * Possible values of this enum
     */
    public const M2 = 'M2';

    public const HECTARE = 'Hectare';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::M2,
            self::HECTARE
        ];
    }
}


