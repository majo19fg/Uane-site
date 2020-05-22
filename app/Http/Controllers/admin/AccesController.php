<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Acceso;
use App\Http\Requests\AccesoRequest;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;


class AccesController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $acceso = Acceso::all();
    
    
            return view('admin.marketingbox.Acceso', compact('acceso'));
        }


        public function create()
        {
            return view('admin.marketingbox.Acceso', compact('acceso'));
            
    
        
        }
        /**
         * Display a listing of the resource.
         *
    
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function store(AccesoRequest $request)
       {
           

        $acceso= Acceso::create($request->all());
        $acceso->save();
           return view('admin.marketingbox.PlantillaDescarga');
       }
}
