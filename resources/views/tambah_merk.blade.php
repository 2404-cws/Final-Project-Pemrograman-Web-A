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

