@extends ('plantillas.main')
@section('title', 'Lista de Parentescos')

@section('content')

  <div class="container">
    <div class="page-header">
      <h1>Parentescos <small>Actualizados hasta hoy</small></h1>
    </div>
    @include('mensajes.mensaje')
    <div class="row">
     <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <a href="{{ route('parentesco.create') }}" class="btn btn-success navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"> Nuevo Parentesco</a>
        </div>
      <div class="panel-body">

         <table class="table table-bordered">
         <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Accion</th>
        </thead>
        <tbody>
          @foreach($parentescos as $parentesco)
          <tr>
            <td>{{ $parentesco->id }}</td>
            <td>{{ $parentesco->nombre }}</td>
            <td>
              </a>
              <a href= "{{ route('parentesco.edit',$parentesco->id )}}" class="btn btn-warning glyphicon glyphicon-pencil">
              </a>
              <a href= "{{ route('parentesco.show',$parentesco->id )}}" class="btn btn-danger glyphicon glyphicon-remove-circle"></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $parentescos->render() !!} 
    </div>
  </div>


</div>
</div>
</div> 
<div class="span12">&nbsp;</div>
<div class="span12">&nbsp;</div>    
@endsection()