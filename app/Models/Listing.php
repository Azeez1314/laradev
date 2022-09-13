<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'where you can register web routes for your application. These
                    | routes are loaded by the RouteServiceProvider within a group which
                    | contains the "web" middleware group. Now create',
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'where you can register web routes for your application. These
                    | routes are loaded by the RouteServiceProvider within a group which
                    | contains the "web" middleware group. Now create',
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all()

            foreach ($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }
    

?>