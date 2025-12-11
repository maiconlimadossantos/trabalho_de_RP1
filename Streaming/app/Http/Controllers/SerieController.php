<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarserieRequest;
use App\Models\serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(serie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CadastrarserieRequest $request)
    {
        $serie = serie::create($request->validated());
        return response()->json($serie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(serie $serie)
    {
        try {
            return response()->json($serie);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Serie não foi encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CadastrarserieRequest $request, serie $serie)
    {
        $serie->update($request->validated());
        return response()->json($serie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(serie $serie)
    {
        $serie->delete();
        return response()->json(['Serie removido  com sucesso'],204);
    }
}
