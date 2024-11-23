<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'agencias';
    protected $primaryKey = 'id_agencia';
    protected $fillable = ['nombre_age'];


}
