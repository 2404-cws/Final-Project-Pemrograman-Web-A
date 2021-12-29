<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_sepatu'];

    public function my_merk(){
        return $this->belongsTo(Merk::class, 'id_merk');
    }

    public function allData()
    {
        
        return DB::table('produk')->get();
    }

    public function addData($data)
    {
        DB::table('produk')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('produk')->where('id', $id)->first();

    }

    public function editData($id,$data)
    {
        DB::table('produk')
        ->where('id', $id)
        ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('produk')
        ->where('id', $id)
        ->delete();
    }

    public function countProduct()
    {
       return DB::table('produk')
        ->join('merk','merk.id','=','produk.id_merk')
        ->select('nama_merk',DB::raw('count(id_merk) as countMerk'))
        ->groupBy('nama_merk')
        ->get();
    }
}
