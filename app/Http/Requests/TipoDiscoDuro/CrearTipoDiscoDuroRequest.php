<?php

namespace App\Http\Requests\TipoDiscoDuro;

use Illuminate\Foundation\Http\FormRequest;

class CrearTipoDiscoDuroRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_tipodd' => 'required|min:3|max:50',
        ];
    }
}
