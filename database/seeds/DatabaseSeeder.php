<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('roles')->insert([
            [
                'name' => 'Voter',
            ],
            [
                'name' => 'Campus Admin',
            ],
            [
                'name' => 'Election Commissioner',
            ],

        ]);
        DB::table('campuses')->insert([
            [
                'name' => 'Sylhet Engineering College',
                'name_short' => 'SEC',
            ],
            [
                'name' => 'Mymensingh Engineering College',
                'name_short' => 'MEC',
            ],
            [
                'name' => 'Faridpur Engineering College',
                'name_short' => 'FEC',
            ],
            [
                'name' => 'Barishal Engineering College',
                'name_short' => 'BEC',
            ],

        ]);
        DB::table('elections')->insert([
            [
                'name' => 'Sylhet Engineering College',
            ],
            [
                'name' => 'Mymensingh Engineering College',
            ],
            [
                'name' => 'Faridpur Engineering College',
            ],
            [
                'name' => 'Barishal Engineering College',
            ],
            [
                'name' => 'Central',
            ],

        ]);
    }
}
