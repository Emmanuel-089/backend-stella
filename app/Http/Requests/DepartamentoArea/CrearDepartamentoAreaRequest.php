<?php

namespace App\Http\Requests\DepartamentoArea;

use Illuminate\Foundation\Http\FormRequest;

class CrearDepartamentoAreaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_depto' => 'required|exists:departamentos,id_depto',
            'id_area' => 'required|exists:areas,id_area',
        ];
    }
}
