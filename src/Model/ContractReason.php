<?php

declare(strict_types=1);

/**
 * ContractReason - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ContractReason.
 *
 *
 */
class ContractReason
{
    /**
     * Possible values of this enum
     */
    public const FOR_SALE = 'ForSale';

    public const FOR_RENT = 'ForRent';

    public const FOR_SALES_RENTAL = 'ForSalesRental';

    public const SOLD = 'Sold';

    public const LEASE = 'Lease';

    public const THIRD_PARTY_SALE = 'ThirdPartySale';

    public const THIRD_PARTY_LEASE = 'ThirdPartyLease';

    public const SALES_AUCTION = 'SalesAuction';

    public const REGISTRATION = 'Registration';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FOR_SALE,
            self::FOR_RENT,
            self::FOR_SALES_RENTAL,
            self::SOLD,
            self::LEASE,
            self::THIRD_PARTY_SALE,
            self::THIRD_PARTY_LEASE,
            self::SALES_AUCTION,
            self::REGISTRATION,
        ];
    }
}
