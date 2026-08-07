<?php

declare(strict_types=1);

/**
 * IntermediateForm - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * IntermediateForm.
 *
 *
 */
class IntermediateForm
{
    /**
     * Possible values of this enum
     */
    public const HOME_SALE_GUARANTEE = 'HomeSaleGuarantee';

    public const MGE = 'Mge';

    public const UNIT_BASED_SALES = 'UnitBasedSales';

    public const INTERMEDIATE_FORM_BUY_RENT = 'IntermediateFormBuyRent';

    public const DUO = 'Duo';

    public const STARTER_LOAN = 'StarterLoan';

    public const BUY_SUBSIDY = 'BuySubsidy';

    public const BUY_BACK_SCHEME = 'BuyBackScheme';

    public const BUY_START = 'BuyStart';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOME_SALE_GUARANTEE,
            self::MGE,
            self::UNIT_BASED_SALES,
            self::INTERMEDIATE_FORM_BUY_RENT,
            self::DUO,
            self::STARTER_LOAN,
            self::BUY_SUBSIDY,
            self::BUY_BACK_SCHEME,
            self::BUY_START,
        ];
    }
}
