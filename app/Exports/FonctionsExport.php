<?php

namespace App\Exports;

use App\Models\Fonction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FonctionsExport implements FromCollection,WithHeadings,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fonction::all();
    }

    public function headings(): array
    {
       return ['ID Fonction', 'Name Fonction'];
    }

    public function styles(Worksheet $sheet)
    {
        return [
             1 =>['font'=>['bold'=>true]],
            'A'=>['alignment'=>['horizontal' =>'center']],
            'B'=>['alignment'=>['horizontal' =>'center']]
        ];
    }

}
