<?php
namespace App\Http\Requests\Area;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAreaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_area' => 'required|min:3|max:50',
        ];
    }
}
