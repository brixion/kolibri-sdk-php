<?php

declare(strict_types=1);

/**
 * SocialPropertyFacilityType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SocialPropertyFacilityType.
 *
 *
 */
class SocialPropertyFacilityType
{
    /**
     * Possible values of this enum
     */
    public const FIRE_DETECTION_SYSTEM_CONNECTED_TO_COMMUNICATIONS_ROOM = 'FireDetectionSystemConnectedToCommunicationsRoom';

    public const PRIVATE_PARKING = 'PrivateParking';

    public const ELEVATOR = 'Elevator';

    public const SWIMMING_POOL = 'SwimmingPool';

    public const OUTDOOR_SPACE = 'OutdoorSpace';

    public const DAY_NURSERY = 'DayNursery';

    public const OUT_OF_SCHOOL_CARE = 'OutOfSchoolCare';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRE_DETECTION_SYSTEM_CONNECTED_TO_COMMUNICATIONS_ROOM,
            self::PRIVATE_PARKING,
            self::ELEVATOR,
            self::SWIMMING_POOL,
            self::OUTDOOR_SPACE,
            self::DAY_NURSERY,
            self::OUT_OF_SCHOOL_CARE,
        ];
    }
}
