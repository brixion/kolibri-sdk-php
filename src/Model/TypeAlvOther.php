<?php

declare(strict_types=1);

/**
 * TypeAlvOther - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeAlvOther.
 *
 * 
 */
class TypeAlvOther
{
    /**
     * Possible values of this enum
     */
    public const SHEEP = 'Sheep';

    public const GOATS = 'Goats';

    public const WORMS = 'Worms';

    public const EEL = 'Eel';

    public const FISH = 'Fish';

    public const BUILDING_PLOT = 'BuildingPlot';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHEEP,
            self::GOATS,
            self::WORMS,
            self::EEL,
            self::FISH,
            self::BUILDING_PLOT,
            self::OTHER
        ];
    }
}


