@extends('modulos.plantilla')

@section('title', 'Viaje | SGVE')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

   <div class="row">
   	<div class="col-md-2 col-md-offset-10">
   		<a href="{{ route('listaViajes') }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>  Atrás</a>
   	</div>
   </div>
  <br>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $viaje->nom_viaje }}</h3>
		</div>
		<div class="panel-body">
			<h3>Motivos del viaje</h3>
			<p>{{ $viaje->motivos }}</p>

			<h3>Impacto del viaje en los estudiantes</h3>
			<p>{{ $viaje->impacto }}</p>

			<h3>Fecha de salida</h3>
			<p>{{ $viaje->fec_ini }}</p>

			<h3>Fecha de regreso</h3>
			<p>{{ $viaje->fec_fin }}</p>

			<h3>Docente acompañante</h3>
			<p>{{ $viaje->compa }}</p>

			<h3>Empresas a visitar</h3>

			@if (count($viaje->manyEmpresas) === 0)
				<p>No tiene empresas asignadas por el momento</p>
			@else
			@foreach ($viaje->manyEmpresas as $empresa)
			<ul>
				<li style="list-style: none;">{{ $empresa->nom_empresa }}</li>
			</ul>
			@endforeach
			@endif
            
            <h3>Grupos que viajaran</h3>
			@if (count($viaje->grupos) === 0)
				<p>No tiene grupos asigandos por el momento</p>
			@else
			@foreach ($viaje->grupos as $grupo)
				<ul>
					<li style="list-style: none;">{{ $grupo->nom_grupo }}</li>
				</ul>
			@endforeach
			@endif
			 
		</div>
	</div>
</div>
@endsection