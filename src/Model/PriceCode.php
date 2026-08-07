<?php

declare(strict_types=1);

/**
 * PriceCode - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PriceCode.
 *
 *
 */
class PriceCode
{
    /**
     * Possible values of this enum
     */
    public const HIGHER_BUDGET = 'HigherBudget';

    public const PUBLIC_AUCTION = 'PublicAuction';

    public const IN_CONSULTATION = 'InConsultation';

    public const TO_BE_NEGOTIATED = 'ToBeNegotiated';

    public const ON_REQUEST = 'OnRequest';

    public const ANY_PLAUSIBLE_BID = 'AnyPlausibleBid';

    public const FIXED_PRICE = 'FixedPrice';

    public const BY_TENDER = 'ByTender';

    public const ASKING_PRICE = 'AskingPrice';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HIGHER_BUDGET,
            self::PUBLIC_AUCTION,
            self::IN_CONSULTATION,
            self::TO_BE_NEGOTIATED,
            self::ON_REQUEST,
            self::ANY_PLAUSIBLE_BID,
            self::FIXED_PRICE,
            self::BY_TENDER,
            self::ASKING_PRICE,
        ];
    }
}
