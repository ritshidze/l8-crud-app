<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0212320125',
                'email' => 'john@gmail.com'
            ],
            [
                'first_name' => 'Jay',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0212320120',
                'email' => 'jay@gmail.com',
            ],
            [
                'first_name' => 'Joy',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0212320121',
                'email' => 'joy@gmail.com',
            ],
            [
                'first_name' => 'Jin',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0212320122',
                'email' => 'jin@gmail.com',
            ],
            [
                'first_name' => 'Joe',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212320123',
                'email' => 'joe@gmail.com',
            ],
            [
                'first_name' => 'Cindi',
                'last_name' => 'Doe',
                'company_id' => '3',
                'phone_number' => '0212320126',
                'email' => 'cindi@gmail.com',
            ],
            [
                'first_name' => 'Cindy',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212320100',
                'email' => 'cindy@gmail.com',
            ],
            [
                'first_name' => 'Jay',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0721232030',
                'email' => 'jay@gmail.com',
            ],
            [
                'first_name' => 'Kyle',
                'last_name' => 'Doe',
                'company_id' => '5',
                'phone_number' => '0212320130',
                'email' => 'kyle@gmail.com',
            ],
            [
                'first_name' => 'Rich',
                'last_name' => 'Doe',
                'company_id' => '4',
                'phone_number' => '0212320110',
                'email' => 'ritchie@gmail.com',
            ],
            [
                'first_name' => 'Ritchie',
                'last_name' => 'Doe',
                'company_id' => '4',
                'phone_number' => '0812320120',
                'email' => 'ritchie@gmail.com',
            ],
            [
                'first_name' => 'Tom',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212321120',
                'email' => 'tom@gmail.com',
            ],
            [
                'first_name' => 'Tomly',
                'last_name' => 'Doe',
                'company_id' => '1',
                'phone_number' => '0212420120',
                'email' => 'tomly@gmail.com',
            ],
            [
                'first_name' => 'Jabu',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212320920',
                'email' => 'jabu@gmail.com',
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Doe',
                'company_id' => '4',
                'phone_number' => '0210320120',
                'email' => 'james@gmail.com',
            ],
            [
                'first_name' => 'Judy',
                'last_name' => 'Doe',
                'company_id' => '4',
                'phone_number' => '0211020120',
                'email' => 'judy@gmail.com',
            ],
            [
                'first_name' => 'Rabelani',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212320188',
                'email' => 'rabelani@gmail.com',
            ],
            [
                'first_name' => 'Ritshidze',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '0212320199',
                'email' => 'ritshidze@gmail.com',
            ],
            [
                'first_name' => 'Mpho',
                'last_name' => 'Doe',
                'company_id' => '3',
                'phone_number' => '0212320177',
                'email' => 'mpho@gmail.com',
            ],
            [
                'first_name' => 'Lufuno',
                'last_name' => 'Doe',
                'company_id' => '3',
                'phone_number' => '0212320166',
                'email' => 'lufuno@gmail.com',
            ],
            [
                'first_name' => 'Lucky',
                'last_name' => 'Doe',
                'company_id' => '2',
                'phone_number' => '02123201333',
                'email' => 'lucky@gmail.com'
            ]
        ]);
    }
}