<?php
namespace App\Http\Requests\LicOffice;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarLicOfficeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_licoffice' => 'required|min:3|max:50',
        ];
    }
}
