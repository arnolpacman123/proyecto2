<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;

    protected $table = 'convocatorias';
    protected $guarded = [];
    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id');
    }

    public function materiasConvocadas()
    {
        return $this->hasMany(MateriaConvocada::class, 'convocatoria_id');
    }
}
