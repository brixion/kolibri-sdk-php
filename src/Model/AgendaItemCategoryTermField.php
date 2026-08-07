<?php

declare(strict_types=1);

/**
 * AgendaItemCategoryTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemCategoryTermField.
 *
 * Search for a text in one of the fields indicated by the AgendaItemCategoryTermField.
 */
class AgendaItemCategoryTermField
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
