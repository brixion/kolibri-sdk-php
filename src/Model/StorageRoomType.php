<?php

declare(strict_types=1);

/**
 * StorageRoomType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * StorageRoomType.
 *
 *
 */
class StorageRoomType
{
    /**
     * Possible values of this enum
     */
    public const ATTACHED_STONE = 'AttachedStone';

    public const ATTACHED_WOOD = 'AttachedWood';

    public const DETACHED_STONE = 'DetachedStone';

    public const DETACHED_WOOD = 'DetachedWood';

    public const INDOOR = 'Indoor';

    public const BOX = 'Box';

    public const FREESTANDING_PLASTIC = 'FreestandingPlastic';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ATTACHED_STONE,
            self::ATTACHED_WOOD,
            self::DETACHED_STONE,
            self::DETACHED_WOOD,
            self::INDOOR,
            self::BOX,
            self::FREESTANDING_PLASTIC,
        ];
    }
}
