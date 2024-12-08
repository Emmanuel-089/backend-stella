<?php
namespace App\Http\Requests\ModuloComputadoraEquipo;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarModuloComputadoraEquipoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            'id_catego' => '',
            'id_marca' => '',
            'id_modelo' => '',
            'numero_serie' => '',
            'id_so' => '',
            'id_licso' => '',
            'id_cpu' => '',
            'id_dd' => '',
            'id_tipodd' => '',
            'id_ram' => '',
            'id_antivirus' => '',
            'id_office' => '',
            'id_licoffice' => '',
            'fecha_compra' => '',
            'id_agencia' => '',
            'id_depto' => '',
            'id_area' => '',
            'empleado' => '',
            'id_dep_area' => '',
            'costo' => '',
        ];
    }
}
