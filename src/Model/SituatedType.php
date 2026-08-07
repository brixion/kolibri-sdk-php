<?php

declare(strict_types=1);

/**
 * SituatedType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SituatedType.
 *
 *
 */
class SituatedType
{
    /**
     * Possible values of this enum
     */
    public const INDOOR = 'Indoor';

    public const EXTENSION = 'Extension';

    public const DETACHED = 'Detached';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDOOR,
            self::EXTENSION,
            self::DETACHED,
        ];
    }
}
