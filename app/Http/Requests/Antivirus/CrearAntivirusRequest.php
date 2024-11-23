<?php

namespace App\Http\Requests\Antivirus;

use Illuminate\Foundation\Http\FormRequest;

class CrearAntivirusRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_antivirus' => 'required|min:3|max:50',
        ];
    }
}
