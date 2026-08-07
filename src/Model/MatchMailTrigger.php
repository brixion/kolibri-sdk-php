<?php

declare(strict_types=1);

/**
 * MatchMailTrigger - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MatchMailTrigger.
 *
 *
 */
class MatchMailTrigger
{
    /**
     * Possible values of this enum
     */
    public const ALL_CHANGES = 'AllChanges';

    public const PRICE_CHANGES = 'PriceChanges';

    public const PICTURE_CHANGES = 'PictureChanges';

    public const PICTURE_AND_PRICE_CHANGES = 'PictureAndPriceChanges';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_CHANGES,
            self::PRICE_CHANGES,
            self::PICTURE_CHANGES,
            self::PICTURE_AND_PRICE_CHANGES,
        ];
    }
}
