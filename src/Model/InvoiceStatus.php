<?php

declare(strict_types=1);

/**
 * InvoiceStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceStatus.
 *
 *
 */
class InvoiceStatus
{
    /**
     * Possible values of this enum
     */
    public const DRAFT = 'Draft';

    public const OPEN = 'Open';

    public const OPEN_FIRST_REMINDER = 'OpenFirstReminder';

    public const OPEN_SECOND_REMINDER = 'OpenSecondReminder';

    public const OPEN_COLLECTION_AGENCY = 'OpenCollectionAgency';

    public const PAID = 'Paid';

    public const NOTARY = 'Notary';

    public const OPEN_PAYMENT_ARRANGEMENT = 'OpenPaymentArrangement';

    public const CREDITED = 'Credited';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::OPEN,
            self::OPEN_FIRST_REMINDER,
            self::OPEN_SECOND_REMINDER,
            self::OPEN_COLLECTION_AGENCY,
            self::PAID,
            self::NOTARY,
            self::OPEN_PAYMENT_ARRANGEMENT,
            self::CREDITED,
        ];
    }
}
