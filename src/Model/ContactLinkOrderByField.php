<?php

declare(strict_types=1);

/**
 * ContactLinkOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ContactLinkOrderByField.
 *
 *
 */
class ContactLinkOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DISPLAY_NAME = 'DisplayName';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISPLAY_NAME,
        ];
    }
}
