<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarAnimeRequest;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Anime::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CadastrarAnimeRequest $request)
    {
        $anime = Anime::create($request->validated());
        return response()->json($anime, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        try {
            return response()->json($anime);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Anime não foi encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CadastrarAnimeRequest $request, Anime $anime)
    {
        $anime->update($request->validated());
        return response()->json($anime);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return response()->json(['Anime removido  com sucesso'],204);
    }
}
