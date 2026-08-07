<?php

declare(strict_types=1);

/**
 * CommunicationLogBlobOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogBlobOrderByField.
 *
 * Order communicationLogBlob search results by the field indicated by CommunicationLogBlobOrderByField.
 */
class CommunicationLogBlobOrderByField
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
