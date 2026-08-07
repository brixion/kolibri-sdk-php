<?php

declare(strict_types=1);

/**
 * EventPublicationType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventPublicationType.
 *
 *
 */
class EventPublicationType
{
    /**
     * Possible values of this enum
     */
    public const SUCCESS = 'Success';

    public const ERROR = 'Error';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::ERROR,
        ];
    }
}
