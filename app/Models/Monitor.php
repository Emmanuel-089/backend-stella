<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'monitores';
    protected $primaryKey = 'id_monitor';
    protected $fillable = ['nombre_monitor'];
}
