<?php

declare(strict_types=1);

/**
 * PaidFilter - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PaidFilter.
 *
 *
 */
class PaidFilter
{
    /**
     * Possible values of this enum
     */
    public const PAID_OR_NOT_PAID = 'PaidOrNotPaid';

    public const NOT_PAID_ONLY = 'NotPaidOnly';

    public const PAID_ONLY = 'PaidOnly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAID_OR_NOT_PAID,
            self::NOT_PAID_ONLY,
            self::PAID_ONLY,
        ];
    }
}
