<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{   
    protected $table = 'previsiones';
    use HasFactory;

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
