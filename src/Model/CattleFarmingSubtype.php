<?php

declare(strict_types=1);

/**
 * CattleFarmingSubtype - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CattleFarmingSubtype.
 *
 *
 */
class CattleFarmingSubtype
{
    /**
     * Possible values of this enum
     */
    public const DAIRY_CATTLE = 'DairyCattle';

    public const SUCKLER_COWS = 'SucklerCows';

    public const VEAL_BULLS = 'VealBulls';

    public const BREEDING_YOUNG_CATTLE = 'BreedingYoungCattle';

    public const VEAL_CALVES = 'VealCalves';

    public const ROSE_CALVES = 'RoseCalves';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAIRY_CATTLE,
            self::SUCKLER_COWS,
            self::VEAL_BULLS,
            self::BREEDING_YOUNG_CATTLE,
            self::VEAL_CALVES,
            self::ROSE_CALVES,
        ];
    }
}
