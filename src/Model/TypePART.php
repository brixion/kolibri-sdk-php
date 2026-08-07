<?php

declare(strict_types=1);

/**
 * TypePART - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypePART.
 *
 * 
 */
class TypePART
{
    /**
     * Possible values of this enum
     */
    public const APARTMENT = 'Apartment';

    public const BUILDING_GROUND = 'BuildingGround';

    public const OTHER = 'Other';

    public const PARKING = 'Parking';

    public const SUMMER_COTTAGE = 'SummerCottage';

    public const RESIDENTIAL_BUILDING = 'ResidentialBuilding';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APARTMENT,
            self::BUILDING_GROUND,
            self::OTHER,
            self::PARKING,
            self::SUMMER_COTTAGE,
            self::RESIDENTIAL_BUILDING
        ];
    }
}


