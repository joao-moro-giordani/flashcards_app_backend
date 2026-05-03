<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\LanguageRequest;
use App\Http\Resources\LanguageResource;

class LanguageController extends Controller
{
    /**
     * GET /languages
     */
    public function index()
    {
        return LanguageResource::collection(Language::all());
    }

    /**
     * POST /languages
     */
    public function store(LanguageRequest $request)
    {
        $language = Language::create($request->validated());

        return new LanguageResource($language);
    }

    /**
     * GET /languages/{language}
     */
    public function show(Language $language)
    {
        return new LanguageResource($language);
    }

    /**
     * PUT/PATCH /languages/{language}
     */
    public function update(LanguageRequest $request, Language $language)
    {
        $language->update($request->validated());

        return new LanguageResource($language);
    }

    /**
     * DELETE /languages/{language}
     */
    public function destroy(Language $language)
    {
        $language->delete();

        return response()->noContent();
    }
}