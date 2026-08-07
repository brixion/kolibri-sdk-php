<?php

declare(strict_types=1);

/**
 * BatchItemType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BatchItemType.
 *
 *
 */
class BatchItemType
{
    /**
     * Possible values of this enum
     */
    public const DOCUMENT_SESSION = 'DocumentSession';

    public const DOSSIER_ITEM = 'DossierItem';

    public const INVOICE = 'Invoice';

    public const FILE = 'File';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCUMENT_SESSION,
            self::DOSSIER_ITEM,
            self::INVOICE,
            self::FILE,
        ];
    }
}
