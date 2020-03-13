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
    public function Presentaciones_Bach() 
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
