<?php
namespace App\Http\Requests\Antivirus;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAntivirusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_antivirus' => 'required|min:3|max:50',
        ];
    }
}
