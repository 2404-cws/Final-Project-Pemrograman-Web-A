<?php

namespace App\Exports;

use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProdukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $query = DB::table('produk')
        // ->leftJoin('merk','merk.id','=','produk.id_merk')
        // ->get();

        return Produk::all();
    }

    public function headings() :array
    {
        return [
            'ID',
            'Nama Sepatu',
            'ID Merk',
            'Ukuran',
            'Deskripsi',
            'Warna'
        ];
    }
}
