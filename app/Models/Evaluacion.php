<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluaciones';
    protected $guarded = [];

    public function docente()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function materiaConvocada()
    {
        return $this->belongsTo(MateriaConvocada::class, 'materia_convocada_id');
    }
}
