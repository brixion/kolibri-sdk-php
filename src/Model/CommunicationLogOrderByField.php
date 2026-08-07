<?php

declare(strict_types=1);

/**
 * CommunicationLogOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogOrderByField.
 *
 * Order communicationLog search results by the field indicated by CommunicationLogOrderByField.
 */
class CommunicationLogOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DATE = 'Date';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE,
        ];
    }
}
