<?php

declare(strict_types=1);

/**
 * PublicationStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PublicationStatus.
 *
 *
 */
class PublicationStatus
{
    /**
     * Possible values of this enum
     */
    public const INACTIVE = 'Inactive';

    public const PUBLISH_REQUEST_ENQUEUED = 'PublishRequestEnqueued';

    public const WAITING_FOR_EXCHANGE_ENTITY_CONTRACT = 'WaitingForExchangeEntityContract';

    public const WAITING_FOR_OBLIGATORY_PUBLICATIONS = 'WaitingForObligatoryPublications';

    public const PUBLISHED = 'Published';

    public const REJECTED = 'Rejected';

    public const WITHDRAWN = 'Withdrawn';

    public const OFFERED = 'Offered';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INACTIVE,
            self::PUBLISH_REQUEST_ENQUEUED,
            self::WAITING_FOR_EXCHANGE_ENTITY_CONTRACT,
            self::WAITING_FOR_OBLIGATORY_PUBLICATIONS,
            self::PUBLISHED,
            self::REJECTED,
            self::WITHDRAWN,
            self::OFFERED,
        ];
    }
}
