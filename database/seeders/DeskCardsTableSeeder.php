<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 100 ; $i++) { 
            DB::table('desk_cards')->insert([
                'name' => 'Card - '.$i,
                'desk_list_id' => rand(1, 19),
            ]);
        }
    }
}
