<?php

declare(strict_types=1);

/**
 * CommissionPaidBy - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommissionPaidBy.
 *
 *
 */
class CommissionPaidBy
{
    /**
     * Possible values of this enum
     */
    public const OWNER = 'Owner';

    public const CUSTOMER = 'Customer';

    public const OWNER_AND_CUSTOMER = 'OwnerAndCustomer';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OWNER,
            self::CUSTOMER,
            self::OWNER_AND_CUSTOMER,
        ];
    }
}
