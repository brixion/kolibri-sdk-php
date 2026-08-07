<?php

declare(strict_types=1);

/**
 * AroActionType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AroActionType.
 *
 *
 */
class AroActionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const APPOINTMENT = 'APPOINTMENT';

    public const TASK = 'TASK';

    public const ELSLABEL = 'ELSLABEL';

    public const EMAIL = 'EMAIL';

    public const SMS = 'SMS';

    public const MATCHMAIL = 'MATCHMAIL';

    public const SEARCHPROFILE = 'SEARCHPROFILE';

    public const TAXATION = 'TAXATION';

    public const CONTACTME = 'CONTACTME';

    public const WEBSITE = 'WEBSITE';

    public const INVOICE = 'INVOICE';

    public const RELOCATION = 'RELOCATION';

    public const KEYNRCHANGE = 'KEYNRCHANGE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::APPOINTMENT,
            self::TASK,
            self::ELSLABEL,
            self::EMAIL,
            self::SMS,
            self::MATCHMAIL,
            self::SEARCHPROFILE,
            self::TAXATION,
            self::CONTACTME,
            self::WEBSITE,
            self::INVOICE,
            self::RELOCATION,
            self::KEYNRCHANGE,
        ];
    }
}
