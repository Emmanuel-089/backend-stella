<?php

namespace App\Http\Requests\ModuloMantenimiento;

use Illuminate\Foundation\Http\FormRequest;

class CrearModuloMantenimientoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tipo_mant' => 'required',
            'id_admin' => 'required',
            'id_equipo' => 'required',
            'id_agencia' => 'required',
            'id_depto' => 'required',
            'id_area' => 'required',
            'empleado' => 'required',
            'id_catego' => 'required',
            'numero_serie' => 'required',
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
