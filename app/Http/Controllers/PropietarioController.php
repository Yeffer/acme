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
        

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $ciudades = Ciudades::select('Ciudades.id','Ciudades.ciudad')->get();
        
        return view('propietarios/crear', compact('ciudades'));        
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
