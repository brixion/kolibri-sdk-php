<?php

declare(strict_types=1);

/**
 * TimelineActionType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineActionType.
 *
 *
 */
class TimelineActionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const AGENDA_ITEM = 'AgendaItem';

    public const INVOICE = 'Invoice';

    public const TASK = 'Task';

    public const EMAIL = 'Email';

    public const SEARCH_PROFILE = 'SearchProfile';

    public const CONTACT_ME = 'ContactMe';

    public const WEBSITE = 'Website';

    public const TRANSACTION = 'Transaction';

    public const COMMUNICATION_LOG = 'CommunicationLog';

    public const RELOCATION = 'Relocation';

    public const BID = 'Bid';

    public const KEY_NR_CHANGE = 'KeyNrChange';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::AGENDA_ITEM,
            self::INVOICE,
            self::TASK,
            self::EMAIL,
            self::SEARCH_PROFILE,
            self::CONTACT_ME,
            self::WEBSITE,
            self::TRANSACTION,
            self::COMMUNICATION_LOG,
            self::RELOCATION,
            self::BID,
            self::KEY_NR_CHANGE,
        ];
    }
}
