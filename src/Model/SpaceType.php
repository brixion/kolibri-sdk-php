<?php

declare(strict_types=1);

/**
 * SpaceType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SpaceType.
 *
 *
 */
class SpaceType
{
    /**
     * Possible values of this enum
     */
    public const KITCHEN = 'Kitchen';

    public const BATHROOM = 'Bathroom';

    public const BALCONY = 'Balcony';

    public const ROOF_TERRACE = 'RoofTerrace';

    public const BEDROOM = 'Bedroom';

    public const LIVING_ROOM = 'LivingRoom';

    public const UTILITY_ROOM = 'UtilityRoom';

    public const SHOWER = 'Shower';

    public const TOILET = 'Toilet';

    public const CORRIDOR = 'Corridor';

    public const ENCLOSED_PORCH = 'EnclosedPorch';

    public const HALL = 'Hall';

    public const BOILER_ROOM = 'BoilerRoom';

    public const STORE_ROOM = 'StoreRoom';

    public const STORAGE = 'Storage';

    public const DORMER = 'Dormer';

    public const LOGGIA = 'Loggia';

    public const VESTIBULE = 'Vestibule';

    public const LAUNDRY_ROOM = 'LaundryRoom';

    public const CONSERVATORY = 'Conservatory';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::KITCHEN,
            self::BATHROOM,
            self::BALCONY,
            self::ROOF_TERRACE,
            self::BEDROOM,
            self::LIVING_ROOM,
            self::UTILITY_ROOM,
            self::SHOWER,
            self::TOILET,
            self::CORRIDOR,
            self::ENCLOSED_PORCH,
            self::HALL,
            self::BOILER_ROOM,
            self::STORE_ROOM,
            self::STORAGE,
            self::DORMER,
            self::LOGGIA,
            self::VESTIBULE,
            self::LAUNDRY_ROOM,
            self::CONSERVATORY,
        ];
    }
}
