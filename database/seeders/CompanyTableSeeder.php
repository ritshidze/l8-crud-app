<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'XYZ',
                'email' => 'xyz@admin.com',
                'website' => 'http://www.xyx.com',
            ],
            [
                'name' => 'ABC',
                'email' => 'abc@admin.com',
                'website' => 'http://www.abc.com',
            ],
            [
                'name' => 'OOP',
                'email' => 'oop@admin.com',
                'website' => 'http://www.oop.com',
            ],[
                'name' => 'CDE',
                'email' => 'cde@admin.com',
                'website' => 'http://www.cde.com',
            ],
            [
                'name' => 'OVO',
                'email' => 'ovo@admin.com',
                'website' => 'http://www.ovo.com',
            ],
            [
                'name' => 'JKL',
                'email' => 'jkl@admin.com',
                'website' => 'http://www.jkl.com',
            ],
            [
                'name' => 'LKM',
                'email' => 'lkm@admin.com',
                'website' => 'http://www.lkm.com',
            ],
            [
                'name' => 'POI',
                'email' => 'poi@admin.com',
                'website' => 'http://www.poi.com',
            ],
            [
                'name' => 'VVO',
                'email' => 'vvo@admin.com',
                'website' => 'http://www.vvo.com',
            ],
            [
                'name' => 'YTK',
                'email' => 'ytk@admin.com',
                'website' => 'http://www.ytk.com',
            ],
            [
                'name' => 'MMM',
                'email' => 'mmm@admin.com',
                'website' => 'http://www.mmm.com',
            ],
            [
                'name' => 'ASD',
                'email' => 'asd@admin.com',
                'website' => 'http://www.asd.com',
            ],
            [
                'name' => 'PQR',
                'email' => 'pqr@admin.com',
                'website' => 'http://www.xyx.com',
            ],
            [
                'name' => 'NNT',
                'email' => 'nnt@admin.com',
                'website' => 'http://www.nnt.com',
            ],
            [
                'name' => 'ZAR',
                'email' => 'zar@admin.com',
                'website' => 'http://www.zar.com',
            ],
            [
                'name' => 'BOB',
                'email' => 'bob@admin.com',
                'website' => 'http://www.bob.com',
            ]
        ]);
    }
}