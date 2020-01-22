<?php

namespace App\Exports;

use App\Encuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ConveniosExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Encuesta::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'matricula',
            'campus',
            'sexo',
            'edad',
            'ciudad',
            'codigo_postal',
            'estudios_actuales',
            'llegada_UANE',
            'familiares_UANE',
            'eleccion_UANE',
            'OTROeleccion_UANE',
            'recomendacion',
            'razon_NOrecomendacion',
            'razon_recomendacion',
            'opciones_educativas',
            'informacion_accesible',
            'describe_UANE',
            'frase_UANE',
            'tiempo_trafico',
            'frecuencia_radio',
            'momento_radio',
            'estacion_frecuencia',
            'frecuencia_television',
            'momento_television',
            'television',
            'canal',
            'frecuencia_periodico',
            'periodico',
            'uso_redes',
            'uso_periodico',
            'uso_tv',
            'uso_radio',
            'uso_cine',
            'uso_FACEBOOK',
            'uso_Twitter',
            'uso_Instagram',
            'uso_Youtube',
            'uso_Snapchat',
            'uso_otro',
            'otro',
            'cine',
            'cine_otro',
            'frecuencia_cine',
            'v_innovacion',
            'v_oportunidad',
            'v_inspiracion',
            'a_moderna',
            'a_comprometida',
            'a_desafiante',
            'a_humanitaria',
            'b_calidad',
            'b_accesibilidad',
            'b_exito',
            'diferencia_publicitaria',
            'credibilidad_publicitaria',
            'relevancia_publicitaria',
            'created_at',
            'updated_at',
        ];
    }
}
