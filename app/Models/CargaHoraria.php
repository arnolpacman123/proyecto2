<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargaHoraria extends Model
{
    use HasFactory;
    protected $table = 'cargas_horarias';
    protected $guarded = [];

    public function grupoMateria()
    {
        return $this->belongsTo(GrupoMateria::class, 'grupo_materia_id');
    }
}
