<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GrupoMateria extends Pivot
{
    use HasFactory;

    protected $table = 'grupos_materias';
    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function cargasHorarias()
    {
        return $this->hasMany(CargaHoraria::class, 'grupo_materia_id');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}
