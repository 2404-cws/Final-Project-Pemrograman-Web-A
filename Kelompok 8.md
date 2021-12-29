# Aplikasi Persediaan Stok Produk Sepatu
## Pendahuluan
Di era industri 4.0 terdapat keuntungan yang memudahkan kita dalam melakukan segala hal. Salah satunya sistem adalah penerapan sistem digital dalam mencari informasi barang. Kita tidak perlu lagi menghabiskan banyak waktu dalam menyimpan dan mencari informasi suatu produk atau barang. Hal tersebut pun sangat menguntungkan dalam dunia bisnis ataupun usaha. Karyawan toko ataupun pemilik usaha dapat menyimpan dan mencari data yang diinginkan secara terstruktur dan praktis.

Berbicara mengenai produk ataupun perdagangan, kami melihat banyak sekali masyarakat di sekitar tempat tinggal kami yang berprofesi sebagai penjual sepatu. Beberapa toko yang memiliki brand ternama sudah memiliki sistem informasi produk yang tertata. Namun, masih banyak lapak ataupun toko sepatu yang melakukan pencarian informasi produknya menggunakan excel, sehingga membuat pelanggan menunggu terlalu lama tanpa kepastian.

Atas dasar dari pernyataan sebelumnya, kami berinisiatif membuat sebuah “Web Persediaan Stok Sepatu” dengan tampilan yang mudah dipahami tentunya, sehingga pemilik toko tidak perlu mengecek barang secara manual di gudang. Selain itu, di web kami juga memiliki fitur pengexportan dalam bentuk csv / pdf yang membuat pemilik toko mudah dalam menganalisa stok sepatu.


## Deskripsi Aplikasi

                     **Gambar halaman utama Aplikasi**
![enter image description here](https://i.ibb.co/QHv2TZ9/Whats-App-Image-2021-12-28-at-7-40-21-PM.jpg)
Aplikasi persediaan stok produk sepatu adalah sebuah program yang dibuat untuk mengelola data ketersediaan produk sepatu secara lebih akurat, cepat dan mudah. Fitur aplikasi ini dapat membantu proses mengelola stok produk sepatu menjadi lebih mudah.

Aplikasi stok produk sepatu ini sendiri dapat membantu pengecekan stok sepatu yang masuk dan keluar secara lebih mudah. Jika sebelumnya dilakukan secara manual, maka sekarang adanya aplikasi persediaan, maka hal ini dapat dilakukan secara cepat dan mudah. Tidak perlu berhadapan dengan potensi kesalahan pengecekan, maupun tidak perlu waktu yang lama setiap kali perlu untuk melakukan update persediaan stok produk sepatu pada gudang.


## Hirarki Menu Aplikasi
![enter image description here](https://i.ibb.co/pP5rVh2/Whats-App-Image-2021-12-28-at-7-49-12-PM.jpg) 

## Teknologi Yang Digunakan

Aplikasi yang dibuat adalah Aplikasi Persediaan Stok Produk Sepatu berbasis web dengan menggunakan **framework laravel**, **XAMPP**, dan **database MySQL**.

## Cara Penggunaan Aplikasi

1.  Admin login ke akun terlebih dahulu dengan memasukkan nama **email** dan **password** yang sesuai.
    
2.  Setelah berhasil login, maka akan masuk ke tampilan dashboard.
    
3.  Pada dashboard terdapat tampilan kalender yang bisa diedit event - event tertentu dan terdapat memo persediaan stok sepatu.
    
4.  Pada data merk, admin bisa **mencari**, **mengedit**, **menambahkan** dan **menghapus** data merk.
    
5.  Admin juga bisa mengexport tabel data merk dalam bentuk format xlsx jika diperlukan.
    
6.  Pada data produk, admin bisa **mencari**, **mengedit**, **menambahkan** dan **menghapus** data produk.
    
7.  Setelah itu, admin juga bisa **mengexport** tabel data produk dalam bentuk format xlsx jika diperlukan.
    
8.  Jika sudah selesai melakukan aktifitas di aplikasi persediaan stok produk sepatu, admin bisa logout dari aplikasi tersebut.

## Fitur-Fitur Yang Ditawarkan 

**1. Login dan Logout**
![enter image description here](https://i.ibb.co/yF2skSK/Whats-App-Image-2021-12-28-at-7-34-07-PM.jpg)
Admin dapat melakukan login dan register untuk mengakses aplikasi. Login merupakan proses masuk ke jaringan komputer dengan cara memasukkan identitas akun yang terdiri dari username atau akun pengguna dan password guna mendapatkan hak akses, jika belum mempunyai akun bisa mendaftar terlebih dahulu. Logout adalah proses keluar dari sebuah halaman web ataupun aplikasi yang hanya bisa diakses oleh seseorang yang mempunyai user id dan password.

**2. Dashboard**
![enter image description here](https://i.ibb.co/QHv2TZ9/Whats-App-Image-2021-12-28-at-7-40-21-PM.jpg)
Dashboard adalah sebuah tampilan visual dari informasi terpenting yang dibutuhkan untuk mencapai satu atau lebih tujuan, digabungkan dan diatur pada sebuah layar, menjadi informasi yang dibutuhkan dan dapat dilihat secara sekilas. Dashboard sebuah tampilan pada satu monitor komputer penuh yang berisi informasi. Pada dashboard web kami menampilkan halaman awal, setelah login yang berisi kalender yang bisa diedit event - event tertentu dan memo penjualan.

**3. Kalender**
![enter image description here](https://i.ibb.co/JtKdJ2v/Whats-App-Image-2021-12-28-at-7-42-08-PM.jpg)
![enter image description here](https://i.ibb.co/cYwpz2M/Whats-App-Image-2021-12-28-at-7-42-51-PM.jpg)
Kalender disini berfungsi sebagai catatan atau notes dalam pembuatan event atau sebuah pekerjaan bagi pegawai. Admin dapat menambahkan sebuah pekerjaan baru untuk nantinya dapat dilihat oleh pegawai lain bahwa pada tanggal tersebut terdapat sebuah pekerjaan yang harus dikerjakan. Jika pekerjaan itu sudah selesai, admin juga dapat menghapus event tersebut

**4. CRUD Tabel**
CRUD Laravel juga merupakan singkatan dari Create (buat), Read (baca / menampilkan), Update (mengubah), dan Delete (menghapus) data dari database. CRUD tabel merk fiturnya :

**A. Merk**
1.  Menampilkan data merk dari database dengan laravel.
    ![enter image description here](https://i.ibb.co/ZVxShT9/Whats-App-Image-2021-12-28-at-7-43-42-PM.jpg)
2.  Menambah data merk ke database dengan laravel.
    ![enter image description here](https://i.ibb.co/BtYHCfc/Whats-App-Image-2021-12-28-at-7-44-32-PM.jpg)
3.  Mengupdate atau mengubah data merk pada database dengan laravel.
    ![enter image description here](https://i.ibb.co/bv1bBJL/Whats-App-Image-2021-12-28-at-7-46-37-PM.jpg)
4.  Menghapus data merk dari database dengan laravel.
![enter image description here](https://i.ibb.co/gwwJmts/Whats-App-Image-2021-12-28-at-7-47-46-PM.jpg)

**B. Produk**

1. Menampilkan data produk dari database dengan laravel.
![enter image description here](https://i.ibb.co/NWyB42W/Whats-App-Image-2021-12-28-at-7-51-47-PM.jpg)
2. Menambah data produk ke database dengan laravel.
![enter image description here](https://i.ibb.co/PrgJDd8/Whats-App-Image-2021-12-28-at-7-54-57-PM.jpg)
3. Mengupdate atau mengubah data produk pada database dengan laravel.
![enter image description here](https://i.ibb.co/n07vF4r/Whats-App-Image-2021-12-29-at-6-33-16-PM.jpg)
4. Menghapus data produk dari database dengan laravel.
![enter image description here](https://i.ibb.co/zbzCHSP/Whats-App-Image-2021-12-29-at-6-33-56-PM.jpg)

**5. Search Data Sepatu dan Merk**
![enter image description here](https://i.ibb.co/PFTCRdN/Whats-App-Image-2021-12-28-at-7-50-59-PM.jpg)
![enter image description here](https://i.ibb.co/Y349hdH/Whats-App-Image-2021-12-29-at-6-36-21-PM.jpg)
Fitur search sepatu digunakan oleh penjual agar memudahkan dalam pencarian stok sepatu, sehingga penjual tidak perlu secara manual mencari di gudang.

**6. Export data dalam bentuk format CSV dan PDF **
![enter image description here](https://i.ibb.co/BZGh9F2/Whats-App-Image-2021-12-28-at-7-49-38-PM.jpg)
![enter image description here](https://i.ibb.co/KW1wvSZ/Whats-App-Image-2021-12-29-at-6-35-04-PM.jpg)
Fitur Export data ini digunakan penjual dalam mengexport tabel data stok sepatu dalam bentuk format excel dan pdf yang bisa di unduh, sehingga memudahkan penjual menganalisa data stok sepatu secara offline.


## Kode-Kode Inti 
**A. Folder Models**
1. File Merk.php 
````C
public function my_produk(){
        return $this->hasMany(Produk::class,'nama_sepatu','id');
    }
````
====>Menghubungkan tabel merk dengan tabel produk dengan relasi one 
 to many yang nantinya fungsi ini di panggil di data produk.blade.php

````C
public function allData()
    {
        return DB::table('merk')->get();
    }
````
====>Mengambil seluruh data merk dari tabel merek

````C
 public function detailData($id)
    {
        return DB::table('merk')->where('id', $id)->first();

    }
 ````
 ====>Mengambil data merk dari tabel merek sesuai id yang dikirim dari controllerMerk
 ````C
 public function addData($data)
    {
        DB::table('merk')->insert($data);
    }
 ````
====>Menambahkan data merk dari tabel merek sesuai data(value) yang dikirim dari controllerMerk
````C
 public function editData($id,$data)
    {
        DB::table('merk')
        ->where('id', $id)
        ->update($data);
    }
 ````
====>Mengupdate data merk dari tabel merek sesuai id serta data(value) yang dikirim dari controllerMerk
 ````C
 public function deleteData($id)
    {
        DB::table('merk')
        ->where('id', $id)
        ->delete();
    }
 ````
====>Mendelete data merk dari tabel merek sesuai id yang dikirim dari controllerMerk

2. Produk.php 
````C
public function my_merk(){
        return $this->belongsTo(Merk::class, 'id_merk');
    }
 ````
===> Menghubungkan tabel produk dan tabel merk dengan relasi many to one yang nantinya fungsi ini di panggil di data_produk.blade.php
````C
public function addData($data)
    {
        DB::table('produk')->insert($data);
    }
````
===>  Menambahkan data produk ke tabel produk sesuai data(value) yang dikirim dari controllerProduk
````C
    public function detailData($id)
    {
        return DB::table('produk')->where('id', $id)->first();

    }
````
=====> mengambil data produk dari tabel produk sesuai id yang dikirim dari controllerProduk
````C
    public function editData($id,$data)
    {
        DB::table('produk')
        ->where('id', $id)
        ->update($data);
    }
   ````
    
=====> mengupdate data produk dari tabel produk sesuai id serta data(value) yang dikirim dari controllerProduk
````C
    public function deleteData($id)
    {
        DB::table('produk')
        ->where('id', $id)
        ->delete();
    }
````
=====> mendelete data produk dari tabel produk sesuai id yang dikirim dari controllerProduk
````C
    public function countProduct()
    {
       return DB::table('produk')
        ->join('merk','merk.id','=','produk.id_merk')
        ->select('nama_merk',DB::raw('count(id_merk) as countMerk'))
        ->groupBy('nama_merk')
        ->get();
    }
````
=====> mengambil data produk dan merk dari tabel produk dan tabel merk sesuai id yang dikirim dari controllerProduk

**B. Folder controller**
1. controllerProduk.php
````C
public function __construct()
    {
        $this->Produk = new Produk();
        $this->middleware('auth'); 
    }
````
==>method yang petama kali dijalankan saat cllas dipanggilyang mana dalam contuct tersebut berisi autentiviasi user
````C
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
````
==> Berfungsi memanggil data dari data base yang akan ditampilkan dalam file data_produk.blade.php dalam bentuk tabel, namun jika parameter request terisi maka yang di tampilkan adalah data sesuai request kemudian meneruskan datanya ke file data_produk.php
````C
    public function add()
    {
        $merk = Merk::all();
        return view('tambah_produk',compact('merk'));
    }
````
==> Mengambil seluruh data kemudian meneruskan datanya ke file tambah_produk.php
````C
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
````
===> Fungsi ini memvalidasi apakah inputan user sudah sesuai apa tidak, kemudian memanggil fungsi addData() di model Produk.php untuk menambah data dalam database kemudian meneruskan datanya ke file data_produk.php dengan pesan Data Berhasil Ditambahkan
````C
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
````
=====> Mengambil seluruh data dari database sesuai parameter id dengan memanggil fungsi  detailData() di model Produk.php, kemudian meneruskan datamya ke edit_produk.php
````C
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
````
====> Fungsi ini memvalidasi apakah inputan user sudah sesuai apa tidak, kemudian memanggil fungsi editData() di model Produk.php untuk mengupdate data dalam database sesuai id sebagai parameter kemudian meneruskan datanya ke file data_produk.php dengan pesan Data Berhasil Diupdate
````C
    public function delete($id)
    {
        $this->Produk->deleteData($id);
        return redirect()->route('data_produk')->with('pesan', 'Data Berhasil Dihapus');
    }
  ````
====> Menghapus data dari database dengan  memanggil fungsi deleteData() dari Produk.php di model sesuai id sebagai parameter kemudian meneruskan datanya ke file data_produk.php dengan pesan Data Berhasil Dihapus

````C
    public function countProduct()
    {
        $data=[
            'data'=>$this->Produk->countProduct(),
        ];
        return view('home', $data);
    }
````
===> Untuk menjumlah keseluruhan data tiap merknya dengan memanggil fungsi countProduct.php di model, kemudian meneruskan datanya di file home.php
````C
    public function exportexcel(){
        return Excel::download(new ProdukExport, 'data_produk.xlsx');
    }
````
===> Mengeksport data dalam bentuk xlsx kemudian otomatis terdownload. Fungsi ini berasal dari library Maat Website pada Laravel Excel

2. HomeController.php
 ````C
`<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //autentivikasi
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
````
**C.  Folder View**
1. Edit_merk.php
````C
<form action="/data_merk/update/{{ $merk->id }}" method="POST">
````
===> membuat form dengan action update yang diambil dari controller merk
````C
<div class="form-group">                 
                    <label>Nama Merk</label>
                    <input type="text" id="nama_merk" name="nama_merk" class="form-control " value="{{ $merk->nama_merk }}" style="width: 100%;">  
                    <div class="text-danger">
                        @error('nama_merk')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

===> mengisi form yang telah dibuat sebelumnya dengan inputan user nama merk yang disimpan pada id nama_merk pada database, inputan ini akan mengganti nama merk yang sebelumnya menjadi nama merk yang baru di masukan

<div class="form-group">
                    <button class="btn btn-primary btn-sm">Edit</button>
                </div>
````
===> membuat button untuk edit data

2. Edit_produk.php
````C
<form action="/data_produk/update/{{ $produk->id }}" method="POST">

===> membuat form dengan action update yang diambil dari controller produk

<div class="form-group">                 
                    <label>Nama Produk</label>
                    <input type="text" id="nama_sepatu" name="nama_sepatu" class="form-control " value="{{ $produk->nama_sepatu }}" style="width: 100%;">  
                    <div class="text-danger">
                        @error('nama_sepatu')
                            {{ $message }}
                        @enderror
                    </div>
````
===> mengubah form yang telah dibuat sebelumnya pada add data produk dengan inputan user yang disimpan pada id nama_sepatu pada database, inputan ini akan mengganti nama produk yang sebelumnya menjadi nama produk yang baru di masukan pada form edit
````C
<div class="form-group">                 
                    <label>Pilih Merk</label>
                    <select type="text" id="id_merk" name="id_merk" value="{{ old('id_merk') }}" class="form-control" style="width: 100%;">

                        <option value="">- Pilih --</option>
                        
                        @foreach ($merk as $item)
                        <option value="{{$item->id}}" {{$item->id == $item->id ? 'selected' : ''}}>{{$item->nama_merk}}</option>    
                        @endforeach
                        
  
                      </select>          
                </div>
````
===> mengubah nilai dari nama_merk yang telah dibuat pada add data produk dengan tipe select yang disimpan pada id id_merk pada database, inputan ini akan mengganti nama merk yang sebelumnya menjadi nama merk yang dipilih pada form edit
````C
<div class="form-group">                 
                        <label>Ukuran</label>
                        <input type="text" id="ukuran" name="ukuran" class="form-control " value="{{ $produk->ukuran }}" style="width: 100%;">  
                    
                        <div class="text-danger">
                            @error('ukuran')
                                {{ $message }}
                            @enderror
                    </div>
````
===> mengubah form yang telah dibuat sebelumnya pada add data produk dengan inputan user yang disimpan pada id ukuran pada database, inputan ini akan mengganti ukuran yang sebelumnya menjadi ukuran yang baru di masukan pada form edit
````C
<div class="form-group">                 
                        <label>Deskripsi</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control " value="{{ $produk->deskripsi }}" style="width: 100%;">  
                    
                        <div class="text-danger">
                            @error('deskripsi')
                                {{ $message }}
                            @enderror
                        </div>
````
===> mengubah form yang telah dibuat sebelumnya pada add data produk dengan inputan user yang disimpan pada id deskripsi pada database, inputan ini akan mengganti deskripsi yang sebelumnya menjadi deskripsi yang baru di masukan pada form edit
````C
<div class="form-group">                 
                        <label>Warna</label>
                        <input type="text" id="warna" name="warna" class="form-control " value="{{ $produk->warna }}" style="width: 100%;">  
                    
                        <div class="text-danger">
                            @error('warna')
                                {{ $message }}
                            @enderror
                        </div>
````
===> mengubah form yang telah dibuat sebelumnya pada add data produk dengan inputan user yang disimpan pada id warna pada database, inputan ini akan mengganti warna yang sebelumnya menjadi warna yang baru di masukan pada form edit
````C
<div class="form-group">
                    <button class="btn btn-primary btn-sm">Edit</button>
                </div>
````
===> membuat button untuk edit data

3. Login.blade.php
````C
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyStock | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{asset('template')}}/index2.html"><b>Admin</b>User</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start or ask to admin</p>

      <form method="POST" action="{{ route('login') }}">
       @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div> 
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
````
====>Login dilakukan dengan menggunakan laravel auth. Setelah menyiapkan database, table dan controller auth, dibuatlah view login. Terdapat form input dengan method POST dengan action melalui route login

4. Home.blade.php
````C
@extends('layout.template')
@section('content')

<br><h1 class="m-0"><center>Welcome to The Dasboard</center></h1><br>
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
          <div class="info-box-content">           
            <div class="progress">
              <div class="progress-bar" style="width: 70%">
              </div>
            </div>
            <h3 class="box-title">Calendar</h3>
            <a href="/full-calender/" class="btn btn-primary btn-sm">View Calender</a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
        @foreach($data as $data)
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-shoe-prints"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">{{$data->nama_merk}}</span>
                <span class="info-box-number">{{$data->countMerk}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        @endforeach
        </div>
@endsection
````
====>Terdapat button calendar yang mengarah pada  blade calendar dan dibawah calendar terdapat tampilan count data merk yang diambil dari nama_merk yang diambil dari variable $data pada Controller

5. Full-calendar.blade.php
````C
<!DOCTYPE html>
    <html>
        <br>
        <div class="col">
        <a type="button" href="{{ url()->previous() }}" class="btn btn-primary">Back</a><br></div>
    <head>

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    </head>
    <body>
      
    <div class="container">
        <br />

        <br />

        <div id="calendar"></div>

    </div>
      
    <script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:'/full-calender',
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            {
                var title = prompt('Event Title:');

                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                    $.ajax({
                        url:"/full-calender/action",
                        type:"POST",
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        success:function(data)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Created Successfully");
                        }
                    })
                }
            },
            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },
            eventDrop: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },

            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"/full-calender/action",
                        type:"POST",
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Deleted Successfully");
                        }
                    })
                }
            }
        });

    });
      
    </script>
      
    </body>
    </html>
    </div>
</div>
````
====>Pada tampilan view terdapat beberapa library sepert I ajax dan jquery. Pada codediatas terdapat ajax setup yang mengatur header dan juga terdapat bagian javascript pada var calendar yang berfungsi mengatur komponen pada fitur calendar yaitu position pada calendar. Lalu dibawahnya terdapat add event yang dikirim melalui method POST yang terhubung menggunakan url full-calendar/action. Lalu terdapat success function untuk menampilkan notifikasi bahwa data telah ditambahkan. Untuk delete event terdapat pada var id = event.id yang terhubung pada url full-calendar/action dengan method POST yang bertipe delete.

6. data_merk.blade.php
````C
@extends('layout.template')

@section('content') <br>


@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success!</h4>
  {{ session('pesan') }}.
</div>
@endif

<br>
<div class="row align-items-start">
  <div class="col">
      <a href="/data_merk/add" class="btn btn-primary ">+ Add Data</a>
      <a href="/exportexcel" class="btn btn-success ">Export Excel</a>
  </div>
  <div class="col">
    <!-- search -->
    <form action="{{ url('data_merk')}}">
      <div class="input-group mb-3">
          <input type="text" name="keyword" class="form-control" placeholder="Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
    </form>
    <!-- /search -->
  </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Merk Sepatu</h3>
    </div>
    <!-- /.card-header -->
    
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Merk</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>
          @foreach ($merk as $item)
        <tr>
          <td>{{ $item -> id }}</td>
          <td>{{ $item -> nama_merk }}</td>
          <td><a href="/data_merk/edit{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="/data_merk/delete{{ $item->id }}" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $item->id }}" >Delete</a></td>
            
        </tr>


          <!-- modal delete -->
      <div class="modal modal-danger fade" id="delete{{ $item->id }}">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{{ $item->nama_merk }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus data ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left btn-success" data-dismiss="modal">No</button>
                      <a href="/data_merk/delete{{ $item->id }}" class="btn btn-outline btn-danger">Yes</a>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
                  <!-- /.modal-dialog -->
            </div>
            <!-- end modal delete -->
          @endforeach
          
        </tbody>
      </table>

     
      

    </div>
    <!-- /.card-body -->
    
    <div class="d-flex justify-content-center">
      {{ $merk->links() }}
    </div>

  </div>
@endsection
````
====>Menampilkan button add data yang terhubung ke add_data/add (method add) dan button export excel yang tehubung dengan exportexcel. Dibawah button export excel terdapat form action dengan method POST yang terhubung ke view data_merk.blade.php. Untuk tampilan body table, dilakukan foreach terhadap variable merk as $item lalu dipanggil tiap tiap field table. Dibawah view table terdapat modal delete yang bekerja dengan memanggil id tiap data merk lalu dilanjutkan pada function delete.

7. Data_produk.blade.php
````C
@extends('layout.template')

@section('content') <br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success!</h4>
  {{ session('pesan') }}.
</div>
@endif

<br>
<div class="row align-items-start">
  <div class="col">
      <a href="/data_produk/add" class="btn btn-primary ">+ Add Data</a>
      <a href="/exportexcel" class="btn btn-success ">Export Excel</a>
  </div>
  <div class="col">
    <!-- search -->
    <form action="{{ url('data_produk') }}">
      <div class="input-group mb-3">
          <input type="text" name="keyword" class="form-control" placeholder="Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
    </form>
    <!-- /search -->
  </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Produk Sepatu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered table-striped">
      <!-- <table id="example1" class="table table-bordered table-striped"> -->
        <thead>
        <tr>
          <th>id</th>
          <th>nama_sepatu</th>
          <th>id merk(s)</th>
          <th>ukuran(s)</th>
          <th>deskripsi</th>
          <th>warna</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($produk as $data)
        <tr>
          <td>{{ $data -> id }}</td>
          <td>{{ $data -> nama_sepatu }}</td>
          <td>{{ $data -> my_merk -> nama_merk   }}</td>
          <td>{{ $data -> ukuran }}</td>
          <td>{{ $data -> deskripsi }}</td>
          <td>{{ $data -> warna }}</td>
          <td><a href="/data_produk/edit{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="/data_produk/delete{{ $data->id }}" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}" >Delete</a>
          </td>
        </tr>
        @endforeach
        
      </table>

      @foreach ($produk as $data)
      <!-- modal delete -->
      <div class="modal modal-danger fade" id="delete{{ $data->id }}">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{{ $data->nama_merk }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus data ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left btn-success" data-dismiss="modal">No</button>
                      <a href="/data_produk/delete{{ $data->id }}" class="btn btn-outline btn-danger">Yes</a>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
                  <!-- /.modal-dialog -->
            </div>
            <!-- end modal delete -->
      @endforeach
      {{$produk->links();}}

    </div>
    <!-- /.card-body -->
  </div>
@endsection
````
====>Menampilkan button add data yang terhubung ke add_data/add (method add) dan button export excel yang tehubung dengan exportexcel. Dibawah button export excel terdapat form action dengan method POST yang terhubung ke view data_produk.blade.php. Untuk tampilan body table, dilakukan foreach terhadap variable produk as $item lalu dipanggil tiap tiap field table. Dibawah view table terdapat modal delete yang bekerja dengan memanggil id tiap data produk lalu dilanjutkan pada function delete.

8.  Tambah_merk.blade.php
````C
@extends('layout.template')

@section('content') <br>

<form action="/data_merk/insert" method="POST">

  @csrf

<center>

    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Budget</h3>
            </div>

            <div class="card-body">

                <div class="form-group">                 
                    <label>Nama Merk</label>
                    <input type="text" id="nama_merk" name="nama_merk" class="form-control " value="{{ old('nama_merk') }}" style="width: 100%;">  
                    
                    <div class="text-danger">
                        @error('nama_merk')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form-group">                 
                    <input type="hidden" id="delete_status" name="delete_status" class="form-control" value="false">  
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>


            </div>

        </div>
    </div>
</form>


  @endsection

</center>
````
====>Form tambah data merk dengan method POST yang actionnya terhubung pada view data_merk

9.  Tambah_produk.blade.php
````C
@extends('layout.template')

@section('content') <br>

<form action="/data_produk/insert" method="POST">

  @csrf

<center>

    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Budget</h3>
            </div>

            <div class="card-body">

                <div class="form-group">                 
                    <label>Nama Sepatu</label>
                    <input type="text" id="nama_sepatu" name="nama_sepatu" class="form-control " value="{{ old('nama_sepatu') }}" style="width: 100%;">  
                    
                    <div class="text-danger">
                        @error('nama_sepatu')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form-group">                 
                    <label>Pilih Merk</label>
                    <select type="text" id="id_merk" name="id_merk" value="{{ old('id_merk') }}" class="form-control" style="width: 100%;">

                        <option value="">- Pilih --</option>
                        
                        @foreach ($merk as $item)
                        <option value="{{$item->id}}" {{$item->id == $item->id ? 'selected' : ''}}>{{$item->nama_merk}}</option>    
                        @endforeach
                        
  
                      </select>          
                </div>

                <div class="form-group">                 
                    <label>Ukuran</label>
                    <input type="text" id="ukuran" name="ukuran" class="form-control " value="{{ old('ukuran') }}" style="width: 100%;">  
                    
                    <div class="text-danger">
                        @error('ukuran')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form-group">                 
                    <label>Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control " value="{{ old('deskripsi') }}" style="width: 100%;">  
                    
                    <div class="text-danger">
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form-group">                 
                    <label>Warna</label>
                    <input type="text" id="warna" name="warna" class="form-control " value="{{ old('warna') }}" style="width: 100%;">  
                    
                    <div class="text-danger">
                        @error('warna')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                



 

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>


            </div>

        </div>
    </div>
</form>


  @endsection

</center>
````
====> Form tambah data produk  dengan method POST yang actionnya terhubung pada view data_produksi
 


 






