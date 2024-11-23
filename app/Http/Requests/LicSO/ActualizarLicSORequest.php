<?php
namespace App\Http\Requests\LicSO;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarLicSORequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_licso' => 'required|min:3|max:50',
        ];
    }
}
