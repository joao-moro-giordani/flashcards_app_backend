<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Flashcard;
use App\Http\Requests\FlashcardRequest;
use App\Http\Resources\FlashcardResource;

class FlashcardController extends Controller
{
    /**
     * GET /flashcards
     */
    public function index(Request $request)
    {
        $flashcards = Flashcard::query()
            ->when($request->filled('deck_id'), fn ($q) =>
                $q->where('deck_id', $request->deck_id)
            )
            ->orderBy('created_at')
            ->paginate(
                min($request->get('per_page', 5), 20)
            );

        return FlashcardResource::collection($flashcards);
    }
    /**
     * POST /flashcards
     */
    public function store(FlashcardRequest $request)
    {
        $flashcard = Flashcard::create($request->validated());

        return new FlashcardResource($flashcard);
    }

    /**
     * GET /flashcards/{flashcard}
     */
    public function show(Flashcard $flashcard)
    {
        return new FlashcardResource($flashcard);
    }

    /**
     * PUT/PATCH /flashcards/{flashcard}
     */
    public function update(FlashcardRequest $request, Flashcard $flashcard)
    {
        $flashcard->update($request->validated());

        return new FlashcardResource($flashcard);
    }

    /**
     * DELETE /flashcards/{flashcard}
     */
    public function destroy(Flashcard $flashcard)
    {
        $flashcard->delete();

        return response()->noContent();
    }
}
