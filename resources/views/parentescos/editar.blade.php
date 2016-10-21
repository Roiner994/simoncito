@extends('plantillas.main')
@section('title', 'Editar Parentesco')

@section('content')

<div class="container">
	<div class="page-header">
		<h1>Editar parentesco</h1>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Editar Parentesco: {!! $parentesco->nombre !!}
		</div>
		<div class="panel-body">

		 		{!!Form::model($parentesco,['route'=>['parentesco.update',$parentesco->id],'method'=>'PUT'])!!}									
						<div class="form-group">
							{!! Form::label('nombre', 'Nombre') !!}
							{!! Form::text('nombre',null,['class'=> 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
						</div>
						
					<div class="form-group">
						{!! Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
					</div>       
			{!!Form::close()!!}
		</div> 
	</div>
</div>

@endsection