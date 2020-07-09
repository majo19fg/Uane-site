<?php

namespace App\Exports;

use App\Acceso;
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
        return Acceso::all();
    }

    public function headings(): array
    {
        return [
            'Campus',
            'Fecha de creación',
            'Fecha de registro ',
        ];
    }
}
