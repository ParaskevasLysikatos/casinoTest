<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = file_get_contents(public_path("casinoInfo/data.json"));
        $casino_games  = json_decode($json, true);

        foreach ($casino_games as $element){
            DB::table('categories')->insert([
                'casino_game_id' => $element['id'],
                'title' => $element['cats'][0]['title'] ?? null,
                'type' => $element['cats'][0]['type'] ?? null,
            ]);
        }
    }
}
