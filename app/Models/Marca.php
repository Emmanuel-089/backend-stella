<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';
    protected $fillable = ['nombre_marca'];
}
