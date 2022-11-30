<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CasinoGameSeeder extends Seeder
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
            DB::table('casino_games')->insert([
                'id' => $element['id'],
                'server_game_id' => $element['server_game_id'],
                'extearnal_game_id' => $element['extearnal_game_id'],
                'front_game_id' => $element['front_game_id'],
                'name' => $element['name'],
                'ratio' => $element['ratio'] ?? null,
                'status' => $element['status'],

                'provider' => $element['provider'],
                'show_as_provider' => $element['show_as_provider'],
                'provider_title' => $element['provider_title'],
                'has_age_restriction' => $element['has_age_restriction'],
                'icon_2' => $element['icon_2'] ?? null,
                'icon_3' => $element['icon_3'] ?? null,
                'background' => $element['background'] ?? null,
                'game_skin_id' => $element['game_skin_id'],
                'active' => $element['active'],
            ]);
        }
    }
}
