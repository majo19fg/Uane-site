<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConveniosNuevo;
use App\Http\Requests\ConveniosRequest;
use Illuminate\Support\Facades\Storage;
use File;
use App\DesignRequest;

use App\Http\Requests\DesignRequestMessage;
use App\User;
use Spatie\Permission\Models\Role;
use App\EventsAndListeners\Events\DesignerWasAsigned;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Mail;
use App\Mail\DesignRequest\DesignRequestUpdate;
use App\Mail\DesignRequest\NotificationMail;
use App\Mail\DesignRequest\ConfirmationMail;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade AS PDF;
use App\Exports\ConveniosExport;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $convenios = ConveniosNuevo::find($id)->get();
        $pdf= PDF::loadView('admin.convenios.Convenio_View', compact('convenios'));
        return $pdf->stream('NuevoConvenio.pdf');
      }
}