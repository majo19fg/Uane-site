<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConveniosNuevo;
use Barryvdh\DomPDF\Facade AS PDF;

class PDF extends Controller
{
    public function pdf($id)
    {
        $convenios = ConveniosNuevo::find($id)->get();
        $pdf= PDF::loadView('admin.convenios.Convenio_View', compact('convenios'));
        return $pdf->stream('NuevoConvenio.pdf');
    }
}
