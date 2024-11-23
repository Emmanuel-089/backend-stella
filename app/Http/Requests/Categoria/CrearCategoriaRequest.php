<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;

class CrearCategoriaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_catego' => 'required|min:3|max:50',
        ];
    }
}
