@extends('layout')


@section('contenido')
<div class="container-fluid">
	@if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}
    </div><br />
  @endif
	@include('pasantia.pasos', ['statusPaso0'=>$statusPaso0, 'statusPaso1'=>$statusPaso1, 'statusPaso2'=>$statusPaso2, 'statusPaso3'=>$statusPaso3, 'statusPaso4'=>$statusPaso4])
	<div class="row justify-content-md-center mb-5">
		<h2>Paso 0: Reglamento</h2>
	</div>
	<div class="row justify-content-md-center mb-5">
		<embed src="https://drive.google.com/viewerng/viewer?embedded=true&url=http://alumnosfic.uai.cl/wp-content/uploads/2018/07/Reglamento-de-Pasant%C3%ADas-a-partir-de-2018.pdf" width="100%" height="700">
	</div>
	<div class="row justify-content-md-center mb-5">
		<form method="post" action="{{ route('inscripcion.0.post') }}" class="text-center">
			@csrf
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="1" id="reglamento" name="reglamento" @if($reglamento == 1)checked disabled @else @endif>
			  <label class="form-check-label mb-2" for="reglamento">
			    He leído y acepto el reglamento de inscripción
			  </label>
			</div>
			<button type="submit" class="btn btn-primary">Continuar</button>
		</form>
	</div>
</div>
@endsection
