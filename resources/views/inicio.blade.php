
@extends ('plantillas.main')
@section('title', 'Pagina de Inicio')

@section ('content')
	<h1>Iniciaste sesion</h1>
	<a class="btn btn-muted" href="{{ route('administrador.auth.logout')}}">Cerrar sesion</a>
@endsection
