<?php

declare(strict_types=1);

/**
 * LivingRoomType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LivingRoomType.
 *
 *
 */
class LivingRoomType
{
    /**
     * Possible values of this enum
     */
    public const LIVING_ROOM = 'LivingRoom';

    public const T_ROOM = 'TRoom';

    public const Z_ROOM = 'ZRoom';

    public const U_ROOM = 'URoom';

    public const L_ROOM = 'LRoom';

    public const ROOM_EN_SUITE = 'RoomEnSuite';

    public const FORMER_ROOM_EN_SUITE = 'FormerRoomEnSuite';

    public const SUN_ROOM = 'SunRoom';

    public const GARDEN_ROOM = 'GardenRoom';

    public const CONSERVATORY = 'Conservatory';

    public const STUDY = 'Study';

    public const OFFICE = 'Office';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIVING_ROOM,
            self::T_ROOM,
            self::Z_ROOM,
            self::U_ROOM,
            self::L_ROOM,
            self::ROOM_EN_SUITE,
            self::FORMER_ROOM_EN_SUITE,
            self::SUN_ROOM,
            self::GARDEN_ROOM,
            self::CONSERVATORY,
            self::STUDY,
            self::OFFICE,
        ];
    }
}
