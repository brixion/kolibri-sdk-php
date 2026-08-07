<?php

declare(strict_types=1);

/**
 * CadastralLotSize - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CadastralLotSize.
 *
 *
 */
class CadastralLotSize
{
    /**
     * Possible values of this enum
     */
    public const PERPETUAL_LEASE = 'PerpetualLease';

    public const CONDOMINIUM = 'Condominium';

    public const MEMBERSHIP_RIGHTS = 'MembershipRights';

    public const ENTIRE_LOT = 'EntireLot';

    public const PARTIAL_LOT = 'PartialLot';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERPETUAL_LEASE,
            self::CONDOMINIUM,
            self::MEMBERSHIP_RIGHTS,
            self::ENTIRE_LOT,
            self::PARTIAL_LOT,
        ];
    }
}
