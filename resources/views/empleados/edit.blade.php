@extends('template.main')
@section('title', 'Editar Usuario')

@section('content')

<div class="container">
	<div class="page-header">
		<h1>Editar Producto</h1>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Editar Producto: {!! $user->name !!}
		</div>
		<div class="panel-body">

			{!!Form::model($user,['route'=>['admin.users.update',$user->id],'method'=>'PUT'])!!}
					<div class="form-group">
						{!!form::label('Nombre')!!}
						{!!form::text('name',$user->name,['id'=>'nombre','class'=>'form-control','placeholder'=>'Nombre','required'])!!}
					</div>
					<div class="form-group">
						{!!form::label('Apellido')!!}
						{!!form::text('name',$user->last_name,['id'=>'last_name','class'=>'form-control','placeholder'=>'Apellido','required'])!!}
					</div>
					<div class="form-group">
						{!!form::label('Cedula')!!}
						{!!form::text('name',$user->id_card,['id'=>'id_card','class'=>'form-control','placeholder'=>'Cedula','required'])!!}
					</div>
					<div class="form-group">
						{!!form::label('Direccion')!!}
						{!!form::text('name',$user->direction,['id'=>'direction','class'=>'form-control','placeholder'=>'Direccion','required'])!!}
					</div>
					<div class="form-group">
						{!!form::label('Correo Electronico')!!}
						{!!form::email('email',$user->email,['id'=>'precio','class'=>'form-control','placeholder'=>'ejemplo@gmail.com','required'])!!}
					</div>
					<div class="form-group">
						{!! Form::label('type', 'Tipo') !!}
						{!! Form::select('type', ['' => 'Seleccione un usuario','miembro' => 'Miembro' , 'administrador' => 'Administrador','cliente'=>'Cliente'],null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
					</div>       
			{!!Form::close()!!}
		</div> 
	</div>
</div>

@endsection