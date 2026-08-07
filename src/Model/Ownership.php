<?php

declare(strict_types=1);

/**
 * Ownership - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Ownership.
 *
 *
 */
class Ownership
{
    /**
     * Possible values of this enum
     */
    public const PROPERTY = 'Property';

    public const RENT = 'Rent';

    public const LEASE = 'Lease';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROPERTY,
            self::RENT,
            self::LEASE,
        ];
    }
}
