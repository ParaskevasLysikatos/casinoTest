<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'realMode',
        'funMode'
    ];

    public function casino_games()
    {
        return $this->belongsTo(CasinoGame::class);
    }
}
