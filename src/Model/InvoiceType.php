<?php

declare(strict_types=1);

/**
 * InvoiceType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceType.
 *
 *
 */
class InvoiceType
{
    /**
     * Possible values of this enum
     */
    public const BUSINESS_TO_CONSUMER_INVOICE = 'BusinessToConsumerInvoice';

    public const BUSINESS_TO_BUSINESS_INVOICE = 'BusinessToBusinessInvoice';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUSINESS_TO_CONSUMER_INVOICE,
            self::BUSINESS_TO_BUSINESS_INVOICE,
        ];
    }
}
