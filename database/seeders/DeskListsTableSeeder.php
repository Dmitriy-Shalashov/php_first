<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 20 ; $i++) { 
            DB::table('desk_lists')->insert([
                'name' => 'List - '.$i,
                'desk_id' => rand(1, 9),
            ]);
        }
    }
}
