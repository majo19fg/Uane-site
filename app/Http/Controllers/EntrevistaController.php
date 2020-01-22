<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista;

class EntrevistaController extends Controller
{
      public function create()
    {
        $entrevista = Entrevista::orderBy('created_at', 'id')->get();
        return view('layouts.encuesta');
    }
}
