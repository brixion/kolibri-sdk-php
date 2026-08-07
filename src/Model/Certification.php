<?php

declare(strict_types=1);

/**
 * Certification - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Certification.
 *
 *
 */
class Certification
{
    /**
     * Possible values of this enum
     */
    public const ADAPTED_PROPERTY = 'AdaptedProperty';

    public const POLICE = 'Police';

    public const FIRE_SAFETY = 'FireSafety';

    public const GENERAL_HOME_INSPECTION = 'GeneralHomeInspection';

    public const ENERGY_PERFORMANCE_CERTIFICATE = 'EnergyPerformanceCertificate';

    public const BUILDING_INSPECTION = 'BuildingInspection';

    public const HOME_WARRANTY = 'HomeWarranty';

    public const HOME_WARRANTY_CERTIFICATE = 'HomeWarrantyCertificate';

    public const SECURITY = 'Security';

    public const CERTIFICATE_OF_OCCUPANCY = 'CertificateOfOccupancy';

    public const ENERGY_LABEL = 'EnergyLabel';

    public const NEIGHBORHOOD_WATCH = 'NeighborhoodWatch';

    public const STAIRWELL_LOCKED = 'StairwellLocked';

    public const SECURITY_GUARD = 'SecurityGuard';

    public const SECURITY_SYSTEM = 'SecuritySystem';

    public const SECURITY_DOOR = 'SecurityDoor';

    public const VIDEO_CAMERA = 'VideoCamera';

    public const MEASUREMENT_CERTIFICATE = 'MeasurementCertificate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADAPTED_PROPERTY,
            self::POLICE,
            self::FIRE_SAFETY,
            self::GENERAL_HOME_INSPECTION,
            self::ENERGY_PERFORMANCE_CERTIFICATE,
            self::BUILDING_INSPECTION,
            self::HOME_WARRANTY,
            self::HOME_WARRANTY_CERTIFICATE,
            self::SECURITY,
            self::CERTIFICATE_OF_OCCUPANCY,
            self::ENERGY_LABEL,
            self::NEIGHBORHOOD_WATCH,
            self::STAIRWELL_LOCKED,
            self::SECURITY_GUARD,
            self::SECURITY_SYSTEM,
            self::SECURITY_DOOR,
            self::VIDEO_CAMERA,
            self::MEASUREMENT_CERTIFICATE,
        ];
    }
}
