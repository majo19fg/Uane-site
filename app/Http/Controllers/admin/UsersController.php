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
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.PlantillaDescarga', compact('usuarios'));

    } 
    public function Presentaciones_Saltillo() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Saltillo', compact('usuarios'));

    }  
    public function Presentaciones_Torreon() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Torreon', compact('usuarios'));

    } 
    public function Presentaciones_Monclova() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Monclova', compact('usuarios'));

    } 
    public function Presentaciones_Sabinas() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Sabinas', compact('usuarios'));

    } 
    
    public function Presentaciones_Piedras() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Piedras', compact('usuarios'));

    } 
    public function Presentaciones_Monterrey() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Monterrey', compact('usuarios'));

    } 
    public function Presentaciones_Reynosa() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Reynosa', compact('usuarios'));

    } 
    public function Presentaciones_Matamoros() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-Matamoros', compact('usuarios'));

    } 
    public function Presentaciones_EL() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Presentaciones-EnLinea', compact('usuarios'));

    } 
    public function Presentaciones_Bach() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Bachillerato', compact('usuarios'));

    } 
    public function Presentaciones_Carreras() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.Carreras', compact('usuarios'));

    } 
    public function FlyersCoah() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersCoah', compact('usuarios'));

    } 
    public function FlyersPN() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersPN', compact('usuarios'));

    } 
    public function FlyersMty() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersNL', compact('usuarios'));

    } 
    public function FlyersMat() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersMat', compact('usuarios'));

    } 
    public function FlyersRey() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersRey', compact('usuarios'));

    } 
    public function FlyersPG() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersPG', compact('usuarios'));

    } 
    public function FlyersEL() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.marketingbox.FlyersEL', compact('usuarios'));

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
