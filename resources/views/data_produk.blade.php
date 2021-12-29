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

