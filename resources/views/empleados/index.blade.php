@extends ('plantillas.main')
@section('title', 'Lista de empleados')

@section('content')

  <div class="container">
    <div class="page-header">
      <h1>Empleados <small>Actualizados hasta hoy</small></h1>
    </div>
    @include('mensajes.mensaje')
    <div id="prueba">hola</div>
    <div class="row">
     <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{ route('empleado.create') }}" class="btn btn-success navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"> Nuevo Usuario</a>
        </div>
      <div class="panel-body">

         <table class="table table-bordered">
         <thead>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Edad</th>
          <th>Ocupacion</th>
          <th>Estado</th>
          <th>Accion</th>
        </thead>
        <tbody>
          @foreach($empleados as $empleado)
          <tr>
            <td>{{ $empleado->cedula }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->edad }}</td>
            <td>{{ $empleado->ocupacion}}</td>
            <td><label id="estado">{{ $empleado->estado}}</label></td>

            {{-- <td>
              <label class="label label-primary">
                {{ $users->type }}
              </label>              
              <label class="label label-success">
                {{ $users->type }}
              </label>
              <label class="label label-warning">
                {{ $users->type }}
              </label>

            </td> --}}
            <td>
              <a href=#{{-- "{{ route('admin.users.detail',$users->id )}}" --}} class="btn btn-primary glyphicon glyphicon-folder-open">
              </a>
              <a href=#{{-- "{{ route('admin.users.edit',$users->id )}}" --}} class="btn btn-warning glyphicon glyphicon-pencil">
              </a>
              <a href=#{{-- "{{ route('admin.users.show',$users->id )}}" --}} class="btn btn-danger glyphicon glyphicon-remove-circle"></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $empleados->render() !!} 
    </div>
  </div>


</div>
</div>
</div> 
<div class="span12">&nbsp;</div>
<div class="span12">&nbsp;</div>    
@endsection()