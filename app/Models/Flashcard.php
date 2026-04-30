<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flashcard extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'deck_id',
        'content_lang_id',
        'translation_lang_id',
        'raw_content',
        'raw_translation',
    ];
}
