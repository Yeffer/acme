<?php

namespace App\Http\Controllers;

use App\Ciudades;
use App\Propietarios;
use App\Conductores;
use App\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
     public function index()
    {       
        

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $propietarios = Propietarios::select('Propietarios.id','Propietarios.primer_nombre')->get();
        $conductores = Conductores::select('Conductores.id','Conductores.primer_nombre')->get();
        
        return view('vehiculos/crear', compact('propietarios', 'conductores'));      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
            'placa' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'tipo' => 'required', 
            'conductor' => 'required',            
            'propietario' => 'required',
        ]);
       
        Vehiculos::create([
            'placa' => request('placa'),
            'color' => request('color'),
            'marca' => request('marca'),
            'tipo' => request('tipo'),
            'conductor_id' => request('conductor'),
            'propietario_id' =>  request('propietario'),        
        ]);

        return redirect()->route('home');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
