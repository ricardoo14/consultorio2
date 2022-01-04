<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayuda extends Model
{   protected $table = 'preguntas';
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User','idPaciente','id');
    }
}
