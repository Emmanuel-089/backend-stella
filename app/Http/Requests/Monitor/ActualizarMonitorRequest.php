<?php
namespace App\Http\Requests\Monitor;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarMonitorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_monitor' => 'required|min:3|max:50',
        ];
    }
}
