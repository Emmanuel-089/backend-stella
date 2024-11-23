<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'office';
    protected $primaryKey = 'id_office';
    protected $fillable = ['nombre_office'];


}
