<?php

declare(strict_types=1);

/**
 * ApartmentSort - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ApartmentSort.
 *
 *
 */
class ApartmentSort
{
    /**
     * Possible values of this enum
     */
    public const UPSTAIRS_APARTMENT = 'UpstairsApartment';

    public const GROUND_FLOOR_APARTMENT = 'GroundFloorApartment';

    public const MAISONETTE = 'Maisonette';

    public const GALLERY_FLAT = 'GalleryFlat';

    public const PORTICO_FLAT = 'PorticoFlat';

    public const UPSTAIRS_GROUND_FLOOR_APARTMENT = 'UpstairsGroundFloorApartment';

    public const PENTHOUSE = 'Penthouse';

    public const PORCH_APARTMENT = 'PorchApartment';

    public const STUDENT_ROOM = 'StudentRoom';

    public const DOUBLE_GROUND_FLOOR_APARTMENT = 'DoubleGroundFloorApartment';

    public const MEZZANINE = 'Mezzanine';

    public const MODERN_APARTMENT = 'ModernApartment';

    public const SOVIET_STYLE_APARTMENT = 'SovietStyleApartment';

    public const ITALIAN_YARD_APARTMENT = 'ItalianYardApartment';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPSTAIRS_APARTMENT,
            self::GROUND_FLOOR_APARTMENT,
            self::MAISONETTE,
            self::GALLERY_FLAT,
            self::PORTICO_FLAT,
            self::UPSTAIRS_GROUND_FLOOR_APARTMENT,
            self::PENTHOUSE,
            self::PORCH_APARTMENT,
            self::STUDENT_ROOM,
            self::DOUBLE_GROUND_FLOOR_APARTMENT,
            self::MEZZANINE,
            self::MODERN_APARTMENT,
            self::SOVIET_STYLE_APARTMENT,
            self::ITALIAN_YARD_APARTMENT,
        ];
    }
}
