<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaConvocada extends Model
{
    use HasFactory;

    protected $table = 'materias_convocadas';
    protected $guarded = [];

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_id');
    }

    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class, 'convocatoria_id');
    }

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'materia_convocada_id');
    }

    public function evaluacion()
    {
        return $this->hasOne(Evaluacion::class, 'materia_convocada_id');
    }
}
