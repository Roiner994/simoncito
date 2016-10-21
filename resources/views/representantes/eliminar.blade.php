@extends('plantillas.main')

@section('title','Eliminar Representante')

@section('content')

     
<div class="container">
	<div class="page-header">
     <h1>Eliminar Representante</h1>
   </div>
	<div class="row">
     <div class="col-md-8">
        
        <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar 
          </div>
         <div class="panel-body">
            {!!Form::open(['route'=>['representante.destroy',$representante->cedula],'method'=>'DELETE'])!!}
            <div class="form-group">
                            {!!form::label('Cedula')!!} 
                            {!!$representante->cedula !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!!form::label('Nombre')!!} 
                            {!!$representante->nombre !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!!form::label('Segundo nombre')!!} 
                            {!!$representante->segundo_nombre !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!!form::label('Apellido')!!} 
                            {!!$representante->apellido !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!!form::label('Segundo apellido')!!} 
                            {!!$representante->segundo_apellido !!}
                        </div>
                        <div class="form-group">
                            {!!form::label('Lugar de nacimiento')!!}
                            {!!$representante->lugar_nacimiento !!}
                        </div>
                        <div class="form-group">
                            {!!form::label('Fecha de nacimiento')!!}
                            {!!$representante->fecha_nacimiento !!}
                        </div>
                        <div class="form-group">
                            {!!form::label('Edad')!!} 
                            {!!$representante->edad !!}
                        </div>
                        <div class="form-group">
                            {!!form::label('Ocupacion')!!} 
                            {!!$representante->ocupacion !!}
                        </div>
                        <div class="form-group">
                            {!!form::label('Direccion')!!} 
                            {!!$representante->direccion !!}
                        </div>            
            {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}
            <a href="{{ route('representante.index')}}" class="btn btn-warning btn-sm m-t-10"> Regresar</a>
          {!!Form::close()!!}        
     </div>
   </div>
</div>


@endsection
