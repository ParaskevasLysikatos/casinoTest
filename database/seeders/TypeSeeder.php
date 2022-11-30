<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
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
            DB::table('types')->insert([
                'casino_game_id' => $element['id'],
                'realMode' => $element['types']['realMode'] ?? null,
                'funMode' => $element['types']['funMode'] ?? null,
            ]);
        }
    }
}