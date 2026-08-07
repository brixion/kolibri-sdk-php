<?php

declare(strict_types=1);

/**
 * SaleCondition - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SaleCondition.
 *
 *
 */
class SaleCondition
{
    /**
     * Possible values of this enum
     */
    public const COSTS_BUYER = 'CostsBuyer';

    public const FREE_ON_NAME = 'FreeOnName';

    public const COSTS_SPLIT = 'CostsSplit';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COSTS_BUYER,
            self::FREE_ON_NAME,
            self::COSTS_SPLIT,
        ];
    }
}
