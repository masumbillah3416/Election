<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            
            [
                'campus_id' => '1',
                'role_id' => '3',
                'name' => 'Abasas Commissionar',
                'phone' => '01840000108',
                'email' => 'ruhul.ok@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make("1234"),
            ],   
             [
                'campus_id' => '1',
                'role_id' => '2',
                'name' => 'Abasas Admin',
                'phone' => '01840000108',
                'email' => 'ruhul.ok2@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],

            [
                'campus_id' => '1',
                'role_id' => '2',
                'name' => 'SEC Admin',
                'phone' => '01840000108',
                'email' => 'secadmin@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
            [
                'campus_id' => '2',
                'role_id' => '2',
                'name' => 'MEC Admin',
                'phone' => '01840000108',
                'email' => 'mecadmin@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
            [
                'campus_id' => '3',
                'role_id' => '2',
                'name' => 'FEC Admin',
                'phone' => '01840000108',
                'email' => 'fecadmin@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
            [
                'campus_id' => '4',
                'role_id' => '2',
                'name' => 'BEC Admin',
                'phone' => '01840000108',
                'email' => 'becadmin@abasas.tech',
                'status' => '1',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
        ]);
        DB::table('users')->insert([ 
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'roufmsc@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'shepon086@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'abu.naser84@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'lysucse10@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'nayannathcse@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'shahidiqbal_05@yahoo.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'salman.eee.1450@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'ashraful6003@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'asadbuet14@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'sibbircuet08@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'atiqulh18@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'shahjamal2106@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ],
           
           
           
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'rupa.siu@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ], 
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'na.sakibd@yahoo.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
            ], 
           
            [
                'campus_id' => '1',
                'role_id' => '1',
                'email' => 'njsnusrat@gmail.com',
                'status' => '0',
                "pass" => Str::random(12),
                'password' => Hash::make(1234),
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
                'name' => 'সিলেট ইন্জিনিয়ারিং কলেজ নির্বাচন',
            ],
            [
                'name' => 'ময়মনসিংহ ইঞ্জিনিয়ারিং কলেজ নির্বাচন',
            ],
            [
                'name' => 'ফরিদ্পুর ইন্জিনিয়ারিং কলেজ নির্বাচন',
            ],
            [
                'name' => 'বরিশাল  ইন্জিনিয়ারিং কলেজ নির্বাচন',
            ],
            [
                'name' => 'কেন্দ্রীয় নির্বাচন',
            ],

        ]);



        
        DB::table('campus_designations')->insert([
            [
                'name' => 'সভাপতি',
            ],
            // [
            //     'name' => 'সহ-সভাপতি',
            // ],
            // [
            //     'name' => 'সাধারণ সম্পাদক',
            // ],
            // [
            //     'name' => 'যুগ্ন সাধারণ সম্পাদক',
            // ],
            // [
            //     'name' => 'সাংগঠনিক সম্পাদক',
            // ],
            // [
            //     'name' => 'অর্থ সম্পাদক/কোষাধক্ষ',
            // ],
            // [
            //     'name' => 'দপ্তর সম্পাদক',
            // ],
            // [
            //     'name' => 'প্রচার ও প্রকাশনা সম্পাদক',
            // ],

            // [
            //     'name' => 'সাহিত্য ও সংস্কৃতিক সম্পাদক',
            // ],

            // [
            //     'name' => 'মহিলা বিষয়ক সম্পাদক',
            // ],

            // [
            //     'name' => 'শিক্ষা ও গবেষনা সম্পাদক',
            // ],

        ]);







        
        
        DB::table('central_designations')->insert([
            [
                'name' => 'সভাপতি',
            ],
            [
                'name' => 'সহ-সভাপতি',
            ],
            [
                'name' => 'সাধারণ সম্পাদক',
            ],
            [
                'name' => 'যুগ্ন সাধারণ সম্পাদক',
            ],
            [
                'name' => 'সাংগঠনিক সম্পাদক',
            ],
            [
                'name' => 'যুগ্ন সাংগঠনিক সম্পাদক',
            ],
            [
                'name' => 'অর্থ সম্পাদক/কোষাধক্ষ',
            ],
            [
                'name' => 'দপ্তর সম্পাদক',
            ],
            [
                'name' => 'আইন ও চাকরি বিষয়ক সম্পাদক',
            ],
            [
                'name' => 'প্রচার ও প্রকাশনা সম্পাদক',
            ],

            [
                'name' => 'সাহিত্য ও সংস্কৃতিক সম্পাদক',
            ],

            [
                'name' => 'সমাজ কল্যাণ সম্পাদক',
            ],

            [
                'name' => 'মহিলা বিষয়ক সম্পাদক',
            ],

            [
                'name' => 'শিক্ষা ও গবেষনা সম্পাদক',
            ],

        ]);

        










    }
}
