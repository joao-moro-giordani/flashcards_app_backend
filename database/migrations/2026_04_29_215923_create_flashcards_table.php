<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flashcards', function (Blueprint $table) {
            $table->id();

            $table->foreignId('deck_id')
            ->constrained('decks')
            ->cascadeOnDelete();

            $table->foreignId('content_lang_id')
            ->nullable()
            ->constrained('languages')
            ->nullOnDelete();

            $table->foreignId('translation_lang_id')
            ->nullable()
            ->constrained('languages')
            ->nullOnDelete();

            $table->string('raw_content');
            $table->string('raw_translation');
            // $table->string('normalized_content');
            // $table->string('normalized_translation');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashcards');
    }
};
