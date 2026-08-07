<?php

declare(strict_types=1);

/**
 * LandPropertySubType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LandPropertySubType.
 *
 *
 */
class LandPropertySubType
{
    /**
     * Possible values of this enum
     */
    public const COMMERCIAL = 'Commercial';

    public const INDUSTRIAL = 'Industrial';

    public const MIXED_USE = 'MixedUse';

    public const FORESTLAND = 'Forestland';

    public const LAND_BY_WATER = 'LandByWater';

    public const LAND_WITHOUT_PURPOSE = 'LandWithoutPurpose';

    public const PROFIT_YIELDING_LAND = 'ProfitYieldingLand';

    public const RESIDENTIAL_LAND = 'ResidentialLand';

    public const SOCIAL_LAND = 'SocialLand';

    public const TRANSPORTATION_LAND = 'TransportationLand';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMMERCIAL,
            self::INDUSTRIAL,
            self::MIXED_USE,
            self::FORESTLAND,
            self::LAND_BY_WATER,
            self::LAND_WITHOUT_PURPOSE,
            self::PROFIT_YIELDING_LAND,
            self::RESIDENTIAL_LAND,
            self::SOCIAL_LAND,
            self::TRANSPORTATION_LAND,
        ];
    }
}
