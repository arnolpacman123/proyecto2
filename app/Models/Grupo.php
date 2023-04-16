<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupos';
    protected $guarded = [];

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'grupos_materias');
    }

    public function gruposMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'grupo_id');
    }
}
