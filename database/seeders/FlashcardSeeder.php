<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flashcard;

class FlashcardSeeder extends Seeder
{
    public function run(): void
    {
        $flashcards = [
            [
                'deck_id' => 1,
                'content_lang_id' => 2, // French
                'translation_lang_id' => 1, // English

                'raw_content' => 'travaille',
                'raw_translation' => 'work',

            ],

            [
                'deck_id' => 1,
                'content_lang_id' => 2,
                'translation_lang_id' => 1,

                'raw_content' => 'Je travaille tous les jours',
                'raw_translation' => 'I work every day',

            ],

            // --- PORTUGUESE VARIANTS (user-style input) ---
            [
                'deck_id' => 2,
                'content_lang_id' => 3, // Portuguese
                'translation_lang_id' => 1,

                'raw_content' => 'trabalho/trabalhar',
                'raw_translation' => 'work',

            ],

            [
                'deck_id' => 1,
                'content_lang_id' => 2,
                'translation_lang_id' => 1,

                'raw_content' => 'maison',
                'raw_translation' => 'house',
            ],
        ];

        foreach ($flashcards as $flashcard) {
            Flashcard::create($flashcard);
        }
    }
}
