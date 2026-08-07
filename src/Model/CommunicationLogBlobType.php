<?php

declare(strict_types=1);

/**
 * CommunicationLogBlobType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogBlobType.
 *
 *
 */
class CommunicationLogBlobType
{
    /**
     * Possible values of this enum
     */
    public const ATTACHMENT = 'Attachment';

    public const CONTENT = 'Content';

    public const MAIL_MESSAGE = 'MailMessage';

    public const SMS_MESSAGE = 'SmsMessage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ATTACHMENT,
            self::CONTENT,
            self::MAIL_MESSAGE,
            self::SMS_MESSAGE,
        ];
    }
}
