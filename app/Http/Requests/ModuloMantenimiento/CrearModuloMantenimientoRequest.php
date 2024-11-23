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
            'id_mod_general' => 'required',
            'id_agencia' => 'required',
            'id_depto' => 'required',
            'id_area' => 'required',
            'empleado' => 'required',
            'id_catego' => 'required',
            'numero_serie' => 'required',
            'puerto_ip' => '',
            'id_monitor' => 'required',
            'correo_equipo' => 'required',
            'password_equipo' => 'required',
            'accesorios' => 'required',
            'condicion' => 'required',
            'comentario' => '',
            'fecha_mant' => 'required',
            
        ];
    }
}
