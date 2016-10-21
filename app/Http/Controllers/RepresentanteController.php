<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Representante;
use App\Models\Parentesco;
use App\Models\Persona;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representantes= Representante::select('representantes.otros_niños','representantes.dispuesto_colaborar','personas.*')->join('personas','personas.cedula','=','representantes.cedula')->paginate(5);
        return view('representantes.index')->with('representantes',$representantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $parentescos = Parentesco::select('parentescos.*')->pluck('nombre', 'id');
        return view('representantes.crear')->with('parentescos',$parentescos);
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
        $input_representante = new Representante();
        $input_persona = $input_persona->cargarPersona($request['cedula'],$request['nombre'],$request['segundo_nombre'],$request['apellido'],$request['segundo_apellido'],$request['lugar_nacimiento'],$request['fecha_nacimiento'],$request['edad'],$request['ocupacion'],$request['direccion']);
        $input_representante = $input_representante->cargarRepresentante($request ['cedula'],$request['otros_niños'],$request['dispuesto_colaborar'],$request['parentesco_id']);
        Persona::create($input_persona);
        Representante::create($input_representante);
        Session::flash('crear','Se agrego el representante correctamente');
        return redirect()->route('representante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $representante= Representante::select('personas.*')->join('personas','personas.cedula','=','representantes.cedula')->where('representantes.cedula','=',$id)->firstOrFail();
        $parentescos = Parentesco::select('parentescos.*')->pluck('nombre', 'id');
        return view('representantes.detalle')->with('representante',$representante)->with('parentescos',$parentescos);
    }


    public function show($id)
    {
        $representante= Representante::select('representantes.otros_niños','representantes.dispuesto_colaborar','personas.*')->join('personas','personas.cedula','=','representantes.cedula')->where('representantes.cedula','=',$id)->firstOrFail();
        $parentescos = Parentesco::select('parentescos.*')->pluck('nombre', 'id');
        return view('representantes.eliminar')->with('representante',$representante)->with('parentescos',$parentescos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $representante= Representante::select('representantes.otros_niños','representantes.dispuesto_colaborar','personas.*')->join('personas','personas.cedula','=','representantes.cedula')->where('representantes.cedula','=',$id)->firstOrFail();
        $parentescos = Parentesco::select('parentescos.*')->pluck('nombre', 'id');
        return view('representantes.editar')->with('representante',$representante)->with('parentescos',$parentescos);
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
        $input_representante = new Representante();
        $input_persona = $input_persona->cargarPersona($request['cedula'],$request['nombre'],$request['segundo_nombre'],$request['apellido'],$request['segundo_apellido'],$request['lugar_nacimiento'],$request['fecha_nacimiento'],$request['edad'],$request['ocupacion'],$request['direccion']);
        $input_representante = $input_representante->cargarRepresentante($request ['cedula'],$request['otros_niños'],$request['dispuesto_colaborar'],$request['parentesco_id']);
        $persona = Persona::select('personas.*')->where('personas.cedula','=',$id)->update($input_persona);
        $representante = Representante::select('representantes.*')->where('representantes.cedula','=',$id)->update($input_representante);
        Session::flash('actualizar','Se actualizo el representante correctamente');
        return redirect()->route('representante.index');
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
        $representante = Representante::select('representantes.*')->where('representantes.cedula','=',$id)->delete();
        Session::flash('eliminar','Se elimino el representante correctamente');
        return redirect()->route('representante.index');
    }
}
