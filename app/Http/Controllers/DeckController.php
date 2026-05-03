<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Http\Requests\DeckRequest;
use App\Http\Resources\DeckResource;

class DeckController extends Controller
{
    /**
     * GET /decks
     */
    public function index()
    {
        return DeckResource::collection(Deck::all());
    }

    /**
     * POST /decks
     */
    public function store(DeckRequest $request)
    {
        $deck = Deck::create($request->validated());

        return new DeckResource($deck);
    }

    /**
     * GET /decks/{deck}
     */
    public function show(Deck $deck)
    {
        return new DeckResource($deck);
    }

    /**
     * PUT/PATCH /decks/{deck}
     */
    public function update(DeckRequest $request, Deck $deck)
    {
        $deck->update($request->validated());

        return new DeckResource($deck);
    }

    /**
     * DELETE /decks/{deck}
     */
    public function destroy(Deck $deck)
    {
        $deck->delete();

        return response()->noContent();
    }
}