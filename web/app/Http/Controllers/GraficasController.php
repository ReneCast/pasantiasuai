<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function index(){
  		return view('admin.estadisticas');
    }
}
