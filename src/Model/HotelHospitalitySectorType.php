<?php

declare(strict_types=1);

/**
 * HotelHospitalitySectorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HotelHospitalitySectorType.
 *
 *
 */
class HotelHospitalitySectorType
{
    /**
     * Possible values of this enum
     */
    public const HOTEL = 'Hotel';

    public const LUXURY_HOTEL = 'LuxuryHotel';

    public const CONGRESS_HOTEL = 'CongressHotel';

    public const HOTEL_GARNI = 'HotelGarni';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOTEL,
            self::LUXURY_HOTEL,
            self::CONGRESS_HOTEL,
            self::HOTEL_GARNI,
        ];
    }
}
