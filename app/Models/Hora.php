<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{   protected $table = 'horas';
    use HasFactory;
    
    public function user(){
        return $this->belongsTo('App\Models\User','idUsuario','id');
    }
    public function userm(){
        return $this->belongsTo('App\Models\User','idMedico','id');
    }
}
