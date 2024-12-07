<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoArea extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'departamento_area';
    protected $primaryKey = 'id_dep_area';

    protected $fillable = [
        'id_depto',
        'id_area',
    ];

    // Relaciones
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_depto');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'id_area');
    }
}
