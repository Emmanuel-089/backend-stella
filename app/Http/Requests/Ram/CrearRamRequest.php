<?php

namespace App\Http\Requests\Ram;

use Illuminate\Foundation\Http\FormRequest;

class CrearRamRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_ram' => 'required|min:3|max:50',
        ];
    }
}
