<?php

namespace App\Http\Controllers\admin;

use App\ConveniosNuevo;
use App\Http\Requests\ConveniosRequest;
use Illuminate\Support\Facades\Storage;
use App\DesignRequest;

use App\Http\Requests\DesignRequestMessage;
use App\EventsAndListeners\Events\DesignerWasAsigned;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Mail;
use App\Mail\DesignRequest\DesignRequestUpdate;
use App\Mail\DesignRequest\NotificationMail;
use App\Mail\DesignRequest\ConfirmationMail;
use App\Exports\ConveniosExport;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\User;

use App\Encuesta;
use Spatie\Permission\Models\Role;
use App\EventsAndListeners\Events\UserWasCreated;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EncuestaExport;

class UsersController extends Controller
{
    public function index()
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.inicio', compact('usuarios'));
    }

    public function edit(User $usuario, Request $request)
    {
        $this->authorize('update', $usuario);
        $roles = Role::pluck('name', 'id');
        return view('admin.usuarios.mostrar', compact('usuario', 'roles'));
        
    }

    public function update(Request $request, User $usuario)
    {
        $this->authorize('update', $usuario);
        //$usuario = User::find($usuario->id);
        $rules = [
            'name' => 'required',
            'second_name' => 'required',
            'job_position' => 'required',
            'username' => ['required', 'max:25', Rule::unique('users')->ignore($usuario->id)],
            'email' => ['required', Rule::unique('users')->ignore($usuario->id)]
        ];

        if ($request->filled('password')) {
            $rules['password'] = ['confirmed', 'min:6'];
        }
        $data = $request->validate($rules);
        $usuario->update($data);
        return back()->withFlash('¡Usuario actualizado exitosamente!');
        

        
    }

    public function create()
    {
        $this->authorize('create', new User);
        $roles = Role::pluck('name', 'id');
        $user = new User;
        return view('admin.usuarios.crear', compact('roles', 'user'));
    }

    public function store(Request $request)
    {

        $this->authorize('create', new User);
        $data = $request->validate([
            'name' => 'required',
            'second_name' => 'required',
            'username' => 'required|max:25|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'job_position' => 'required',
            'roles' => 'required',
        ]);

        //Generar contraseña
         $data['password'] = str_random(8);

         $user = User::create($data);

         //Roles
         if ($request->filled('roles')) {
            $user->assignRole($request->roles);
         }

         UserWasCreated::dispatch($user, $data['password']);


         return redirect()->route('mostrar.usuarios')->with('success', 'El usuario ha sido creado');


    }


    public function delete(User $usuario)
    {
        $this->authorize('delete', $usuario);
        $usuario->delete();
        return redirect()->route('mostrar.usuarios')->with('success', 'El usuario ha sido eliminado');
    }

    public function cursos() 
    {
        
        return view('admin.marketingbox.Carpetas_cursos');

    } 
    public function Plantilla() 
    {
        
        return view('admin.marketingbox.PlantillaDescarga');

    } 
    public function Presentaciones_Saltillo() 
    {

        return view('admin.marketingbox.Presentaciones-Saltillo');

    }  
    public function Presentaciones_Torreon() 
    {
    
        
        return view('admin.marketingbox.Presentaciones-Torreon');

    } 
    public function Presentaciones_Monclova() 
    {

        return view('admin.marketingbox.Presentaciones-Monclova');

    } 
    public function Presentaciones_Sabinas() 
    {

        return view('admin.marketingbox.Presentaciones-Sabinas');

    } 
    
    public function Presentaciones_Piedras() 
    {

        return view('admin.marketingbox.Presentaciones-Piedras');

    } 
    public function Presentaciones_Monterrey() 
    {

        return view('admin.marketingbox.Presentaciones-Monterrey');

    } 
    public function Presentaciones_Reynosa() 
    {

        return view('admin.marketingbox.Presentaciones-Reynosa');

    } 
    public function Presentaciones_Matamoros() 
    {

        return view('admin.marketingbox.Presentaciones-Matamoros');

    } 
    public function Presentaciones_EL() 
    {

        return view('admin.marketingbox.Presentaciones-EnLinea');

    } 
    public function Bachillerato() 
    {

        return view('admin.marketingbox.Bachillerato');

    } 
    public function Presentaciones_Carreras() 
    {
      
        return view('admin.marketingbox.Carreras');

    } 
    public function FlyersCoah() 
    {

        
        return view('admin.marketingbox.FlyersCoah');

    } 
    public function FlyersPN() 
    {
   
        
        return view('admin.marketingbox.FlyersPN');

    } 
    public function FlyersMty() 
    {
        
        return view('admin.marketingbox.FlyersNL');

    } 
    public function FlyersMat() 
    {

        return view('admin.marketingbox.FlyersMat');

    } 
    public function FlyersRey() 
    {

        return view('admin.marketingbox.FlyersRey');

    } 
    public function FlyersPG() 
    {

        return view('admin.marketingbox.FlyersPG');

    } 
    public function FlyersEL() 
    {

        return view('admin.marketingbox.FlyersEL');

    } 
    public function Banner() 
    {

        return view('admin.marketingbox.Banner');

    } 
    public function Facebook() 
    {

        return view('admin.marketingbox.Facebook');

    } 
    public function Instagram() 
    {

        return view('admin.marketingbox.Instagram');

    } 
    public function SW() 
    {

        return view('admin.marketingbox.Carpetas_Saltillo');

    } 
    public function Torreon() 
    {

        return view('admin.marketingbox.Carpetas_Torreon');

    } 
    public function Monclova() 
    {

        return view('admin.marketingbox.Carpetas_Monclova');

    } 
    public function Sabinas() 
    {

        return view('admin.marketingbox.Carpetas_Sabinas');

    } 
    public function PiedrasNegras() 
    {

        return view('admin.marketingbox.Carpetas_PN');

    } 
    public function Matamoros() 
    {

        return view('admin.marketingbox.Carpetas_Matamoros');

    } 
    public function Monterrey() 
    {

        return view('admin.marketingbox.Carpetas_Monterrey');

    }     
    public function Reynosa() 
    {

        return view('admin.marketingbox.Carpetas_Reynosa');

    } 
    public function EnLinea() 
    {

        return view('admin.marketingbox.Carpetas_EnLinea');

    } 
    public function BachEL() 
    {

        return view('admin.marketingbox.BachEL');

    } 

        public function CEL() 
    {

        return view('admin.marketingbox.CEL');

    } 
        public function DEL() 
    {

        return view('admin.marketingbox.DEL');

    } 
        public function DB() 
    {

        return view('admin.marketingbox.DB');

    } 
    public function BachNL() 
    {

        return view('admin.marketingbox.BachilleratoNL');

    } 
    public function Bach() 
    {

        return view('admin.marketingbox.Bach');

    } 
    public function FB()
    {

        return view('admin.marketingbox.Facebook-post');

    } 
    public function FBEL()
    {

        return view('admin.marketingbox.Facebook-postEL');

    } 
    public function BMB() 
    {

        return view('admin.marketingbox.Bachillerato');

    }
    public function BMB2() 
    {

        return view('admin.marketingbox.BMB');

    }
    public function Postgradossw() 
    {

        return view('admin.marketingbox.Postgrados');

    }
    public function PostgradosTR() 
    {

        return view('admin.marketingbox.Postgrados_Torreon');

    }
    public function PreciosSW() 
    {

        return view('admin.marketingbox.Precios-Saltillo');

    }
    public function Procesos() 
    {

        return view('admin.marketingbox.Proceso');

    }
    public function CarrerasTorr() 
    {

        return view('admin.marketingbox.Carreras_Torreon');

    }
    public function PreciosTor() 
    {

        return view('admin.marketingbox.Precios-Torreon');

    }
    public function CarrerasMon() 
    {

        return view('admin.marketingbox.Carreras_Monclova');

    }
    public function PreciosMon() 
    {

        return view('admin.marketingbox.Precios-Monclova');

    }
    public function PostgradosMon() 
    {

        return view('admin.marketingbox.Postgrados_Monclova');

    }
    public function CarrerasSab() 
    {

        return view('admin.marketingbox.Carreras_Sabinas');

    }
    public function PreciosSabinas() 
    {

        return view('admin.marketingbox.Precios-Sabinas');

    }
    public function PreciosPN() 
    {

        return view('admin.marketingbox.Precios-PN');

    }
    public function PostgradosPN() 
    {

        return view('admin.marketingbox.Postgrados_PN');

    }
    public function PreciosMat() 
    {

        return view('admin.marketingbox.Precios-Mat');

    }
    public function PostgradosMat() 
    {

        return view('admin.marketingbox.Postgrados_Mat');

    }
    public function PreciosMty() 
    {

        return view('admin.marketingbox.Precios-Mty');

    }
    public function PostgradosMty() 
    {

        return view('admin.marketingbox.Postgrados_Mty');

    }
    public function PreciosRey() 
    {

        return view('admin.marketingbox.Precios-Rey');

    }
    public function PostgradosRey() 
    {

        return view('admin.marketingbox.Postgrados_Rey');

    }
    public function PreciosEL() 
    {

        return view('admin.marketingbox.Precios-EL');

    }
    public function PostgradosEL() 
    {

        return view('admin.marketingbox.Postgrados_EL');

    }
    public function Autonoma() 
    {

        return view('admin.marketingbox.Carpetas_Autonoma');

    }
    public function Americana() 
    {

        return view('admin.marketingbox.Carpetas_Americana');

    }
    public function DiapositivasAutonoma() 
    {

        return view('admin.marketingbox.Diapositiva_Autonoma');

    }
    public function ReconocimientoAutonoma() 
    {

        return view('admin.marketingbox.Reconocimiento_Autonoma');

    }
    public function ConstanciaAutonoma() 
    {

        return view('admin.marketingbox.Constancia_Autonoma');

    }
    public function DiplomaAutonoma() 
    {

        return view('admin.marketingbox.Diploma_Autonoma');

    }
    public function DiapositivasAmericana() 
    {

        return view('admin.marketingbox.Diapositiva_Americana');

    }
    public function ReconocimientoAmericana() 
    {

        return view('admin.marketingbox.Reconocimiento_Americana');

    }
    public function ConstanciaAmericana() 
    {

        return view('admin.marketingbox.Constancia_Americana');

    }
    public function DiplomaAmericana() 
    {

        return view('admin.marketingbox.Diploma_Americana');

    }
    public function Carpeta50() 
    {

        return view('admin.marketingbox.Carpetas_dit50Jul');

    }
    public function DIT55() 
    {

        return view('admin.marketingbox.DIT55');

    }
    public function DIT55oct() 
    {

        return view('admin.marketingbox.DIT55oct');

    }    
    public function DIT55mty() 
    {

        return view('admin.marketingbox.DIT55mty');

    }
    public function DIT55pn() 
    {

        return view('admin.marketingbox.DIT55pn');

    }
    public function Firma55Oct() 
    {

        return view('admin.marketingbox.Firma-55Oct');

    }
    public function FB55Oct() 
    {

        return view('admin.marketingbox.FB-55Oct');

    }    
    public function Instagram55Oct() 
    {

        return view('admin.marketingbox.Instagram-55Oct');

    }
    public function Mail55Oct() 
    {

        return view('admin.marketingbox.Mail-55Oct');

    }
    public function WA55Oct() 
    {

        return view('admin.marketingbox.WhatsApp-55Oct');

    }
    public function Firma55mty() 
    {

        return view('admin.marketingbox.Firma-55mty');

    }
    public function FB55mty() 
    {

        return view('admin.marketingbox.FB-55mty');

    }    
    public function Instagram55mty() 
    {

        return view('admin.marketingbox.Instagram-55mty');

    }
    public function Mail55mty() 
    {

        return view('admin.marketingbox.Mail-55mty');

    }
    public function WA55mty() 
    {

        return view('admin.marketingbox.WhatsApp-55mty');

    }
    public function Firma55pn() 
    {

        return view('admin.marketingbox.Firma-55pn');

    }
    public function FB55pn() 
    {

        return view('admin.marketingbox.FB-55pn');

    }    
    public function Instagram55pn() 
    {

        return view('admin.marketingbox.Instagram-55pn');

    }
    public function Mail55pn() 
    {

        return view('admin.marketingbox.Mail-55pn');

    }
    public function WA55pn() 
    {

        return view('admin.marketingbox.WhatsApp-55pn');

    }
    public function presencial50() 
    {

        return view('admin.marketingbox.Presencial_dit50');

    }
    public function Firma50Sep() 
    {

        return view('admin.marketingbox.Firma-50Sep');

    }
    public function FB50Sep() 
    {

        return view('admin.marketingbox.FB-50Sep');

    }    
    public function Instagram50Sep() 
    {

        return view('admin.marketingbox.Instagram-50Sep');

    }
    public function Mail50Sep() 
    {

        return view('admin.marketingbox.Mail-50Sep');

    }
    public function WA50Sep() 
    {

        return view('admin.marketingbox.WhatsApp-50Sep');

    }
   
    public function enlinea70() 

    {

        return view('admin.marketingbox.EnLinea_dit70');

    }
    public function Firma70EL() 
    {

        return view('admin.marketingbox.Firma-70AgoEL');

    }
    public function FB70AgoEL() 
    {

        return view('admin.marketingbox.FB-70AgoEL');

    }    
    public function Instagram70AgoEL() 
    {

        return view('admin.marketingbox.Instagram-70AgoEL');

    }
    public function Mail70AgoEL() 
    {

        return view('admin.marketingbox.Mail-70AgoEL');

    }
    public function WA70AgoEL() 
    {

        return view('admin.marketingbox.WhatsApp-70AgoEL');

    }
    public function TuPuntajeVale() 
    {

        return view('admin.marketingbox.TuPuntajeVale');

    }
    public function logotipos() 
    {

        return view('admin.marketingbox.Logotipos');

    }
    public function Wallpapers() 
    {

        return view('admin.marketingbox.Wallpapers');

    }
    public function hoja() 
    {

        return view('admin.marketingbox.hojas membretadas');

    }
    public function Deportes() 
    {

        return view('admin.marketingbox.Deportes');

    }
    public function Culturales() 
    {

        return view('admin.marketingbox.Culturales');

    }
    public function Identidad46() 
    {

        return view('admin.marketingbox.Identidad46');

    }
    public function Logo46() 
    {

        return view('admin.marketingbox.Logo46');

    }
    public function conferencias() 
    {

        return view('admin.marketingbox.conferencias');

    }
    public function orgullosamente() 
    {

        return view('admin.marketingbox.orgullosamente');

    }
    public function exauane46() 
    {

        return view('admin.marketingbox.exauane46');

    }
    public function lista_encuesta()
    {
        $encuestas = Encuesta::all();
        //$users = User::all();
        
        return view('admin.usuarios.Reporte', compact('encuestas'));
    }
    public function exportar()
    {
        return Excel::download(new ConveniosExport, 'Reporte Encuesta 2019.xlsx');
 
    }
}
