<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SO extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'so';
    protected $primaryKey = 'id_so';
    protected $fillable = ['nombre_so'];
}
