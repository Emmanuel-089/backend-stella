<?php

namespace App\Http\Requests\Administrador;

use Illuminate\Foundation\Http\FormRequest;

class CrearAdministradorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true; // Cambia esto si necesitas validar la autorización del usuario.
    }

    public function rules(): array
    {
        return [
            'nombre_admin' => 'min:3|max:50',
            'correo_admin' => 'required|min:3|max:50|email|unique:administradores,correo_admin',
            'password' => 'required|min:5|max:10',
            'activo' => 'in:Si,No',
            'tipo_admin' => 'string',
        ];
    }

}
