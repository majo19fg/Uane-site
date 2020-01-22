<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncuestaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'matricula'             => 'required',
            'campus'                => 'required',
            'sexo'                  => 'required',
            'edad'                  => 'required',
            'ciudad'                => 'required',
            'codigo_postal'         => 'required',
            'estudios_actuales'     => 'required',
            'llegada_UANE'             => 'required',
            'familiares_UANE'                => 'required',
            'eleccion_UANE'                  => 'required',
            'recomendacion'                  => 'required',
            'razon_recomendacion'                => 'required',
            'opciones_educativas'         => 'required',
            'informacion_accesible'     => 'required',
            'describe_UANE'  => 'required' ,
            'frase_UANE'=> 'required',
            'tiempo_trafico'=> 'required',
            'frecuencia_radio'=> 'required',
            'momento_radio'=> 'required',
            'estacion_frecuencia'=> 'required',
            'frecuencia_television'=> 'required',
            'momento_television'=> 'required',
            'television'=> 'required',
            'canal'=> 'required',
            'frecuencia_periodico'=> 'required',
            'periodico'=> 'required',
            'uso_redes'=> 'required',
            'uso_periodico'=> 'required',
            'uso_tv'=> 'required',
            'uso_radio'=> 'required',
            'uso_cine'=> 'required',
            'uso_FACEBOOK',
            'uso_Twitter'=> 'required',
            'uso_Instagram'=> 'required',
            'uso_Youtube'=> 'required',
            'uso_Snapchat'=> 'required',
            'uso_otro'=> 'required',
            'cine'=> 'required',
            'frecuencia_cine'=> 'required',
            'v_innovacion'=> 'required',
            'v_oportunidad'=> 'required',
            'v_inspiracion'=> 'required',
            'a_moderna'=> 'required',
            'a_comprometida'=> 'required',
            'a_desafiante'=> 'required',
            'a_humanitaria'=> 'required',
            'b_calidad'=> 'required',
            'b_accesibilidad'=> 'required',
            'b_exito'=> 'required',
            'diferencia_publicitaria'=> 'required',
            'credibilidad_publicitaria'=> 'required',
            'relevancia_publicitaria'=> 'required',
        ];
    }
}