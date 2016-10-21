@extends('plantillas.main')

@section('title','Eliminar Parentesco')

@section('content')

     
<div class="container">
	<div class="page-header">
     <h1>Eliminar Parentesco</h1>
   </div>
	<div class="row">
     <div class="col-md-8">
        
        <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar 
          </div>
         <div class="panel-body">
            {!!Form::open(['route'=>['parentesco.destroy',$parentesco->id],'method'=>'DELETE'])!!}
                <div class="form-group">
                	{!!form::label('Id')!!} 
                	{!!$parentesco->id !!}
                </div>
                <div class="form-group col-md-6">
                	{!!form::label('Nombre')!!} 
                	{!!$parentesco->nombre !!}
                </div>           
                {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}
                <a href="{{ route('parentesco.index')}}" class="btn btn-warning btn-sm m-t-10"> Regresar</a>
          {!!Form::close()!!}        
     </div>
   </div>
</div>


@endsection
