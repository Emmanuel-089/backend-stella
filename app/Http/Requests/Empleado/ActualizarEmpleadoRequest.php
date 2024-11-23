<?php
namespace App\Http\Requests\Empleado;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarEmpleadoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_emp' => 'required|min:3|max:50',
        ];
    }
}
