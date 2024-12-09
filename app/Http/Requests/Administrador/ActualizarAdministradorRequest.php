<?php

namespace App\Http\Requests\Administrador;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAdministradorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permitir la autorización para todos los usuarios
    }

    public function rules(): array
    {
        $adminId = $this->route('administrador') ?? $this->id;
    
        return [
            'nombre_admin' => 'required|min:3|max:50',
            'correo_admin' => 'required|email|unique:administradores,correo_admin,' . $adminId . ',id_admin',
            'password' => '', // Solo valida si se envía un nuevo password
            'activo' => 'nullable|in:Si,No',
            'tipo_admin' => 'nullable|string',
        ];
    }
    
}
