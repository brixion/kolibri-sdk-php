<?php

declare(strict_types=1);

/**
 * PigCompanyType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PigCompanyType.
 *
 *
 */
class PigCompanyType
{
    /**
     * Possible values of this enum
     */
    public const SOWS = 'Sows';

    public const MEAT = 'Meat';

    public const SOWS_AND_MEAT = 'SowsAndMeat';

    public const BREEDING = 'Breeding';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOWS,
            self::MEAT,
            self::SOWS_AND_MEAT,
            self::BREEDING,
        ];
    }
}
