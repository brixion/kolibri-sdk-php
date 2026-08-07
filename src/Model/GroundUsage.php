<?php

declare(strict_types=1);

/**
 * GroundUsage - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GroundUsage.
 *
 *
 */
class GroundUsage
{
    /**
     * Possible values of this enum
     */
    public const ASPARAGUS = 'Asparagus';

    public const FORESTLAND = 'Forestland';

    public const AGRICULTURAL_FARMLAND = 'AgriculturalFarmland';

    public const FRUIT = 'Fruit';

    public const GRASSLAND = 'Grassland';

    public const NURSERY = 'Nursery';

    public const HORTICULTURE = 'Horticulture';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASPARAGUS,
            self::FORESTLAND,
            self::AGRICULTURAL_FARMLAND,
            self::FRUIT,
            self::GRASSLAND,
            self::NURSERY,
            self::HORTICULTURE,
        ];
    }
}
