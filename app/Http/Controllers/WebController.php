<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function servicios(){
        return view('web.servicios');
    }

    public function asesoria(){
        return view('web.otrosServicios.asesoria');
    }
    public function entrenamiento(){
        return view('web.otrosServicios.entrenamiento');
    }
    public function groomer(){
        return view('web.otrosServicios.groomer');
    }
    public function hospedaje(){
        return view('web.otrosServicios.hospedaje');
    }
    public function reproduccion(){
        return view('web.otrosServicios.reproduccion');
    }
    public function venta(){
        return view('web.otrosServicios.venta');
    }
}
