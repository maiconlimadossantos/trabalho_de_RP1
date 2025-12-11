<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastrarAnimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_lancamento' => 'required|date',
            'genero' => 'required|string|max:100',
            'diretor' => 'required|string|max:100',
            'duracao' => 'required|integer|min:1',
            'classificacao' => 'required|string|max:10',
            'idioma' => 'required|string|max:50',
            'legendas' => 'nullable|string|max:50',
            'url_capa' => 'nullable|url',
            'estudio' => 'required|string|max:100',
            'numero_episodios' => 'required|integer|min:1',
        ];
    }
}
