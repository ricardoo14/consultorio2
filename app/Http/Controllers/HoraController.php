<?php

namespace App\Http\Controllers;
use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horas.index',['hora'=>Hora::all()->where('idUsuario',auth()->id())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hora = new Hora();
        $hora->hora = request('hora');
        $hora->fecha = request('fecha');
        $hora->idUsuario =auth()->id();
        $hora->idMedico = request('medico');
        $hora->idEstadoHora = 1;

        $v1 = Hora::all()->where('fecha', request('fecha'))->where('hora',request('hora'))->pluck('hora')->first();
       
            if($v1 == request('hora')){
                return redirect('horas')->with('infa','No se pudo registrar hora');
            }
            else{
                $hora->save();
                return redirect('horas')->with('info','hora registrada');
                }
        

        
        /* $hora->save();
        return redirect('horas')->with('info', 'hora registrada'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        return view('horas.show',['hora'=>Hora::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pago($id)
    {
        
    }
}
