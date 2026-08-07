<?php

declare(strict_types=1);

/**
 * ContactLinkTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ContactLinkTermField.
 *
 *
 */
class ContactLinkTermField
{
    /**
     * Possible values of this enum
     */
    public const LINK_TYPE = 'LinkType';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LINK_TYPE,
        ];
    }
}
