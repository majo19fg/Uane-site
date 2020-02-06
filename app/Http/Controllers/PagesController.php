<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;

class PagesController extends Controller
{

    public function proximamente()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //
        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        $programas = Programa::all();
        return view('layouts.coming-soon')->with($datos);        
    }
    
    public function index() 
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];


        
        return view('layouts.inicio')->with($datos);
    }

    public function historia()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.nosotros.nuestra-historia')->with($datos);
    }
    public function confirmacion()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.ConfirmacionEncuesta')->with($datos);
    }
    public function legales()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.nosotros.Legales')->with($datos);
    }


    public function rector()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.nosotros.rector')->with($datos);
    }

    public function becas()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.admisiones.beca-presencial')->with($datos);
    }

    public function convenios()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.admisiones.convenios')->with($datos);
    }

    public function practicas()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        
        return view('layouts.admisiones.practicas')->with($datos);
    }
    public function MensajeRector()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.MensajesRector')->with($datos); 
    }
    public function MensajeRector12()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.Mensaje12-09-19')->with($datos); 
    }
    public function NoticiasEventos()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.noticias')->with($datos);
    }

    public function NoticiasEventos1()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-1')->with($datos);
    }

    public function NoticiasEventos2()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-2')->with($datos);
    }

    public function NoticiasEventos3()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-3')->with($datos);
    }

    public function NoticiasEventos4()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-4')->with($datos);
    }

    public function NoticiasEventos6()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-6')->with($datos);
    }

    public function NoticiasEventos5()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-5')->with($datos);
    }


    public function NoticiasEventos7()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-7')->with($datos);
    }
    public function NoticiasEventos8()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-8inicla')->with($datos);
    }

    public function NoticiasEventos9()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-9inicla')->with($datos);
    }
    public function NoticiasEventos10(){
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.blog-10Saram')->with($datos);
    }
    public function NoticiasEventos11(){
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.45aniversario')->with($datos);
    }
    public function Pasteles(){
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.Pasteles')->with($datos);
    }
    public function PiedraI(){
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.PiedraI')->with($datos);
    }
    public function exauane()
    {
        return view('index-exauane');
    }

    public function exauaneRegistro()
    {
        return view('layouts.egresados.formulario-egresados');
    }

    public function empleabilidad()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.admisiones.empleabilidad')->with($datos); 
    }

    public function soyuane()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog-11soyuane')->with($datos); 
    }
    public function cuadro()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.cuadro')->with($datos); 
    }
    public function Mensaje20 ()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.Mensaje20-01-2020')->with($datos); 
    }
    public function programa()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.programa')->with($datos); 
    }
    public function Mensaje06()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('layouts.blog.Mensaje06-02-2020')->with($datos); 
    }
    public function vozuane()
    {
        //Formulario
            //Saltillo
                $BachSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSaltillo = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Saltillo');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Torreón
                $BachTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocTorreon = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Torreón');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monclova
                $BachMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonclova = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monclova');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get(); 
            //Sabinas
                $BachSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocSabinas = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Sabinas');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Piedras Negras
                $BachPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaePiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Piedras Negras');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocPiedras = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Monterrey
                $BachMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMonterrey = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Monterrey');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Reynosa
                $BachReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocReynosa = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Reynosa');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //Matamoros
                $BachMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Bachillerato');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $LicMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $MaeMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $EspMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();  

                $DocMatamoros = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('Campus', function($query){
                        $query->where('name', '=', 'Matamoros');
                    })
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'Presencial');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Doctorado');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //En Línea
                $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //

        $datos = [
            'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,
            'BachSaltillo' => $BachSaltillo,
            'LicSaltillo' => $LicSaltillo,
            'MaeSaltillo' => $MaeSaltillo,
            'EspSaltillo' => $EspSaltillo,
            'DocSaltillo' => $DocSaltillo,
            'BachTorreon' => $BachTorreon,
            'LicTorreon' => $LicTorreon,
            'MaeTorreon' => $MaeTorreon,
            'EspTorreon' => $EspTorreon,
            'DocTorreon' => $DocTorreon,
            'BachMonclova' => $BachMonclova,
            'LicMonclova' => $LicMonclova,
            'MaeMonclova' => $MaeMonclova,
            'EspMonclova' => $EspMonclova,
            'DocMonclova' => $DocMonclova,
            'BachSabinas' => $BachSabinas,
            'LicSabinas' => $LicSabinas,
            'MaeSabinas' => $MaeSabinas,
            'EspSabinas' => $EspSabinas,
            'DocSabinas' => $DocSabinas,
            'BachPiedras' => $BachPiedras,
            'LicPiedras' => $LicPiedras,
            'MaePiedras' => $MaePiedras,
            'EspPiedras' => $EspPiedras,
            'DocPiedras' => $DocPiedras,
            'BachMonterrey' => $BachMonterrey,
            'LicMonterrey' => $LicMonterrey,
            'MaeMonterrey' => $MaeMonterrey,
            'EspMonterrey' => $EspMonterrey,
            'DocMonterrey' => $DocMonterrey,
            'BachReynosa' => $BachReynosa,
            'LicReynosa' => $LicReynosa,
            'MaeReynosa' => $MaeReynosa,
            'EspReynosa' => $EspReynosa,
            'DocReynosa' => $DocReynosa,
            'BachMatamoros' => $BachMatamoros,
            'LicMatamoros' => $LicMatamoros,
            'MaeMatamoros' => $MaeMatamoros,
            'EspMatamoros' => $EspMatamoros,
            'DocMatamoros' => $DocMatamoros,
        ];
        return view('index-vozuane')->with($datos); 
    }
}
