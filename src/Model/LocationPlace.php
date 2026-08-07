<?php

declare(strict_types=1);

/**
 * LocationPlace - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LocationPlace.
 *
 *
 */
class LocationPlace
{
    /**
     * Possible values of this enum
     */
    public const FOREST_EDGE = 'ForestEdge';

    public const WATERSIDE = 'Waterside';

    public const PARK = 'Park';

    public const ON_BUSY_STREET = 'OnBusyStreet';

    public const ON_QUIET_STREET = 'OnQuietStreet';

    public const CENTRAL_CITY_CENTER = 'CentralCityCenter';

    public const RESIDENTIAL_AREA = 'ResidentialArea';

    public const UNOBSTRUCTED_VIEW = 'UnobstructedView';

    public const SHELTERED_LOCATION = 'ShelteredLocation';

    public const OPEN_AREA = 'OpenArea';

    public const OUTSIDE_VILLAGE = 'OutsideVillage';

    public const ON_WATERWAY = 'OnWaterway';

    public const FORESTED_AREA = 'ForestedArea';

    public const NEAR_RAILWAY_STATION = 'NearRailwayStation';

    public const SUBURB = 'Suburb';

    public const BUSINESS_PARK = 'BusinessPark';

    public const OTHER = 'Other';

    public const LRTE = 'LRTE';

    public const HARBOR_AREA = 'HarborArea';

    public const INDUSTRIAL_AREA = 'IndustrialArea';

    public const OFFICE_PARK = 'OfficePark';

    public const PRTE = 'PRTE';

    public const SHOPPING_CENTER = 'ShoppingCenter';

    public const COUNTRYSIDE = 'Countryside';

    public const NEAR_HIGHWAY = 'NearHighway';

    public const NEAR_PUBLIC_TRANSPORT = 'NearPublicTransport';

    public const NEAR_SCHOOL = 'NearSchool';

    public const SEASIDE = 'Seaside';

    public const SECLUDED_LOCATION = 'SecludedLocation';

    public const STANDALONE = 'Standalone';

    public const SUB_DIVISION = 'SubDivision';

    public const FURNITURE_BOULEVARD = 'FurnitureBoulevard';

    public const INDOOR_SHOPPING = 'IndoorShopping';

    public const SEA_VIEW = 'SeaView';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FOREST_EDGE,
            self::WATERSIDE,
            self::PARK,
            self::ON_BUSY_STREET,
            self::ON_QUIET_STREET,
            self::CENTRAL_CITY_CENTER,
            self::RESIDENTIAL_AREA,
            self::UNOBSTRUCTED_VIEW,
            self::SHELTERED_LOCATION,
            self::OPEN_AREA,
            self::OUTSIDE_VILLAGE,
            self::ON_WATERWAY,
            self::FORESTED_AREA,
            self::NEAR_RAILWAY_STATION,
            self::SUBURB,
            self::BUSINESS_PARK,
            self::OTHER,
            self::LRTE,
            self::HARBOR_AREA,
            self::INDUSTRIAL_AREA,
            self::OFFICE_PARK,
            self::PRTE,
            self::SHOPPING_CENTER,
            self::COUNTRYSIDE,
            self::NEAR_HIGHWAY,
            self::NEAR_PUBLIC_TRANSPORT,
            self::NEAR_SCHOOL,
            self::SEASIDE,
            self::SECLUDED_LOCATION,
            self::STANDALONE,
            self::SUB_DIVISION,
            self::FURNITURE_BOULEVARD,
            self::INDOOR_SHOPPING,
            self::SEA_VIEW,
        ];
    }
}
