<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('slugs')->delete();

        DB::table('slugs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 1,
                'slug' => 'agriculture-fishing-forestry',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:15',
                'updated_at' => '2021-10-31 10:30:15',
            ),
            1 =>
            array (
                'id' => 2,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 2,
                'slug' => 'construction-renovation',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:15',
                'updated_at' => '2021-10-31 10:30:15',
            ),
            2 =>
            array (
                'id' => 3,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 3,
                'slug' => 'accounting-finance',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            3 =>
            array (
                'id' => 4,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 4,
                'slug' => 'health-medical',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            4 =>
            array (
                'id' => 5,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 5,
                'slug' => 'transportation',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            5 =>
            array (
                'id' => 6,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 6,
                'slug' => 'communications-electronics',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            6 =>
            array (
                'id' => 7,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 7,
                'slug' => 'home-garden',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            7 =>
            array (
                'id' => 8,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 8,
                'slug' => 'apparel-accessories',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            8 =>
            array (
                'id' => 9,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 9,
                'slug' => 'sports-recreation',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            9 =>
            array (
                'id' => 10,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 10,
                'slug' => 'food-beverages',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            10 =>
            array (
                'id' => 11,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 11,
                'slug' => 'education',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            11 =>
            array (
                'id' => 12,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 12,
                'slug' => 'entertainment-media',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            12 =>
            array (
                'id' => 13,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 13,
                'slug' => 'industrial-supplies-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            13 =>
            array (
                'id' => 14,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 14,
                'slug' => 'personal-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            14 =>
            array (
                'id' => 15,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 15,
                'slug' => 'real-estate-insurance',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            15 =>
            array (
                'id' => 16,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 16,
                'slug' => 'retail-shopping',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            16 =>
            array (
                'id' => 17,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 17,
                'slug' => 'automotive',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            17 =>
            array (
                'id' => 18,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 18,
                'slug' => 'travel-lodging',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            18 =>
            array (
                'id' => 19,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 19,
                'slug' => 'family-community',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            19 =>
            array (
                'id' => 20,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 20,
                'slug' => 'farming-equipment-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            20 =>
            array (
                'id' => 21,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 21,
                'slug' => 'soil',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            21 =>
            array (
                'id' => 22,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 22,
                'slug' => 'general-supplies-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            22 =>
            array (
                'id' => 23,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 23,
                'slug' => 'horses',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            23 =>
            array (
                'id' => 24,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 24,
                'slug' => 'vegetables-fruits',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            24 =>
            array (
                'id' => 25,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 25,
                'slug' => 'sugar-cane-sugar-beets',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            25 =>
            array (
                'id' => 26,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 26,
                'slug' => 'dairy',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            26 =>
            array (
                'id' => 27,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 27,
                'slug' => 'poultry-eggs',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            27 =>
            array (
                'id' => 28,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 28,
                'slug' => 'forestry-forest',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:16',
                'updated_at' => '2021-10-31 10:30:16',
            ),
            28 =>
            array (
                'id' => 29,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 29,
                'slug' => 'livestock',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            29 =>
            array (
                'id' => 30,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 30,
                'slug' => 'food-processing',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            30 =>
            array (
                'id' => 31,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 31,
                'slug' => 'tobacco',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            31 =>
            array (
                'id' => 32,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 32,
                'slug' => 'farm-bureaus',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            32 =>
            array (
                'id' => 33,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 33,
                'slug' => 'building-materials-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            33 =>
            array (
                'id' => 34,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 34,
                'slug' => 'floors-ceilings-roofs',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            34 =>
            array (
                'id' => 35,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 35,
                'slug' => 'plumbing-piping',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            35 =>
            array (
                'id' => 36,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 36,
                'slug' => 'contractor-equipment-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            36 =>
            array (
                'id' => 37,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 37,
                'slug' => 'architectural-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            37 =>
            array (
                'id' => 38,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 38,
                'slug' => 'home-builders',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            38 =>
            array (
                'id' => 39,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 39,
                'slug' => 'general-contractors',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            39 =>
            array (
                'id' => 40,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 40,
                'slug' => 'hardware-supplies-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            40 =>
            array (
                'id' => 41,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 41,
                'slug' => 'accounting-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            41 =>
            array (
                'id' => 42,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 42,
                'slug' => 'loans-credit-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            42 =>
            array (
                'id' => 43,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 43,
                'slug' => 'taxes',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            43 =>
            array (
                'id' => 44,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 44,
                'slug' => 'banks-financial-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            44 =>
            array (
                'id' => 45,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 45,
                'slug' => 'retirement-financial-planning',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            45 =>
            array (
                'id' => 46,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 46,
                'slug' => 'legal',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            46 =>
            array (
                'id' => 47,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 47,
                'slug' => 'commercial-banks',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            47 =>
            array (
                'id' => 48,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 48,
                'slug' => 'credit-unions',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            48 =>
            array (
                'id' => 49,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 49,
                'slug' => 'securities-investment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            49 =>
            array (
                'id' => 50,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 50,
                'slug' => 'insurance',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            50 =>
            array (
                'id' => 51,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 51,
                'slug' => 'misc-finance',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            51 =>
            array (
                'id' => 52,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 52,
                'slug' => 'dental-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            52 =>
            array (
                'id' => 53,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 53,
                'slug' => 'medical-products-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:17',
                'updated_at' => '2021-10-31 10:30:17',
            ),
            53 =>
            array (
                'id' => 54,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 54,
                'slug' => 'hearing-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            54 =>
            array (
                'id' => 55,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 55,
                'slug' => 'eye-care-eyewear',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            55 =>
            array (
                'id' => 56,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 56,
                'slug' => 'fitness-weight-loss',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            56 =>
            array (
                'id' => 57,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 57,
                'slug' => 'hospitals-clinics',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            57 =>
            array (
                'id' => 58,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 58,
                'slug' => 'health-practitioners-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            58 =>
            array (
                'id' => 59,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 59,
                'slug' => 'doctors',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            59 =>
            array (
                'id' => 60,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 60,
                'slug' => 'pharmaceuticals-health-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            60 =>
            array (
                'id' => 61,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 61,
                'slug' => 'nutritional-dietary-supplements',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            61 =>
            array (
                'id' => 62,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 62,
                'slug' => 'pharmacies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            62 =>
            array (
                'id' => 63,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 63,
                'slug' => 'health-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            63 =>
            array (
                'id' => 64,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 64,
                'slug' => 'oral-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            64 =>
            array (
                'id' => 65,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 65,
                'slug' => 'beauty-personal-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            65 =>
            array (
                'id' => 66,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 66,
                'slug' => 'sexual-wellness',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            66 =>
            array (
                'id' => 67,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 67,
                'slug' => 'sports-nutrition',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            67 =>
            array (
                'id' => 68,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 68,
                'slug' => 'boats-marine',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            68 =>
            array (
                'id' => 69,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 69,
                'slug' => 'trucking-freight',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            69 =>
            array (
                'id' => 70,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 70,
                'slug' => 'special-transportations-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            70 =>
            array (
                'id' => 71,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 71,
                'slug' => 'air-transport',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            71 =>
            array (
                'id' => 72,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 72,
                'slug' => 'automotive-2',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            72 =>
            array (
                'id' => 73,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 73,
                'slug' => 'car-dealers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            73 =>
            array (
                'id' => 74,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 74,
                'slug' => 'auto-manufacturers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            74 =>
            array (
                'id' => 75,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 75,
                'slug' => 'sea-transport',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            75 =>
            array (
                'id' => 76,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 76,
                'slug' => 'bike-dealers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            76 =>
            array (
                'id' => 77,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 77,
                'slug' => 'communications-services-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:18',
                'updated_at' => '2021-10-31 10:30:18',
            ),
            77 =>
            array (
                'id' => 78,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 78,
                'slug' => 'electronics-services-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            78 =>
            array (
                'id' => 79,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 79,
                'slug' => 'computer-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            79 =>
            array (
                'id' => 80,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 80,
                'slug' => 'computer-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            80 =>
            array (
                'id' => 81,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 81,
                'slug' => 'internet',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            81 =>
            array (
                'id' => 82,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 82,
                'slug' => 'printing-publishing',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            82 =>
            array (
                'id' => 83,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 83,
                'slug' => 'tv-movies-music',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            83 =>
            array (
                'id' => 84,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 84,
                'slug' => 'books-magazines-newspapers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            84 =>
            array (
                'id' => 85,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 85,
                'slug' => 'cable-satellite-tv-production-distribution',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            85 =>
            array (
                'id' => 86,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 86,
                'slug' => 'telecom-services-equipment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            86 =>
            array (
                'id' => 87,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 87,
                'slug' => 'mobile-phones',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            87 =>
            array (
                'id' => 88,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 88,
                'slug' => 'accessories',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            88 =>
            array (
                'id' => 89,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 89,
                'slug' => 'appliances',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            89 =>
            array (
                'id' => 90,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 90,
                'slug' => 'furniture',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            90 =>
            array (
                'id' => 91,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 91,
                'slug' => 'heating',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            91 =>
            array (
                'id' => 92,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 92,
                'slug' => 'outdoor-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            92 =>
            array (
                'id' => 93,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 93,
                'slug' => 'cooling-ventilating',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            93 =>
            array (
                'id' => 94,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 94,
                'slug' => 'garden-lawn',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            94 =>
            array (
                'id' => 95,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 95,
                'slug' => 'moving-storage',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            95 =>
            array (
                'id' => 96,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 96,
                'slug' => 'windows',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            96 =>
            array (
                'id' => 97,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 97,
                'slug' => 'kitchen-dining-bar',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            97 =>
            array (
                'id' => 98,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 98,
                'slug' => 'home-decor',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            98 =>
            array (
                'id' => 99,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 99,
                'slug' => 'home-textile',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            99 =>
            array (
                'id' => 100,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 100,
                'slug' => 'arts-crafts-sewing',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            100 =>
            array (
                'id' => 101,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 101,
                'slug' => 'festive-party-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            101 =>
            array (
                'id' => 102,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 102,
                'slug' => 'home-storage-organization',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            102 =>
            array (
                'id' => 103,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 103,
                'slug' => 'bathroom-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            103 =>
            array (
                'id' => 104,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 104,
                'slug' => 'household-cleaning',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:19',
                'updated_at' => '2021-10-31 10:30:19',
            ),
            104 =>
            array (
                'id' => 105,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 105,
                'slug' => 'pet-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            105 =>
            array (
                'id' => 106,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 106,
                'slug' => 'household-merchandises',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            106 =>
            array (
                'id' => 107,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 107,
                'slug' => 'alterations-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            107 =>
            array (
                'id' => 108,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 108,
                'slug' => 'clothing-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            108 =>
            array (
                'id' => 109,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 109,
                'slug' => 'footwear',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            109 =>
            array (
                'id' => 110,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 110,
                'slug' => 'jewellery',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            110 =>
            array (
                'id' => 111,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 111,
                'slug' => 'watches',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            111 =>
            array (
                'id' => 112,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 112,
                'slug' => 'hand-bags',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            112 =>
            array (
                'id' => 113,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 113,
                'slug' => 'women-s-fashion',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            113 =>
            array (
                'id' => 114,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 114,
                'slug' => 'men-s-fashion',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            114 =>
            array (
                'id' => 115,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 115,
                'slug' => 'girls-fashion',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            115 =>
            array (
                'id' => 116,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 116,
                'slug' => 'boys-fashion',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            116 =>
            array (
                'id' => 117,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 117,
                'slug' => 'uniforms',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            117 =>
            array (
                'id' => 118,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 118,
                'slug' => 'costumes-accessories',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            118 =>
            array (
                'id' => 119,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 119,
                'slug' => 'undergarments',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            119 =>
            array (
                'id' => 120,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 120,
                'slug' => 'sleepwears',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            120 =>
            array (
                'id' => 121,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 121,
                'slug' => 'luggage-bags',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            121 =>
            array (
                'id' => 122,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 122,
                'slug' => 'associations-clubs',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            122 =>
            array (
                'id' => 123,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 123,
                'slug' => 'boats-watersports',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            123 =>
            array (
                'id' => 124,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 124,
                'slug' => 'golf',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            124 =>
            array (
                'id' => 125,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 125,
                'slug' => 'individual-sports',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            125 =>
            array (
                'id' => 126,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 126,
                'slug' => 'bicycles',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            126 =>
            array (
                'id' => 127,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 127,
                'slug' => 'camping',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            127 =>
            array (
                'id' => 128,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 128,
                'slug' => 'parks-recreation-centres',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:20',
                'updated_at' => '2021-10-31 10:30:20',
            ),
            128 =>
            array (
                'id' => 129,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 129,
                'slug' => 'sporting-goods',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            129 =>
            array (
                'id' => 130,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 130,
                'slug' => 'sneakers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            130 =>
            array (
                'id' => 131,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 131,
                'slug' => 'fishing',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            131 =>
            array (
                'id' => 132,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 132,
                'slug' => 'swimming',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            132 =>
            array (
                'id' => 133,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 133,
                'slug' => 'musical-instruments',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            133 =>
            array (
                'id' => 134,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 134,
                'slug' => 'hunting',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            134 =>
            array (
                'id' => 135,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 135,
                'slug' => 'fitness-body-building',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            135 =>
            array (
                'id' => 136,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 136,
                'slug' => 'water-sports',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            136 =>
            array (
                'id' => 137,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 137,
                'slug' => 'team-sports',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            137 =>
            array (
                'id' => 138,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 138,
                'slug' => 'racquet-sports',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            138 =>
            array (
                'id' => 139,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 139,
                'slug' => 'running',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            139 =>
            array (
                'id' => 140,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 140,
                'slug' => 'shooting',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            140 =>
            array (
                'id' => 141,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 141,
                'slug' => 'skiing-snowboarding',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            141 =>
            array (
                'id' => 142,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 142,
                'slug' => 'sports-accessories',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            142 =>
            array (
                'id' => 143,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 143,
                'slug' => 'roller-skates-skateboards-scooters',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            143 =>
            array (
                'id' => 144,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 144,
                'slug' => 'horse-racing',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:21',
                'updated_at' => '2021-10-31 10:30:21',
            ),
            144 =>
            array (
                'id' => 145,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 145,
                'slug' => 'bowling',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            145 =>
            array (
                'id' => 146,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 146,
                'slug' => 'other-sports-entertainment',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            146 =>
            array (
                'id' => 147,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 147,
                'slug' => 'sports-bags',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            147 =>
            array (
                'id' => 148,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 148,
                'slug' => 'desserts-bakery',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            148 =>
            array (
                'id' => 149,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 149,
                'slug' => 'restaurants-hotels',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            149 =>
            array (
                'id' => 150,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 150,
                'slug' => 'food-services-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            150 =>
            array (
                'id' => 151,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 151,
                'slug' => 'food-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            151 =>
            array (
                'id' => 152,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 152,
                'slug' => 'food-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            152 =>
            array (
                'id' => 153,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 153,
                'slug' => 'meat-fish',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            153 =>
            array (
                'id' => 154,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 154,
                'slug' => 'dairy-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            154 =>
            array (
                'id' => 155,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 155,
                'slug' => 'frozen-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            155 =>
            array (
                'id' => 156,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 156,
                'slug' => 'bars',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            156 =>
            array (
                'id' => 157,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 157,
                'slug' => 'cafes',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:22',
                'updated_at' => '2021-10-31 10:30:22',
            ),
            157 =>
            array (
                'id' => 158,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 158,
                'slug' => 'universities',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            158 =>
            array (
                'id' => 159,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 159,
                'slug' => 'school-educational-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            159 =>
            array (
                'id' => 160,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 160,
                'slug' => 'stationary',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            160 =>
            array (
                'id' => 161,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 161,
                'slug' => 'art-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            161 =>
            array (
                'id' => 162,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 162,
                'slug' => 'books-magazines-newspapers-2',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            162 =>
            array (
                'id' => 163,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 163,
                'slug' => 'music',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            163 =>
            array (
                'id' => 164,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 164,
                'slug' => 'night-life',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            164 =>
            array (
                'id' => 165,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 165,
                'slug' => 'games-hobbies-parties',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            165 =>
            array (
                'id' => 166,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 166,
                'slug' => 'video-movies-television',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            166 =>
            array (
                'id' => 167,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 167,
                'slug' => 'food-beverages-2',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            167 =>
            array (
                'id' => 168,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 168,
                'slug' => 'minerals',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            168 =>
            array (
                'id' => 169,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 169,
                'slug' => 'laboratories',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            169 =>
            array (
                'id' => 170,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 170,
                'slug' => 'metals-metals-working-metals-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            170 =>
            array (
                'id' => 171,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 171,
                'slug' => 'oil-coal-fuels-natural-gases',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            171 =>
            array (
                'id' => 172,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 172,
                'slug' => 'barbers-beauty-salons-spas',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            172 =>
            array (
                'id' => 173,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 173,
                'slug' => 'skin-scalp-services-products',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            173 =>
            array (
                'id' => 174,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 174,
                'slug' => 'building-management',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            174 =>
            array (
                'id' => 175,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 175,
                'slug' => 'insurance-2',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            175 =>
            array (
                'id' => 176,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 176,
                'slug' => 'real-estate',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            176 =>
            array (
                'id' => 177,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 177,
                'slug' => 'convenience-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            177 =>
            array (
                'id' => 178,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 178,
                'slug' => 'grocery-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:23',
                'updated_at' => '2021-10-31 10:30:23',
            ),
            178 =>
            array (
                'id' => 179,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 179,
                'slug' => 'specialty-retailers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            179 =>
            array (
                'id' => 180,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 180,
                'slug' => 'home-furnishing-retailers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            180 =>
            array (
                'id' => 181,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 181,
                'slug' => 'department-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            181 =>
            array (
                'id' => 182,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 182,
                'slug' => 'super-markets-and-hyper-markets',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            182 =>
            array (
                'id' => 183,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 183,
                'slug' => 'multichannel-stores',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            183 =>
            array (
                'id' => 184,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 184,
                'slug' => 'apparel-accessories-2',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            184 =>
            array (
                'id' => 185,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 185,
                'slug' => 'gifts-novelty',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            185 =>
            array (
                'id' => 186,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 186,
                'slug' => 'stores-general',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            186 =>
            array (
                'id' => 187,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 187,
                'slug' => 'books',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            187 =>
            array (
                'id' => 188,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 188,
                'slug' => 'florists',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            188 =>
            array (
                'id' => 189,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 189,
                'slug' => 'toys-games',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            189 =>
            array (
                'id' => 190,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 190,
                'slug' => 'party-supplies-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            190 =>
            array (
                'id' => 191,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 191,
                'slug' => 'discount-used-rental-goods',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            191 =>
            array (
                'id' => 192,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 192,
                'slug' => 'new-used-dealers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            192 =>
            array (
                'id' => 193,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 193,
                'slug' => 'repairs-mechanical',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            193 =>
            array (
                'id' => 194,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 194,
                'slug' => 'parts-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:24',
                'updated_at' => '2021-10-31 10:30:24',
            ),
            194 =>
            array (
                'id' => 195,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 195,
                'slug' => 'shipping-packaging-postal-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            195 =>
            array (
                'id' => 196,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 196,
                'slug' => 'lodging',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            196 =>
            array (
                'id' => 197,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 197,
                'slug' => 'transport',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            197 =>
            array (
                'id' => 198,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 198,
                'slug' => 'travel-agencies-clubs-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            198 =>
            array (
                'id' => 199,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 199,
                'slug' => 'children-child-care',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            199 =>
            array (
                'id' => 200,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 200,
                'slug' => 'pet-supplies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            200 =>
            array (
                'id' => 201,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 201,
                'slug' => 'pet-services',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            201 =>
            array (
                'id' => 202,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 202,
                'slug' => 'community-services-organizations',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            202 =>
            array (
                'id' => 203,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 203,
                'slug' => 'insurances',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            203 =>
            array (
                'id' => 204,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 204,
                'slug' => 'online-universities',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            204 =>
            array (
                'id' => 205,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 205,
                'slug' => 'schools',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            205 =>
            array (
                'id' => 206,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 206,
                'slug' => 'nurseries',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            206 =>
            array (
                'id' => 207,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 207,
                'slug' => 'training-centers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            207 =>
            array (
                'id' => 208,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 208,
                'slug' => 'language-institutes',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            208 =>
            array (
                'id' => 209,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 209,
                'slug' => 'after-school-activities',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            209 =>
            array (
                'id' => 210,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 210,
                'slug' => 'recruitment-agencies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            210 =>
            array (
                'id' => 211,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 211,
                'slug' => 'music-performing-arts',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            211 =>
            array (
                'id' => 212,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 212,
                'slug' => 'sports-fitness-clubs',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            212 =>
            array (
                'id' => 213,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 213,
                'slug' => 'abroad-study',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            213 =>
            array (
                'id' => 214,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 214,
                'slug' => 'government-agencies',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:25',
                'updated_at' => '2021-10-31 10:30:25',
            ),
            214 =>
            array (
                'id' => 215,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 215,
                'slug' => 'art-galleries',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:26',
                'updated_at' => '2021-10-31 10:30:26',
            ),
            215 =>
            array (
                'id' => 216,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 216,
                'slug' => 'education-suppliers',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:26',
                'updated_at' => '2021-10-31 10:30:26',
            ),
            216 =>
            array (
                'id' => 217,
                'slugable_type' => 'App\\Models\\Industries',
                'slugable_id' => 217,
                'slug' => 'special-needs',
                'deleted_at' => NULL,
                'created_at' => '2021-10-31 10:30:26',
                'updated_at' => '2021-10-31 10:30:26',
            ),
        ));


    }
}
