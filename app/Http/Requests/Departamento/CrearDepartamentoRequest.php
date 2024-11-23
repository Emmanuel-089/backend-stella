<?php

namespace App\Http\Requests\Departamento;

use Illuminate\Foundation\Http\FormRequest;

class CrearDepartamentoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_depto' => 'required|min:3|max:50',
        ];
    }
}
