@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Lowongan | <a href="{{ route('post.create') }}">Buat Lowongan</a></h3>
            </div>
            <!-- /.box-header -->
            @foreach($post as $data)
            <div class="box-body">
              <div class="callout callout-default">
                <a style="color: black;text-decoration: none" href="{{ route('post.show' , $data->slug) }}"><h4>{{ $data->title }}</h4></a>

                <p>{{ strip_tags($data->content) }}</p>
                <i class="fa fa-clock-o"> {{ $data->created_at->diffForHumans() }} </i> | <a style="color: black;text-decoration: none" href="#">{{ $data->name }}</a> |  
                                @if($data->user_id === auth()->user()->id)
                                <a style="color: black;text-decoration: none" href="{{ route('post.edit' , $data->slug) }}">edit</a> |
                                <form class="" action="{{ route('post.destroy', $data->slug) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                </form>
                                @elseif(auth()->user()->is_admin == true )
                                <a style="color: black;text-decoration: none" href="{{ route('post.edit' , $data->slug) }}">edit</a> |
                                <form class="" action="{{ route('post.destroy', $data->slug) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                </form>
                                @endif
              </div>
            </div>
            @endforeach
            <!-- /.box-body -->
            <center>{{ $post->render() }}</center>
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection
