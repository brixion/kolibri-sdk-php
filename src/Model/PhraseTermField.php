<?php

declare(strict_types=1);

/**
 * PhraseTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PhraseTermField.
 *
 *
 */
class PhraseTermField
{
    /**
     * Possible values of this enum
     */
    public const TITLE = 'Title';

    public const DESCRIPTION = 'Description';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TITLE,
            self::DESCRIPTION,
        ];
    }
}
