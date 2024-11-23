<?php
namespace App\Http\Requests\Ram;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarRamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_ram' => 'required|min:3|max:50',
        ];
    }
}
