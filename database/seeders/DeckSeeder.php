<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deck;
use App\Models\Folder;

class DeckSeeder extends Seeder
{
    public function run(): void
    {
        $french = Folder::where('name', 'French')->first();
        $portuguese = Folder::where('name', 'Portuguese')->first();

        $decks = [
            [
                'name' => 'French Basics',
                'color' => '#3b82f6',
                'folder_id' => $french->id,
            ],
            [
                'name' => 'Portuguese Verbs',
                'color' => '#10b981',
                'folder_id' => $portuguese->id,
            ],
            [
                'name' => 'Daily Phrases',
                'color' => '#f59e0b',
                'folder_id' => $french->id,
            ],
        ];

        foreach ($decks as $deck) {
            Deck::create($deck);
        }
    }
}