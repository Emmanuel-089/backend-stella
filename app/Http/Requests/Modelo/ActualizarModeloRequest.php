<?php
namespace App\Http\Requests\Modelo;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarModeloRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_modelo' => 'required|min:3|max:50',
        ];
    }
}
