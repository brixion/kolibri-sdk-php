<?php

declare(strict_types=1);

/**
 * ActiveFilter - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ActiveFilter.
 *
 *
 */
class ActiveFilter
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE_OR_INACTIVE = 'ActiveOrInactive';

    public const ACTIVE_ONLY = 'ActiveOnly';

    public const INACTIVE_ONLY = 'InactiveOnly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE_OR_INACTIVE,
            self::ACTIVE_ONLY,
            self::INACTIVE_ONLY,
        ];
    }
}
