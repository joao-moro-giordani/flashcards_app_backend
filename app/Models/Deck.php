<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deck extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'color',
    ];

    public function flashcards() 
    {
        return $this->hasMany(Flashcard::class);
    }
}
