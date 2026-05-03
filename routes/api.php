<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\LanguageController;

Route::apiResource('languages', LanguageController::class);
Route::apiResource('folders', FolderController::class);
Route::apiResource('decks', DeckController::class);
Route::apiResource('flashcards', FlashcardController::class);