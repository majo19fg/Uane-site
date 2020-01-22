<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConveniosRequest;
use App\UaneConvenio;
use Illuminate\Support\Facades\Storage;
use File;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = UaneConvenio::all();


        return view('admin.convenios.Convenios_anteriores', compact('convenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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


        $convenio = UaneConvenio::create($request->all());
        if (empty($request->file('documento'))) { } else {
            $nameFile = str_slug($request->get('empresa'));
            $fileExt = $request->file('documento')->getClientOriginalExtension();

            $convenio->documento = $request->file('documento')->storeAs('convenios/empresas/' . str_slug($request->campus), $nameFile . '.' . $fileExt);

            $convenio->nombre_documento = $nameFile . '.' . $fileExt;
        }
        $convenio->save();
        return redirect()->back()->with('success', 'El convenio se guardo exitosamente');
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
        $convenio = UaneConvenio::find($id);
        return view('admin.convenios.editar-convenios', compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UaneConvenio $convenio)
    {
        $convenio->update($request->all());
        $convenio->convenio_para_beca_convenio      = $request->get('convenio_para_beca_convenio');
        $convenio->convenio_para_practicas          = $request->get('convenio_para_practicas');
        $convenio->convenio_para_servicio_social    = $request->get('convenio_para_servicio_social');
        $convenio->convenio_para_servicio_otro      = $request->get('convenio_para_servicio_otro');

        $convenio->alcance                = $request->get('alcance');
        

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
        $convenio = UaneConvenio::find($convenio);
        File::delete('laravel/public/multi/images/' . $convenio->documento);
        $convenio->delete();

        return back()->with('success', '');
    }
}
