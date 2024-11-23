<?php
namespace App\Http\Requests\Agencia;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAgenciaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_age' => 'min:3|max:50',
        ];
    }
}
