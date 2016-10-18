<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Persona;
use App\Models\Empleado;
use Laracasts\Flash\Flash;
use Session;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados= Empleado::select('empleados.estado','personas.*')->join('personas','personas.cedula','=','empleados.cedula')->paginate(5);
        return view('empleados.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Persona::create([
                    'cedula' => $request ['cedula'],
                    'nombre' => $request ['nombre'],
                    'segundo_nombre' => $request ['segundo_nombre'],
                    'apellido' => $request ['apellido'],
                    'segundo_apellido' => $request ['segundo_apellido'],
                    'lugar_nacimiento' => $request ['lugar_nacimiento'],
                    'fecha_nacimiento' => $request ['fecha_nacimiento'],
                    'edad' => $request['edad'],
                    'ocupacion' => $request['ocupacion'],
                    'direccion' => $request['direccion']
        ]);

        Empleado::create([
            'cedula' => $request ['cedula'],
            'estado' => $request ['estado']
        ]);

        Session::flash('crear','Se agrego el usuario correctamente');
        return redirect()->route('empleado.index');
        
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
}
