<?php

namespace App\Http\Requests\LicSO;

use Illuminate\Foundation\Http\FormRequest;

class CrearLicSORequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_licso' => 'required|min:3|max:50',
        ];
    }
}
