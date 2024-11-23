<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class CrearOfficeRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_office' => 'required|min:3|max:50',
        ];
    }
}
