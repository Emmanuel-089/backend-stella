<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloControlGeneral extends Model
{
    use HasFactory;
    //public $timestamps=false;
    protected $table = 'modulo_control_general';
    protected $primaryKey = 'id_mod_general';
    protected $fillable = 
    ['id_equipo','id_agencia','id_depto','id_area','empleado','id_catego','numero_serie'];
}
