<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{   protected $table = 'especialidades';
    use HasFactory;
     
    public function user(){
        return $this->hasOne('App\Models\User');
    }
}
