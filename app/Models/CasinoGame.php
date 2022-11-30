<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasinoGame extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'server_game_id',
        'extearnal_game_id',
        'front_game_id',
        'name',
        'ratio',
        'status',
        'provider',
        'show_as_provider',
        'provider_title',
        'has_age_restriction',
        'icon_2',
        'icon_3',
        'background',
        'game_skin_id',
        'active'
    ];


    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

     public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}