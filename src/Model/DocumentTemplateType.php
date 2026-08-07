<?php

declare(strict_types=1);

/**
 * DocumentTemplateType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentTemplateType.
 *
 *
 */
class DocumentTemplateType
{
    /**
     * Possible values of this enum
     */
    public const BUY_AGREEMENT = 'BuyAgreement';

    public const FORM = 'Form';

    public const RENT_AGREEMENT = 'RentAgreement';

    public const MEDIATION_ASSIGNMENT = 'MediationAssignment';

    public const LEASE_AGREEMENT = 'LeaseAgreement';

    public const TAXATION = 'Taxation';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY_AGREEMENT,
            self::FORM,
            self::RENT_AGREEMENT,
            self::MEDIATION_ASSIGNMENT,
            self::LEASE_AGREEMENT,
            self::TAXATION,
            self::OTHER,
        ];
    }
}
