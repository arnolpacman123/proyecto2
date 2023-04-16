<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';
    protected $guarded = [];
    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function convocatorias()
    {
        return $this->hasMany(Convocatoria::class, 'periodo_id');
    }
}
