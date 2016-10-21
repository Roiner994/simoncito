@extends('plantillas.main')

@section('title','Detalle del Representante')

@section('content')


<div class="container">
	<div class="page-header">
		<h1>Detalle del Representante</h1>
	</div>
	<div class="row">
		<div class="col-md-8">

			<div class="panel panel-primary">
				<div class="panel-heading">
					representante 
				</div>
				<div class="panel-body">
					
					{!!Form::open()!!}
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
						<a href="{{ route('representante.index')}}" class="btn btn-warning btn-sm m-t-10"> Regresar</a>						
					{!!Form::close()!!}
					        
				</div>
			</div>
		</div>


		@endsection
