<?php

declare(strict_types=1);

/**
 * BathroomFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BathroomFacility.
 *
 *
 */
class BathroomFacility
{
    /**
     * Possible values of this enum
     */
    public const BATH = 'Bath';

    public const HALF_BATH = 'HalfBath';

    public const TOILET = 'Toilet';

    public const SHOWER = 'Shower';

    public const URINAL = 'Urinal';

    public const BIDET = 'Bidet';

    public const STEAM_CABIN = 'SteamCabin';

    public const JACUZZI = 'Jacuzzi';

    public const DOUBLE_SINK = 'DoubleSink';

    public const SINK = 'Sink';

    public const WASHBASIN_FURNITURE = 'WashbasinFurniture';

    public const WALK_IN_SHOWER = 'WalkInShower';

    public const UNDERFLOOR_HEATING = 'UnderfloorHeating';

    public const WHIRLPOOL = 'Whirlpool';

    public const WASHING_MACHINE_CONNECTION = 'WashingMachineConnection';

    public const SAUNA = 'Sauna';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BATH,
            self::HALF_BATH,
            self::TOILET,
            self::SHOWER,
            self::URINAL,
            self::BIDET,
            self::STEAM_CABIN,
            self::JACUZZI,
            self::DOUBLE_SINK,
            self::SINK,
            self::WASHBASIN_FURNITURE,
            self::WALK_IN_SHOWER,
            self::UNDERFLOOR_HEATING,
            self::WHIRLPOOL,
            self::WASHING_MACHINE_CONNECTION,
            self::SAUNA,
        ];
    }
}
