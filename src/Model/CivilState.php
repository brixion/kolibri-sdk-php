<?php

declare(strict_types=1);

/**
 * CivilState - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CivilState.
 *
 *
 */
class CivilState
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const SINGLE = 'Single';

    public const UNMARRIED = 'Unmarried';

    public const MARRIED_WITH_CONDITIONS = 'MarriedWithConditions';

    public const MARRIED_IN_COMMUNITY_OF_PROPERTY = 'MarriedInCommunityOfProperty';

    public const LIVING_TOGETHER_IN_CIVIL_PARTNERSHIP = 'LivingTogetherInCivilPartnership';

    public const LIVING_TOGETHER_WITHOUT_CIVIL_PARTNERSHIP = 'LivingTogetherWithoutCivilPartnership';

    public const PARTNER_REGISTRATION_IN_COMMUNITY_OF_PROPERTY = 'PartnerRegistrationInCommunityOfProperty';

    public const PARTNER_REGISTRATION_WITH_TERM_LIFE_INSURANCE = 'PartnerRegistrationWithTermLifeInsurance';

    public const PARTNER_REGISTRATION_PARTNERSHIP_WITH_CONDITIONS = 'PartnerRegistrationPartnershipWithConditions';

    public const WIDOWER = 'Widower';

    public const WIDOW = 'Widow';

    public const DIVORCED = 'Divorced';

    public const MARRIED = 'Married';

    public const MARRIED_IN_LIMITED_COMMUNITY_OF_PROPERTY = 'MarriedInLimitedCommunityOfProperty';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::SINGLE,
            self::UNMARRIED,
            self::MARRIED_WITH_CONDITIONS,
            self::MARRIED_IN_COMMUNITY_OF_PROPERTY,
            self::LIVING_TOGETHER_IN_CIVIL_PARTNERSHIP,
            self::LIVING_TOGETHER_WITHOUT_CIVIL_PARTNERSHIP,
            self::PARTNER_REGISTRATION_IN_COMMUNITY_OF_PROPERTY,
            self::PARTNER_REGISTRATION_WITH_TERM_LIFE_INSURANCE,
            self::PARTNER_REGISTRATION_PARTNERSHIP_WITH_CONDITIONS,
            self::WIDOWER,
            self::WIDOW,
            self::DIVORCED,
            self::MARRIED,
            self::MARRIED_IN_LIMITED_COMMUNITY_OF_PROPERTY,
        ];
    }
}
