<?php

namespace App\Exports;

use App\Models\Merk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;

class MerkExport implements FromCollection, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Merk::all();
        return Merk::select("id", "nama_merk")->get();
    }

    public function headings() :array
    {
        return [
            'ID',
            'Nama Merk',
        ];
    }

    public function registerEvents(): array
{
    return [
        AfterSheet::class    => function(AfterSheet $event) {
            $event->sheet->styleCells(
                'C2:C1000',
                [
                    'alignment' => [
                        'horizontal' => PhpOfficePhpSpreadsheetStyleAlignment::HORIZONTAL_RIGHT,
                    ],
                ]
            );
        },
    ];
}
}
