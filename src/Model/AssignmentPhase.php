<?php

declare(strict_types=1);

/**
 * AssignmentPhase - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentPhase.
 *
 *
 */
class AssignmentPhase
{
    /**
     * Possible values of this enum
     */
    public const CONCEPT = 'Concept';

    public const INITIATED = 'Initiated';

    public const COMPLETED = 'Completed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONCEPT,
            self::INITIATED,
            self::COMPLETED,
        ];
    }
}
