<?php

namespace App\Http\Controllers;

use App\Ciudades;
use App\Propietarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    public function index()
    {       
        
        $data = DB::table('vehiculos')
                    ->join('conductores', 'vehiculos.conductor_id', '=', 'conductores.id') 
                    ->join('propietarios', 'vehiculos.propietario_id', '=', 'propietarios.id')                    
                    ->select('vehiculos.placa','vehiculos.marca','conductores.primer_nombre AS con1_nombre', 'conductores.segundo_nombre as con2_nombre','propietarios.primer_nombre AS pro1_nombre', 'propietarios.segundo_nombre AS pro2_nombre')
                    ->get();     
        
        return view('home', compact('data'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $ciudades = Ciudades::select('Ciudades.id','Ciudades.ciudad')->get();

        $propietarios = DB::table('propietarios')
                    ->join('ciudades', 'ciudades.id', '=', 'propietarios.ciudad_id')                    
                    ->select('propietarios.id','propietarios.cedula','propietarios.primer_nombre','propietarios.segundo_nombre','propietarios.apellidos','propietarios.direccion','propietarios.telefono','ciudades.ciudad')
                    ->get();    
        
        return view('propietarios/crear', compact('ciudades','propietarios'));        
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
            'cedula' => 'required',
            'primerNombre' => 'required',            
            'apellidos' => 'required', 
            'direccion' => 'required',            
            'telefono' => 'required',
            'ciudad' => 'required'            
        ]);

       
        Propietarios::create([
            'cedula' => request('cedula'),
            'primer_nombre' => request('primerNombre'),
            'segundo_nombre' => request('segundoNombre'),
            'apellidos' => request('apellidos'),
            'direccion' => request('direccion'),
            'telefono' =>  request('telefono'),
            'ciudad_id' =>  request('ciudad'),            
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
        $propietarios = Propietarios::findOrFail($id);        
        $ciudades = Ciudades::select('Ciudades.id','Ciudades.ciudad')->get();

        return view('propietarios.editar', compact('propietarios', 'ciudades'));   
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

        request()->validate([
            'cedula' => 'required',
            'primerNombre' => 'required',            
            'apellidos' => 'required', 
            'direccion' => 'required',            
            'telefono' => 'required',
            'ciudad' => 'required'            
        ]);


        $propietarios = Propietarios::findOrFail($id);
        
        $propietarios->update([
            'cedula' => request('cedula'),
            'primer_nombre' => request('primerNombre'),
            'segundo_nombre' => request('segundoNombre'),
            'apellidos' => request('apellidos'),
            'direccion' => request('direccion'),
            'telefono' =>  request('telefono'),
            'ciudad_id' =>  request('ciudad'), 
        ]); 

        $ciudades = Ciudades::select('Ciudades.id','Ciudades.ciudad')->get();

        $propietarios = DB::table('propietarios')
                    ->join('ciudades', 'ciudades.id', '=', 'propietarios.ciudad_id')                    
                    ->select('propietarios.id','propietarios.cedula','propietarios.primer_nombre','propietarios.segundo_nombre','propietarios.apellidos','propietarios.direccion','propietarios.telefono','ciudades.ciudad')
                    ->get();    
        
        return view('propietarios.crear', compact('ciudades','propietarios'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietarios = Propietarios::findOrFail($id);
        $propietarios->delete();

        $ciudades = Ciudades::select('Ciudades.id','Ciudades.ciudad')->get();
        $propietarios = DB::table('propietarios')
                    ->join('ciudades', 'ciudades.id', '=', 'propietarios.ciudad_id')                    
                    ->select('propietarios.id','propietarios.cedula','propietarios.primer_nombre','propietarios.segundo_nombre','propietarios.apellidos','propietarios.direccion','propietarios.telefono','ciudades.ciudad')
                    ->get();    
        
        return view('propietarios.crear', compact('ciudades','propietarios'));          
    }
}
