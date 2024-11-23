<?php

namespace App\Http\Requests\SO;

use Illuminate\Foundation\Http\FormRequest;

class CrearSORequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_so' => 'required|min:3|max:50',
        ];
    }
}
