<?php
namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarCategoriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_catego' => 'required|min:3|max:50',
        ];
    }
}
