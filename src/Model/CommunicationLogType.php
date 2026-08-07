<?php

declare(strict_types=1);

/**
 * CommunicationLogType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogType.
 *
 *
 */
class CommunicationLogType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const EMAIL = 'Email';

    public const PHONE_CALL = 'PhoneCall';

    public const SMS = 'Sms';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::EMAIL,
            self::PHONE_CALL,
            self::SMS,
        ];
    }
}
