<?php

declare(strict_types=1);

/**
 * InvoiceTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceTermField.
 *
 *
 */
class InvoiceTermField
{
    /**
     * Possible values of this enum
     */
    public const PURPOSE = 'Purpose';

    public const INVOICE_NUMBER = 'InvoiceNumber';

    public const STREET_NAME = 'StreetName';

    public const CUSTOMER_NAME = 'CustomerName';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURPOSE,
            self::INVOICE_NUMBER,
            self::STREET_NAME,
            self::CUSTOMER_NAME,
        ];
    }
}
