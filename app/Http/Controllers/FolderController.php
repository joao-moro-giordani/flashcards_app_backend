<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Http\Requests\StoreFolderRequest;

class FolderController extends Controller
{
    public function index()
    {
        return Folder::latest()->get();
    }

    public function store(StoreFolderRequest $request)
    {
        $folder = Folder::create($request->validated());

        return response()->json($folder, 201);
    }

    public function show($id)
    {
        return Folder::with('decks')->findOrFail($id);
    }

    public function update(StoreFolderRequest $request, $id)
    {
        $folder = Folder::findOrFail($id);
        $folder->update($request->validated());

        return response()->json($folder);
    }

    public function destroy($id)
    {
        Folder::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
