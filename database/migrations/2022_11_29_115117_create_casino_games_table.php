<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casino_games', function (Blueprint $table) {
            $table->id();

            $table->string( 'server_game_id')->nullable();
            $table->string('extearnal_game_id')->unique();
            $table->string('front_game_id')->unique();

            $table->string('name')->nullable();
            $table->string('ratio')->nullable();
            $table->string('status');
            $table->string('provider');
            $table->string('show_as_provider');
            $table->string('provider_title');

            $table->integer('has_age_restriction');

            $table->string('icon_2');
            $table->string('icon_3')->nullable();
            $table->string('background')->nullable();

            $table->string('game_skin_id')->unique();
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casino_games');
    }
};