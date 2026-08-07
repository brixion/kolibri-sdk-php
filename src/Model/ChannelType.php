<?php

declare(strict_types=1);

/**
 * ChannelType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ChannelType.
 *
 *
 */
class ChannelType
{
    /**
     * Possible values of this enum
     */
    public const PERSONAL_REMINDERS = 'PersonalReminders';

    public const PERSONAL_MESSAGING = 'PersonalMessaging';

    public const COMPANY_MESSAGING = 'CompanyMessaging';

    public const COMPANY_PUBLICATIONS = 'CompanyPublications';

    public const COMPANY_PRESENCE = 'CompanyPresence';

    public const COMPANY_ENTITY = 'CompanyEntity';

    public const API_UPDATES = 'ApiUpdates';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERSONAL_REMINDERS,
            self::PERSONAL_MESSAGING,
            self::COMPANY_MESSAGING,
            self::COMPANY_PUBLICATIONS,
            self::COMPANY_PRESENCE,
            self::COMPANY_ENTITY,
            self::API_UPDATES,
        ];
    }
}
