<?php

declare(strict_types=1);

/**
 * HorticulturalCompanyType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HorticulturalCompanyType.
 *
 *
 */
class HorticulturalCompanyType
{
    /**
     * Possible values of this enum
     */
    public const GREENHOUSE = 'Greenhouse';

    public const GROUND = 'Ground';

    public const FRUIT_GROWING = 'FruitGrowing';

    public const MUSHROOM_CULTIVATION = 'MushroomCultivation';

    public const TREE_NURSERY = 'TreeNursery';

    public const FLOWER_BULBS = 'FlowerBulbs';

    public const GREENHOUSE_HORTICULTURE = 'GreenhouseHorticulture';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GREENHOUSE,
            self::GROUND,
            self::FRUIT_GROWING,
            self::MUSHROOM_CULTIVATION,
            self::TREE_NURSERY,
            self::FLOWER_BULBS,
            self::GREENHOUSE_HORTICULTURE,
        ];
    }
}
