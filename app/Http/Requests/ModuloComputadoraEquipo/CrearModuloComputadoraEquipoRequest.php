<?php

namespace App\Http\Requests\ModuloComputadoraEquipo;

use Illuminate\Foundation\Http\FormRequest;

class CrearModuloComputadoraEquipoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_catego' => 'required',
            'id_marca' => 'required',
            'id_modelo' => 'required',
            'numero_serie' => 'required',
            'id_so' => 'required',
            'id_licso' => '',
            'id_cpu' => '',
            'id_dd' => '',
            'id_tipodd' => '',
            'id_ram' => '',
            'id_antivirus' => '',
            'id_office' => '',
            'id_licoffice' => '',
            'fecha_compra' => '',
            'costo' => '',
            
        ];
    }
}
