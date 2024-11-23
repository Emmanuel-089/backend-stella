<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'categorias';
    protected $primaryKey = 'id_catego';
    protected $fillable = ['nombre_catego'];
}
