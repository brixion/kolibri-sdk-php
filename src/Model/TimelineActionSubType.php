<?php

declare(strict_types=1);

/**
 * TimelineActionSubType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineActionSubType.
 *
 *
 */
class TimelineActionSubType
{
    /**
     * Possible values of this enum
     */
    public const MANDATE = 'Mandate';

    public const DATE_WITHDRAWN = 'DateWithdrawn';

    public const DATE_AUCTION = 'DateAuction';

    public const ENDDATE_RESERVATION = 'EnddateReservation';

    public const DATE_AGREEMENTDATE = 'DateAgreementdate';

    public const DATE_SOLD = 'DateSold';

    public const DATE_TRANSFER = 'DateTransfer';

    public const ENDDATE_BANK_WARRANTY = 'EnddateBankWarranty';

    public const DATE_RENTED = 'DateRented';

    public const PRICE_CHANGE = 'PriceChange';

    public const EMAIL = 'Email';

    public const PHONE_CALL = 'PhoneCall';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANDATE,
            self::DATE_WITHDRAWN,
            self::DATE_AUCTION,
            self::ENDDATE_RESERVATION,
            self::DATE_AGREEMENTDATE,
            self::DATE_SOLD,
            self::DATE_TRANSFER,
            self::ENDDATE_BANK_WARRANTY,
            self::DATE_RENTED,
            self::PRICE_CHANGE,
            self::EMAIL,
            self::PHONE_CALL,
        ];
    }
}
