<?php

declare(strict_types=1);

/**
 * MessageType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MessageType.
 *
 *
 */
class MessageType
{
    /**
     * Possible values of this enum
     */
    public const BACK_OFFICE = 'BackOffice';

    public const CONNECTOR = 'Connector';

    public const SUPPORT = 'Support';

    public const MEMBER = 'Member';

    public const SEARCH_PROFILE = 'SearchProfile';

    public const CONTACT_ME = 'ContactMe';

    public const BOOK_A_VISIT = 'BookAVisit';

    public const DOWNLOAD_BROCHURE = 'DownloadBrochure';

    public const OFFER_LISTING = 'OfferListing';

    public const FAILED_PUBLICATION = 'FailedPublication';

    public const SUCCESSFUL_PUBLICATION = 'SuccessfulPublication';

    public const MEMBER_DELETED = 'MemberDeleted';

    public const PERSONAL = 'Personal';

    public const COMPANY = 'Company';

    public const CONTACT_FORM = 'ContactForm';

    public const DOCUMENT_SIGNED = 'DocumentSigned';

    public const DOCUMENT_SIGN_DECLINED = 'DocumentSignDeclined';

    public const SIGN_DOCUMENT_EXPIRED = 'SignDocumentExpired';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BACK_OFFICE,
            self::CONNECTOR,
            self::SUPPORT,
            self::MEMBER,
            self::SEARCH_PROFILE,
            self::CONTACT_ME,
            self::BOOK_A_VISIT,
            self::DOWNLOAD_BROCHURE,
            self::OFFER_LISTING,
            self::FAILED_PUBLICATION,
            self::SUCCESSFUL_PUBLICATION,
            self::MEMBER_DELETED,
            self::PERSONAL,
            self::COMPANY,
            self::CONTACT_FORM,
            self::DOCUMENT_SIGNED,
            self::DOCUMENT_SIGN_DECLINED,
            self::SIGN_DOCUMENT_EXPIRED,
        ];
    }
}
