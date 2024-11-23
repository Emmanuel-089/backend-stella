<?php
namespace App\Http\Requests\DiscoDuro;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDiscoDuroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_dd' => 'required|min:3|max:50',
        ];
    }
}
