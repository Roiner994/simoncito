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
    {!!Html::style('css/login.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
</head>
<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Sistema Simoncito</h1>
	               		<hr />
	               	</div>
	            </div> 
	            <div class="error-center">
	            	@include('mensajes.mensaje');
	            </div>
				<div class="main-login main-center">
					{!! Form::open(['route'=>'administrador.auth.login','method' => 'POST'] ) !!}	
						<div class="form-group">
							{!! Form::label('email', 'Correo Electronico') !!}
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									{!! Form::email('email',null,['class'=> 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
								</div>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Contraseña') !!}
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									{!! Form::password('password',['class'=> 'form-control', 'placeholder' => '***********', 'required']) !!}
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button"> <i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>

</html>
