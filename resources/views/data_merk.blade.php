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
