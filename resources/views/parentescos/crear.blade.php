@extends ('plantillas.main')
@section('title', 'Crear Parentesco')

@section ('content')
	<br><br>
	<div class="container">
		<div class="col-me-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Registrar Parentesco</div>
				<div class="panel-body">
					{!! Form::open(['route' => 'parentesco.store', 'method' => 'POST' , 'class' => 'form_inverse']) !!}									
						<div class="form-group">
							{!! Form::label('nombre', 'Nombre') !!}
							{!! Form::text('nombre',null,['class'=> 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
						</div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     Registrar
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection