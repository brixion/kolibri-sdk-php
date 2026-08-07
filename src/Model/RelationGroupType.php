<?php

declare(strict_types=1);

/**
 * RelationGroupType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationGroupType.
 *
 *
 */
class RelationGroupType
{
    /**
     * Possible values of this enum
     */
    public const USER_DEFINED = 'UserDefined';

    public const HOUSE_HUNTERS = 'HouseHunters';

    public const WEBSITE_VISITORS = 'WebsiteVisitors';

    public const NOTARIES = 'Notaries';

    public const TENANTS = 'Tenants';

    public const PURCHASERS = 'Purchasers';

    public const LESSORS = 'Lessors';

    public const VENDORS = 'Vendors';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_DEFINED,
            self::HOUSE_HUNTERS,
            self::WEBSITE_VISITORS,
            self::NOTARIES,
            self::TENANTS,
            self::PURCHASERS,
            self::LESSORS,
            self::VENDORS,
        ];
    }
}
