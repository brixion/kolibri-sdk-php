<?php

declare(strict_types=1);

/**
 * KitchenFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * KitchenFacility.
 *
 *
 */
class KitchenFacility
{
    /**
     * Possible values of this enum
     */
    public const BUILT_IN_EQUIPMENT = 'BuiltInEquipment';

    public const COOKING_ISLAND = 'CookingIsland';

    public const RINSE_ISLAND = 'RinseIsland';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUILT_IN_EQUIPMENT,
            self::COOKING_ISLAND,
            self::RINSE_ISLAND,
        ];
    }
}
