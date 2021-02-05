<?php

namespace App\Exports;

use App\Programa;
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
        return Programa::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'url',
            'miniatura',
            'descripcion_corta',
            'duracion_curso',
            'descripcion_programa',
            'inicio_curso',
            'visible',
            'tipoPrograma_id',
            'modalidadPrograma_id',
            'show',
            'created_at',
            'updated_at',
        ];
    }
}
