<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>::Login::</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap-social.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
</head>
<body>
	<div class="container">
		@include('partials.message')
		<div class="page-header">
			<h1 class="text-info">Ingresa a nuestro sitio </h1>
		</div>
		@include('partials.message')
		<div class="col-md-6 pull-center">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'admin.auth.login','method' => 'POST']) !!}		
						<div class="form-group">
							{!! Form::label('email', 'Correo Electronico') !!}
							{!! Form::email('email',null,['class'=> 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('password', 'Contraseña') !!}
							{!! Form::password('password',['class'=> 'form-control', 'placeholder' => '***********', 'required']) !!}
						</div>
						<div class="form-group">
							<div class="form-group ">
                            <div class="col-md-1 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    <i class="glyphicon glyphicon-log-in"></i> Ingresar
                                </button>
                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-md-1 col-md-offset-4">
	                                <a href= {{ route('register.create')}} class="btn btn-danger">
	                					<i class="fa fa-user-plus" aria-hidden="true"></i> Registrar
	                				</a>
	                                    
	                            </div>
	                        </div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</body>
</html>
