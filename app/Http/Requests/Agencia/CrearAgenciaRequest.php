<?php

namespace App\Http\Requests\Agencia;

use Illuminate\Foundation\Http\FormRequest;

class CrearAgenciaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_age' => 'required|min:3|max:50',
        ];
    }
}
