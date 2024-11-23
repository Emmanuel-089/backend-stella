<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDiscoDuro extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'tipodiscoduro';
    protected $primaryKey = 'id_tipodd';
    protected $fillable = ['nombre_tipodd'];


}
