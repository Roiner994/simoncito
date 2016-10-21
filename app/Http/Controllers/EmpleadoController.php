<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        $i=Empleado::select('empleados')->count();
        $empleados= Empleado::select('empleados.estado','personas.*')->join('personas','personas.cedula','=','empleados.cedula')->paginate(5);
        return view('empleados.index')->with('empleados',$empleados)->with('i',$i);
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
        $input_persona = new Persona();
        $input_persona = $input_persona->cargarPersona($request['cedula'],$request['nombre'],$request['segundo_nombre'],$request['apellido'],$request['segundo_apellido'],$request['lugar_nacimiento'],$request['fecha_nacimiento'],$request['edad'],$request['ocupacion'],$request['direccion']);
        Persona::create($input_persona);

        Empleado::create([
            'cedula' => $request ['cedula'],
            'estado' => $request ['estado']
        ]);

        Session::flash('crear','Se agrego el empleado correctamente');
        return redirect()->route('empleado.index');
        
    }

    public function detalle($id)
    {
        $empleado= Empleado::select('empleados.estado', 'personas.*')->join('personas','personas.cedula','=','empleados.cedula')->where('empleados.cedula','=',$id)->firstOrFail();
        return view('empleados.detalle')->with('empleado',$empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado= Empleado::select('empleados.estado', 'personas.*')->join('personas','personas.cedula','=','empleados.cedula')->where('empleados.cedula','=',$id)->firstOrFail();
        return view('empleados.eliminar')->with('empleado',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado= Empleado::select('empleados.estado', 'personas.*')->join('personas','personas.cedula','=','empleados.cedula')->where('empleados.cedula','=',$id)->firstOrFail();
        return view('empleados.editar')->with('empleado',$empleado);
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
        $input_persona = new Persona();
        $input_persona = $input_persona->cargarPersona($request['cedula'],$request['nombre'],$request['segundo_nombre'],$request['apellido'],$request['segundo_apellido'],$request['lugar_nacimiento'],$request['fecha_nacimiento'],$request['edad'],$request['ocupacion'],$request['direccion']);
        $persona = Persona::select('personas.*')->where('personas.cedula','=',$id)->update($input_persona);
        $empleado = Empleado::select('empleados.*')->where('empleados.cedula','=',$id)->update(['estado' => $request['estado']]);
        Session::flash('actualizar','Se actualizo el empleado correctamente');
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::select('personas.*')->where('personas.cedula','=',$id)->delete();
        Session::flash('eliminar','Se elimino el empleado correctamente');
        return redirect()->route('empleado.index');
    }
}
