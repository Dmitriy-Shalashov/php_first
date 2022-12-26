<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskTasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 50 ; $i++) { 
            DB::table('desk_tasks')->insert([
                'name' => 'Task - '.$i,
                'desk_card_id' => rand(1, 19),
                'created_at' => Carbon::yesterday()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMinutes($i)->format('Y-m-d H:i:s')
            ]);
        }
    }
}
