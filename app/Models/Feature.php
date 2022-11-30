<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'type'
    ];

    public function casino_games()
    {
        return $this->belongsTo(CasinoGame::class);
    }
}