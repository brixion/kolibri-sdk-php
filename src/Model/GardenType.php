<?php

declare(strict_types=1);

/**
 * GardenType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GardenType.
 *
 *
 */
class GardenType
{
    /**
     * Possible values of this enum
     */
    public const BACK_GARDEN = 'BackGarden';

    public const FRONT_GARDEN = 'FrontGarden';

    public const SIDE_GARDEN = 'SideGarden';

    public const SURROUNDING_GARDEN = 'SurroundingGarden';

    public const PATIO_ATRIUM = 'PatioAtrium';

    public const PLACE = 'Place';

    public const SUN_TERRACE = 'SunTerrace';

    public const ENCLOSED_YARD = 'EnclosedYard';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BACK_GARDEN,
            self::FRONT_GARDEN,
            self::SIDE_GARDEN,
            self::SURROUNDING_GARDEN,
            self::PATIO_ATRIUM,
            self::PLACE,
            self::SUN_TERRACE,
            self::ENCLOSED_YARD,
        ];
    }
}
