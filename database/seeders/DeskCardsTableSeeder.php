<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        for ($i=1; $i < 20 ; $i++) { 
            DB::table('desk_cards')->insert([
                'name' => 'Card - '.$i,
                'desk_list_id' => rand(1, 14),
                'created_at' => Carbon::yesterday()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMinutes($i)->format('Y-m-d H:i:s')
            ]);
        }
    }
}
