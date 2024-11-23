<?php
namespace App\Http\Requests\Procesador;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarProcesadorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_cpu' => 'required|min:3|max:50',
        ];
    }
}
