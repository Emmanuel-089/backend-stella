<?php
namespace App\Http\Requests\ModuloControlGeneral;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarModuloControlGeneralRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            'id_equipo' => '',
            'id_agencia' => '',
            'id_depto' => '',
            'id_area' => '',
            'empleado' => '',
            'id_catego' => '',
            'numero_serie' => '',
        ];
    }
}
