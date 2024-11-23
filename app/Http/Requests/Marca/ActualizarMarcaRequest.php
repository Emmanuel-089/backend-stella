<?php
namespace App\Http\Requests\Marca;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarMarcaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_marca' => 'required|min:3|max:50',
        ];
    }
}
