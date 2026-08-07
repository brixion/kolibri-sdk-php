<?php

declare(strict_types=1);

/**
 * BidOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BidOrderByField.
 *
 *
 */
class BidOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DEFAULT_ORDER = 'DefaultOrder';

    public const AMOUNT = 'Amount';

    public const BID_DATE_TIME = 'BidDateTime';

    public const VALID_UNTIL = 'ValidUntil';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFAULT_ORDER,
            self::AMOUNT,
            self::BID_DATE_TIME,
            self::VALID_UNTIL,
        ];
    }
}
