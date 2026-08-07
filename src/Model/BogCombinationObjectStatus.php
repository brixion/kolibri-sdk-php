<?php

declare(strict_types=1);

/**
 * BogCombinationObjectStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BogCombinationObjectStatus.
 *
 *
 */
class BogCombinationObjectStatus
{
    /**
     * Possible values of this enum
     */
    public const PRESENT = 'Present';

    public const POSSIBLE = 'Possible';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRESENT,
            self::POSSIBLE,
        ];
    }
}
