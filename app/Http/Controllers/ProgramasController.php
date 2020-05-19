<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\TipoPrograma;
use App\Aspirante;
use App\Campus;
use App\Mail\AspiranteRegistrado;
use Illuminate\Support\Facades\Mail;

class ProgramasController extends Controller
{
    public function programas()
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
            /*     $LicEnLinea = Programa::with('Campus', 'modalidadPrograma', 'tipoPrograma')
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
                    ->get(); */
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //        
        $programas = Programa::paginate(10);
        $tipoPrograma = TipoPrograma::all();
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /*  'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'tipoPrograma' => $tipoPrograma,
            'programas' => $programas,
        ];
        return view('layouts.programas.lista')->with($datos);
    }


    public function show(Programa $programa)
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
              /*   $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
            //
        //
        
        //$programa = Programa::find($id);
        $programas = Programa::all();
        $tipoPrograma = TipoPrograma::all();
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
            /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programa' => $programa,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.programa')->with($datos);
    }

    public function bach()
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
              /*  $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();


            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 1)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
          /*  'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function lic()
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
              /*  $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                                        // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 2)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function ing()
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
             /*   $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();


            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 3)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function maes()
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
            /*    $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 4)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function esp()
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
               /* $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                                        // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();


            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 5)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function doc()
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
             /*   $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                                        // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();


            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 6)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
            /*'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function prec()
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
              /*  $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('modalidadPrograma_id', 1)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }

    public function linea()
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
               /* $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                                        // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('modalidadPrograma_id', 2)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
          /*  'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }
        public function lcel()
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
              /*  $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 8)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }
    public function Mel()
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
                /*$LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 9)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }
    public function Eel()
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
             /*   $LicEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                $MaeEnLinea = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();*/
                    // prueba 
                    $LicEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Licenciatura En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

                    $MEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Maestría En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();
                    $EEL = Programa::with('modalidadPrograma', 'tipoPrograma')
                    ->whereHas('modalidadPrograma', function($query){
                        $query->where('name', 'En línea');
                    })
                    ->whereHas('tipoPrograma', function($query){
                        $query->where('name', 'Especialidad En Línea');
                    })
                    ->orderBy('tipoPrograma_id')
                    ->get();

            //
        //
        $tipoPrograma = TipoPrograma::all();
        $programas = Programa::where('tipoPrograma_id', 10)->paginate(10);
        $datos = [
            'EEL' =>$EEL,
            'MEL' =>$MEL,
            'LicEL' =>$LicEL,
           /* 'MaeEnLinea' => $MaeEnLinea,
            'LicEnLinea' => $LicEnLinea,*/
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
            'programas' => $programas,
            'tipoPrograma' => $tipoPrograma,
        ];
        return view('layouts.programas.tipo-mod')->with($datos);
    }



    public function datosAspirante(Request $request)
    {
        $this->validate($request, [
            'nombreAspirante' => 'required',
            'apellidoAspirante' => 'required',
            'telefonoAspirante' => 'required',
            'correoAspirante' => 'required',
            'programaAspirante' => 'required',
            'tipoProgramaAspirante' => 'required',
            'modalidadAspirante' => 'required',
        ]);



        $campusAspirante = Campus::find($request->get('campusAspirante'));

        $aspirante = new Aspirante;
        $aspirante->nombre = $request->get('nombreAspirante');
        $aspirante->apellido = $request->get('apellidoAspirante');
        $aspirante->correo = $request->get('telefonoAspirante');
        $aspirante->telefono = $request->get('correoAspirante');
        $aspirante->campus = $campusAspirante->name;
        $aspirante->nombrePrograma = $request->get('programaAspirante');
        $aspirante->tipoPrograma = $request->get('tipoProgramaAspirante');
        $aspirante->modalidadPrograma = $request->get('modalidadAspirante');
        $aspirante->save();

        

        if ($campusAspirante->name == 'Saltillo') {

            Mail::to('msantos@uane.edu.mx')->send(new AspiranteRegistrado($aspirante)); //Monica SAntos 

        }elseif ($campusAspirante->name == 'Monclova') {

            Mail::to('nmorin@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Norma Morin

        }elseif ($campusAspirante->name == 'Torreón') {

            Mail::to('promociontor@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Jessica 
            
        }elseif ($campusAspirante->name == 'Sabinas') {

            Mail::to('lromero@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Leo Romero
            
        }elseif ($campusAspirante->name == 'Piedras Negras') {

            Mail::to('eledezma@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Estrella Ledezma
            
        }elseif ($campusAspirante->name == 'Monterrey') {

            Mail::to('fluna@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Fernando Luna
            
        }elseif ($campusAspirante->name == 'Reynosa') {

            Mail::to('amoreno@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Ana Luisa Moreno
            
        }elseif ($campusAspirante->name == 'Matamoros') {

            Mail::to('mrosas@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Mario Alberto
            
        }elseif ($request->get('campusAspirante') == '') {

            Mail::to('fhernandez@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Monica Hernandez
            
        }elseif ($request->get('campusAspirante') == 'Otro') {

        Mail::to('fhernandez@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Monica Hernandez
        
        }

        
        



        return redirect()->back()->with('flash', 'Uno de nuestros expertos se pondra en contacto contigo para brindarte la información que necesitas.');
    }

    public function datosAspirante2(Request $request)
    {
        $this->validate($request, [
            'nombreAspirante' => 'required',
            'apellidoAspirante' => 'required',
            'telefonoAspirante' => 'required',
            'correoAspirante' => 'required',
            'programaAspirante' => 'required',
            'tipoProgramaAspirante' => 'required',
            'modalidadAspirante' => 'required',
        ]);

        $aspirante = new Aspirante;
        $aspirante->nombre = $request->get('nombreAspirante');
        $aspirante->apellido = $request->get('apellidoAspirante');
        $aspirante->correo = $request->get('telefonoAspirante');
        $aspirante->telefono = $request->get('correoAspirante');
        $aspirante->campus = $request->get('campusAspirante');
        $aspirante->nombrePrograma = $request->get('programaAspirante');
        $aspirante->tipoPrograma = $request->get('tipoProgramaAspirante');
        $aspirante->modalidadPrograma = $request->get('modalidadAspirante');
        $aspirante->save();

        

        if ($request->get('campusAspirante') == 'Saltillo') {

            Mail::to('msantos@uane.edu.mx')->send(new AspiranteRegistrado($aspirante)); //Monica SAntos 

        }elseif ($request->get('campusAspirante') == 'Monclova') {

            Mail::to('nmorin@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Norma Morin

        }elseif ($request->get('campusAspirante') == 'Torreón') {

            Mail::to('promociontor@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Jessica 
            
        }elseif ($request->get('campusAspirante') == 'Sabinas') {

            Mail::to('mnavarro@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Rubí Navarro
            
        }elseif ($request->get('campusAspirante') == 'Piedras Negras') {

            Mail::to('eledezma@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Estrella Ledezma
            
        }elseif ($request->get('campusAspirante') == 'Monterrey') {

            Mail::to('fluna@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Fernando Luna
            
        }elseif ($request->get('campusAspirante') == 'Reynosa') {

            Mail::to('amoreno@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));//Ana Luisa Moreno
            
        }elseif ($request->get('campusAspirante') == 'Matamoros') {

            Mail::to('mrosas@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Mario Alberto

        }elseif ($request->get('campusAspirante') == '') {

            Mail::to('fhernandez@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Monica Hernandez
            
        }elseif ($request->get('campusAspirante') == 'Otro') {

        Mail::to('fhernandez@uane.edu.mx')->send(new AspiranteRegistrado($aspirante));// Monica Hernandez
        
        }

        
        



        return redirect()->back()->with('flash', 'Uno de nuestros expertos se pondra en contacto contigo para brindarte la información que necesitas.');
    }


}
