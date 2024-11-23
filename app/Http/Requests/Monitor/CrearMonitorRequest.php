<?php

namespace App\Http\Requests\Monitor;

use Illuminate\Foundation\Http\FormRequest;

class CrearMonitorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //'id'=>'required',
            'nombre_monitor' => 'required|min:3|max:50',
        ];
    }
}
