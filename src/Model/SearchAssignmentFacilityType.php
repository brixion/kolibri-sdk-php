<?php

declare(strict_types=1);

/**
 * SearchAssignmentFacilityType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentFacilityType.
 *
 *
 */
class SearchAssignmentFacilityType
{
    /**
     * Possible values of this enum
     */
    public const BALCONY = 'Balcony';

    public const GARDEN = 'Garden';

    public const GARAGE = 'Garage';

    public const STORAGE = 'Storage';

    public const CABLE_TV_CONNECTION = 'CableTvConnection';

    public const BASEMENT = 'Basement';

    public const ELECTRICITY_CONNECTION = 'ElectricityConnection';

    public const ELEVATOR_IN_BUILDING = 'ElevatorInBuilding';

    public const FIBERGLASS_CONNECTION = 'FiberglassConnection';

    public const GAS_CONNECTION = 'GasConnection';

    public const INTERNET_CONNECTION = 'InternetConnection';

    public const ELEVATOR = 'Elevator';

    public const PARKING_SPACE = 'ParkingSpace';

    public const PHONE_CONNECTION = 'PhoneConnection';

    public const SEWER_CONNECTION = 'SewerConnection';

    public const WATER_CONNECTION = 'WaterConnection';

    public const FIREPLACE = 'Fireplace';

    public const CENTRAL_HEATING = 'CentralHeating';

    public const SAUNA = 'Sauna';

    public const BATH = 'Bath';

    public const SWIMMING_POOL = 'SwimmingPool';

    public const JACUZZI = 'Jacuzzi';

    public const STEAM_CABIN = 'SteamCabin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BALCONY,
            self::GARDEN,
            self::GARAGE,
            self::STORAGE,
            self::CABLE_TV_CONNECTION,
            self::BASEMENT,
            self::ELECTRICITY_CONNECTION,
            self::ELEVATOR_IN_BUILDING,
            self::FIBERGLASS_CONNECTION,
            self::GAS_CONNECTION,
            self::INTERNET_CONNECTION,
            self::ELEVATOR,
            self::PARKING_SPACE,
            self::PHONE_CONNECTION,
            self::SEWER_CONNECTION,
            self::WATER_CONNECTION,
            self::FIREPLACE,
            self::CENTRAL_HEATING,
            self::SAUNA,
            self::BATH,
            self::SWIMMING_POOL,
            self::JACUZZI,
            self::STEAM_CABIN,
        ];
    }
}
