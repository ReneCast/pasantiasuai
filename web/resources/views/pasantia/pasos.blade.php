<div class="row justify-content-md-center mb-5">
	<div class="col-md-9 text-center">
		<a class="btn btn-lg btn-outline-@if($statusPaso0=='2')success @else{{'secondary'}} @endif" href="{{route('inscripcion.0.view')}}" role="button">Paso 0 @if($statusPaso0=='2')<i class="fas fa-check"></i>@else @endif</a>
		<a class="btn btn-lg btn-outline-@if($statusPaso1=='2')success @else{{'secondary'}} @endif" href="{{route('inscripcion.1.view')}}" role="button">Paso 1 @if($statusPaso1=='2')<i class="fas fa-check"></i>@else @endif</a>
		<a class="btn btn-lg btn-outline-@if($statusPaso2=='2')success @elseif($statusPaso2=='1' || $statusPaso2=='3')warning @else{{'secondary'}}@endif" href="{{route('inscripcion.2.view')}}" role="button">Paso 2 @if($statusPaso2=='2')<i class="fas fa-check"></i>@elseif($statusPaso2=='1' || $statusPaso2=='3')<i class="fas fa-exclamation"></i>@else <i class="fas fa-question"></i>@endif</a>
		<a class="btn btn-lg btn-outline-@if($statusPaso3=='2' ||$statusPaso3=='3' || $statusPaso3=='4')success @elseif($statusPaso2=='1')warning @else{{'secondary'}}@endif" href="{{route('inscripcion.3.view')}}" role="button">Paso 3 @if($statusPaso3=='4')<i class="fas fa-envelope-open"></i>@elseif($statusPaso3=='3')<i class="fas fa-envelope"></i>@elseif($statusPaso3=='2')<i class="fas fa-check"></i>@elseif($statusPaso3=='1')<i class="fas fa-exclamation"></i>@else <i class="fas fa-question"></i>@endif</a>
		<a class="btn btn-lg btn-outline-@if($statusPaso4=='0')secondary @elseif($statusPaso4=='1')warning @elseif($statusPaso4=='2')success @else{{'success'}}@endif" href="{{route('inscripcion.4.view')}}" role="button">Paso 4 </a>
	</div>
</div>
