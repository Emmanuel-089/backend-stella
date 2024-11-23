<?php

namespace App\Http\Requests\Procesador;

use Illuminate\Foundation\Http\FormRequest;

class CrearProcesadorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_cpu' => 'required|min:3|max:50',
        ];
    }
}
