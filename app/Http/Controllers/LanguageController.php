<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\LanguageRequest;

class LanguageController extends Controller
{
    /**
     * GET /languages
     */
    public function index()
    {
        return response()->json(
            Language::all(),
            200
        );
    }

    /**
     * POST /languages
     */
    public function store(LanguageRequest $request)
    {
        $language = Language::create($request->validated());

        return response()->json($language, 201);
    }

    /**
     * GET /languages/{language}
     */
    public function show(Language $language)
    {
        return response()->json($language, 200);
    }

    /**
     * PUT/PATCH /languages/{language}
     */
    public function update(LanguageRequest $request, Language $language)
    {
        $language->update($request->validated());

        return response()->json($language, 200);
    }

    /**
     * DELETE /languages/{language}
     */
    public function destroy(Language $language)
    {
        $language->delete();

        return response()->json([
            'message' => 'Language deleted'
        ], 200);
    }
}