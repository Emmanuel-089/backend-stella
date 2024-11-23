<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'procesadores';
    protected $primaryKey = 'id_cpu';
    protected $fillable = ['nombre_cpu'];
}
