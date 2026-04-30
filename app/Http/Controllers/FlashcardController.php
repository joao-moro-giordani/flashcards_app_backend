<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Http\Requests\FlashcardRequest;

class FlashcardController extends Controller
{
    /**
     * GET /flashcards
     */
    public function index()
    {
        return response()->json(Flashcard::all(), 200);
    }

    /**
     * POST /flashcards
     */
    public function store(FlashcardRequest $request)
    {
        $flashcard = Flashcard::create($request->validated());

        return response()->json($flashcard, 201);
    }

    /**
     * GET /flashcards/{flashcard}
     */
    public function show(Flashcard $flashcard)
    {
        return response()->json($flashcard, 200);
    }

    /**
     * PUT/PATCH /flashcards/{flashcard}
     */
    public function update(FlashcardRequest $request, Flashcard $flashcard)
    {
        $flashcard->update($request->validated());

        return response()->json($flashcard, 200);
    }

    /**
     * DELETE /flashcards/{flashcard}
     */
    public function destroy(Flashcard $flashcard)
    {
        $flashcard->delete();

        return response()->json(['message' => 'Flashcard deleted'], 200);
    }
}
