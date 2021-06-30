<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidad;
use App\Models\User;

class HoraComponent extends Component
{
    public $medicos ="";
    public function render()
    {
        return view('livewire.hora-component',[
            "especialidades"=>Especialidad::all(),
            "medicos"=> $this->medicos
        ]);
        
    }
    public function listarMedicos($idEspecialidad){
        $this->medicos = User::where("idEspecialidad",$idEspecialidad)->get();
    }
}
