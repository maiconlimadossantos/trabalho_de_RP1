<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarDocumentarioRequest;
use App\Models\Documentario;
use Illuminate\Http\Request;

class DocumentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Documentario::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CadastrarDocumentarioRequest $request)
    {
        $documentario = Documentario::create($request->validated());
        return response()->json($documentario, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Documentario $documentario)
    {
        try {
            return response()->json($documentario);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Documentario não foi encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CadastrarDocumentarioRequest $request, Documentario $documentario)
    {
        $documentario->update($request->validated());
        return response()->json($documentario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documentario $documentario)
    {
        $documentario->delete();
        return response()->json(['Documentario removido  com sucesso'],204);
    }
}
