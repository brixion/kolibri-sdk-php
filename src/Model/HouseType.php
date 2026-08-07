<?php

declare(strict_types=1);

/**
 * HouseType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HouseType.
 *
 *
 */
class HouseType
{
    /**
     * Possible values of this enum
     */
    public const DETACHED_HOUSE = 'DetachedHouse';

    public const LINKED_HOUSE = 'LinkedHouse';

    public const SEMI_DETACHED_HOUSE_ONE_ROOF = 'SemiDetachedHouseOneRoof';

    public const ROW_HOUSE_MIDDLE = 'RowHouseMiddle';

    public const ROW_HOUSE_CORNER = 'RowHouseCorner';

    public const ROW_HOUSE_END = 'RowHouseEnd';

    public const SEMI_DETACHED_HOUSE = 'SemiDetachedHouse';

    public const SEMI_DETACHED_LINKED_HOUSE_ONE_ROOF = 'SemiDetachedLinkedHouseOneRoof';

    public const OFFSET_HOUSE = 'OffsetHouse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DETACHED_HOUSE,
            self::LINKED_HOUSE,
            self::SEMI_DETACHED_HOUSE_ONE_ROOF,
            self::ROW_HOUSE_MIDDLE,
            self::ROW_HOUSE_CORNER,
            self::ROW_HOUSE_END,
            self::SEMI_DETACHED_HOUSE,
            self::SEMI_DETACHED_LINKED_HOUSE_ONE_ROOF,
            self::OFFSET_HOUSE,
        ];
    }
}
