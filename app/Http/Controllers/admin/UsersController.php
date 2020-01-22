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
        
        return view('admin.usuarios.PlantillaDescarga', compact('usuarios'));

    } 
    public function Presentaciones_Saltillo() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Presentaciones-Saltillo', compact('usuarios'));

    }  
     public function Plantilla_Fbro() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Folleto-Brochure', compact('usuarios'));

    }
    public function Plantilla_Fenl() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Folleto-EnLinea', compact('usuarios'));

    }
    public function Plantilla_FGrl() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Folleto-General', compact('usuarios'));

    }
    public function Plantilla_FLic() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Folletos-Licenciatura', compact('usuarios'));

    }
    public function Plantilla_FLiCoah() 
    {
        $usuarios = User::allowed()->get();
        //$users = User::all();
        
        return view('admin.usuarios.Folletos-LiCoah', compact('usuarios'));

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
