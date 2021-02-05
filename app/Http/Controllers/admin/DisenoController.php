<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

class DisenoController extends Controller
{
    public function FormDesign()
    {
        return view('admin.diseno.form');
    }

    public function saveData(DesignRequestMessage $request)
    {
        $data = $request->all();
        $dataRequest = collect($request->request_design);        
        $data['request_design'] = $dataRequest->implode('<br>');
        $data['request_code'] = 'SD-'.uniqid();
        
        $designRequestData = DesignRequest::create($data);
        // return $designRequestData;
        Mail::to($request->email)->send(new ConfirmationMail($designRequestData));
        Mail::to('cprado@uane.edu.mx')->send( new NotificationMail);
        return redirect()->back()->with('success', 'Tu solicitud ya ha sido compartida con el equipo de marketing. El tiempo de realización de tu solicitud inicia a partir de que el estatus cambie a Confirmado. Revisa tu correo para mantenerte atento de todas las actualizaciones.');
    }


    public function listaSolicitudes()
    {
        $solicitudes = DesignRequest::orderBy('created_at', 'descp')->get();
        
        return view('admin.diseno.lista_solicitud', compact('solicitudes'));
    }


    public function disenoSolicitudes()
    {
        // $solicitudes = DesignRequest::where('status', '!=', 'Entregado/Enviado' )->orderBy('created_at', 'desc')->get();
        $solicitudes = DesignRequest::orderBy('created_at', 'descp')->get();

        
        return view('admin.diseno.disenos', compact('solicitudes'));
    }

    public function asignarSolicitudes(DesignRequest $id)
    {
        $designers = User::whereHas('roles', function($q){
            $q->where('name', 'Diseñador');
        })->get();
        $solicitud = $id;
        return view('admin.diseno.asignar_diseno', compact('designers', 'solicitud'));
    }

    public function actualizarEstado(Request $request, DesignRequest $id)
    {

        $data = $this->validate($request, [
            'status' => 'required',
        ]);

        $id->update($data);   


        if (empty($request->get('mensaje'))) {}else{$id->mensaje = $request->get('mensaje');}

        $data = $id;
        $subject = $request->subject;
       
        Mail::to($data->email)->send(new DesignRequestUpdate($data,$subject));
        
        return back()->with('flash', 'Se actualizo el estado de la solicitud exitosamente!');
    }

    public function asignarDisenador(Request $request, DesignRequest $id)
    {
        $id->users()->sync($request->get('designer'));

        foreach ([$request->get('designer')] as $data) {
            $datos = User::find($data);
        }
        $designRequest = $id;
        DesignerWasAsigned::dispatch($designRequest, $datos);
        return back()->with('success_designer', 'Se asigno la solicitud exitosamente!');
    }

    public function verSolicitudes(Request $request, DesignRequest $id)
    {
        $solicitud = $id;
        return view('admin.diseno.ver-solicitud', compact('solicitud'));
    }


    public function eliminarSolicitud(DesignRequest $id)
    {
        $id->users()->detach();
        $id->delete();

        return redirect()
                ->route('diseno.solicitudes')
                ->with('success_delete', 'La solicitud se elimino correctamente');

    }
}
