<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicSO extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'licso';
    protected $primaryKey = 'id_licso';
    protected $fillable = ['nombre_licso'];
}
