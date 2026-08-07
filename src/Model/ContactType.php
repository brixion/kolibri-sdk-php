<?php

declare(strict_types=1);

/**
 * ContactType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ContactType.
 *
 *
 */
class ContactType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const SEEKER = 'Seeker';

    public const MEMBER = 'Member';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::SEEKER,
            self::MEMBER,
        ];
    }
}
