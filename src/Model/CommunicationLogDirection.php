<?php

declare(strict_types=1);

/**
 * CommunicationLogDirection - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogDirection.
 *
 *
 */
class CommunicationLogDirection
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const INCOMING = 'Incoming';

    public const OUTGOING = 'Outgoing';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::INCOMING,
            self::OUTGOING,
        ];
    }
}
