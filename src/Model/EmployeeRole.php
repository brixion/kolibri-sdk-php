<?php

declare(strict_types=1);

/**
 * EmployeeRole - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EmployeeRole.
 *
 *
 */
class EmployeeRole
{
    /**
     * Possible values of this enum
     */
    public const STANDARD = 'Standard';

    public const BACK_OFFICE = 'BackOffice';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STANDARD,
            self::BACK_OFFICE,
        ];
    }
}
