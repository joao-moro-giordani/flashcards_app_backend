<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Folder;

class FolderSeeder extends Seeder
{
    public function run(): void
    {
        Folder::create([
            'name' => 'French',
            'color' => '#3B82F6',
        ]);

        Folder::create([
            'name' => 'Portuguese',
            'color' => '#EF4444',
        ]);
    }
}
