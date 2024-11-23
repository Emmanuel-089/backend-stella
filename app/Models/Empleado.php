<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'empleados';
    protected $primaryKey = 'id_emp';
    protected $fillable = ['nombre_emp'];
}
