<?php

declare(strict_types=1);

/**
 * EventMessageType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventMessageType.
 *
 *
 */
class EventMessageType
{
    /**
     * Possible values of this enum
     */
    public const MAIL = 'Mail';

    public const SUPPORT = 'Support';

    public const VIEWING = 'Viewing';

    public const CONTACT = 'Contact';

    public const WEBSITE_VISITOR = 'WebsiteVisitor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MAIL,
            self::SUPPORT,
            self::VIEWING,
            self::CONTACT,
            self::WEBSITE_VISITOR,
        ];
    }
}
