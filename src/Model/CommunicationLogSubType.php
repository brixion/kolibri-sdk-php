<?php

declare(strict_types=1);

/**
 * CommunicationLogSubType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogSubType.
 *
 *
 */
class CommunicationLogSubType
{
    /**
     * Possible values of this enum
     */
    public const CONFIRMATION = 'Confirmation';

    public const CANCELLATION = 'Cancellation';

    public const REMINDER = 'Reminder';

    public const INVITATION = 'Invitation';

    public const FOLLOW_UP = 'FollowUp';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONFIRMATION,
            self::CANCELLATION,
            self::REMINDER,
            self::INVITATION,
            self::FOLLOW_UP,
        ];
    }
}
