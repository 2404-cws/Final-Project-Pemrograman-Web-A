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

