<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Folder extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'color',
    ];

    public function decks()
    {
        return $this->hasMany(Deck::class);
    }
}