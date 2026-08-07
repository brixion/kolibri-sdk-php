<?php

declare(strict_types=1);

/**
 * BidStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BidStatus.
 *
 *
 */
class BidStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'Active';

    public const DENIED = 'Denied';

    public const EXPIRED = 'Expired';

    public const ACCEPTED = 'Accepted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::DENIED,
            self::EXPIRED,
            self::ACCEPTED,
        ];
    }
}
