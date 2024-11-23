<?php

namespace App\Http\Requests\ModuloControlGeneral;

use Illuminate\Foundation\Http\FormRequest;

class CrearModuloControlGeneralRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /* ['','','','','','id_catego','numero_serie'];*/
        return [
            'id_equipo' => 'required',
            'id_agencia' => 'required',
            'id_depto' => 'required',
            'id_area' => 'required',
            'empleado' => 'required',
            'id_catego' => 'required',
            'numero_serie' => 'required',
            
        ];
    }
}
