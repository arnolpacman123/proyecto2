<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';
    protected $guarded = [];

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupos_materias');
    }

    public function materiasConvocadas()
    {
        return $this->hasMany(MateriaConvocada::class, 'materia_id');
    }

    public function gruposMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'materia_id');
    }
}
