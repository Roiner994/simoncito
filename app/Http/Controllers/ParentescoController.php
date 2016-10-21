<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Parentesco;
use Session;

class ParentescoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $parentescos=Parentesco::orderBy('id', 'ASc')->paginate(5);
        return view('parentescos.index')->with('parentescos',$parentescos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parentescos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Parentesco::create($request->all());
        Session::flash('crear','Se agrego el parentesco correctamente');
        return redirect()->route('parentesco.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parentesco= Parentesco::findOrFail($id);
        return view('parentescos.eliminar')->with('parentesco',$parentesco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parentesco= Parentesco::findOrFail($id);
        return view('parentescos.editar')->with('parentesco',$parentesco);
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
        $parentesco= Parentesco::findOrFail($id);
        $input=$request->all();
        $parentesco->fill($input)->save();
        Session::flash('actualizar','Se actualizo el parentesco correctamente');
        return redirect()->route('parentesco.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parentesco= Parentesco::findOrFail($id);
        $parentesco->delete();
        Session::flash('eliminar','Se elimino el parentesco correctamente');
        return redirect()->route('parentesco.index');
    }
}
