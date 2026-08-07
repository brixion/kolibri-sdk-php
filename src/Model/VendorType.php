<?php

declare(strict_types=1);

/**
 * VendorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * VendorType.
 *
 * 
 */
class VendorType
{
    /**
     * Possible values of this enum
     */
    public const SELLER = 'Seller';

    public const VENDOR = 'Vendor';

    public const PROVIDER = 'Provider';

    public const CLIENT = 'Client';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELLER,
            self::VENDOR,
            self::PROVIDER,
            self::CLIENT
        ];
    }
}


