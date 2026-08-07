<?php

declare(strict_types=1);

/**
 * KitchenType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * KitchenType.
 *
 *
 */
class KitchenType
{
    /**
     * Possible values of this enum
     */
    public const OPEN = 'Open';

    public const DINING = 'Dining';

    public const APPLIANCES = 'Appliances';

    public const CLOSED = 'Closed';

    public const SEMI_OPEN = 'SemiOpen';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
            self::DINING,
            self::APPLIANCES,
            self::CLOSED,
            self::SEMI_OPEN,
        ];
    }
}
