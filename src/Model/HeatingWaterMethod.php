<?php

declare(strict_types=1);

/**
 * HeatingWaterMethod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HeatingWaterMethod.
 *
 *
 */
class HeatingWaterMethod
{
    /**
     * Possible values of this enum
     */
    public const BOILER = 'Boiler';

    public const CENTRAL_HEATING = 'CentralHeating';

    public const WATER_HEATER_RENTAL = 'WaterHeaterRental';

    public const WATER_HEATER_OWNERSHIP = 'WaterHeaterOwnership';

    public const GAS_BOILER_RENTAL = 'GasBoilerRental';

    public const GAS_BOILER_OWNERSHIP = 'GasBoilerOwnership';

    public const ELECTRIC_BOILER_RENTAL = 'ElectricBoilerRental';

    public const ELECTRIC_BOILER_OWNERSHIP = 'ElectricBoilerOwnership';

    public const SOLAR_WATER_HEATER = 'SolarWaterHeater';

    public const SOLAR_PANELS = 'SolarPanels';

    public const DISTRICT_HEATING = 'DistrictHeating';

    public const NO_HEATING = 'NoHeating';

    public const FLOW_THROUGH_BOILER = 'FlowThroughBoiler';

    public const GEOTHERMAL_HEAT = 'GeothermalHeat';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOILER,
            self::CENTRAL_HEATING,
            self::WATER_HEATER_RENTAL,
            self::WATER_HEATER_OWNERSHIP,
            self::GAS_BOILER_RENTAL,
            self::GAS_BOILER_OWNERSHIP,
            self::ELECTRIC_BOILER_RENTAL,
            self::ELECTRIC_BOILER_OWNERSHIP,
            self::SOLAR_WATER_HEATER,
            self::SOLAR_PANELS,
            self::DISTRICT_HEATING,
            self::NO_HEATING,
            self::FLOW_THROUGH_BOILER,
            self::GEOTHERMAL_HEAT,
        ];
    }
}
