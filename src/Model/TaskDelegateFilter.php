<?php

declare(strict_types=1);

/**
 * TaskDelegateFilter - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TaskDelegateFilter.
 *
 * Search for a text in one of the fields indicated by the TaskTermField.
 */
class TaskDelegateFilter
{
    /**
     * Possible values of this enum
     */
    public const ASSIGNED_TO_ME = 'AssignedToMe';

    public const DELEGATED = 'Delegated';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSIGNED_TO_ME,
            self::DELEGATED,
        ];
    }
}
