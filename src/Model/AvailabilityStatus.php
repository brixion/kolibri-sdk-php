<?php

declare(strict_types=1);

/**
 * AvailabilityStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AvailabilityStatus.
 *
 *
 */
class AvailabilityStatus
{
    /**
     * Possible values of this enum
     */
    public const AVAILABLE = 'Available';

    public const UNDER_BID = 'UnderBid';

    public const UNDER_OPTION = 'UnderOption';

    public const SOLD_UNDER_CONDITION = 'SoldUnderCondition';

    public const RENTED_UNDER_CONDITION = 'RentedUnderCondition';

    public const SOLD = 'Sold';

    public const RENTED = 'Rented';

    public const WITHDRAWN = 'Withdrawn';

    public const FARMED_UNDER_CONDITION = 'FarmedUnderCondition';

    public const FARMED = 'Farmed';

    public const LEASED_UNDER_CONDITION = 'LeasedUnderCondition';

    public const LEASED = 'Leased';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::UNDER_BID,
            self::UNDER_OPTION,
            self::SOLD_UNDER_CONDITION,
            self::RENTED_UNDER_CONDITION,
            self::SOLD,
            self::RENTED,
            self::WITHDRAWN,
            self::FARMED_UNDER_CONDITION,
            self::FARMED,
            self::LEASED_UNDER_CONDITION,
            self::LEASED,
        ];
    }
}
