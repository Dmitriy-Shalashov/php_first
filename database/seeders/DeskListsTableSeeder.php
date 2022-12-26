<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        for ($i=1; $i < 15; $i++) { 
            DB::table('desk_lists')->insert([
                'name' => 'List - '.$i,
                'desk_id' => rand(1, 10),
                'created_at' => Carbon::yesterday()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()-> addMinutes($i) -> format('Y-m-d H:i:s')
            ]);
        }
    }
}
