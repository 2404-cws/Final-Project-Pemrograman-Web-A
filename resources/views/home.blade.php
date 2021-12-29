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
