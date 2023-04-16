<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    protected $table = 'postulantes';
    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function materiaConvocada()
    {
        return $this->belongsTo(MateriaConvocada::class, 'materia_convocada_id');
    }

    public function formularioRelation()
    {
        return $this->hasOne(Formulario::class, 'postulante_id');
    }
}
