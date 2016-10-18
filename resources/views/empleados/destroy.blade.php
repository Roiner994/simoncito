@extends('template.main')

@section('title','Detalle de usuario')

@section('content')

     
<div class="container">
	<div class="page-header">
     <h1>Detalle del Usuario</h1>
   </div>
	<div class="row">
     <div class="col-md-8">
        
        <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar 
          </div>
         <div class="panel-body">

            {!!Form::open(['route'=>['admin.users.destroy',$user->id],'method'=>'DELETE'])!!}
            	<div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO?</label>
	             <div class="form-group">                
	             </div>
	             <div class="form-group">
	              {!!form::label('Usuario')!!} 
	               {!!$user->name !!}
	             </div>
	             <div class="form-group">
	               {!!form::label('Apellido')!!} 
	               {!!$user->last_name !!}
	             </div>
	             <div class="form-group">
	               {!!form::label('Cedula')!!} 
	               {!!$user->id_card !!}
	             </div>
	             <div class="form-group">
	               {!!form::label('Direccion')!!} 
	               {!!$user->direction !!}
	             </div>
	             <div class="form-group">
	               {!!form::label('Correo')!!} 
	               {!!$user->email !!}
	             </div>
	             <div class="form-group">
	               {!!form::label('Tipo')!!} 
	               {!!$user->type !!}
	             </div>
				{!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-warning btn-sm m-t-10" >Cancelar</button>
          {!!Form::close()!!}        
     </div>
   </div>
</div>

<script>
    $("#cancelar").click(function(event)
    {
        document.location.href = "{{ route('admin.users.index')}}";
    });
  </script>

@endsection
