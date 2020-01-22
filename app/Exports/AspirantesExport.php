<?php

namespace App\Exports;

use App\Aspirante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AspirantesExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Aspirante::all();
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Correo ',
            'Teléfono',
            'Campus de interes ',
            'Programa de interes',
            'Tipo de programa ',
            'Modalidad ',
            'Fecha de registro'
        ];
    }
}
