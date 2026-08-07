<?php

declare(strict_types=1);

/**
 * HouseSort - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HouseSort.
 *
 *
 */
class HouseSort
{
    /**
     * Possible values of this enum
     */
    public const SINGLE_FAMILY_HOUSE = 'SingleFamilyHouse';

    public const MANSION = 'Mansion';

    public const VILLA = 'Villa';

    public const COUNTRY_HOUSE = 'CountryHouse';

    public const BUNGALOW = 'Bungalow';

    public const RESIDENTIAL_FARM = 'ResidentialFarm';

    public const CANAL_HOUSE = 'CanalHouse';

    public const HOUSE_BOAT = 'HouseBoat';

    public const MOBILE_HOME = 'MobileHome';

    public const GIPSY_CART = 'GipsyCart';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE_FAMILY_HOUSE,
            self::MANSION,
            self::VILLA,
            self::COUNTRY_HOUSE,
            self::BUNGALOW,
            self::RESIDENTIAL_FARM,
            self::CANAL_HOUSE,
            self::HOUSE_BOAT,
            self::MOBILE_HOME,
            self::GIPSY_CART,
        ];
    }
}
