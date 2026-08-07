<?php

declare(strict_types=1);

/**
 * WithdrawReason - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * WithdrawReason.
 *
 * 
 */
class WithdrawReason
{
    /**
     * Possible values of this enum
     */
    public const REASON_FOR_MOVING_EXPIRED = 'ReasonForMovingExpired';

    public const ASKING_PRICE_NOT_MET = 'AskingPriceNotMet';

    public const RENEW_OBJECT_IN_MEDIA = 'RenewObjectInMedia';

    public const CHOSE_OTHER_REAL_ESTATE_AGENT = 'ChoseOtherRealEstateAgent';

    public const PURCHASED_BY_OWNER = 'PurchasedByOwner';

    public const SOLD_BY_OTHER_REAL_ESTATE_AGENT = 'SoldByOtherRealEstateAgent';

    public const OWNER_HAS_RENTED_PROPERTY = 'OwnerHasRentedProperty';

    public const LOGGED_OF_AS_BOG_OBJECT = 'LoggedOfAsBOGObject';

    public const WITHDRAWN_FROM_AUCTION = 'WithdrawnFromAuction';

    public const SELLER_CONTINUES_TO_INHABIT = 'SellerContinuesToInhabit';

    public const OBJECT_REGISTERED_TWICE = 'ObjectRegisteredTwice';

    public const ASSIGNMENT_TERMINATED_BY_REALTOR = 'AssignmentTerminatedByRealtor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REASON_FOR_MOVING_EXPIRED,
            self::ASKING_PRICE_NOT_MET,
            self::RENEW_OBJECT_IN_MEDIA,
            self::CHOSE_OTHER_REAL_ESTATE_AGENT,
            self::PURCHASED_BY_OWNER,
            self::SOLD_BY_OTHER_REAL_ESTATE_AGENT,
            self::OWNER_HAS_RENTED_PROPERTY,
            self::LOGGED_OF_AS_BOG_OBJECT,
            self::WITHDRAWN_FROM_AUCTION,
            self::SELLER_CONTINUES_TO_INHABIT,
            self::OBJECT_REGISTERED_TWICE,
            self::ASSIGNMENT_TERMINATED_BY_REALTOR
        ];
    }
}


