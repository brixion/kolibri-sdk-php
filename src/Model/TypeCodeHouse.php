<?php

declare(strict_types=1);

/**
 * TypeCodeHouse - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeCodeHouse.
 *
 * 
 */
class TypeCodeHouse
{
    /**
     * Possible values of this enum
     */
    public const A_SPECIAL_ARCHITECTURAL_RESIDENCE = 'A_SpecialArchitecturalResidence';

    public const A_BUNGALOW = 'A_Bungalow';

    public const A_DYKE_HOUSE = 'A_DykeHouse';

    public const A_DRIVEIN_RESIDENCE = 'A_DriveinResidence';

    public const A_END_HOUSE = 'A_EndHouse';

    public const A_CONNECTED_BUNGALOW = 'A_ConnectedBungalow';

    public const A_CONNECTED_SEMI_DETACHED = 'A_ConnectedSemiDetached';

    public const A_CONNECTED_HOUSE = 'A_ConnectedHouse';

    public const A_MANSION = 'A_Mansion';

    public const A_CORNER_HOUSE = 'A_CornerHouse';

    public const A_ALMS_HOUSE = 'A_AlmsHouse';

    public const A_KWADRANT_WONING = 'A_KwadrantWoning';

    public const A_PATIO_BUNGALOW = 'A_PatioBungalow';

    public const A_PATIO_HOUSE = 'A_PatioHouse';

    public const A_PRACTICE_HOUSE = 'A_PracticeHouse';

    public const A_SEMI_BUNGALOW = 'A_SemiBungalow';

    public const A_SPLITLEVEL_HOUSE = 'A_SplitlevelHouse';

    public const A_INTERMEDIATE_HOUSE = 'A_IntermediateHouse';

    public const A_SEMI_DETACHED_HOUSE = 'A_SemiDetachedHouse';

    public const A_VILLA = 'A_Villa';

    public const A_DETACHED_HOUSE = 'A_DetachedHouse';

    public const A_MOBILE_HOME = 'A_MobileHome';

    public const B_BUSSINESS_OR_PROFIT_HOUSE = 'B_BussinessOrProfitHouse';

    public const B_FARM = 'B_Farm';

    public const B_BUNGALOW = 'B_Bungalow';

    public const B_DYKE_HOUSE = 'B_DykeHouse';

    public const B_END_HOUSE = 'B_EndHouse';

    public const B_CONNECTED_SEMI_DETACHED = 'B_ConnectedSemiDetached';

    public const B_CONNECTED_HOUSE = 'B_ConnectedHouse';

    public const B_CANAL_HOUSE = 'B_CanalHouse';

    public const B_HALF_DETACHED_HOUSE = 'B_HalfDetachedHouse';

    public const B_MANSION = 'B_Mansion';

    public const B_CORNER_HOUSE = 'B_CornerHouse';

    public const B_ESTATE = 'B_Estate';

    public const B_COUNTRY_HOUSE = 'B_CountryHouse';

    public const B_BERTH = 'B_Berth';

    public const B_MILL = 'B_Mill';

    public const B_PRACTISE_HOUSE = 'B_PractiseHouse';

    public const B_SEMI_BUNGALOW = 'B_SemiBungalow';

    public const B_INTERMEDIATE_HOUSE = 'B_IntermediateHouse';

    public const B_SEMI_DETACHED_HOUSE = 'B_SemiDetachedHouse';

    public const B_VILLA = 'B_Villa';

    public const B_DETACHED_HOUSE = 'B_DetachedHouse';

    public const B_WATER_HOUSE = 'B_WaterHouse';

    public const B_FARM_HOUSE = 'B_FarmHouse';

    public const B_HOUSE_BOAT = 'B_HouseBoat';

    public const B_MOBILE_HOME = 'B_MobileHome';

    public const B_MOBILE_HOME_PITCH = 'B_MobileHomePitch';

    public const B_LIVING_SHOP = 'B_LivingShop';

    public const C_BUNGALOW = 'C_Bungalow';

    public const C_END_HOUSE = 'C_EndHouse';

    public const C_CONNECTED_BUNGALOW = 'C_ConnectedBungalow';

    public const C_CONNECTED_SEMI_DETACHED = 'C_ConnectedSemiDetached';

    public const C_CONNECTED_HOUSE = 'C_ConnectedHouse';

    public const C_CORNER_HOUSE = 'C_CornerHouse';

    public const C_SEMI_BUNGALOW = 'C_SemiBungalow';

    public const C_INTERMEDIATE_HOUSE = 'C_IntermediateHouse';

    public const C_SEMI_DETACHED = 'C_SemiDetached';

    public const C_VILLA = 'C_Villa';

    public const C_DETACHED_HOUSE = 'C_DetachedHouse';

    public const C_MOBILE_HOUSE = 'C_MobileHouse';

    public const D_BUNGALOW = 'D_Bungalow';

    public const D_HALF_DETACHED_HOUSE = 'D_HalfDetachedHouse';

    public const D_BERTH = 'D_Berth';

    public const D_SEMI_BUNGALOW = 'D_SemiBungalow';

    public const D_SEMI_DETACHED_HOUSE = 'D_SemiDetachedHouse';

    public const D_VILLA = 'D_Villa';

    public const D_DETACHED_HOUSE = 'D_DetachedHouse';

    public const D_WATER_HOUSE = 'D_WaterHouse';

    public const D_HOUSE_BOAT = 'D_HouseBoat';

    public const D_MOBILE_HOUSE = 'D_MobileHouse';

    public const D_MOBILE_HOUSE_PITCH = 'D_MobileHousePitch';

    public const E_INTERMEDIATE_HOUSE = 'E_IntermediateHouse';

    public const G_APARTMENT = 'G_Apartment';

    public const G_DOWNSTAIRS_HOUSE = 'G_DownstairsHouse';

    public const G_STORAGTE = 'G_Storagte';

    public const G_BUILDING_PLOT = 'G_BuildingPlot';

    public const G_UPSTAIRS_HOUSE = 'G_UpstairsHouse';

    public const G_COLLECTIVE_PARKING_SPOT_WITH_RESIDENCES = 'G_CollectiveParkingSpotWithResidences';

    public const G_CORRIDOR_FLAT = 'G_CorridorFlat';

    public const G_GALLERY_FLAT = 'G_GalleryFlat';

    public const G_GARAGE = 'G_Garage';

    public const G_MAISONNETTE = 'G_Maisonnette';

    public const G_PARKING_SPOT_USABLE_BY_RESIDENCES = 'G_ParkingSpotUsableByResidences';

    public const G_PENTHOUSE = 'G_Penthouse';

    public const G_PORCH_FLAT = 'G_PorchFlat';

    public const H_APARTMENT = 'H_Apartment';

    public const H_BEL_ETAGE = 'H_BelEtage';

    public const H_DOWNSTAIRS_HOUSE = 'H_DownstairsHouse';

    public const H_UPSTAIRS_HOUSE = 'H_UpstairsHouse';

    public const H_PORCH_HOUSE = 'H_PorchHouse';

    public const H_SOUTERRAIN = 'H_Souterrain';

    public const I_APARTMENT = 'I_Apartment';

    public const I_PENTHOUSE = 'I_Penthouse';

    public const K_APARTMENT = 'K_Apartment';

    public const K_DOWNSTAIRS_HOUSE = 'K_DownstairsHouse';

    public const K_CORRIDOR_FLAT = 'K_CorridorFlat';

    public const K_GALLERY_FLAT = 'K_GalleryFlat';

    public const K_SERVICE_FLAT = 'K_ServiceFlat';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A_SPECIAL_ARCHITECTURAL_RESIDENCE,
            self::A_BUNGALOW,
            self::A_DYKE_HOUSE,
            self::A_DRIVEIN_RESIDENCE,
            self::A_END_HOUSE,
            self::A_CONNECTED_BUNGALOW,
            self::A_CONNECTED_SEMI_DETACHED,
            self::A_CONNECTED_HOUSE,
            self::A_MANSION,
            self::A_CORNER_HOUSE,
            self::A_ALMS_HOUSE,
            self::A_KWADRANT_WONING,
            self::A_PATIO_BUNGALOW,
            self::A_PATIO_HOUSE,
            self::A_PRACTICE_HOUSE,
            self::A_SEMI_BUNGALOW,
            self::A_SPLITLEVEL_HOUSE,
            self::A_INTERMEDIATE_HOUSE,
            self::A_SEMI_DETACHED_HOUSE,
            self::A_VILLA,
            self::A_DETACHED_HOUSE,
            self::A_MOBILE_HOME,
            self::B_BUSSINESS_OR_PROFIT_HOUSE,
            self::B_FARM,
            self::B_BUNGALOW,
            self::B_DYKE_HOUSE,
            self::B_END_HOUSE,
            self::B_CONNECTED_SEMI_DETACHED,
            self::B_CONNECTED_HOUSE,
            self::B_CANAL_HOUSE,
            self::B_HALF_DETACHED_HOUSE,
            self::B_MANSION,
            self::B_CORNER_HOUSE,
            self::B_ESTATE,
            self::B_COUNTRY_HOUSE,
            self::B_BERTH,
            self::B_MILL,
            self::B_PRACTISE_HOUSE,
            self::B_SEMI_BUNGALOW,
            self::B_INTERMEDIATE_HOUSE,
            self::B_SEMI_DETACHED_HOUSE,
            self::B_VILLA,
            self::B_DETACHED_HOUSE,
            self::B_WATER_HOUSE,
            self::B_FARM_HOUSE,
            self::B_HOUSE_BOAT,
            self::B_MOBILE_HOME,
            self::B_MOBILE_HOME_PITCH,
            self::B_LIVING_SHOP,
            self::C_BUNGALOW,
            self::C_END_HOUSE,
            self::C_CONNECTED_BUNGALOW,
            self::C_CONNECTED_SEMI_DETACHED,
            self::C_CONNECTED_HOUSE,
            self::C_CORNER_HOUSE,
            self::C_SEMI_BUNGALOW,
            self::C_INTERMEDIATE_HOUSE,
            self::C_SEMI_DETACHED,
            self::C_VILLA,
            self::C_DETACHED_HOUSE,
            self::C_MOBILE_HOUSE,
            self::D_BUNGALOW,
            self::D_HALF_DETACHED_HOUSE,
            self::D_BERTH,
            self::D_SEMI_BUNGALOW,
            self::D_SEMI_DETACHED_HOUSE,
            self::D_VILLA,
            self::D_DETACHED_HOUSE,
            self::D_WATER_HOUSE,
            self::D_HOUSE_BOAT,
            self::D_MOBILE_HOUSE,
            self::D_MOBILE_HOUSE_PITCH,
            self::E_INTERMEDIATE_HOUSE,
            self::G_APARTMENT,
            self::G_DOWNSTAIRS_HOUSE,
            self::G_STORAGTE,
            self::G_BUILDING_PLOT,
            self::G_UPSTAIRS_HOUSE,
            self::G_COLLECTIVE_PARKING_SPOT_WITH_RESIDENCES,
            self::G_CORRIDOR_FLAT,
            self::G_GALLERY_FLAT,
            self::G_GARAGE,
            self::G_MAISONNETTE,
            self::G_PARKING_SPOT_USABLE_BY_RESIDENCES,
            self::G_PENTHOUSE,
            self::G_PORCH_FLAT,
            self::H_APARTMENT,
            self::H_BEL_ETAGE,
            self::H_DOWNSTAIRS_HOUSE,
            self::H_UPSTAIRS_HOUSE,
            self::H_PORCH_HOUSE,
            self::H_SOUTERRAIN,
            self::I_APARTMENT,
            self::I_PENTHOUSE,
            self::K_APARTMENT,
            self::K_DOWNSTAIRS_HOUSE,
            self::K_CORRIDOR_FLAT,
            self::K_GALLERY_FLAT,
            self::K_SERVICE_FLAT
        ];
    }
}


