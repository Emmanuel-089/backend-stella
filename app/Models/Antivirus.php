<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antivirus extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'antivirus';
    protected $primaryKey = 'id_antivirus';
    protected $fillable = ['nombre_antivirus'];


}
