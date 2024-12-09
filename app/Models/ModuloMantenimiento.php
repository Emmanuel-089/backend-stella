<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloMantenimiento extends Model
{
    use HasFactory;
    //public $timestamps=false;
    protected $table = 'modulo_mantenimientos';
    protected $primaryKey = 'id_mod_mant';
    protected $fillable = 
    [
    'tipo_mant','id_admin','id_agencia', 'id_depto','id_area','empleado','id_catego','numero_serie',
    'puerto_ip','id_monitor','correo_equipo','password_equipo',
    'accesorios','condicion','comentario','fecha_mant','id_equipo'
    ];
}
