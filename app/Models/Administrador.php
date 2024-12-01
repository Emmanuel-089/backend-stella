<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Asegúrate de importar la clase Authenticatable
use Illuminate\Notifications\Notifiable;

class Administrador extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $table = 'administradores';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['nombre_admin', 'correo_admin', 'password', 'activo', 'tipo_admin'];
}
