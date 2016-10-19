@extends('plantillas.main')

@section('title','Eliminar Empleado')

@section('content')

     
<div class="container">
	<div class="page-header">
     <h1>Eliminar Empleado</h1>
   </div>
	<div class="row">
     <div class="col-md-8">
        
        <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar 
          </div>
         <div class="panel-body">
            {!!Form::open(['route'=>['empleado.destroy',$empleado->cedula],'method'=>'DELETE'])!!}
            <div class="form-group">
            	{!!form::label('Cedula')!!} 
            	{!!$empleado->cedula !!}
            </div>
            <div class="form-group col-md-6">
            	{!!form::label('Nombre')!!} 
            	{!!$empleado->nombre !!}
            </div>
            <div class="form-group col-md-6">
            	{!!form::label('Segundo nombre')!!} 
            	{!!$empleado->segundo_nombre !!}
            </div>
            <div class="form-group col-md-6">
            	{!!form::label('Apellido')!!} 
            	{!!$empleado->apellido !!}
            </div>
            <div class="form-group col-md-6">
            	{!!form::label('Segundo apellido')!!} 
            	{!!$empleado->segundo_apellido !!}
            </div>
            <div class="form-group">
            	{!!form::label('Lugar de nacimiento')!!}
            	{!!$empleado->lugar_nacimiento !!}
            </div>
            <div class="form-group">
            	{!!form::label('Fecha de nacimiento')!!}
            	{!!$empleado->fecha_nacimiento !!}
            </div>
            <div class="form-group">
            	{!!form::label('Edad')!!} 
            	{!!$empleado->edad !!}
            </div>
            <div class="form-group">
            	{!!form::label('Ocupacion')!!} 
            	{!!$empleado->ocupacion !!}
            </div>
            <div class="form-group">
            	{!!form::label('Direccion')!!} 
            	{!!$empleado->direccion !!}
            </div>
            <div class="form-group">
            	{!!form::label('Estado')!!} 
            	{!!$empleado->estado !!}
            	</div>            
            {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}
            <a href="{{ route('empleado.index')}}" class="btn btn-warning btn-sm m-t-10"> Regresar</a>
          {!!Form::close()!!}        
     </div>
   </div>
</div>


@endsection
