<?php

declare(strict_types=1);

/**
 * LeisureFacilityType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LeisureFacilityType.
 *
 *
 */
class LeisureFacilityType
{
    /**
     * Possible values of this enum
     */
    public const MINI_MARKET = 'MiniMarket';

    public const ELECTRICITY = 'Electricity';

    public const SEWAGE = 'Sewage';

    public const CATERING = 'Catering';

    public const TOILET_BUILDINGS = 'ToiletBuildings';

    public const SWIMMING_POOL = 'SwimmingPool';

    public const RECEPTION = 'Reception';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MINI_MARKET,
            self::ELECTRICITY,
            self::SEWAGE,
            self::CATERING,
            self::TOILET_BUILDINGS,
            self::SWIMMING_POOL,
            self::RECEPTION,
        ];
    }
}
