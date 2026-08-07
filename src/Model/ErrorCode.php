<?php

declare(strict_types=1);

/**
 * ErrorCode - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ErrorCode.
 *
 *
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const NOT_FOUND = 'NotFound';

    public const INVALID_MODEL_STATE = 'InvalidModelState';

    public const BROKEN_BUSINESS_RULES = 'BrokenBusinessRules';

    public const UNAUTHORIZED_DATA_ACCESS = 'UnauthorizedDataAccess';

    public const NO_PERMISSION = 'NoPermission';

    public const NO_CONSENT = 'NoConsent';

    public const NULL_MODEL_STATE = 'NullModelState';

    public const USER_UNKNOWN = 'UserUnknown';

    public const BLOB_ALREADY_EXISTS = 'BlobAlreadyExists';

    public const BAD_REQUEST = 'BadRequest';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::NOT_FOUND,
            self::INVALID_MODEL_STATE,
            self::BROKEN_BUSINESS_RULES,
            self::UNAUTHORIZED_DATA_ACCESS,
            self::NO_PERMISSION,
            self::NO_CONSENT,
            self::NULL_MODEL_STATE,
            self::USER_UNKNOWN,
            self::BLOB_ALREADY_EXISTS,
            self::BAD_REQUEST,
        ];
    }
}
