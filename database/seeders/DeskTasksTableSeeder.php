<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i=1; $i < 150 ; $i++) { 
            DB::table('desk_tasks')->insert([
                'name' => 'Task - '.$i,
                'desk_card_id' => rand(1, 99),
            ]);
        }
    }
}
