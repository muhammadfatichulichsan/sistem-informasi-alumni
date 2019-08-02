@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Detail Lowongan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-default">
                <h4>{{ $post->title }}</h4>

                <p>{!! $post->content !!}</p>
                <i class="fa fa-clock-o"> {{ $post->created_at->diffForHumans() }} </i> | <a style="color: black;text-decoration: none" href="#">{{ $post->name }}</a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection
