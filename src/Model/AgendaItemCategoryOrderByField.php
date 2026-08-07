<?php

declare(strict_types=1);

/**
 * AgendaItemCategoryOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemCategoryOrderByField.
 *
 * Order AgendaItemCategories search results by the field indicated by AgendaItemCategoryOrderByField.
 */
class AgendaItemCategoryOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DISPLAY_NAME = 'DisplayName';

    public const PARENT_TYPE = 'ParentType';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISPLAY_NAME,
            self::PARENT_TYPE,
        ];
    }
}
