<?php

namespace App\Exports;

use App\Encuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EncuestasExport implements FromCollection, WithHeadings, ShouldAutoSize
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
            'email',
            'matricula',
            'modalidad',
            'edad',
            'ciudad',
            'campus',
            'sexo',
            'estado_civil',
            'hijos_sino',
            'hijos',
            'responsabiliza _económicamente',
            'personas_entuhogar',
            'encarga_gastos',
            'trabajas',
            'desarrollo_trabajo',
            'relación_trabajo',
            'estudios_actuales',
            'casa',
            'equipo_tecnologico',
            'equipo_desktop',
            'equipo_laptop',
            'equipo_tableta',
            'equipo_celular',
            'equipo_television',
            'equipo_consola',
            'internet',
            'velocidad_internet',
            'actividades_escolares',
            'entretenimiento',
            'contenido_audiovisual',
            'leer',
            'informacion',
            'comunicarme',
            'redes_sociales',
            'software',
            'compras',
            'bancos',
            'problemas_internet',
            'acudes_servicio',
            'facebook',
            'twitter',
            'instagram',
            'tiktok',
            'snapchat',
            'tiempo',
            'otra',
            'siuane',
            '12_faceboook',
            '12_messenger',
            '12_twitter',
            '12_pagina',
            '12_instagram',
            '12_whatsapp',
            '12_sms',
            '12_telegram',
            '12_correo',
            '12_llamada',
            'created_at',
            'updated_at',
        ];
    }
}
