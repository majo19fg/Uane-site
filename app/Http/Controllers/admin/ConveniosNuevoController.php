<?php

namespace App\Http\Controllers\Admin;

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
use App\Exports\ConvenionuevoExport;

class ConveniosNuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = ConveniosNuevo::all();


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
        

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConveniosRequest $request)
    {


        $convenio = ConveniosNuevo::create($request->all());
        if (empty($request->file('documento'))) { } else {
            $nameFile = str_slug($request->get('empresa'));
            $fileExt = $request->file('documento')->getClientOriginalExtension();

            $convenio->documento = $request->file('documento')->storeAs('convenios/empresas/' . str_slug($request->campus), $nameFile . '.' . $fileExt);

            $convenio->nombre_documento = $nameFile . '.' . $fileExt;
        }
        $convenio->save();
        
        $data = $request->all();
        // $dataRequest = collect($request->request_design);        
        // $data['request_design'] = $dataRequest->implode('<br>');
        //$data['request_code'] = 'SD-'.uniqid();
        
        $designRequestData = new DesignRequest;

        $designRequestData->name = $request->get('nombre_contacto'); 
	    $designRequestData->request_code = 'SD-'.uniqid();
	    $designRequestData->last_name = $request->get('nombre_representante_legal');
	    $designRequestData->phone = $request->get('telefono_contacto');
	    //$designRequestData->cel = '';
	    $designRequestData->campus = $request->get('campus');
	    $designRequestData->dpto = $request->get('giro_empresa');
	    $designRequestData->email = $request->get('correo_contacto');
	    $designRequestData->request_design = 'Nuevo convenio -'. $request->get('nombre_empresa');
	    $designRequestData->desc = 'Ver solicitud de convenio dando clic <a href="/mkt-user/convenios/Vista/'.$convenio->id.'" target="_blank">aquí</a>.';
        $designRequestData->status = 'Sin Confirmar';
        $designRequestData->user_id = '12345';
        $designRequestData->save();

        
        // return $designRequestData;
        //Mail::to($request->email)->send(new ConfirmationMail($designRequestData));
        Mail::to('mgil@uane.edu.mx')->send( new NotificationMail);

        return redirect()->back()->with('success', 'El convenio se guardo exitosamente');
        //return redirect()->back()->with('success', 'Tu solicitud ya ha sido compartida con el equipo de marketing. Revisa tu correo para mantenerte a tento de todas las actualizaciones.');
    }
    public function save(DesignRequestMessage $request)
    {
        $data = $request->all();
        $dataRequest = collect($request->request_design);        
        $data['request_design'] = $dataRequest->implode('<br>');
        $data['request_code'] = 'SD-'.uniqid();
        
        $designRequestData = DesignRequest::create($data);
        // return $designRequestData;
        Mail::to($request->email)->send(new ConfirmationMail($designRequestData));
        Mail::to('cprado@uane.edu.mx')->send( new NotificationMail);
        return redirect()->back()->with('success', 'Tu solicitud ya ha sido compartida con el equipo de marketing. Revisa tu correo para mantenerte a tento de todas las actualizaciones.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = ConveniosNuevo::find($id);
        return view('admin.convenios.editar-convenios', compact('convenio'));
    }

    public function view($id)
    {
        $convenio = ConveniosNuevo::find($id);
        return view('admin.convenios.Convenio_View', compact('convenio'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConveniosNuevo $convenio)
    {
        $convenio->update($request->all());
        $convenio->convenio_para_beca_convenio      = $request->get('convenio_para_beca_convenio');
        $convenio->convenio_para_practicas          = $request->get('convenio_para_practicas');
        $convenio->convenio_para_servicio_social    = $request->get('convenio_para_servicio_social');
        $convenio->convenio_para_servicio_otro      = $request->get('convenio_para_servicio_otro');

        $convenio->alcance             = $request->get('alcance');
  
        $convenio->save();
        //return $convenio;
        return redirect()->back()->with('success', 'El convenio se actualizó exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($convenio)
    {
        $convenio = ConveniosNuevo::find($convenio);
        File::delete('laravel/public/multi/images/' . $convenio->documento);
        $convenio->delete();

        return back()->with('success', '');
    }
    public function pdf($id)
    {
        $convenio = ConveniosNuevo::find($id);
       $pdf= PDF::loadView('admin.convenios.Prueba_View',['convenio'=>$convenio]);
        return $pdf->stream('Ficha técnica de convenio.pdf');
        return $pdf->download('Ficha técnica de convenio.pdf');
    }
    public function exportar()
    {
        return Excel::download(new ConvenionuevoExport, 'Convenios.xlsx');
 
    }
}
