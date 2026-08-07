<?php

declare(strict_types=1);

/**
 * InvoiceOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceOrderByField.
 *
 * Order task search results by the field indicated by TaskOrderByField.
 */
class InvoiceOrderByField
{
    /**
     * Possible values of this enum
     */
    public const CREATION_DATE = 'CreationDate';

    public const INVOICE_DATE = 'InvoiceDate';

    public const INVOICE_AMOUNT = 'InvoiceAmount';

    public const INVOICE_NUMBER = 'InvoiceNumber';

    public const INVOICE_DUE_DATE = 'InvoiceDueDate';

    public const INVOICE_STATUS = 'InvoiceStatus';

    public const OVER_DUE_INVOICES = 'OverDueInvoices';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATION_DATE,
            self::INVOICE_DATE,
            self::INVOICE_AMOUNT,
            self::INVOICE_NUMBER,
            self::INVOICE_DUE_DATE,
            self::INVOICE_STATUS,
            self::OVER_DUE_INVOICES,
        ];
    }
}
