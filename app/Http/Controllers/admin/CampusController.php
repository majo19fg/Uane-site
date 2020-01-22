<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campus;
use App\GalleryCampus;
use Illuminate\Support\Facades\Storage;

class CampusController extends Controller
{
    public function index()
    {
        $campus = Campus::all();
        return view('admin.campus.mostrar-campus', compact('campus'));
    }

    public function editar(Request $request, Campus $campus)
    {
        
        return view('admin.campus.editar-campus', compact('campus'));
    }

    public function update(Request $request, Campus $campus)
    {

        //Validar galeria
        // $this->validate($request,[ 
        //     'galeriaCampus' => 'required'
        // ]);

        //Validar todos los campos
        $rules = [
            'name' => 'required',
            'direccion' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
            'history' => 'required'
        ];
        
        //Revisar si miniatura esta vacio, si no lo está entonces almacenar imagenes en servidor
        if (empty($request->file('miniatura'))) {
        }else {
            $campus->miniatura = $request->file('miniatura')->storeAs('campus', 'uane-'.str_slug($request->get('name')).'.jpg');
        }

        //Guardar datos
        $data = $request->validate($rules);
        $campus->update($data);



        //Guardar galeria
        $galeria = request()->file('galeriaCampus');
        $galeriaDatos = GalleryCampus::where('campus_id', $campus->id)->get();
        $galeriaDatosC = count($galeriaDatos);
        $i = $galeriaDatosC;
        
        if (empty($request->file('galeriaCampus'))) {
            
        }else{
            foreach ($galeria as $galeria) {
                $galeriaURL = $galeria->storeAs('campus/galeria/'.str_slug($request->get('name')), 'galeria-uane-'.str_slug($request->get('name')).'-'.$i++.'.jpg');   
                GalleryCampus::create([
                    'campus_id' => $campus->id,
                    'path' => $galeriaURL,
                ]);
                
            }
        }
        

        //Regresar con mensaje de actualización
        return back()->withFlash('¡Usuario actualizado exitosamente!');

    }

    public function galeriaDestroy($id)
    {
        $imagen = GalleryCampus::find($id);
        $imagen->delete();
        Storage::delete('/laravel/public/multi/images/'.$imagen->path);
        return back()->withFlash('¡Foto eliminada exitosamente!');
    }
}
