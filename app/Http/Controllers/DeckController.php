<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Http\Requests\DeckRequest;

class DeckController extends Controller
{
    /**
     * GET /decks
     */
    public function index()
    {
        return response()->json(Deck::all(), 200);
    }

    /**
     * POST /decks
     */
    public function store(DeckRequest $request)
    {
        $deck = Deck::create($request->validated());

        return response()->json($deck, 201);
    }

    /**
     * GET /decks/{deck}
     */
    public function show(Deck $deck)
    {
        return response()->json($deck, 200);
    }

    /**
     * PUT/PATCH /decks/{deck}
     */
    public function update(DeckRequest $request, Deck $deck)
    {
        $deck->update($request->validated());

        return response()->json($deck, 200);
    }

    /**
     * DELETE /decks/{deck}
     */
    public function destroy(Deck $deck)
    {
        $deck->delete();

        return response()->json(['message' => 'Deck deleted'], 200);
    }
}