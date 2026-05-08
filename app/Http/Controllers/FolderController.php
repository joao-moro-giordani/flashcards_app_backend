<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Http\Requests\FolderRequest;
use App\Http\Resources\FolderResource;

class FolderController extends Controller
{
    public function index()
    {
        return FolderResource::collection(Folder::latest()->get());
    }

    public function store(FolderRequest $request)
    {
        $folder = Folder::create($request->validated());

        return new FolderResource($folder);
    }

    public function show($id)
    {
        $folder = Folder::with('decks')->findOrFail($id);

        return new FolderResource($folder);
    }

    public function update(FolderRequest $request, $id)
    {
        $folder = Folder::findOrFail($id);
        $folder->update($request->validated());

        return new FolderResource($folder);
    }

    public function destroy($id)
    {
        Folder::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
