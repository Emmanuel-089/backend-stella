<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'departamentos';
    protected $primaryKey = 'id_depto';
    protected $fillable = ['nombre_depto'];
}
