<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>::Registrar::</title>

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
  <br><br><br>
  <div class="container">
    <div class="col-me-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registrar usuario</div>
        <div class="panel-body">
          {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}         
            <div>
              <div class="form-group col-md-6">
              {!! Form::label('name', 'Nombre') !!}
              {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
              </div>
              <div class="form-group col-md-6">
                {!! Form::label('last_name', 'Apellido') !!}
                {!! Form::text('last_name',null,['class'=> 'form-control', 'placeholder' => 'Apellido', 'required']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('id_card', 'Cedula') !!}
              {!! Form::text('id_card',null,['class'=> 'form-control', 'placeholder' => 'Cedula', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('direction', 'Direccion') !!}
                {!! Form::text('direction',null,['class'=> 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email', 'Correo Electronico') !!}
              {!! Form::email('email',null,['class'=> 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
            </div>
            <div>
              <div class="form-group col-md-6">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password',['class'=> 'form-control', 'placeholder' => '***********', 'required']) !!}
              </div>
              <div class="form-group col-md-6">
                {!! Form::label('password2', 'Contraseña') !!}
                {!! Form::password('password2',['class'=> 'form-control', 'placeholder' => '***********', 'required']) !!}
              </div>
            </div>
            <div class="form-group hidden ">
              {!! Form::label('type', 'Tipo') !!}
              {!! Form::select('type',['' => 'seleccione un nivel de usuario','cliente'=> 'Cliente', 'administrador' => 'Administrador', 'empleado' => 'empleado'],'cliente',['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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

</body>
</html>