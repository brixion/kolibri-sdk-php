<?php

declare(strict_types=1);

/**
 * FileFormat - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FileFormat.
 *
 *
 */
class FileFormat
{
    /**
     * Possible values of this enum
     */
    public const DOCX = 'Docx';

    public const HTML = 'Html';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCX,
            self::HTML,
        ];
    }
}
