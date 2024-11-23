<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicOffice extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'licoffice';
    protected $primaryKey = 'id_licoffice';
    protected $fillable = ['nombre_licoffice'];
}
