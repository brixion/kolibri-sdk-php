<?php

declare(strict_types=1);

/**
 * FolderTreeFileType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FolderTreeFileType.
 *
 *
 */
class FolderTreeFileType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const DOCUMENT_SESSION = 'DocumentSession';

    public const INVOICE = 'Invoice';

    public const DOSSIER_ITEM = 'DossierItem';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::DOCUMENT_SESSION,
            self::INVOICE,
            self::DOSSIER_ITEM,
        ];
    }
}
