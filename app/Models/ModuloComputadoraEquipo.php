<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloComputadoraEquipo extends Model
{
    use HasFactory;
    //public $timestamps=false;
    protected $table = 'modulo_computadora_equipos';
    protected $primaryKey = 'id_equipo';
    protected $fillable = ['id_catego','id_marca','id_modelo','numero_serie','id_so','id_licso','id_cpu','id_dd','id_tipodd','id_ram',
    'id_antivirus','id_office','id_licoffice','fecha_compra' ,'costo','id_agencia','id_depto','id_area','empleado','id_dep_area'];
}
