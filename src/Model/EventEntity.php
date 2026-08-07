<?php

declare(strict_types=1);

/**
 * EventEntity - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventEntity.
 *
 *
 */
class EventEntity
{
    /**
     * Possible values of this enum
     */
    public const TASK = 'Task';

    public const OBJECT_ASSIGNMENT = 'ObjectAssignment';

    public const DOCUMENT_SESSION = 'DocumentSession';

    public const COMMUNICATION_LOG = 'CommunicationLog';

    public const COMMUNICATION_LOG_BLOB = 'CommunicationLogBlob';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TASK,
            self::OBJECT_ASSIGNMENT,
            self::DOCUMENT_SESSION,
            self::COMMUNICATION_LOG,
            self::COMMUNICATION_LOG_BLOB,
        ];
    }
}
