<?php

namespace App\Http\Requests\DepartamentoArea;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDepartamentoAreaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_depto' => 'required|integer|exists:departamentos,id_depto',
            'id_area' => 'required|integer|exists:areas,id_area',
        ];
    }

}
