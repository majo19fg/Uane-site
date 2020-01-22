<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aspirante;


use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AspirantesExport;


class AspirantesController extends Controller
{

    
    
    public function index()
    {
        //$aspirante = Aspirante::all();
        $aspirante = Aspirante::orderBy('created_at', 'DESC')->get();
        return view('admin.aspirantes.mostrar-aspirantes', compact('aspirante'));
    }

    public function exportarAspirantes()
    {
        return Excel::download(new AspirantesExport, 'Aspirantes.xlsx');

    }
}
