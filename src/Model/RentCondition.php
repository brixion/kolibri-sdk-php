<?php

declare(strict_types=1);

/**
 * RentCondition - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RentCondition.
 *
 *
 */
class RentCondition
{
    /**
     * Possible values of this enum
     */
    public const PRICE_PER_DAY = 'PricePerDay';

    public const PRICE_PER_WEEK = 'PricePerWeek';

    public const PRICE_PER_MONTH = 'PricePerMonth';

    public const PRICE_PER_QUARTER = 'PricePerQuarter';

    public const PRICE_PER_HALF_YEAR = 'PricePerHalfYear';

    public const PRICE_PER_YEAR = 'PricePerYear';

    public const PRICE_PER_CONTRACT = 'PricePerContract';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRICE_PER_DAY,
            self::PRICE_PER_WEEK,
            self::PRICE_PER_MONTH,
            self::PRICE_PER_QUARTER,
            self::PRICE_PER_HALF_YEAR,
            self::PRICE_PER_YEAR,
            self::PRICE_PER_CONTRACT,
        ];
    }
}
