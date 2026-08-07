<?php

declare(strict_types=1);

/**
 * FastfoodHospitalitySectorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FastfoodHospitalitySectorType.
 *
 *
 */
class FastfoodHospitalitySectorType
{
    /**
     * Possible values of this enum
     */
    public const SNACKBAR = 'Snackbar';

    public const CAFETARIA_RESTARIA = 'CafetariaRestaria';

    public const LUNCHROOM_SANDWICH_SHOP = 'LunchroomSandwichShop';

    public const ICE_CREAM_PARLOR = 'IceCreamParlor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SNACKBAR,
            self::CAFETARIA_RESTARIA,
            self::LUNCHROOM_SANDWICH_SHOP,
            self::ICE_CREAM_PARLOR,
        ];
    }
}
