<?php

declare(strict_types=1);

/**
 * ContractSource - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ContractSource.
 *
 *
 */
class ContractSource
{
    /**
     * Possible values of this enum
     */
    public const COLLEAGUE = 'Colleague';

    public const HOUSENET3 = 'Housenet3';

    public const WALK_IN = 'WalkIn';

    public const INTERNET = 'Internet';

    public const FRIEND = 'Friend';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COLLEAGUE,
            self::HOUSENET3,
            self::WALK_IN,
            self::INTERNET,
            self::FRIEND,
            self::OTHER,
        ];
    }
}
