@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman |  <a href="{{ route('pengumuman.create')}}">Buat Lowongan</a></h3>
            </div>
            <!-- /.box-header -->
            @foreach($pengumuman as $data)
            <div class="box-body">
              <div class="callout callout-default">
                <a style="color: black;text-decoration: none" href="{{ route('pengumuman.show' , $data->slug) }}"><h4>{{ $data->judul }}</h4></a>

                <p>{{ strip_tags($data->konten) }}</p>
                <i class="fa fa-clock-o"> {{ $data->created_at->diffForHumans() }} </i>
                @if(Auth::check())
                @if(auth()->user()->is_admin == true)
                | <a style="color: black;text-decoration: none;" href="{{ route('pengumuman.edit' , $data) }}">edit</a> |  
                <form class="" action="{{ route('pengumuman.destroy', $data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                </form>
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
