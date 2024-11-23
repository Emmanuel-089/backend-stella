<?php

namespace App\Http\Requests\Area;

use Illuminate\Foundation\Http\FormRequest;

class CrearAreaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_area' => 'required|min:3|max:50',
        ];
    }
}
