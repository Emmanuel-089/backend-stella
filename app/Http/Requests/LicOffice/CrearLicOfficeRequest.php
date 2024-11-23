<?php

namespace App\Http\Requests\LicOffice;

use Illuminate\Foundation\Http\FormRequest;

class CrearLicOfficeRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_licoffice' => 'required|min:3|max:50',
        ];
    }
}
