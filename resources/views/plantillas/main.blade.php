<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>::@yield('title')::</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/push.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap-social.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('jquery/js/jquery-3.1.0.js')!!}
    {!!Html::script('js/simoncito.js')!!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <!-- Fixed navbar -->      
        <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="#"><i class="fa fa-university text-muted" aria-hidden="true"></i> Simoncito</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href=#><i class="glyphicon glyphicon-home " aria-hidden="true"> </i> Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="text-warning fa fa-list-alt" aria-hidden="true"></i>  Inventario<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=#>Categorias</a></li>
                <li><a href=#>Productos</a></li>
              </ul>
            </li>
              <li><a href=#><i class="text-primary fa fa-users" aria-hidden="true"></i>   Usuarios</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-usd text-success" aria-hidden="true"></i>   Cuentas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=#>Pedidos</a></li>
                <li><a href=#>Facturas</a></li>
                <li><a href=#>Cuentas por cobrar</a></li>
              </ul>
            </li>
            <li><a href=#><i class="fa fa-truck " aria-hidden="true"> </i>    Proveedores</a></li>
            <li><a href=#><i class="fa fa-shopping-cart " aria-hidden="true"> </i>    Cotizaciones</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user text-primary" aria-hidden="true"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=#>Detalle</a></li>
                <li><a href=#><i class="text-danger fa fa-sign-out" aria-hidden="true"></i>Salir</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

     <!-- /container -->
    @yield('content')
    
    </body>
</html>
