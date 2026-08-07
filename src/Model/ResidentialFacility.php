<?php

declare(strict_types=1);

/**
 * ResidentialFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ResidentialFacility.
 *
 *
 */
class ResidentialFacility
{
    /**
     * Possible values of this enum
     */
    public const MECHANICAL_VENTILATION = 'MechanicalVentilation';

    public const ALARM_SYSTEM = 'AlarmSystem';

    public const SHUTTERS = 'Shutters';

    public const TV_CABLE = 'TvCable';

    public const OUTDOOR_BLINDS = 'OutdoorBlinds';

    public const POOL = 'Pool';

    public const ELEVATOR = 'Elevator';

    public const AIR_CONDITIONING = 'AirConditioning';

    public const WINDMILL = 'Windmill';

    public const SOLAR_COLLECTORS = 'SolarCollectors';

    public const SATELLITE_DISH = 'SatelliteDish';

    public const JACUZZI = 'Jacuzzi';

    public const STEAM_CABIN = 'SteamCabin';

    public const SMOKE_CHANNEL = 'SmokeChannel';

    public const SLIDING_DOORS = 'SlidingDoors';

    public const FRENCH_BALCONY = 'FrenchBalcony';

    public const ROOF_WINDOW = 'RoofWindow';

    public const SAUNA = 'Sauna';

    public const FIBER_OPTIC_CABLE = 'FiberOpticCable';

    public const INTERNET = 'Internet';

    public const PHONE = 'Phone';

    public const CONDITIONING = 'Conditioning';

    public const SOLAR_PANELS = 'SolarPanels';

    public const CCTV = 'Cctv';

    public const HOME_AUTOMATION = 'HomeAutomation';

    public const BALANCE_VENTILATION = 'BalanceVentilation';

    public const NATURAL_VENTILATION = 'NaturalVentilation';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MECHANICAL_VENTILATION,
            self::ALARM_SYSTEM,
            self::SHUTTERS,
            self::TV_CABLE,
            self::OUTDOOR_BLINDS,
            self::POOL,
            self::ELEVATOR,
            self::AIR_CONDITIONING,
            self::WINDMILL,
            self::SOLAR_COLLECTORS,
            self::SATELLITE_DISH,
            self::JACUZZI,
            self::STEAM_CABIN,
            self::SMOKE_CHANNEL,
            self::SLIDING_DOORS,
            self::FRENCH_BALCONY,
            self::ROOF_WINDOW,
            self::SAUNA,
            self::FIBER_OPTIC_CABLE,
            self::INTERNET,
            self::PHONE,
            self::CONDITIONING,
            self::SOLAR_PANELS,
            self::CCTV,
            self::HOME_AUTOMATION,
            self::BALANCE_VENTILATION,
            self::NATURAL_VENTILATION,
        ];
    }
}
