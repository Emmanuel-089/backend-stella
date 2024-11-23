<?php

namespace App\Http\Requests\DiscoDuro;

use Illuminate\Foundation\Http\FormRequest;

class CrearDiscoDuroRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_dd' => 'required|min:3|max:50',
        ];
    }
}
