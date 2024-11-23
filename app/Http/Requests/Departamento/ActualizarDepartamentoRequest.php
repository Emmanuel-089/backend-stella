<?php
namespace App\Http\Requests\Departamento;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDepartamentoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_depto' => 'required|min:3|max:50',
        ];
    }
}
