<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarUserRequest;
use Illuminate\Foundation\Testing\CachedState;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        return response()->json(user::all());
    }

    public function store(CadastrarUserRequest $request)
    {
        $user = user::create($request->validated());
        return response()->json($user, 201);
    }

    public function show(user $user)
    {
        try {
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Usuario não foi encontrado'], 404);
        }
    }
    public function update(CadastrarUserRequest $request, user $user)
    {
        $user->update($request->validated());
        return response()->json($user);
    }

    public function destroy(user $user)
    {
        $user->delete();
        return response()->json(['Usuario removido  com sucesso'],204);
    }
}
