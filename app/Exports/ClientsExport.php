<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientsExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::all();
    }

    public function headings(): array
    {
        return [

            'ID Client',
            'First Name',
            'Last Name',
            'Gender',
            'Age',
            'Fonction'
        ];
    }

    public function map($client): array
    {
        return [
            $client->idclient,
            $client->FirstName,
            $client->LastName,
            $client->gender,
            $client->age,
            $client->fonction->Fonction

        ];
    }

    public function styles (Worksheet $sheet)
    {
        return [
             1 =>['font'=>['bold'=>true]],
            'A'=>['alignment'=>['horizontal' =>'center']],
            'B'=>['alignment'=>['horizontal' =>'center']],
            'C'=>['alignment'=>['horizontal' =>'center']],
            'D'=>['alignment'=>['horizontal' =>'center']],
            'E'=>['alignment'=>['horizontal' =>'center']],
            'F'=>['alignment'=>['horizontal' =>'center']]
        ];
    }


}
