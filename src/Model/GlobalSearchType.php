<?php

declare(strict_types=1);

/**
 * GlobalSearchType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GlobalSearchType.
 *
 *
 */
class GlobalSearchType
{
    /**
     * Possible values of this enum
     */
    public const RELATIONS = 'Relations';

    public const ASSIGNMENTS = 'Assignments';

    public const INVOICES = 'Invoices';

    public const TASKS = 'Tasks';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RELATIONS,
            self::ASSIGNMENTS,
            self::INVOICES,
            self::TASKS,
        ];
    }
}
