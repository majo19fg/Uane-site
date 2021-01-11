<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programa;
use App\ModalidadPrograma;
use App\TipoPrograma;
use App\Campus;
use Carbon\Carbon;

class ProgramasController extends Controller
{
    
    public function index()
    {
        // $programas = Programa::all();
        $programas = Programa::where('visible', 'show')->get();
        
        return view('admin.programas.mostrar-programas', compact('programas'));
    }

     public function create() 
    {
       $modalidad = ModalidadPrograma::all();
       $tipoPrograma = TipoPrograma::all();
       $campus = Campus::all();
       return view('admin.programas.crear-programa', compact('modalidad', 'tipoPrograma', 'campus'));
    }


    public function store(Request $request)
    {
        $this->validate($request, ['nombrePrograma' => 'required']);

        $programa = Programa::create([
            'title' => $request->get('nombrePrograma'),
            'url' => str_slug($request->get('nombrePrograma')),            
            ]);

        return redirect()->route('editar.programa', compact('programa'));
    }

    public function edit(Programa $programa)
    {
        $modalidad = ModalidadPrograma::all();
        $tipoPrograma = TipoPrograma::all();
        $campus = Campus::all();
        
        return view('admin.programas.editar-programa', compact('modalidad', 'tipoPrograma', 'campus', 'programa'));
    }

    public function update(Programa $programa, Request $request)
    {
        //dd($request->file('miniatura')->storeAs('miniatura', str_slug($request->get('nombrePrograma')).'.jpg'));

        $this->validate($request, [
            'nombrePrograma' => 'required',
            'tipoPrograma' => 'required',
            'modalidad' => 'required',
            'duracionCurso' => 'required',
            'fechaInicio' => 'required',
            'descripcionCorta' => 'required',
            'descripcionPrograma' => 'required',
        ]);
        
        // $programa = new Programa;  
        if (empty($request->file('miniaturas'))) {
            
        }else {
            $programa->miniatura = $request->file('miniaturas')->storeAs('programas/miniatura', str_slug($request->get('nombrePrograma')).'.jpg');
        }
            
        $programa->title = $request->get('nombrePrograma');
        $programa->url = str_slug($request->get('nombrePrograma'));
        $programa->descripcion_corta = $request->get('descripcionCorta');
        $programa->duracion_curso = $request->get('duracionCurso');
        $programa->descripcion_programa = $request->get('descripcionPrograma');
        $programa->inicio_curso = Carbon::parse($request->get('fechaInicio'));
        $programa->tipoPrograma_id = $request->get('tipoPrograma');
        $programa->modalidadPrograma_id = $request->get('modalidad');
        $programa->save();
        //campus
        $programa->campus()->sync($request->get('campus'));

        return redirect()->route('editar.programa', $programa)->with('flash', '¡El programa se ha actualizado exitosamente!');

    }
}
