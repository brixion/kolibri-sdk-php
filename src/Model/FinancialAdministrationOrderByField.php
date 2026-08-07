<?php

declare(strict_types=1);

/**
 * FinancialAdministrationOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FinancialAdministrationOrderByField.
 *
 * Order FinancialAdministration search results by the field indicated by FinancialAdministration OrderByField.
 */
class FinancialAdministrationOrderByField
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
        ];
    }
}
