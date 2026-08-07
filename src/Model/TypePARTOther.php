<?php

declare(strict_types=1);

/**
 * TypePARTOther - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypePARTOther.
 *
 * 
 */
class TypePARTOther
{
    /**
     * Possible values of this enum
     */
    public const STORAGE = 'Storage';

    public const BERTH = 'Berth';

    public const MOBILE_HOUSE_PLACE = 'MobileHousePlace';

    public const CARAVAN_PLACE = 'CaravanPlace';

    public const HOME_STORE = 'HomeStore';

    public const BOTTOM = 'Bottom';

    public const STORAGE_SPACE = 'StorageSpace';

    public const PARKING_SPACE = 'ParkingSpace';

    public const GARAGE = 'Garage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STORAGE,
            self::BERTH,
            self::MOBILE_HOUSE_PLACE,
            self::CARAVAN_PLACE,
            self::HOME_STORE,
            self::BOTTOM,
            self::STORAGE_SPACE,
            self::PARKING_SPACE,
            self::GARAGE
        ];
    }
}


