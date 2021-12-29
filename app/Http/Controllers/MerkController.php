<?php

namespace App\Http\Controllers;


use App\Models\Merk;
use App\Exports\MerkExport;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MerkController extends Controller
{

    public function __construct()
    {
        $this->Merk = new Merk();
        $this->middleware('auth'); //autentivikasi
    }

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $all = $request->all();
        // $merk = Merk::all();
        $merk = Merk::where('nama_merk', 'LIKE', '%'.$keyword.'%') 
                -> orwhere('id', 'LIKE', '%'.$keyword.'%')
                -> paginate(10);
        $merk->appends($request->all());
        return view('data_merk', compact('merk'));
    }

    public function add()
    {
        $merk = Merk::all();
        return view('tambah_merk',compact('merk'));
    }

    public function insert()
    {
        Request()->validate([
            'nama_merk' => 'required',

        ], [
            'nama_merk.required' => 'Nama merk wajib diisi',
        ]);

        $data = [
            'nama_merk' => Request()->nama_merk,
            'delete_status' => 'false',
        
        ];

        $this->Merk->addData($data);
        return redirect()->route('data_merk')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){

        if (!$this->Merk->detailData($id)){
            abort(404);
        }

        $data = [
            'merk' => $this->Merk->detailData($id),
        ];
        return view('edit_merk', $data); //return halaman v
    }

    public function update($id)
    {
        Request()->validate([
            'nama_merk' => 'required',

        ], [
            'nama_merk.required' => 'Nama merk wajib diisi',
        ]);

        $data = [
            'nama_merk' => Request()->nama_merk,
        ];

        $this->Merk->editData($id,$data);
        return redirect()->route('data_merk')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->Merk->deleteData($id);
        return redirect()->route('data_merk')->with('pesan', 'Data Berhasil Dihapus');
    }

    public function exportexcel(){
        return Excel::download(new MerkExport, 'data_merk.xlsx');
    }
}
