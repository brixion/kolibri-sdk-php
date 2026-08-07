<?php

declare(strict_types=1);

/**
 * Peculiarity - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Peculiarity.
 *
 *
 */
class Peculiarity
{
    /**
     * Possible values of this enum
     */
    public const MONUMENTAL_BUILDING = 'MonumentalBuilding';

    public const MONUMENT = 'Monument';

    public const PADDED = 'Padded';

    public const PARTIALLY_FURNISHED = 'PartiallyFurnished';

    public const PARTIALLY_LEASED = 'PartiallyLeased';

    public const FURNISHED = 'Furnished';

    public const DOUBLE_OCCUPANCY_POSSIBLE = 'DoubleOccupancyPossible';

    public const DOUBLE_OCCUPANCY_AVAILABLE = 'DoubleOccupancyAvailable';

    public const PROTECTED_TOWN_OR_VILLAGE_CONSERVATION = 'ProtectedTownOrVillageConservation';

    public const ACCESSIBLE_FOR_THE_ELDERLY = 'AccessibleForTheElderly';

    public const ACCESSIBLE_TO_DISABLED_PEOPLE = 'AccessibleToDisabledPeople';

    public const NEEDS_RENOVATION = 'NeedsRenovation';

    public const DEMOLITION_HOUSE = 'DemolitionHouse';

    public const HERITAGE = 'Heritage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONUMENTAL_BUILDING,
            self::MONUMENT,
            self::PADDED,
            self::PARTIALLY_FURNISHED,
            self::PARTIALLY_LEASED,
            self::FURNISHED,
            self::DOUBLE_OCCUPANCY_POSSIBLE,
            self::DOUBLE_OCCUPANCY_AVAILABLE,
            self::PROTECTED_TOWN_OR_VILLAGE_CONSERVATION,
            self::ACCESSIBLE_FOR_THE_ELDERLY,
            self::ACCESSIBLE_TO_DISABLED_PEOPLE,
            self::NEEDS_RENOVATION,
            self::DEMOLITION_HOUSE,
            self::HERITAGE,
        ];
    }
}
