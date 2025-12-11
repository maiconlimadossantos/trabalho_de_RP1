<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarFilmeRequest;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Filme::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CadastrarFilmeRequest $request)
    {
        $filme = Filme::create($request->validated());
        return response()->json($filme, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Filme $filme)
    {
        try {
            return response()->json($filme);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Filme não foi encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CadastrarFilmeRequest $request, Filme $filme)
    {
        $filme->update($request->validated());
        return response()->json($filme);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return response()->json(['Filme removido  com sucesso'],204);
    }
}
