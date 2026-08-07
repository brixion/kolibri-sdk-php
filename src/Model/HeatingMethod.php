<?php

declare(strict_types=1);

/**
 * HeatingMethod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HeatingMethod.
 *
 *
 */
class HeatingMethod
{
    /**
     * Possible values of this enum
     */
    public const BOILER = 'Boiler';

    public const COAL_STOVE = 'CoalStove';

    public const BLOCK_HEATING = 'BlockHeating';

    public const DISTRICT_HEATING = 'DistrictHeating';

    public const HEARTH = 'Hearth';

    public const HOT_AIR_HEATING = 'HotAirHeating';

    public const AIR_CONDITIONING = 'AirConditioning';

    public const GAS_STOVES = 'GasStoves';

    public const FIREPLACE = 'Fireplace';

    public const FIREPLACE_OPTION = 'FireplaceOption';

    public const HEATED_FLOORS = 'HeatedFloors';

    public const PARTIAL_HEATED_FLOORS = 'PartialHeatedFloors';

    public const SOLAR_PANELS = 'SolarPanels';

    public const NO_HEATING = 'NoHeating';

    public const ELECTRIC_HEATING = 'ElectricHeating';

    public const WALL_HEATING = 'WallHeating';

    public const HEAT_PUMP = 'HeatPump';

    public const HEAT_RECOVERY_INSTALLATION = 'HeatRecoveryInstallation';

    public const GEOTHERMAL_ENERGY = 'GeothermalEnergy';

    public const WOOD_STOVE = 'WoodStove';

    public const GAS_STOVE = 'GasStove';

    public const FREE_STANDING_HEATING = 'FreeStandingHeating';

    public const AUTOMATIC_HEATING = 'AutomaticHeating';

    public const STOVE = 'Stove';

    public const COMBINED_HEATING = 'CombinedHeating';

    public const SOLID_FUEL = 'SolidFuel';

    public const ION = 'Ion';

    public const WATER_HEATER = 'WaterHeater';

    public const ALL_BURNER = 'AllBurner';

    public const PELLET_STOVE = 'PelletStove';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOILER,
            self::COAL_STOVE,
            self::BLOCK_HEATING,
            self::DISTRICT_HEATING,
            self::HEARTH,
            self::HOT_AIR_HEATING,
            self::AIR_CONDITIONING,
            self::GAS_STOVES,
            self::FIREPLACE,
            self::FIREPLACE_OPTION,
            self::HEATED_FLOORS,
            self::PARTIAL_HEATED_FLOORS,
            self::SOLAR_PANELS,
            self::NO_HEATING,
            self::ELECTRIC_HEATING,
            self::WALL_HEATING,
            self::HEAT_PUMP,
            self::HEAT_RECOVERY_INSTALLATION,
            self::GEOTHERMAL_ENERGY,
            self::WOOD_STOVE,
            self::GAS_STOVE,
            self::FREE_STANDING_HEATING,
            self::AUTOMATIC_HEATING,
            self::STOVE,
            self::COMBINED_HEATING,
            self::SOLID_FUEL,
            self::ION,
            self::WATER_HEATER,
            self::ALL_BURNER,
            self::PELLET_STOVE,
        ];
    }
}
