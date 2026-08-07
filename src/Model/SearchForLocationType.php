<?php

declare(strict_types=1);

/**
 * SearchForLocationType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchForLocationType.
 *
 *
 */
class SearchForLocationType
{
    /**
     * Possible values of this enum
     */
    public const PLACE = 'Place';

    public const POSTAL_CODE = 'PostalCode';

    public const POSTAL_CODE_RANGE = 'PostalCodeRange';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLACE,
            self::POSTAL_CODE,
            self::POSTAL_CODE_RANGE,
        ];
    }
}
