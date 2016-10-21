@extends ('plantillas.main')
@section('title', 'Crear Representante')

@section ('content')
	<br><br>
	<div class="container">
		<div class="col-me-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Registrar Representante</div>
				<div class="panel-body">
					{!! Form::open(['route' => 'representante.store', 'method' => 'POST' , 'class' => 'form_inverse']) !!}
						<div class="form-group">
							{!! Form::label('cedula', 'Cedula') !!}
							{!! Form::text('cedula',null,['class'=> 'form-control', 'placeholder' => 'Cedula', 'required']) !!}
						</div>										
						<div class="form-group col-md-6">
							{!! Form::label('nombre', 'Nombre') !!}
							{!! Form::text('nombre',null,['class'=> 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
							{!! Form::label('segundo_nombre', 'Segundo Nombre') !!}
							{!! Form::text('segundo_nombre',null,['class'=> 'form-control', 'placeholder' => 'Segundo Nombre', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
							{!! Form::label('apellido', 'Apellido') !!}
							{!! Form::text('apellido',null,['class'=> 'form-control', 'placeholder' => 'Apellido', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
							{!! Form::label('segundo_apellido', 'Segundo Apellido') !!}
							{!! Form::text('segundo_apellido',null,['class'=> 'form-control', 'placeholder' => 'Segundo Apellido', 'required']) !!}
						</div>	
						<div class="form-group col-md-6">
							{!! Form::label('lugar_nacimiento', 'Lugar de nacimiento') !!}
							{!! Form::text('lugar_nacimiento',null,['class'=> 'form-control', 'placeholder' => 'Lugar de nacimiento', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
								{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
								{!! Form::date('fecha_nacimiento',null,['class'=> 'form-control', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
							{!! Form::label('edad', 'Edad') !!}
							{!! Form::number('edad',null,['class'=> 'form-control', 'placeholder' => 'Edad', 'required']) !!}
						</div>
						<div class="form-group col-md-6">
							{!! Form::label('ocupacion', 'Ocupacion') !!}
							{!! Form::text('ocupacion',null,['class'=> 'form-control', 'placeholder' => 'Ocupacion', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('direccion', 'Direccion') !!}
							{!! Form::text('direccion',null,['class'=> 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('parentesco_id', 'Parentesco') !!}
							{!! Form::select('parentesco_id',$parentescos,null,['id'=>'parentesco_id','class'=>'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('otros_niños', '¿Tiene otros niños inscritos en esta institucion?') !!}
         					 <input type="radio" name="otros_niños" value="si" required> Si <i class="fa fa-check" aria-hidden="true"></i>
          					<input type="radio" name="otros_niños" value="no" required> No <i class="fa fa-times" aria-hidden="true"></i>
        				</div>
        				<div class="form-group">
							{!! Form::label('otros_niños', '¿Esta dispuesto a colaborar?') !!}
         					 <input type="radio" name="dispuesto_colaborar" value="si" required> Si <i class="fa fa-check" aria-hidden="true"></i>
          					<input type="radio" name="dispuesto_colaborar" value="no" required> No <i class="fa fa-times" aria-hidden="true"></i>
        				</div>				
						<div class="form-group">
                            <div class="col-md-6 col-m	d-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-user"></i> Registrar
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection