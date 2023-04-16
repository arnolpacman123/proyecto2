<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $guarded = [];

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function getAuthIdentifier()
    {
        return $this->numero_registro;
    }

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_usuario_id');
    }

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'usuario_id');
    }

    public function gruposMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'usuario_id');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'usuario_id');
    }
}
