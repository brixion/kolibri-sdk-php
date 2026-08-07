<?php

declare(strict_types=1);

/**
 * InvoiceDueTerm - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvoiceDueTerm.
 *
 *
 */
class InvoiceDueTerm
{
    /**
     * Possible values of this enum
     */
    public const AFTER3_DAYS = 'After3Days';

    public const AFTER7_DAYS = 'After7Days';

    public const AFTER14_DAYS = 'After14Days';

    public const AFTER21_DAYS = 'After21Days';

    public const AFTER28_DAYS = 'After28Days';

    public const AFTER1_MONTH = 'After1Month';

    public const AFTER2_MONTHS = 'After2Months';

    public const TRANSPORT_DATE = 'TransportDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AFTER3_DAYS,
            self::AFTER7_DAYS,
            self::AFTER14_DAYS,
            self::AFTER21_DAYS,
            self::AFTER28_DAYS,
            self::AFTER1_MONTH,
            self::AFTER2_MONTHS,
            self::TRANSPORT_DATE,
        ];
    }
}
