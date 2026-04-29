<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deck;

class DeckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $decks = [
            ['name' => 'French Basics', 'color' => '#3b82f6'],
            ['name' => 'Portuguese Verbs', 'color' => '#10b981'],
            ['name' => 'Daily Phrases', 'color' => '#f59e0b'],
        ];

        foreach ($decks as $deck) {
            Deck::create($deck);
        }
    }
}
