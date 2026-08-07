<?php

declare(strict_types=1);

/**
 * BuyerType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BuyerType.
 *
 *
 */
class BuyerType
{
    /**
     * Possible values of this enum
     */
    public const STARTER = 'Starter';

    public const MOVING_ON = 'MovingOn';

    public const EXISTING_TENANT = 'ExistingTenant';

    public const INVESTOR = 'Investor';

    public const EXPAT = 'Expat';

    public const PARENT = 'Parent';

    public const SECOND_HOUSE = 'SecondHouse';

    public const FARMER = 'Farmer';

    public const PRIVATE_INDIVIDUAL = 'PrivateIndividual';

    public const PROJECT_DEVELOPER = 'ProjectDeveloper';

    public const TENANT = 'Tenant';

    public const GOVERNMENT = 'Government';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STARTER,
            self::MOVING_ON,
            self::EXISTING_TENANT,
            self::INVESTOR,
            self::EXPAT,
            self::PARENT,
            self::SECOND_HOUSE,
            self::FARMER,
            self::PRIVATE_INDIVIDUAL,
            self::PROJECT_DEVELOPER,
            self::TENANT,
            self::GOVERNMENT,
            self::OTHER,
        ];
    }
}
