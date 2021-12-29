<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Merk extends Model
{
    
    use HasFactory;
    protected $table = 'merk';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_merk'];

    public function my_produk(){
        return $this->hasMany(Produk::class,'nama_sepatu','id');
    }

    public function allData()
    {
        return DB::table('merk')->get();
    }

    public function detailData($id)
    {
        return DB::table('merk')->where('id', $id)->first();

    }

    public function addData($data)
    {
        DB::table('merk')->insert($data);
    }

    public function editData($id,$data)
    {
        DB::table('merk')
        ->where('id', $id)
        ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('merk')
        ->where('id', $id)
        ->delete();
    }


}
