<?php
namespace App\Http\Requests\ModuloMantenimiento;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarModuloMantenimientoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            'tipo_mant' => '',
            'id_admin' => '',
            'id_agencia' => '',
            'id_depto' => '',
            'id_area' => '',
            'empleado' => '',
            'id_catego' => '',
            'numero_serie' => '',
            'puerto_ip' => '',
            'id_monitor' => '',
            'correo_equipo' => '',
            'password_equipo' => '',
            'accesorios' => '',
            'condicion' => '',
            'comentario' => '',
            'fecha_mant' => '',
        ];
    }
}
