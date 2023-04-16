<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $table = 'formularios';
    protected $guarded = [];

    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'postulante_id');
    }
}
