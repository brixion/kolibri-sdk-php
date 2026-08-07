<?php

declare(strict_types=1);

/**
 * TakeOverSpecification - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TakeOverSpecification.
 *
 *
 */
class TakeOverSpecification
{
    /**
     * Possible values of this enum
     */
    public const STAYS_BEHIND = 'StaysBehind';

    public const GOES_ALONG = 'GoesAlong';

    public const DOES_NOT_APPLY = 'DoesNotApply';

    public const FOR_ACQUISITION = 'ForAcquisition';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAYS_BEHIND,
            self::GOES_ALONG,
            self::DOES_NOT_APPLY,
            self::FOR_ACQUISITION,
        ];
    }
}
