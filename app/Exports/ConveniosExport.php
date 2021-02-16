<?php

namespace App\Exports;

use App\UaneConvenio;
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
        return UaneConvenio::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Campus',
            'Nombre de la empresa',
            'Giro de la empresa',
            'Dirección de la empresa',
            'Representante legal',
            'Contacto',
            'Telefono de contacto ',
            'Correo ',
            'Fecha de inicio ',
            'Convenio beca convenio',
            'Convenio practicas',
            'Convenio servicio social',
            'Convenio otro',
            'Convenio otro servicio',
            'Beca para bachillerato',
            'Beca para licenciatura',
            'Beca para postgrado',
            'Beca para bachillerato en línea',
            'Beca para licenciatura en línea',
            'Beca para postgrado en línea',
            'Alcance municipal',
            'Alcance estatal',
            'Alcance nacional',
            'Alcance observaciones',
            'Documento',
            'Nombre del documento',
            'Fecha de creación',
            'Fecha de actualización',
        ];
    }
}