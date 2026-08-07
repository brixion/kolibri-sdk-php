<?php

declare(strict_types=1);

/**
 * CommunicationLogBlobTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogBlobTermField.
 *
 * Search for a text in one of the fields indicated by the CommunicationLogBlobTermField.
 */
class CommunicationLogBlobTermField
{
    /**
     * Possible values of this enum
     */
    public const FILE_NAME = 'FileName';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILE_NAME,
        ];
    }
}
