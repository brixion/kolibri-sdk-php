<?php

declare(strict_types=1);

/**
 * TemplateDefinitionCategoryType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TemplateDefinitionCategoryType.
 *
 *
 */
class TemplateDefinitionCategoryType
{
    /**
     * Possible values of this enum
     */
    public const EMAIL_SIGNATURE = 'EmailSignature';

    public const EMAIL_TEMPLATE = 'EmailTemplate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EMAIL_SIGNATURE,
            self::EMAIL_TEMPLATE,
        ];
    }
}
