<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::@yield('title')::</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/push.js"></script>
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/estilo.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('jquery/js/jquery-3.1.0.js')!!}
    {!!Html::script('js/simoncito.js')!!}

  </head>
  <body>
        <nav class="navbar-inverse">
      <div class="container">
        <div class="navbar-header navbar-inverse">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="#"><i class="fa fa-university text-muted" aria-hidden="true"></i> Simoncito</a>
        </div>

        {{-- navbar --}}
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            {{-- inicio --}}
            <li><a href=#><i class="glyphicon glyphicon-home " aria-hidden="true"> </i> Inicio</a></li>
            
            {{-- inventario --}}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="text-warning fa fa-list-alt" aria-hidden="true"></i>  Inventario<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=#>Categorias</a></li>
                <li><a href=#>Productos</a></li>
              </ul>
            </li>

            {{-- Personas --}}

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="text-primary fa fa-users" aria-hidden="true"></i> Personas<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Empleados <i class="pull-right fa fa-caret-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Encargados</a></li>
                      <li><a href="#">Suplentes</a></li>
                    </ul>
                  </li>
                  <li><a href=#>Representantes</a></li>
                  <li><a href=#>Estudiantes</a></li>
                </ul>
            </li>


            <li><a href=#><i class="fa fa-truck " aria-hidden="true"> </i>    Proveedores</a></li>
            <li><a href=#><i class="fa fa-shopping-cart " aria-hidden="true"> </i>    Cotizaciones</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user text-primary" aria-hidden="true"></i> {{Auth::user()->email}}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=#>Detalle</a></li>
                <li><a href="{{ route('administrador.auth.logout')}}"><i class="text-danger fa fa-sign-out" aria-hidden="true"></i>Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
    
    </body>
</html>
