@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Daftar Jurusan</h3>
            </div>
            <!-- /.box-header -->
            @foreach($jurusan as $data)
            <div class="box-body">
              <div class="callout callout-default">
                <a style="color: black;text-decoration: none" href="#"><h4>{{ $data->nama_jurusan }}</h4></a>
                <i class="fa fa-clock-o"> {{ $data->created_at->diffForHumans() }} </i>
                @if(Auth::check())
                @if(auth()->user()->is_admin == true)
                | <a style="color: black;text-decoration: none;" href="{{ route('jurusan.edit' , $data) }}">edit</a>
                @endif
                @endif
              </div>
            </div>
            @endforeach
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection
