<?php

declare(strict_types=1);

/**
 * AirTreatment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AirTreatment.
 *
 *
 */
class AirTreatment
{
    /**
     * Possible values of this enum
     */
    public const AC = 'AC';

    public const MECHANICAL_VENTILATION = 'MechanicalVentilation';

    public const TOP_COOLING = 'TopCooling';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AC,
            self::MECHANICAL_VENTILATION,
            self::TOP_COOLING,
        ];
    }
}
