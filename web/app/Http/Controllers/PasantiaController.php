<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasantiaController extends Controller{
	public function paso0View(){
		return view('pasantia.paso0');
	}

	public function paso0Control(Request $request){
		if ($request->reglamento == NULL){
			$request->reglamento = 0;
		}
		if ($request->reglamento == 1){
			return redirect('/inscripcion/1');
		}
		else {
			return redirect('inscripcion/0')->with('error', 'Debes aceptar el reglamento para continuar con tu inscripción');
		}
	}

	public function paso1View(){
		return view('pasantia.paso1');
	}

	public function paso1Control(){
		return redirect('/inscripcion/2');
	}

	public function paso2View(){
		return view('pasantia.paso2');
	}

	public function paso2Control(){

	}

	public function paso3View(){

	}

	public function paso3Control(){

	}

	public function paso4View(){

	}
	public function paso4Control(){

	}

}
