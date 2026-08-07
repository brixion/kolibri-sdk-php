<?php

declare(strict_types=1);

/**
 * PoultryFarmingSubtype - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PoultryFarmingSubtype.
 *
 *
 */
class PoultryFarmingSubtype
{
    /**
     * Possible values of this enum
     */
    public const HENS = 'Hens';

    public const BROILERS = 'Broilers';

    public const BREEDING_HENS = 'BreedingHens';

    public const BREEDING_BROILER = 'BreedingBroiler';

    public const TURKEYS_GEESE_DUCKS_OSTRICHES = 'TurkeysGeeseDucksOstriches';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HENS,
            self::BROILERS,
            self::BREEDING_HENS,
            self::BREEDING_BROILER,
            self::TURKEYS_GEESE_DUCKS_OSTRICHES,
        ];
    }
}
