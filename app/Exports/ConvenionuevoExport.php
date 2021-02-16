<?php

namespace App\Exports;

use App\ConveniosNuevo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ConvenionuevoExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ConveniosNuevo::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Tipo de convenio',
            'Campus',
            'Nombre de la empresa',
            'Giro de la empresa',
            'Dirección de la empresa',
            'Representante legal',
            'Correo representante legal',
            'Contacto',
            'Telefono de contacto ',
            'Correo ',
            'Fecha de inicio ',
            'Convenio beca convenio',
            'Convenio practicas',
            'Convenio servicio social',
            'Convenio otro',
            'Convenio otro servicio',
            'Nivel Presencial',
            '%',
            'Tipo',
            'Aplica',
            'Doble beneficio',
            '%',
            'Tipo',
            'Aplica',            
            'Vigencia',
            'Ciclo de vigencia',
            'A quien aplica',
            'Ciudad en la que aplica',
            'Observaciones',
            'Nivel En Línea',
            '%',
            'Tipo',
            'Aplica',
            'Doble beneficio',
            '%',
            'Tipo',
            'Aplica',            
            'Vigencia',
            'Ciclo de vigencia',
            'A quien aplica',
            'Ciudad en la que aplica',
            'Observaciones',
            'Alcance',
            'Observaciones',
            'Documento',
            'Nombre del documento',
            'Fecha de creación',
            'Ultima actualización',
        ];
    }
}
