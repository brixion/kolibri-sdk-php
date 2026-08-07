<?php

declare(strict_types=1);

/**
 * SearchAssignmentPeculiarityType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentPeculiarityType.
 *
 *
 */
class SearchAssignmentPeculiarityType
{
    /**
     * Possible values of this enum
     */
    public const TARGET_GROUP_LISTING = 'TargetGroupListing';

    public const RECREATIONAL_LISTING = 'RecreationalListing';

    public const MONUMENTAL_LISTING = 'MonumentalListing';

    public const TIMESHARE_LISTING = 'TimeshareListing';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TARGET_GROUP_LISTING,
            self::RECREATIONAL_LISTING,
            self::MONUMENTAL_LISTING,
            self::TIMESHARE_LISTING,
        ];
    }
}
