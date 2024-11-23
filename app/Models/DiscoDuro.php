<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscoDuro extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'discoduro';
    protected $primaryKey = 'id_dd';
    protected $fillable = ['nombre_dd'];
}
