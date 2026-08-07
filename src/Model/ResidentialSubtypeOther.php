<?php

declare(strict_types=1);

/**
 * ResidentialSubtypeOther - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ResidentialSubtypeOther.
 *
 *
 */
class ResidentialSubtypeOther
{
    /**
     * Possible values of this enum
     */
    public const STORE_ROOM = 'StoreRoom';

    public const BERTH = 'Berth';

    public const MOBILE_HOME_PITCH = 'MobileHomePitch';

    public const GYPSY_CART_PITCH = 'GypsyCartPitch';

    public const RESIDENTIAL_SHOP_PREMISES = 'ResidentialShopPremises';

    public const LOWER_SECTION = 'LowerSection';

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
            self::STORE_ROOM,
            self::BERTH,
            self::MOBILE_HOME_PITCH,
            self::GYPSY_CART_PITCH,
            self::RESIDENTIAL_SHOP_PREMISES,
            self::LOWER_SECTION,
            self::STORAGE_SPACE,
            self::PARKING_SPACE,
            self::GARAGE,
        ];
    }
}
