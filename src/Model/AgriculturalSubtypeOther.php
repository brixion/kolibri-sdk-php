<?php

declare(strict_types=1);

/**
 * AgriculturalSubtypeOther - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgriculturalSubtypeOther.
 *
 *
 */
class AgriculturalSubtypeOther
{
    /**
     * Possible values of this enum
     */
    public const SHEEP_FARM = 'SheepFarm';

    public const GOAT_FARM = 'GoatFarm';

    public const WORMS_FARM = 'WormsFarm';

    public const EEL_FARM = 'EelFarm';

    public const OTHER = 'Other';

    public const FISHERY = 'Fishery';

    public const LOT = 'Lot';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHEEP_FARM,
            self::GOAT_FARM,
            self::WORMS_FARM,
            self::EEL_FARM,
            self::OTHER,
            self::FISHERY,
            self::LOT,
        ];
    }
}
