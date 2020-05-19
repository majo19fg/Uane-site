<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acceso;

class AccesController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $convenios = Acceso::all();
    
    
            return view('admin.convenios.lista-convenios', compact('convenios'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         *  @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.convenios.formulario-convenios');
            
    
        
        }//
}
