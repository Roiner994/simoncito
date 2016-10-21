@extends ('plantillas.main')
@section('title', 'Lista de Representantes')

@section('content')

  <div class="container">
    <div class="page-header">
      <h1>Representantes <small>Actualizados hasta hoy</small></h1>
    </div>
    @include('mensajes.mensaje')
    <div class="row">
     <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{ route('representante.create') }}" class="btn btn-success navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"> Nuevo Representante</a>
        </div>
      <div class="panel-body">

         <table class="table table-bordered">
         <thead>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Edad</th>
          <th>Ocupacion</th>
          <th>Otros Niños</th>
          <th>Dispuesto a Colaborar</th>
          <th>Accion</th>
        </thead>
        <tbody>
          @foreach($representantes as $representante)
          <tr>
            <td>{{ $representante->cedula }}</td>
            <td>{{ $representante->nombre }}</td>
            <td>{{ $representante->apellido }}</td>
            <td>{{ $representante->edad }}</td>
            <td>{{ $representante->ocupacion}}</td>
            <td>{{ $representante->otros_niños }}</td>
            <td>{{ $representante->dispuesto_colaborar }}</td>
            <td>
              <a href="{{ route('representante.detalle',$representante->cedula )}}" class="btn btn-primary glyphicon glyphicon-folder-open">
              </a>
              <a href= "{{ route('representante.edit',$representante->cedula )}}" class="btn btn-warning glyphicon glyphicon-pencil">
              </a>
              <a href= "{{ route('representante.show',$representante->cedula )}}" class="btn btn-danger glyphicon glyphicon-remove-circle"></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $representantes->render() !!} 
    </div>
  </div>


</div>
</div>
</div> 
<div class="span12">&nbsp;</div>
<div class="span12">&nbsp;</div>    
@endsection()