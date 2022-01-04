<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'rut',
        'email',
        'password',
        'idPrevision',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function especialidad(){
        return $this->belongsTo('App\Models\Especialidad','idEspecialidad','id');
    }
    public function horas(){
        return $this->hasMany('App\Models\Hora');
    }
    public function prevision(){
        return $this->belongsTo('App\Models\Prevision','idPrevision','id');
    }
    public function ayudas(){
        return $this->hasMany('App\Models\Ayuda');
    }
   
}
