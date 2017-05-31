@extends('layouts.master')

@section('title', 'Tabulador de salarios')

@section('style')
	<link href="{{ url('css/perfil.css') }}" rel="stylesheet">
@stop

@section('content')
	<h1 class="text-center">Eventos Culturales</h1>
	<hr class="hr">
	<div>
		<aside class="column" id="cssmenu">
			@include('partials.AsideEventosUtm')
		</aside>
		<div class="column content">
			<div class="filtro_3">
				<input type="text" name="busquedaEvento" value="busqueda de evento" class="inputBusqueda">
			</div>

			<div>
				<figure>
	 				<img src="{{ url('assets/images/Taekwondo_2016.JPG') }}" width="400" height="353">
					<figcaption><h2>Clase de Taekwondo</h2></figcaption>
				</figure>
				<img src="{{ url('assets/images/eventos_calendar.png') }}" alt="" class="iconos">
				<h3>Vierner 15 de Junio 2017, 18:30 hrs</h3><!--Fecha-->

				<img src="{{ url('assets/images/eventos_location.png') }}" alt="" class="iconos">
				<h3>Auditorio UTM. Huajuapan de león Oaxaca</h3><!--Ubicacion-->
			</div>

			<div>
				<figure>
	 				<img src="{{ url('assets/images/cartel08.JPG') }}" width="400" height="353">
					<figcaption><h2>Semana de la cultura mixteca</h2></figcaption>
				</figure>
				<img src="{{ url('assets/images/eventos_calendar.png') }}" alt="" class="iconos">
				<h3>Lunes 29 de Mayo 2017, 09:00 hrs</h3><!--Fecha-->

				<img src="{{ url('assets/images/eventos_location.png') }}" alt="" class="iconos">
				<h3>Auditorio UTM. Huajuapan de león Oaxaca</h3><!--Ubicacion-->
			</div>
		</div>	
	</div>
@stop