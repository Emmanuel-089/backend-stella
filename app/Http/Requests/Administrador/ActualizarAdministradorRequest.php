<?php
namespace App\Http\Requests\Administrador;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarAdministradorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cambia esto si necesitas validar la autorización del usuario.
    }

    public function rules(): array
        {
            return [
                'nombre_admin' => 'required|min:3|max:50',
                'correo_admin' => ['required, unique:users, email, bail'],
                'password' => 'required|min:5|max:10',
                'activo' => 'nullable|boolean',
                'tipo_admin' => 'nullable|string',
            ];
        }


}
