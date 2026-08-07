<?php

declare(strict_types=1);

/**
 * BatchOption - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BatchOption.
 *
 *
 */
class BatchOption
{
    /**
     * Possible values of this enum
     */
    public const TEMP_ACCESS_URL = 'TempAccessUrl';

    public const CONVERT_TO_PDF = 'ConvertToPdf';

    public const USE_DOSSIER_FILE_NAME = 'UseDossierFileName';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEMP_ACCESS_URL,
            self::CONVERT_TO_PDF,
            self::USE_DOSSIER_FILE_NAME,
        ];
    }
}
