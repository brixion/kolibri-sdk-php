<?php

declare(strict_types=1);

/**
 * TypeOfParkingFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfParkingFacility.
 *
 * 
 */
class TypeOfParkingFacility
{
    /**
     * Possible values of this enum
     */
    public const PUBLIC_PARKING = 'PublicParking';

    public const PAID_PARKING = 'PaidParking';

    public const CAR_PARK = 'CarPark';

    public const PERMIT_PARKING = 'PermitParking';

    public const ON_OWN_TERRAIN = 'OnOwnTerrain';

    public const ON_CLOSED_GROUND = 'OnClosedGround';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PUBLIC_PARKING,
            self::PAID_PARKING,
            self::CAR_PARK,
            self::PERMIT_PARKING,
            self::ON_OWN_TERRAIN,
            self::ON_CLOSED_GROUND
        ];
    }
}


