@extends('layout')


@section('contenido')
<div class="container-fluid">
	@if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}
    </div><br />
  @endif
	@include('pasantia.pasos', ['statusPaso0'=>$statusPaso0, 'statusPaso1'=>$statusPaso1, 'statusPaso2'=>$statusPaso2, 'statusPaso3'=>$statusPaso3, 'statusPaso4'=>$statusPaso4])
	<div class="row justify-content-md-center mb-1">
		<h2>Paso 3: Datos de tu supervisor</h2>
	</div>
	<div class="row justify-content-md-center mb-2">
		@if($statusPaso3==2)
			<p>El correo ya se ha enviado a tu supervisor pero aún no ha sido respondido</p>
		@elseif($statusPaso3==3)
			<p>El correo ya fue respondido y aprobado por tu supervisor</p>
		@endif
	</div>
	<div class="row justify-content-md-center mb-5">
		<div class="col-md-6">
			<form method="post" action="{{ route('inscripcion.3.post') }}" class="text-center">
				@csrf
				<div class="form-group">
			    <label for="email">Correo</label>
			    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="correo@empresa.com" value="{{$correo}}" @if($statusPaso3==2 || $statusPaso3==3)disabled @endif>
			  </div>
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$nombre}}" @if($statusPaso3==2 || $statusPaso3==3)disabled @endif>
			  </div>
				@if($statusPaso3!=2)
					<!--<button type="submit" name="enviar" value="1" class="btn btn-primary">Enviar correo</button>-->
					<button type="submit" name="guardar" value="1" class="btn btn-primary">Guardar</button>
				@else
					<button type="submit" name="continuar" value="1" class="btn btn-primary">Continuar</button>
				@endif
			</form>
		</div>
	</div>
</div>
@endsection