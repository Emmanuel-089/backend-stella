<?php
namespace App\Http\Requests\SO;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarSORequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_so' => 'required|min:3|max:50',
        ];
    }
}
