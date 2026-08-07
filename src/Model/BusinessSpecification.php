<?php

declare(strict_types=1);

/**
 * BusinessSpecification - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BusinessSpecification.
 *
 *
 */
class BusinessSpecification
{
    /**
     * Possible values of this enum
     */
    public const GOODWILL = 'Goodwill';

    public const INVENTORY = 'Inventory';

    public const STAFF = 'Staff';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GOODWILL,
            self::INVENTORY,
            self::STAFF,
        ];
    }
}
