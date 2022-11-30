<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
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
            DB::table('features')->insert([
                'casino_game_id' => $element['id'],
                'title' => $element['feats'][0]['title'] ?? null,
                'type' => $element['feats'][0]['type'] ?? null,
            ]);
        }
    }
}
