<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Role_righSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rights')->insert([

            'modify' => '0',
            'create' => '0',
            'delete' => '0',

        ]);
        DB::table('rights')->insert([

            'modify' => '1',
            'create' => '1',
            'delete' => '1',

        ]);

        DB::table('role')->insert([

        'name' => 'user',
         'right_id' => '1',
        ]);

        DB::table('role')->insert([

            'name' => 'admin',
            'right_id' => '2',
        ]);

    }
}
