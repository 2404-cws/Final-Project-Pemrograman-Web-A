<?php

namespace App\Http\Controllers;
use App\Models\Merk;
use App\Models\Produk;

use Illuminate\Http\Request;
use App\Exports\ProdukExport;

use Maatwebsite\Excel\Facades\Excel;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->Produk = new Produk();
        $this->middleware('auth'); //autentivikasi
    }
    
    public function index(Request $request)
    {
        $keyword = $request->keyword;
                
        $produk = Produk::where('nama_sepatu', 'LIKE', '%'.$keyword.'%') 
                  -> orwhere('ukuran', 'LIKE', '%'.$keyword.'%')
                  -> orwhere('warna', 'LIKE', '%'.$keyword.'%') 
                  -> paginate(10);
        $merk = Merk::where('nama_merk', 'LIKE', '%'.$keyword.'%') 
                -> paginate(10);
        $produk->appends($request->all());
        return view('data_produk', compact('produk'));
    }

    public function add()
    {
        $merk = Merk::all();
        return view('tambah_produk',compact('merk'));
    }

    public function insert()
    {
        Request()->validate([
            'nama_sepatu' => 'required',
            'id_merk' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',

        ], [
            'nama_sepatu.required' => 'Nama sepatu wajib diisi',
            'id_merk.required' => 'Merk Wajib dipilih',
            'ukuran.required' => 'ukuran merk wajib diisi',
            'warna.required' => 'Warna merk wajib diisi',
        ]);

        $data = [
            'nama_sepatu' => Request()->nama_sepatu,
            'id_merk' => Request()->id_merk,
            'ukuran' => Request()->ukuran,
            'deskripsi' => Request()->deskripsi,
            'warna' => Request()->warna,
        
        ];

        $this->Produk->addData($data);
        return redirect()->route('data_produk')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){

        if (!$this->Produk->detailData($id)){
            abort(404);
        }
        $merk = Merk::all();
        $data = [
            'produk' => $this->Produk->detailData($id),
        ];
        return view('edit_produk', $data, compact('merk')); //return halaman v
    }

    public function update($id)
    {
        Request()->validate([
            'nama_sepatu' => 'required',
            'id_merk' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',

        ], [
            'nama_sepatu.required' => 'Nama sepatu wajib diisi',
            'id_merk.required' => 'Merk Wajib dipilih',
            'ukuran.required' => 'ukuran merk wajib diisi',
            'warna.required' => 'Warna merk wajib diisi',
        ]);

        $data = [
            'nama_sepatu' => Request()->nama_sepatu,
            'id_merk' => Request()->id_merk,
            'ukuran' => Request()->ukuran,
            'deskripsi' => Request()->deskripsi,
            'warna' => Request()->warna,
        
        ];

        $this->Produk->editData($id, $data);
        return redirect()->route('data_produk')->with('pesan', 'Data Berhasil Diupdate');
    }


    public function delete($id)
    {
        $this->Produk->deleteData($id);
        return redirect()->route('data_produk')->with('pesan', 'Data Berhasil Dihapus');
    }

    
    public function countProduct()
    {
        $data=[
            'data'=>$this->Produk->countProduct(),
        ];
        return view('home', $data);
    }

    public function exportexcel(){
        return Excel::download(new ProdukExport, 'data_produk.xlsx');
    }
    
}
