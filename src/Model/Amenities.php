<?php

declare(strict_types=1);

/**
 * Amenities - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Amenities.
 *
 *
 */
class Amenities
{
    /**
     * Possible values of this enum
     */
    public const CENTRAL_HEATING = 'CentralHeating';

    public const ELECTRICITY = 'Electricity';

    public const WATER = 'Water';

    public const ATTIC = 'Attic';

    public const ELECTRIC_DOOR = 'ElectricDoor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CENTRAL_HEATING,
            self::ELECTRICITY,
            self::WATER,
            self::ATTIC,
            self::ELECTRIC_DOOR,
        ];
    }
}
